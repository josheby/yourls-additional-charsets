Additional Charsets for YOURLS
====================

Plugin for [YOURLS](http://yourls.org) `1.7`. 

Description
-----------
This plugin adds additional charset options that can be selected from config.php by setting the
YOURLS_URL_CONVERT constant to different values.  It allow allow you to provide a string as the
constant value that will be used as the charset.

Installation
------------
1. In `/user/plugins`, create a new folder named `advanced-reserved-urls`.
2. Drop these files in that directory.
3. Go to the Plugins administration page ( *eg* `http://sho.rt/admin/plugins.php` ) and activate the plugin.
4. Change YOURLS_URL_CONVERT value in config.php to select the charset you want.

Additional Charset Options
--------------------------
    case 10:
        // Numbers Only
        $charset = '0123456789';
        
    case 26:
        // Letters Only
        $charset = 'abcdefghijklmnopqrstuvwxyz';
        
    case 27:
        // No Vowels and No Leetspeak Vowels
        $charset = '256789bcdfghjklmnpqrstvwxyz';
        
    case 31:
        // No Vowels
        $charset = '0123456789bcdfghjklmnpqrstvwxyz';

    case 38:
        // Add "_" and "-"
        $charset = '0123456789abcdefghijklmnopqrstuvwxyz-_';
        
    case 48:
        // No Vowels and No Leetspeak Vowels (Mixed Case)
        $charset = '256789bcdfghjklmnpqrstvwxyzBCDFGHJKLMNPQRSTVWXYZ';
        
    case 52:
        // No Vowels (Mixed Case)
        $charset = '0123456789bcdfghjklmnpqrstvwxyzBCDFGHJKLMNPQRSTVWXYZ';
        
    case 64:
        // Add "_" and "-" (Mixed Case)
        $charset = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ-_';

Custom Charset
--------------
Do you want yo use your own custom charset? Simply supply a string value to the YOURLS_URL_CONVERT constant.
Keep in mind that some characters are considerd reserved for URL use so this should be done with caution.

To quote section 2.3 of RFC 3986:  (http://www.ietf.org/rfc/rfc3986.txt)
"Characters that are allowed in a URI but do not have a reserved purpose are called unreserved.
These include uppercase and lowercase letters, decimal digits, hyphen, period, underscore, and tilde."

License
-------
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