<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book_Room extends Model
{
    protected $table = 'book_rooms';

    public function user()
    {
        return $this->belongsTo('App\User','id_user');
    }

    public function rooms()
    {
        return $this->belongsTo('App\Room','id_room');
    }


}
