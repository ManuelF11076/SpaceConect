<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Cliente
 *
 * @property $id
 * @property $nombre
 * @property $direccion_IP
 * @property $created_at
 * @property $updated_at
 * @property $deleted_at
 * @property $direcciones_id
 * @property $pagos_id
 *
 * @property Direccione $direccione
 * @property Pago $pago
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cliente extends Model
{
    use SoftDeletes;

    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nombre', 'direccion_IP', 'direcciones_id', 'pagos_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function direccione()
    {
        return $this->belongsTo(\App\Models\Direccione::class, 'direcciones_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function pago()
    {
        return $this->belongsTo(\App\Models\Pago::class, 'pagos_id', 'id');
    }
    
}
