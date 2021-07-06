<?php

namespace App\Repositories;

use App\Models\Sokhna;
use App\Repositories\BaseRepository;

/**
 * Class SokhnaRepository
 * @package App\Repositories
 * @version July 2, 2021, 4:43 pm UTC
*/

class SokhnaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'prenom',
        'nom',
        'telephone',
        'adresse',
        'email',
        'dateReproduction',
        'lot_id',
        'user_id',
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
        return Sokhna::class;
    }
}
