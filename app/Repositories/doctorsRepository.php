<?php

namespace App\Repositories;

use App\Models\doctors;
use App\Repositories\BaseRepository;

/**
 * Class doctorsRepository
 * @package App\Repositories
 * @version April 29, 2020, 1:39 pm UTC
*/

class doctorsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Doctorid',
        'firstname',
        'surname',
        'dateofbirth',
        'Feild',
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
        return doctors::class;
    }
}
