<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cinema extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'location', 'total_screens'];

    public function schedules()
    {
        return $this->hasMany(Schedule::class);
    }
}
