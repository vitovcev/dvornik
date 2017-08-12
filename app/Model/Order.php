<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Order
 *
 * @package App\Model
 * @property string $connection
 * @property integer $id
 * @property integer $client_id
 * @property string $product
 * @property string $color
 * @property integer $count
 * @property integer $price_total
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $update_at
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Order whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Order whereClientId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Order whereProduct($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Order whereColor($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Order whereCount($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Order wherePriceTotal($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Order whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Order whereUpdatedAt($value)
 */
class Order extends Model
{
    public function client()
    {
        return $this->hasOne('App\Model\Client');
    }
}
