<?php

namespace App\Repositories;

use App\Models\doctors;
use App\Repositories\BaseRepository;

/**
 * Class doctorsRepository
 * @package App\Repositories
 * @version May 2, 2020, 3:51 pm UTC
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
