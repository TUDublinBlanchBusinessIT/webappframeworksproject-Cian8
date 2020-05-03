<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class doctors
 * @package App\Models
 * @version May 3, 2020, 8:10 pm UTC
 *
 * @property string $firstname
 * @property string $surname
 * @property string $dateofbirth
 * @property string $Feild
 * @property string $Salary
 * @property boolean $Employement
 */
class doctors extends Model
{

    public $table = 'doctors';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
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
        'id' => 'integer',
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

    
}
