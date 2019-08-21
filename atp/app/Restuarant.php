<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restuarant extends Model
{

	protected $table = "restuarant";
	protected $primaryKey = 'rid';
	public $timestamps = false;

	const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'last_update';
}
