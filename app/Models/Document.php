<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;

    protected $fillable =[
        'id',
        'project_id',
        'created_at',
        'updated_at'
    ];

    public function file(){
        return $this->morphMany(File::class, 'fileable');
    }
}
