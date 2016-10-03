<?php
/*
Plugin Name: Additional Charsets
Plugin URI: http://github.com/josheby/yourls-additional-charsets
Description: Additional Charset Options for YOURLS
Version: 1.0
Author: Joshua Eby
Author URI: https://josheby.com/

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/

if( !defined( 'YOURLS_ABSPATH' ) ) die();

function additional_charsets($charset) {

	if ( defined('YOURLS_URL_CONVERT') && is_numeric(YOURLS_URL_CONVERT) ) {
		switch (YOURLS_URL_CONVERT) {
			case 10:
				// Numbers Only
				$charset = '0123456789';
				break;
			case 26:
				// Letters Only
				$charset = 'abcdefghijklmnopqrstuvwxyz';
				break;
			case 27:
				// No Vowels and No Leetspeak Vowels
				$charset = '256789bcdfghjklmnpqrstvwxyz';
				break;
			case 31:
				// No Vowels
				$charset = '0123456789bcdfghjklmnpqrstvwxyz';
				break;
			case 38:
				// Add "_" and "-"
				$charset = '0123456789abcdefghijklmnopqrstuvwxyz-_';
				break;
			case 48:
				// No Vowels and No Leetspeak Vowels (Mixed Case)
				$charset = '256789bcdfghjklmnpqrstvwxyzBCDFGHJKLMNPQRSTVWXYZ';
				break;
			case 52:
				// No Vowels (Mixed Case)
				$charset = '0123456789bcdfghjklmnpqrstvwxyzBCDFGHJKLMNPQRSTVWXYZ';
				break;
			case 64:
				// Add "_" and "-" (Mixed Case)
				$charset = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ-_';
				break;
		}
	} elseif ( defined('YOURLS_URL_CONVERT') && is_string(YOURLS_URL_CONVERT) ) {
		$charset = YOURLS_URL_CONVERT;
	}

	return $charset;
}
yourls_add_filter( 'get_shorturl_charset', 'additional_charsets');