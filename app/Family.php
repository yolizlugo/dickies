<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Family
 *
 * @mixin \Eloquent
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Family whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Family whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Family whereUpdatedAt($value)
 */
class Family extends Model
{
    protected $fillable=['aspirante_id','nombre_familiar','vive','direccion','ocupacion'];

    public function aspirante(){
        $this->belongsTo(Aspirante::class);
    }
}
