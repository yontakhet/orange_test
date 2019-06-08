<?php

namespace App\Model;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class DocumentModel extends Authenticatable
{

	use Notifiable;
    
	protected $table = 'tb_document';

	public $timestamps = false;

	protected $primaryKey = 'note_fk';

}
