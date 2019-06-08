<?php
 namespace App\Model;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductModel extends Model
{
    use SoftDeletes;

    protected $table = "hk_product";
    protected $primaryKey = "id_product";

    protected $dates = ['deleted_at'];

}
