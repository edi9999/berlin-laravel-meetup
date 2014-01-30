<?php

class Item extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'name' => 'required',
		//'number' => 'required',
		//'checked' => 'required'
	);

	public function getCheckedAttribute($value)
	{
		return (boolean) $value;
	}
}
