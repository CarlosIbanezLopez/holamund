<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Edificio
 *
 * @property $id
 * @property $Nombre
 * @property $telefono
 * @property $ubicaion
 * @property $created_at
 * @property $updated_at
 *
 * @property AreaComun[] $areaComuns
 * @property Departamento[] $departamentos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Edificio extends Model
{
    
    static $rules = [
		'Nombre' => 'required',
		'telefono' => 'required',
		'ubicaion' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Nombre','telefono','ubicaion'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function areaComuns()
    {
        return $this->hasMany('App\Models\AreaComun', 'edificio_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function departamentos()
    {
        return $this->hasMany('App\Models\Departamento', 'edificio_id', 'id');
    }
    

}
