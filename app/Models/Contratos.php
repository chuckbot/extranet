<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

class Contratos extends Model
{
    
	public $table = "contratos";
    

	public $fillable = [
	    "codigo_contrato",
		"cedula_afiliado",
		"fecha_inicio",
		"fecha_fin",
		"codigo_colectivo",
		"codigo_plan"
	];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        "codigo_contrato" => "integer",
		"cedula_afiliado" => "string",
		"codigo_colectivo" => "integer",
		"codigo_plan" => "integer"
    ];

	public static $rules = [
	    "codigo_contrato" => "required",
		"cedula_afiliado" => "required",
		"fecha_inicio" => "required",
		"fecha_fin" => "required",
		"codigo_colectivo" => "required",
		"codigo_plan" => "required"
	];

}
