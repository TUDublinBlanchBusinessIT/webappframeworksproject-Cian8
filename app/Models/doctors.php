<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class doctors
 * @package App\Models
 * @version April 29, 2020, 1:39 pm UTC
 *
 * @property \App\Models\Patient $doctorid
 * @property integer $Doctorid
 * @property string $firstname
 * @property string $surname
 * @property string $dateofbirth
 * @property string $Feild
 * @property string $Salary
 * @property boolean $Employement
 */
class doctors extends Model
{

  //  public $table = 'doctors';
    
   // const CREATED_AT = 'created_at';
   // const UPDATED_AT = 'updated_at';




    public $fillable = [
        'Doctorid',
        'firstname',
        'surname',
        'dateofbirth',
        'Feild',
        'Salary',
        'Employement'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'Doctorid' => 'integer',
        'firstname' => 'string',
        'surname' => 'string',
        'dateofbirth' => 'date',
        'Feild' => 'string',
        'Salary' => 'string',
        'Employement' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function doctorid()
    {
        return $this->belongsTo(\App\Models\Patient::class, 'Doctorid');
    }
}
