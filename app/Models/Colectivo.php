<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

class Colectivo extends Model
{
    
	public $table = "colectivos";
    

	public $fillable = [
	    "codigo_colectivo",
		"nombre",
		"codigo_aseguradora"
	];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        "codigo_colectivo" => "integer",
		"nombre" => "string",
		"codigo_aseguradora" => "integer"
    ];

	public static $rules = [
	    "codigo_colectivo" => "required",
		"nombre" => "required",
		"codigo_aseguradora" => "required"
	];

}
