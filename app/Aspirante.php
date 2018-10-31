<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Aspirante
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Family[] $families
 * @mixin \Eloquent
 * @property int $id
 * @property string $nombre
 * @property string $ap_paterno
 * @property string $ap_materno
 * @property int $edad
 * @property string $domicilio
 * @property string $colonia
 * @property int $cp
 * @property string $celular
 * @property string $lugar_nac
 * @property string $fecha_nac
 * @property string $pais
 * @property string $genero
 * @property string $vives_con
 * @property float $estatura
 * @property int $peso
 * @property string $estado_civil
 * @property string $curp
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Aspirante whereApMaterno($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Aspirante whereApPaterno($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Aspirante whereCelular($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Aspirante whereColonia($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Aspirante whereCp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Aspirante whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Aspirante whereCurp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Aspirante whereDomicilio($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Aspirante whereEdad($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Aspirante whereEstadoCivil($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Aspirante whereEstatura($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Aspirante whereFechaNac($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Aspirante whereGenero($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Aspirante whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Aspirante whereLugarNac($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Aspirante whereNombre($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Aspirante wherePais($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Aspirante wherePeso($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Aspirante whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Aspirante whereVivesCon($value)
 */
class Aspirante extends Model
{
    protected $fillable = [
        'nombre', 'ap_paterno','ap_materno','edad','domicilio','colonia',
        'cp','celular','lugar_nac','fecha_nac','pais','genero','vives_con','estatura',
        'peso','estado_civil','curp'
    ];

    protected $withCount=['schools'];

    public function families(){
        return $this->hasMany(Family::class)->select('id','aspirante_id','nombre_familiar','direccion');
    }

    public function schools(){
        return $this->hasMany(School::class)->select('id','aspirante_id','name_school','certificado');
    }
}
