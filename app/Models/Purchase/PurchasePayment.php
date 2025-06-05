<?php

namespace App\Models\Purchase;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PurchasePayment extends Model
{
    use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'purchase_payment';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'purchase_payment_id';

    protected $fillable = [
         'purchase_payment_type_id', 'purchase_id', 'payment_date',
         'amount',
    ];


    /*-------------------------------------------------------------------------
     * Relationships
     *-------------------------------------------------------------------------
     *
     */

    /*
     * purchase_payment_type table.
     *
     */
    public function purchasePaymentType()
    {
        return $this->belongsTo('App\Models\Purchase\PurchasePaymentType', 'purchase_payment_type_id', 'purchase_payment_type_id');
    }

    /*
     * sale_invoice table.
     *
     */
    public function purchase()
    {
        return $this->belongsTo('App\Models\Purchase\Purchase', 'purchase_id', 'purchase_id');
    }
}
