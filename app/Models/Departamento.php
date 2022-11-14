<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Departamento
 *
 * @property $id
 * @property $edificio_id
 * @property $nro_of_departamento
 * @property $nro_of_habitaciones
 * @property $piso
 * @property $created_at
 * @property $updated_at
 *
 * @property Edificio $edificio
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Departamento extends Model
{
    
    static $rules = [
		'edificio_id' => 'required',
		'nro_of_departamento' => 'required',
		'nro_of_habitaciones' => 'required',
		'piso' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['edificio_id','nro_of_departamento','nro_of_habitaciones','piso'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function edificio()
    {
        return $this->hasOne('App\Models\Edificio', 'id', 'edificio_id');
    }
    

}
