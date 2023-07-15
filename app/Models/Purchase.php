<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;

    protected $fillable =[
        'id',
        'project_id',
        'supplier_id',
        'type',
        'amount',
        'payment_period',
        'created_at',
        'updated_at'

    ];


    public function file()
    {
        return $this->morphOne(File::class, 'fileable');
    }
}
