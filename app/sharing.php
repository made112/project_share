<?php

namespace App;
use App\Http\Requests\SharingRequest ;

use app\vote;
use Illuminate\Database\Eloquent\Model;

class sharing extends Model
{
    public $table = "sharing";
    protected $fillable = ['name','Prof_name', 'nationality', 'edu_area', 'edu_level', 'school',
        'class','mobile','email','edu_share','sharing_type','photo','video','line',
        'drawing','blog','stories','design','enfo','motion','elqa','abyat','volunt','vote_avg'] ;
public $timestamps = false ;



    public function votes()
    {
        return $this->hasMany('App\vote', 'sharing_id','id');
    }

}
