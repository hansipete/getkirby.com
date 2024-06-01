<?php

use Kirby\Cms\Page;

class ThemePage extends Page
{
	public function menuUrl(): string
	{
		return $this->link()->value();
	}

	public function prio()
	{
		return parent::prio()->or(9999);
	}
}
