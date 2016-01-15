<?php

class Post extends BaseModel
{
    protected $table = 'posts';

    protected $fillable = array('subject', 'body');

    public static $rules = array(
    	'subject' => 'required|min:5|max:100',
    	'body' => 'required|max:10000'
    );


	public function setSubjectAttribute($value) 
	{
		$this->attributes['subject'] = $value;
		$this->attributes['slug_title'] = uniqid() . '' . Str::slug($value);
	}
	public function user()
	{
		return $this->belongsTo('user');
	}
	public function categories()
	{
		return $this->belongToMany('Category');
	}
}