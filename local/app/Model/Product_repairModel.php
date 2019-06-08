<?php


namespace App\Model;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class repairModel extends Authenticatable
{

	use Notifiable;
    //
	protected $table = 'tb_product_repair';

	public $timestamps = false;

	protected $primaryKey = 'repair_fk';


}