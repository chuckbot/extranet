<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

class Especialidades_Extranet extends Model
{
    
	public $table = "especialidadesExtranets";
    

	public $fillable = [
	    "codigo_especialidad",
		"rama",
		"descripcion"
	];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        "codigo_especialidad" => "integer",
		"rama" => "string",
		"descripcion" => "string"
    ];

	public static $rules = [
	    "codigo_especialidad" => "required",
		"rama" => "required",
		"descripcion" => "required"
	];

}
