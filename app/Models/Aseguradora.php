<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

class Aseguradora extends Model
{
    
	public $table = "aseguradoras";
    

	public $fillable = [
	    "codigo_aseguradora",
		"nombre",
		"rif"
	];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        "codigo_aseguradora" => "integer",
		"nombre" => "string",
		"rif" => "string"
    ];

	public static $rules = [
	    "codigo_aseguradora" => "required",
		"nombre" => "required",
		"rif" => "required"
	];

}
