<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Lot
 * @package App\Models
 * @version June 29, 2021, 10:39 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $poulayers
 * @property string $libelle
 */
class Lot extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'lots';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'libelle'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'libelle' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'libelle' => 'required|string|max:255',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function poulayers()
    {
        return $this->hasMany(\App\Models\Poulayer::class, 'lot_id');
    }
}
