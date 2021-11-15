<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    public function users() {
        return $this->belongsTo(User::class);
    }
    public function taskList(){
        return $this->belongsTo(TaskList::class);
    }
    public function subtask(){
        return $this->hasMany(Subtask::class);
    }
}
