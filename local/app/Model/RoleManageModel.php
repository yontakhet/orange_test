<?php
 namespace App\Model;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RoleManageModel extends Model
{
    // use SoftDeletes;

    protected $table = "model_has_roles";
    // protected $primaryKey = ['role_id', 'model_type', 'model_id'];
    protected $primaryKey = "model_id";
    // public $incrementing = false;
    public $timestamps = false;
    // protected $dates = ['deleted_at'];

}
