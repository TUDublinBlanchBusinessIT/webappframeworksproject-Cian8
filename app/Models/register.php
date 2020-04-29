<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class register
 * @package App\Models
 * @version April 29, 2020, 1:40 pm UTC
 *
 * @property integer $id
 * @property string $firstname
 * @property string $surname
 * @property string $dateofbirth
 * @property string $Occupation
 * @property boolean $Employement
 * @property string $DateofRegistartion
 */
class register extends Model
{

    public $table = 'register';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'id',
        'firstname',
        'surname',
        'dateofbirth',
        'Occupation',
        'Employement',
        'DateofRegistartion'
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
        'Occupation' => 'string',
        'Employement' => 'boolean',
        'DateofRegistartion' => 'date'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
