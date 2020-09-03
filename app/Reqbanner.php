<?php

namespace App;

use App\Reqbanner;
use Illuminate\Database\Eloquent\Model;

class Reqbanner extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
protected $fillable = [
    'req_type', 'req_name','news_name','news_desc','tarikh_mula','tarikh_tamat','banner_image'
];


    /**
     * Get the items of the tag
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function reqbanner()
    {
        return $this->belongsToMany(Reqbanner::class);
    }
}