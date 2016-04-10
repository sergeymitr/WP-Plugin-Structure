<?php

namespace GT\Subscribe\Models;

class Display {

	public static function form( $content ) {
		return $content . <<<HTML
	<div>Here comes the subscription form</div>
HTML;
	}
}