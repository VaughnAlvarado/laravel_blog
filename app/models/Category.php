<?php 
class Category extends BaseModel
{
	protected $table = 'categories';

	public function posts()
	{
		return $this->belongsToMany('Post');
	}
}

// Post::with('user')->get();