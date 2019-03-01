<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $guarded =[];
    
    public function complete($completed = true) // $task->completed(false), même formulation pour false.
    {
        $this->update(compact('completed'));
        // $this->update(['completed' => $completed]);
        // $this->update(['completed' => true]);
    }

    public function incomplete()
    {
        $this->complete(false);
        // $this->update(['completed' => false]);
    }

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
