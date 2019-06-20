<?php

namespace App;
use App\Mail\ProjectCreated;
use Illuminate\Support\Facades\Mail;
use Illuminate\Database\Eloquent\Model;

class project extends Model
{
    protected $guarded=[];
    protected static function boot()
    {
    	parent::boot();

    	static::created(function ($project){
    		 

    	});
    }

    public function owner()
    {
    	return $this->belongsTo(User::class); 
    	# code...
    }
	public function tasks()
    	{
    		return $this->hasMany(Task::class);
    	}

    	public function addTask($task)
    	{
    		$this->tasks()->create($task);
    	}
}

