<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Model;

class ProductAnswer extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'product_answer';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'product_answer_id';

    protected $fillable = [
         'product_question_id',
         'writer_name', 'writer_info',
         'answer_text',
    ];


    /*-------------------------------------------------------------------------
     * Relationships
     *-------------------------------------------------------------------------
     *
     */

    /*
     * product_question table.
     *
     */
    public function productQuestion()
    {
        return $this->belongsTo('App\Models\Product\ProductQuestion', 'product_question_id', 'product_question_id');
    }
}
