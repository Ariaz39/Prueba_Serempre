<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $cities_id
 * @property integer $cod
 * @property string $name
 * @property string $created_at
 * @property string $updated_at
 * @property City $city
 */
class Client extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'client';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['cities_id', 'cod', 'name', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function city()
    {
        return $this->belongsTo('App\Models\City', 'cities_id');
    }
}
