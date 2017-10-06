<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ItemOrders extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'itemorders';

    /**
     * The database primary key value.
     *
     * @var string
     */
    protected $primaryKey = 'itemorder_id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['price_id', 'order_id','qty_order'];


}
