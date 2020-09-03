<?php

namespace App;

use App\Program;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
protected $fillable = [
    'teras', 'name','kump_sasaran','kategori','sub_kategori','tarikh_mula','tarikh_tamat','obj_program',
    'manfaat','kos','kekerapan','status_pelaksanaan','tidak_aktif','syarat_program','agensi_url','program_logo'
];


    /**
     * Get the items of the tag
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function program()
    {
        return $this->belongsToMany(Program::class);
    }
}