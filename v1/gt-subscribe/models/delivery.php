<?php

namespace GT\Subscribe\Models;

class Delivery {

	public static function run( $subject, $message ) {
		$emails = self::_get_emails();
		foreach ( $emails as $email ) {
			self::_send( $email, $subject, $message );
		}
	}

	private static function _get_emails() {
		// load the emails from the database
		return $emails;
	}

	private static function _send( $email, $subject, $message ) {
		return mail( $email, $subject, $message );
	}

}