<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class AddressModel extends Authenticatable
{
    use Notifiable;
    //
    protected $table = 'hs_address_mem';

    public $timestamps = false;

    protected $primaryKey = 'id_address_mem';
    
}
