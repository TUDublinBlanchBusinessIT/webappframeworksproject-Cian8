<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class nurses
 * @package App\Models
 * @version May 3, 2020, 7:53 pm UTC
 *
 * @property string $firstname
 * @property string $surname
 * @property string $dateofbirth
 * @property string $Salary
 * @property boolean $Employement
 */
class nurses extends Model
{

    public $table = 'nurses';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'firstname',
        'surname',
        'dateofbirth',
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
