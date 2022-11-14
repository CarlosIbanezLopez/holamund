<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AreaComun
 *
 * @property $id
 * @property $edificio_id
 * @property $nombre
 * @property $created_at
 * @property $updated_at
 *
 * @property Edificio $edificio
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class AreaComun extends Model
{
    
    static $rules = [
		'nombre' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['edificio_id','nombre'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function edificio()
    {
        return $this->hasOne('App\Models\Edificio', 'id', 'edificio_id');
    }
    

}
