<?php

namespace App\Repositories;

use App\Models\register;
use App\Repositories\BaseRepository;

/**
 * Class registerRepository
 * @package App\Repositories
 * @version April 29, 2020, 1:40 pm UTC
*/

class registerRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id',
        'firstname',
        'surname',
        'dateofbirth',
        'Occupation',
        'Employement',
        'DateofRegistartion'
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
        return register::class;
    }
}
