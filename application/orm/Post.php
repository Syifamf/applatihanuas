<?php

namespace Orm;

use Illuminate\Database\Eloquent\Model;

class Post Extends Model {
    protected $table ='post';

    public function user(){

        return $this->belongsTo(User::class);
    }

}