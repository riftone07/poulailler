<?php

namespace App\Repositories;

use App\Models\Poulayer;
use App\Repositories\BaseRepository;

/**
 * Class PoulayerRepository
 * @package App\Repositories
 * @version June 29, 2021, 10:40 pm UTC
*/

class PoulayerRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'dateReproduction',
        'lot_id',
        'mortalite_male',
        'mortalite_femelle',
        'mortalite_totale',
        'ponte_totale',
        'mous',
        'casses',
        'feles',
        'rugueux',
        'gros',
        'petits',
        'difformes',
        'couleur',
        'gel',
        'evenement'
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
        return Poulayer::class;
    }
}
