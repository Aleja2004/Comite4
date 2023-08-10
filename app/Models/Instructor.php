<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Instructor extends Model
{
    protected $fillable = [
        'ins_identificacion',
        'ins_nombres',
        'ins_apellidos',
        'ins_email',
        'ins_telefono',
    ];

    /**
     * Get all of the fichas for the Instructor
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function fichas(): HasMany
    {
        return $this->hasMany(Ficha::class, 'ins_id');
    }

    /**
     * Get all of the solicitudComites for the Instructor
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function solicitudComites(): HasMany
    {
        return $this->hasMany(SolicitudComite::class, 'ins_id');
    }
}