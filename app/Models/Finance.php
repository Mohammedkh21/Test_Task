<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Finance extends Model
{
    use HasFactory;

    protected $fillable =[
        'id',
        'project_id',
        'income',
        'employees',
        'current_assets',
        'current_claims',
        'website',
        'mortgage_original',
        'other_guarantees',
        'created_at',
        'updated_at'
    ];


}
