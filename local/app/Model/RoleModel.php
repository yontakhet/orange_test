<?php
 namespace App\Model;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RoleModel extends Model
{
    // use SoftDeletes;

    protected $table = "roles";
    // protected $primaryKey = "id_product";

    // protected $dates = ['deleted_at'];

}
