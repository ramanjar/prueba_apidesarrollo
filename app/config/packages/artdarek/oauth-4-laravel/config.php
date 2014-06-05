<?php 

return array( 
	
	/*
	|--------------------------------------------------------------------------
	| oAuth Config
	|--------------------------------------------------------------------------
	*/

	/**
	 * Storage
	 */
	'storage' => 'Session', 

	/**
	 * Consumers
	 */
	'consumers' => array(

		/**
		 * Facebook
		 */
        'Facebook' => array(
            'client_id'     => '1441235542793984',
            'client_secret' => 'c1748966ff1c839461b6a20cfd2d7762',
            'scope'         => array(),
        ),
 
        'Google' => array(
            'client_id'     => '635729821607-cie3umuva5s0vbh3ig4b805fd9816vek.apps.googleusercontent.com',
            'client_secret' => 'JIknW7Hjj433HrRrHR_zOQVL',
            'scope'         => array('userinfo_email', 'userinfo_profile'),
        ),

    )

);