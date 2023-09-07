<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movies extends Model
{
    use HasFactory;
    protected $fillable = [
        'originId',
        'genre',
        'mname',
        'description',
        'img'
    ];

    public function oriname(){
        return $this->belongsTo(Origin::class, 'originId');

    }
}
