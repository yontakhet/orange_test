<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\AdminModel;
use App\Model\MenuModel;
use App\Model\SubMenuModel;
use App\Model\UserModel;
use Session;
use Storage;
//use Datatables;
use Yajra\Datatables\Datatables;


class SettingController extends Controller
{
    public function index()
    {
        return view('backoffice.menu.menu_view');

    }


    public function create()
    {
        $sort = MenuModel::query()->orderBy('sort_menu', 'DESC')->limit(1)->first();
        $no = $sort->sort_menu + 1;
        return view('backoffice.menu.menu_edit', compact('no'));

    }


    public function store(Request $request)
    {
        $name = $request->name;
        $link = $request->link;
        $component = $request->component;
        $icon_menu = $request->icon_menu;
        $shout_menu = $request->shout_menu;
        $shout_css = $request->shout_css;
        $model = $request->model;
        $sort_menu = $request->sort_menu;
        $type_menu = $request->type_menu;
        $message = $request->message;
        $create = new MenuModel;
        $create->name_menu = $name;
        $create->link_menu = $link;
        $create->icon_menu = $icon_menu;
        $create->shout_menu = $shout_menu;
        $create->shout_css = $shout_css;
        $create->component_menu = $component;
        $create->sort_menu = $sort_menu;
        $create->type_menu = $type_menu;
        $create->note_menu = $message;
        $create->save();
        if ($component != '') {
            $controller = '' . $component . 'Controller';
            $modelStructure = '' . $component . 'Model';

            $contentsClass = contentController($controller,$component);
            $contentsModel = contentsModel($modelStructure);
            $index = contentIndex($component,$link);
            $create = contentCreate($component,$link);
            $update = contentUpdate($component,$link);
            $show = contentShow();
            Storage::disk('www')->put('local/resources/views/backoffice/' . $component . '/show.blade.php', $show);
            Storage::disk('www')->put('local/resources/views/backoffice/' . $component . '/index.blade.php', $index);
            Storage::disk('www')->put('local/resources/views/backoffice/' . $component . '/create.blade.php', $create);
            Storage::disk('www')->put('local/resources/views/backoffice/' . $component . '/edit.blade.php', $update);
            Storage::disk('www')->put('local/app/Http/Controllers/backend/' . $controller . '.php', $contentsClass);
            if ($model == 'open') {
                Storage::disk('www')->put('local/app/Model/' . $modelStructure . '.php', $contentsModel);
            }
        }
        return redirect(url('/backoffice/setting'))->with('success', 'เพิ่มเมนูสำเร็จ');


    }

    public function show($id)
    {
        $data = MenuModel::where('id_menu', $id)->first();
        return view('backoffice.menu.show', compact('data'));

    }


    public function edit($id)
    {
        $data = MenuModel::where('id_menu', $id)->first();
        return view('backoffice.menu.edit', compact('data', 'id'));

    }


    public function update(Request $request, $id)
    {
//        dd($id);
        $name_menu = $request->name_menu;
        $icon_menu = $request->icon_menu;
        $shout_menu = $request->shout_menu;
        $shout_css = $request->shout_css;
        $message = $request->message;
        $update = MenuModel::where('id_menu', $id)->update(
            [
                'name_menu' => $name_menu,
                'icon_menu' => $icon_menu,
                'shout_menu' => $shout_menu,
                'shout_css' => $shout_css,
                'note_menu' => $message

            ]
        );
        if ($update) {
            return redirect(url('/backoffice/setting'))->with('success', 'อัพเดทข้อมูลสำเร็จ');

        }

    }

    public function destroy($id)
    {
        MenuModel::destroy($id);

    }

    public function sortMenu(Request $request)
    {
        $id = $request->id_menu;
        $sort = $request->sort_menu;
        $getTotal = MenuModel::query()->get();
        $Max = $getTotal->count();
        $checkData = MenuModel::where('id_menu', $id)->first();
        $thisNo = $checkData->sort_menu;
        if ($sort == 'up') {
            $nowNo = $thisNo - 1;
            if ($thisNo != '1') {
                $checkUp = MenuModel::where('sort_menu', $nowNo)->first();
                MenuModel::where('id_menu', $checkUp->id_menu)->update(
                    [
                        'sort_menu' => $thisNo
                    ]
                );

                MenuModel::where('id_menu', $id)->update(
                    [
                        'sort_menu' => $thisNo - 1
                    ]
                );
                return messageSuccess('Update sort menu success');
            } else {
                return messageInfo('Max sort menu');

            }

        } else {
            $nowNo = $thisNo + 1;
            if ($Max != $thisNo) {
                $checkUp = MenuModel::where('sort_menu', $nowNo)->first();
                MenuModel::where('id_menu', $checkUp->id_menu)->update(
                    [
                        'sort_menu' => $thisNo
                    ]
                );
                MenuModel::where('id_menu', $id)->update(
                    [
                        'sort_menu' => $thisNo + 1
                    ]
                );
                return messageSuccess('PUpdate sort menu success');
            } else {
                return messageInfo('Min sort menu');

            }
        }

    }

    public function sortMenuSub(Request $request)
    {
        $id = $request->id_menu;
        $sort = $request->sort_menu;
        $relation_id = $request->relation_id;
        $getTotal = SubMenuModel::query()->where('relation_menu',$relation_id)->get();
        $Max = $getTotal->count();
        $checkData = SubMenuModel::where('id_menu_sub', $id)->where('relation_menu',$relation_id)->first();
        $thisNo = $checkData->sort_menu;
        if ($sort == 'up') {
            $nowNo = $thisNo - 1;
            if ($thisNo != '1') {
                $checkUp = SubMenuModel::where('sort_menu', $nowNo)->where('relation_menu',$relation_id)->first();
                SubMenuModel::where('id_menu_sub', $checkUp->id_menu_sub)->where('relation_menu',$relation_id)->update(
                    [
                        'sort_menu' => $thisNo
                    ]
                );

                SubMenuModel::where('id_menu_sub', $id)->where('relation_menu',$relation_id)->update(
                    [
                        'sort_menu' => $thisNo - 1
                    ]
                );
                return messageSuccess('Update sort menu success');
            } else {
                return messageInfo('Max sort menu');

            }

        } else {
            $nowNo = $thisNo + 1;
            if ($Max != $thisNo) {
                $checkUp = SubMenuModel::where('sort_menu', $nowNo)->where('relation_menu',$relation_id)->first();
                SubMenuModel::where('id_menu_sub', $checkUp->id_menu_sub)->where('relation_menu',$relation_id)->update(
                    [
                        'sort_menu' => $thisNo
                    ]
                );
                SubMenuModel::where('id_menu_sub', $id)->where('relation_menu',$relation_id)->update(
                    [
                        'sort_menu' => $thisNo + 1
                    ]
                );
                return messageSuccess('PUpdate sort menu success');
            } else {
                return messageInfo('Min sort menu');

            }
        }

    }

    public function queryDatatable()
    {
        $data = MenuModel::query()->orderBy('sort_menu', 'DESC')->get();
        return Datatables::of($data)->addIndexColumn()
            ->addColumn('sort', function ($data) {
                $up = 'up';
                $down = 'down';
                if ($data->sort_menu != '') {
                    $sort = '<center><h5>' . $data->sort_menu . '</h5>
               <button type="button" onclick="sortByMenu(' . $data->id_menu . ',\'' . $up . '\')"  class="btn btn-success btn-outline-success btn-icon"><i  class="icofont icofont-arrow-up "></i></button>
               <button type="button" onclick="sortByMenu(' . $data->id_menu . ',\'' . $down . '\')"  class="btn btn-success btn-outline-success btn-icon"><i  class="icofont icofont-arrow-down "></i></button></center>';
                } else {
                    $sort = '';
                }
                return $sort;
            })
            ->addColumn('Link', function ($data) {
                if ($data->link_menu != '') {
                    $link = '' . $data->link_menu . '<br>
                <a class="btn btn-primary btn-outline-primary" href="' . url('backoffice/' . $data->link_menu) . '" target="_blank" title="link">
                <i class="icofont icofont-link-alt"></a>';
                } else {
                    $link = '';
                }
                return $link;
            })
            ->addColumn('component', function ($data) {
                if ($data->component_menu == '') {
                    $component = 'Add Submenu <button onclick="window.location=\'' . url('backoffice/setting/' . $data->id_menu . '/submenu') . '\'" style="color:white;" class="btn btn-info btn-icon"><i  class="icofont icofont-plus"></i></button>';
                } else {
                    $component = $data->component_menu;
                }
                return $component;
            })
            ->addColumn('Icon', function ($data) {
                $Icon = '<i class="' . $data->icon_menu . '"> </i> ' . $data->icon_menu;
                return $Icon;
            })
            ->addColumn('Manage', function ($data) {
                $Manage = buttonManageData($data->id_menu, true, true, true, 'backoffice/setting');
                return $Manage;
            })
            ->rawColumns(['sort', 'Link', 'component', 'Icon', 'Manage'])
            ->make(true);
    }

    function viewSubmenu($id)
    {
        $dataSub = SubMenuModel::query()->where('relation_menu', $id)->orderBy('sort_menu','ASC')->get();
        $count = $dataSub->count() +1;
        $data = MenuModel::query()->where('id_menu', $id)->first();
        return view('backoffice.menu.view_submenu', compact('id', 'data', 'dataSub', 'count'));
    }

    function updateSubmenu(Request $request)
    {
        $name = $request->name;
        $link = $request->link;
        $component = $request->component;
        $shout_menu = $request->shout_menu;
        $shout_css = $request->shout_css;
        $model = $request->model;
        $sort_menu = $request->sort_menu;
        $message = $request->message;
        $submenu_id = $request->submenu_id;
        $main = $request->main;
        if ($submenu_id != '') {
            $data = SubMenuModel::where('id_menu_sub', $submenu_id)->update(
                [
                    'name_menu' => $name,
                    'link_menu' => $link,
                    'component_menu' => $component,
                    'shout_menu' => $shout_menu,
                    'shout_css' => $shout_css,
                    'note_menu' => $message,
                ]
            );
        } else {
            $data = new SubMenuModel;
            $data->name_menu = $name;
            $data->link_menu = $link;
            $data->component_menu = $component;
            $data->shout_menu = $shout_menu;
            $data->shout_css = $shout_css;
            $data->sort_menu = $sort_menu;
            $data->note_menu = $message;
            $data->relation_menu = $main;
            $data->save();
            if ($component != '') {
                $controller = '' . $component . 'Controller';
                $modelStructure = '' . $component . 'Model';
                $contentsClass = contentController($controller,$component);
                $contentsModel = contentsModel($modelStructure);
                $index = contentIndex($component,$link);
                $create = contentCreate($component,$link);
                $update = contentUpdate($component,$link);
                $show = contentShow();
                Storage::disk('www')->put('local/resources/views/backoffice/' . $component . '/show.blade.php', $show);
                Storage::disk('www')->put('local/resources/views/backoffice/' . $component . '/index.blade.php', $index);
                Storage::disk('www')->put('local/resources/views/backoffice/' . $component . '/create.blade.php', $create);
                Storage::disk('www')->put('local/resources/views/backoffice/' . $component . '/edit.blade.php', $update);
                Storage::disk('www')->put('local/app/Http/Controllers/backend/' . $controller . '.php', $contentsClass);
                if ($model == 'open') {
                    Storage::disk('www')->put('local/app/Model/' . $modelStructure . '.php', $contentsModel);
                }
            }
        }

        return redirect(url('backoffice/setting/' . $main . '/submenu'))->with('success', 'อัพเดทเมนูย่อยเรียบร้อย');
    }

    function deleteSub($main,$id)
    {
        SubMenuModel::destroy($id);
        return messageSuccess('Delete sub menu success');

    }
}
