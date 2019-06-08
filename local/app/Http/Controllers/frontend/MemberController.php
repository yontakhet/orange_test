<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use Storage;
use Redirect;
use Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Yajra\Datatables\Datatables;
use App\Http\Requests\frontend\RequestRegisterMember;
use App\Model\LoginModel;
use App\Model\MemberModel;
use App\Model\AddressBillModel;
use Illuminate\Support\Facades\Hash;

class MemberController extends Controller

{

    protected function guard()
    {
        return Auth::guard('login');
    }

    public function login(Request $request)
    {
        $findMemer = LoginModel::where('email', $request->email)->first();
        if ($findMemer != null) {
            if ($findMemer->stat_confirm != 'Yes') {
                return Redirect::back()->with('error', 'กรุณายืนยันตัวตน โปรดตรวจสอบการยืนยันตัวตนในอีเมล์ของท่าน');
            } else {
                $credentials = $request->only('email', 'password');
                if (Auth::guard('login')->attempt($credentials)) {
                    $findUser = LoginModel::where('email', $request->email)->first();
                    session(['email' => $findUser->email]);
                    session(['name_member' => $findUser->name_member]);
                    session(['lastname_member' => $findUser->lastname_member]);
                    session(['id_member' => $findUser->id_member]);
                    session(['facebook_id' => $findUser->facebook_id]);
                    session(['google_id' => $findUser->google_id]);
                    Session::save();
                    return redirect(url('/memberdashboard'));


                } else {
                    $error = "กรุณาตรวจสอบ อีเมล์ และ รหัสผ่าน ของท่านใหม่!";
                    $data = array(
                        'error' => $error,
                    );
                    return redirect(url('/sign-in'))->with('error', 'กรุณาตรวจสอบ อีเมล์ และ รหัสผ่าน ของท่านใหม่!');
                }
            }
        } else {
            return Redirect::back()->with('error', 'กรุณาตรวจสอบ อีเมล์ และ รหัสผ่าน ของท่านใหม่!');
        }
    }


    private function generate_app_code($application_id)
    {
        $token = $this->getToken(6, $application_id);
        $code = 'EN' . $token . substr(strftime("%Y", time()), 2);
        return $code;
    }

    private function getToken($length, $seed)
    {
        $token = "";
        $codeAlphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $codeAlphabet .= "0123456789";

        mt_srand($seed);      // Call once. Good since $application_id is unique.

        for ($i = 0; $i < $length; $i++) {
            $token .= $codeAlphabet[mt_rand(0, strlen($codeAlphabet) - 1)];
        }
        return $token;
    }


    public function register(RequestRegisterMember $request)
    {
        do {
            $token = $this->getToken(15, 1);
            $code = 'HK' . $token . substr(strftime("%Y", time()), 2);
            $user_code = MemberModel::where('confirm_email', $code)->first();
        } while (!empty($user_code));
        $data = new MemberModel;
        $data->full_name_member = $request->full_name_member;
        $data->tel_member = $request->tel_member;
        $data->email = $request->email;
        $data->password = Hash::make($request->password);
        $data->confirm_email = $code;
        $data->stat_confirm = 'Yes';
        $data->save();
        return redirect(url('/sign_in'))->with('info', 'สมัครสมาชิกสำเร็จกรุณายืนยัน Email ของท่าน');
    }

    public function member_address(Request $request, $id)
    {

        if ($request->type_address == 'bill') {
            AddressBillModel::updateOrCreate(
                [
                    'relation_bill_member' => $id
                ],
                [
                    'name_bill' => $request->name_member,
                    'lastname_bill' => $request->lastname_member,
                    'tel_bill' => $request->tel_address,
                    'street_address_bill' => $request->street_address,
                    'city_bill' => $request->city,
                    'state_province_bill' => $request->state_province,
                    'zip_code_bill' => $request->zip_code,
                    'country_bill' => $request->country_member
                ])->save();
        } else {
            MemberModel::where('id_member', $id)->update([
                'name_member' => $request->name_member,
                'lastname_member' => $request->lastname_member,
                'tel_address' => $request->tel_address,
                'street_address' => $request->street_address,
                'city' => $request->city,
                'state_province' => $request->state_province,
                'zip_code' => $request->zip_code,
                'country_member' => $request->country_member
            ]);
        }
        return redirect(url('/memberdashboard'))->with('success', 'อัพเดทข้อมูลของท่านสำเร็จ');

    }


}
