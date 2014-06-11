<?php

class Item extends Eloquent {
	protected $guarded = array('editing');

	public static $rules = array(
		'name' => 'required',
		//'number' => 'required',
		//'checked' => 'required'
	);
}
