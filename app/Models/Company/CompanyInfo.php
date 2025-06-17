<?php

namespace App\Models\Company;

use Illuminate\Database\Eloquent\Model;

class CompanyInfo extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'company_info';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'company_info_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
         'company_id',
         'info_key', 'info_value',
         'image_path',
    ];

    /**
     * All of the relationships to be touched.
     *
     * @var array
     */
    protected $touches = ['company'];


    /*-------------------------------------------------------------------------
     * Relationships
     *-------------------------------------------------------------------------
     *
     */

    /*
     * company table.
     *
     */
    public function company()
    {
        return $this->belongsTo('App\Models\Company\Company', 'company_id', 'company_id');
    }
}
