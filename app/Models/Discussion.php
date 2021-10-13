<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Discussion extends Model
{
    protected $fillable = [
        'title', 'message','master_id','champion_id'
    ];

    public function championPost(){
        return $this->hasMany(Discussion::class);
    }

    public function masterPost(){
        return $this->hasMany(Discussion::class);
    }
}
