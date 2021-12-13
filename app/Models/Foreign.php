<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foreign extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function countries()
    {
        return $this->belongsTo(Country::class);
    }
}
