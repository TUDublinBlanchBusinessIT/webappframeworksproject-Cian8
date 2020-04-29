<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class wards
 * @package App\Models
 * @version April 29, 2020, 1:39 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $nurses
 * @property boolean $Ward
 * @property integer $NumofPatients
 * @property integer $DoctorsonDuty
 * @property integer $NursesonDuty
 */
class wards extends Model
{

    public $table = 'wards';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'Ward',
        'NumofPatients',
        'DoctorsonDuty',
        'NursesonDuty'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'Ward' => 'boolean',
        'NumofPatients' => 'integer',
        'DoctorsonDuty' => 'integer',
        'NursesonDuty' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function nurses()
    {
        return $this->hasMany(\App\Models\Nurse::class, 'Wardid');
    }
}
