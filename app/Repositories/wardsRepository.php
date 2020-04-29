<?php

namespace App\Repositories;

use App\Models\wards;
use App\Repositories\BaseRepository;

/**
 * Class wardsRepository
 * @package App\Repositories
 * @version April 29, 2020, 1:39 pm UTC
*/

class wardsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Ward',
        'NumofPatients',
        'DoctorsonDuty',
        'NursesonDuty'
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
        return wards::class;
    }
}
