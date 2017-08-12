<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Client
 *
 * @package App\Model
 * @property string $connection
 * @property integer $id
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string $phone
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $update_at
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Client whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Client whereFirstName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Client whereLastName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Client whereEmail($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Client wherePhone($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Client whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Client whereUpdatedAt($value)
 */
class Client extends Model
{
    protected $table = 'client';

    public function Orders()
    {
        return $this->hasMany('App\Model\Order');
    }
}
