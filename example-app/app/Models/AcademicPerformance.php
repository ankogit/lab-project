<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcademicPerformance extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $guarded = [];

    public function event() {
        return $this->belongsTo(Event::class, 'event_id');
    }
}
