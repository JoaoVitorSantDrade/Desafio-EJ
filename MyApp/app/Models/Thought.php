<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Thought extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'id-icon',
    ];


    public static function find($id){
        return self::where('id',$id)->get();
    }
}
