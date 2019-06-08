<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class AllProductModel extends Authenticatable
{
    use Notifiable;
    //
    protected $table = 'tb_allproduct';

    public $timestamps = false;

    protected $primaryKey = 'id_allproduct';
    
}
