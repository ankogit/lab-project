<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $guarded = [];

    public function events() {
        return $this->belongsToMany(Event::class, 'subject_event');
    }
    public function group() {
        return $this->belongsTo(Group::class, 'group_id');
    }
    public function teacher() {
        return $this->belongsTo(User::class, 'teacher_id');
    }
}
