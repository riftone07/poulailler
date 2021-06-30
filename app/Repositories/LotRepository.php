<?php

namespace App\Repositories;

use App\Models\Lot;
use App\Repositories\BaseRepository;

/**
 * Class LotRepository
 * @package App\Repositories
 * @version June 29, 2021, 10:39 pm UTC
*/

class LotRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'libelle'
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
        return Lot::class;
    }
}
