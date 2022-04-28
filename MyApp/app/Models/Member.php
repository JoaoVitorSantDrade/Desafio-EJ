<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    public function scopeFilter($query,array $filters){
        if($filters['search'] ?? false) {
            $query->where('name','like','%'.request('search').'%');
        }
    }

    protected $fillable = [
        'name',
        'cargo'
    ];
}
