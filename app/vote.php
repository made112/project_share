<?php

namespace App;
use\app\sharing;

use Illuminate\Database\Eloquent\Model;


class vote extends Model
{
    public $table = "vote";

    protected $fillable = ['name', 'email', 'sharing_id', 'avg_percent'];


    public $timestamps = false;

    public function sharing()
    {
        return $this->belongsTo('App\sharing', 'sharing_id','id');

    }
}

