<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaskList extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function color(){
        return $this->belongsTo(Color::class, 'color_id');
    }
    public function tasks(){
        return $this->hasMany(Task::class, 'tasklist_id');
    }
}
