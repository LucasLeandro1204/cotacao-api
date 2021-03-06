<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    /**
     * Hidden attributes
     *
     * @var array
     */
    protected $hidden = ['id', 'created_at', 'updated_at'];

    /**
     * Fillable attributes
     *
     * @var array
     */
    protected $fillable = ['type', 'initials', 'buy', 'sell'];

    /**
     * Change Primary Key
     *
     * @var string
     */
    protected $primaryKey = 'initials';

    /**
     * Set incrementing as false
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * Get the buy price
     *
     * @param  int  $value
     * @return float
     */
    public function getBuyAttribute($value)
    {
        return format($value);
    }

    /**
     * Get the sell price
     *
     * @param  int  $value
     * @return float
     */
    public function getSellAttribute($value)
    {
        return format($value);
    }

    /**
     * Set the buy price
     *
     * @param  string  $value
     * @return void
     */
    public function setBuyAttribute($value)
    {
        $this->attributes['buy'] = format($value, true);
    }

    /**
     * Set the sell price
     *
     * @param  string  $value
     * @return void
     */
    public function setSellAttribute($value)
    {
        $this->attributes['sell'] = format($value, true);
    }
}
