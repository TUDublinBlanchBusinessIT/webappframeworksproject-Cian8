<?php

namespace App\Repositories;

use App\Models\nurses;
use App\Repositories\BaseRepository;

/**
 * Class nursesRepository
 * @package App\Repositories
 * @version May 3, 2020, 7:53 pm UTC
*/

class nursesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
