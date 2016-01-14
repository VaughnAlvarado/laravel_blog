<?php

class Post extends BaseModel
{
    protected $table = 'posts';

    protected $fillable = array('subject', 'body');

    public static $rules = array(
    	'subject' => 'required|min:5|max:100',
    	'body' => 'required|max:10000'
    );


	public function setTitleAttributes($value) 
	{
		$this->attributes['title'] = $value;
		$this->attributes['slug_title'] = Str::slug($value);
	}
	public function user()
	{
		return $this->belongsTo('User');
	}
}