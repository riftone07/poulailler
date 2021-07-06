<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Sokhna
 * @package App\Models
 * @version July 2, 2021, 4:43 pm UTC
 *
 * @property \App\Models\Lot $lot
 * @property \App\Models\User $user
 * @property string $prenom
 * @property string $nom
 * @property string $telephone
 * @property string $adresse
 * @property string $email
 * @property string $dateReproduction
 * @property integer $lot_id
 * @property integer $user_id
 * @property integer $mortalite_male
 * @property integer $mortalite_femelle
 * @property integer $mortalite_totale
 * @property integer $ponte_totale
 * @property string $mous
 * @property string $casses
 * @property string $feles
 * @property string $rugueux
 * @property string $gros
 * @property string $petits
 * @property string $difformes
 * @property string $couleur
 * @property string $gel
 * @property string $evenement
 */
class Sokhna extends Model
{
  //  use SoftDeletes;

    use HasFactory;

    public $table = 'sokhnas';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'prenom' => 'string',
        'nom' => 'string',
        'telephone' => 'string',
        'adresse' => 'string',
        'email' => 'string',
        'dateReproduction' => 'date',
        'lot_id' => 'integer',
        'user_id' => 'integer',
        'mortalite_male' => 'integer',
        'mortalite_femelle' => 'integer',
        'mortalite_totale' => 'integer',
        'ponte_totale' => 'integer',
        'mous' => 'string',
        'casses' => 'string',
        'feles' => 'string',
        'rugueux' => 'string',
        'gros' => 'string',
        'petits' => 'string',
        'difformes' => 'string',
        'couleur' => 'string',
        'gel' => 'string',
        'evenement' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'prenom' => 'required|string|max:255',
        'nom' => 'required|string|max:255',
        'telephone' => 'required|string|max:255',
        'adresse' => 'required|string|max:255',
        'email' => 'required|string|max:255',
        'dateReproduction' => 'required',
        'lot_id' => 'required',
        'user_id' => 'required',
        'mortalite_male' => 'nullable|integer',
        'mortalite_femelle' => 'nullable|integer',
        'mortalite_totale' => 'nullable|integer',
        'ponte_totale' => 'nullable|integer',
        'mous' => 'nullable|string|max:255',
        'casses' => 'nullable|string|max:255',
        'feles' => 'nullable|string|max:255',
        'rugueux' => 'nullable|string|max:255',
        'gros' => 'nullable|string|max:255',
        'petits' => 'nullable|string|max:255',
        'difformes' => 'nullable|string|max:255',
        'couleur' => 'nullable|string|max:255',
        'gel' => 'nullable|string|max:255',
        'evenement' => 'nullable|string',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function lot()
    {
        return $this->belongsTo(\App\Models\Lot::class, 'lot_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class, 'user_id');
    }
}
