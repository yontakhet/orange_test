<?php

namespace App\Model;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class RepairModel extends Authenticatable
{

	use Notifiable;
    
	protected $table = 'tb_repair';

	public $timestamps = false;

	protected $primaryKey = 'id_dep';

}
