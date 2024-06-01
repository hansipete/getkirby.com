<?php

use Kirby\Cms\Page;

class ReleaseGuidePage extends Page
{
	public function menuUrl(): string
	{
		return $this->link()->or($this->url())->value();
	}

	public function release()
	{
		return $this->parents()->not('releases')->last();
	}
}
