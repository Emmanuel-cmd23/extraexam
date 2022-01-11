<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cliente
 *
 * @property $id
 * @property $nombre
 * @property $primer_apellido
 * @property $segundo_apellido
 * @property $numero_celular
 * @property $correo_electronico
 * @property $sexo
 * @property $fecha_nacimiento
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cliente extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'primer_apellido' => 'required',
		'segundo_apellido' => 'required',
		'numero_celular' => 'required',
		'correo_electronico' => 'required',
		'sexo' => 'required',
		'fecha_nacimiento' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','primer_apellido','segundo_apellido','numero_celular','correo_electronico','sexo','fecha_nacimiento'];



}
