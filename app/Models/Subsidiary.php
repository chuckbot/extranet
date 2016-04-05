<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

class Subsidiary extends Model
{
    
	public $table = "subsidiaries";
    

	public $fillable = [
	    "name",
		"lastname",
		"cedula",
		"birthday",
		"email",
		"sex",
		"val_user",
		"subsidiary_type",
		"telephone",
		"cedula_titular"
	];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        "name" => "string",
		"lastname" => "string",
		"cedula" => "string",
		"email" => "string",
		"sex" => "string",
		"val_user" => "string",
		"subsidiary_type" => "string",
		"telephone" => "string",
		"cedula_titular" => "string"
    ];

	public static $rules = [
	    "name" => "required",
		"lastname" => "required",
		"cedula" => "required",
		"birthday" => "required",
		"email" => "required|unique:subsidiaries",
		"sex" => "required",
		"val_user" => "required",
		"subsidiary_type" => "required",
		"telephone" => "required",
		"cedula_titular" => "required"
	];

}
