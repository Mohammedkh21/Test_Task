<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable =[
        'id' ,
        'user_id',
        'completed',
        'created_at',
        'updated_at'
    ];

    public function purchase(){
        return $this->hasOne(Purchase::class);
    }

    public function finance(){
        return $this->hasOne(Finance::class);
    }

    public function document(){
        return $this->hasOne(Document::class);
    }

}
