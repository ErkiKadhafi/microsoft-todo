<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $guarded = [];
    
    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function taskList(){
        return $this->belongsTo(TaskList::class, 'tasklist_id');
    }
    public function subtasks(){
        return $this->hasMany(Subtask::class);
    }
    public function categories(){
        return $this->belongsToMany(Category::class)->withTimestamps();
    }
}
