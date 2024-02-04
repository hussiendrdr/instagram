<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Conversation extends Model
{
    use HasFactory;
    protected $guarded=[];

    function message():HasMany{
        return $this->hasMany(Message::class);
    }

    function getReciver(){
        if($this->sender_id===auth()->id){
            return User::firstwhere('id',$this->sender_id);
        }
    }
}
