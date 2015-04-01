<?php

class Post extends Eloquent {
	public function comments()
	{
		return $this->hasMany('Comment');
	}

	public function getNumCommentsStr()
	{
		$num = $this->comments()->count();

		if($num == 1)
		{
			return '1 comment';
		}

		return $num.' comments';
	}
}