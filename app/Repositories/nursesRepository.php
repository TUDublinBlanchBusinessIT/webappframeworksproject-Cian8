<?php

namespace App\Repositories;

use App\Models\nurses;
use App\Repositories\BaseRepository;

/**
 * Class nursesRepository
 * @package App\Repositories
 * @version April 29, 2020, 1:39 pm UTC
*/

class nursesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Wardid',
        'Nurseid',
        'firstname',
        'surname',
        'dateofbirth',
        'Salary',
        'Employement'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return nurses::class;
    }
}