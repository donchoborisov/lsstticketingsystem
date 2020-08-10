<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campus extends Model
{
    protected $fillable = ['name'];

    public $timestamps = false;


    public function tickets(){
        return $this->hasMany(Ticket::class);
    }
}
