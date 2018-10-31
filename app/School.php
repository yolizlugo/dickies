<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\School
 *
 * @mixin \Eloquent
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\School whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\School whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\School whereUpdatedAt($value)
 */
class School extends Model
{
    protected $fillable = ['aspirante_id','name_school','fecha_inicio','fecha_termino','address_school','certificado'];

    public function aspirante(){
        return $this->belongsTo(Aspirante::class);
    }
}
