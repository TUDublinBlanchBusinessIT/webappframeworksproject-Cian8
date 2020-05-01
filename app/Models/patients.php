<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class patients
 * @package App\Models
 * @version April 29, 2020, 12:38 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $doctors
 * @property string $firstname
 * @property string $surname
 * @property string $dateofbirth
 * @property string $symptoms
 * @property string $location
 */
class patients extends Model
{

    //public $table = 'patients';
    
    //const CREATED_AT = 'created_at';
   // const UPDATED_AT = 'updated_at';




    public $fillable = [
        'firstname',
        'surname',
        'dateofbirth',
        'symptoms',
        'location'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'firstname' => 'string',
        'surname' => 'string',
        'dateofbirth' => 'date',
        'symptoms' => 'string',
        'location' => 'string'
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
    public function doctors()
    {
        return $this->hasMany(\App\Models\Doctor::class, 'Doctorid');
    }
}
