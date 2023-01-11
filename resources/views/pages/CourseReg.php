<?php

namespace App;

class CourseReg extends Model
{
	public function course()
	{
		return $this->belongsTo('App\Course');
	}
}
