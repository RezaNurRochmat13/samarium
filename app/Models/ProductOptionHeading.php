<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductOptionHeading extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'product_option_heading';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'product_option_heading_id';

    protected $fillable = [
         'product_option_heading_name', 'position', 'product_id',
    ];


    /*-------------------------------------------------------------------------
     * Relationships
     *-------------------------------------------------------------------------
     *
     */

    /*
     * product table.
     *
     */
    public function product()
    {
        return $this->belongsTo('App\Models\Product', 'product_id', 'product_id');
    }

    /*
     * product_option table.
     *
     */
    public function productOptions()
    {
        return $this->hasMany('App\Models\ProductOption', 'product_option_heading_id', 'product_option_heading_id');
    }
}
