<?php

namespace App;

use App\Orgdata;
use Illuminate\Database\Eloquent\Model;

class Orgdata extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'description','program','subject','status','requested_by','requested_to'];

    /**
     * Get the items of the tag
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function orgdata()
    {
        return $this->belongsToMany(Orgdata::class);
    }
}
