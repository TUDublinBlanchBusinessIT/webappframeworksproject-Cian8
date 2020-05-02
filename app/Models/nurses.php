<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class nurses
 * @package App\Models
 * @version May 2, 2020, 8:28 pm UTC
 *
 * @property \App\Models\Ward $wardid
 * @property integer $Wardid
 * @property integer $Nurseid
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
        'Wardid',
        'Nurseid',
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
        'Wardid' => 'integer',
        'Nurseid' => 'integer',
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

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function wardid()
    {
        return $this->belongsTo(\App\Models\Ward::class, 'Wardid');
    }
}
