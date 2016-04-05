<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

class User extends Model
{
    
	public $table = "users";
    

	public $fillable = [
	    "name",
		"email",
		"department",
		"role",
		"user",
		"salt",
		"password",
		"act"
	];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        "name" => "string",
		"email" => "string",
		"department" => "string",
		"role" => "string",
		"user" => "string",
		"salt" => "string",
		"password" => "string",
		"act" => "string"
    ];

	public static $rules = [
	    "name" => "required",
		"email" => "required|unique:users",
		"user" => "required",
		"password" => "required",
		"act" => "required"
	];

}
