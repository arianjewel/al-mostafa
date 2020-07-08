<?php // Code within app\Helpers\Helper.php

namespace App\Helpers;
use Request;

class Helper
{
	/**
	 * Get either a Gravatar URL or complete image tag for a specified email address.
	 *
	 * @param string $email The email address
	 * @param string $s Size in pixels, defaults to 80px [ 1 - 2048 ]
	 * @param string $d Default imageset to use [ 404 | mp | identicon | monsterid | wavatar ]
	 * @param string $r Maximum rating (inclusive) [ g | pg | r | x ]
	 * @param boole $img True to return a complete IMG tag False for just the URL
	 * @param array $atts Optional, additional key/value attributes to include in the IMG tag
	 * @return String containing either just a URL or a complete image tag
	 * @source https://gravatar.com/site/implement/images/php/
	 */
	public static function get_gravatar( $email, $s = 80, $d = 'mp', $r = 'g', $img = false, $atts = array() ) {
	    $url = 'https://www.gravatar.com/avatar/';
	    $url .= md5( strtolower( trim( $email ) ) );
	    $url .= "?s=$s&d=$d&r=$r";
	    if ( $img ) {
	        $url = '<img src="' . $url . '"';
	        foreach ( $atts as $key => $val )
	            $url .= ' ' . $key . '="' . $val . '"';
	        $url .= ' />';
	    }
	    return $url;
	}

    /**
     *
     * Set active css class if the specific URI is current URI by fragments.
     *
     * @param string $path          A specific URI
     * @param string $class_name    Css class name, optional
     * @return string               Css class name if it's current URI,
     *                              otherwise - empty string
     */
    public static function setActiveBySegments(string $path, string $class_name = "active")
    {
        // $request_path = implode('/', Request::segments());
        
        // return $request_path === basename($path) ? $class_name : "";
    }

}