<?php

namespace App\Repositories;

use App\Models\patients;
use App\Repositories\BaseRepository;

/**
 * Class patientsRepository
 * @package App\Repositories
 * @version April 29, 2020, 12:38 pm UTC
*/

class patientsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'firstname',
        'surname',
        'dateofbirth',
        'symptoms',
        'location'
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
        return patients::class;
    }
}
