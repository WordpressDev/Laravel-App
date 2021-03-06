<?php

class OrderItem extends Eloquent
{
	public $guarded = [];

	public function order()
	{
		return $this->belongsTo('Order');
	}

	public function item()
	{
		return $this->morphTo();
	}

	public function getTotalPriceAttribute()
	{
		return $this->attributes['price'] * $this->attributes['amount'];
	}

	public function __get($key)
	{
		if ($value = parent::__get($key)) {
			return $value;
		}

		return $this->item->getAttribute($key);
	}
}