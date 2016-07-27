<?php

/**
* Exact API / oAauth
* Copyright (c) iWebDevelopment B.V. (https://www.iwebdevelopment.nl)
*
* Licensed under The MIT License
* For full copyright and license information, please see the LICENSE.txt
* Redistributions of files must retain the above copyright notice.
*
* @copyright     Copyright (c) iWebDevelopment B.V. (https://www.iwebdevelopment.nl)
* @link          https://www.iwebdevelopment.nl
* @since         01-06-2015
* @license       http://www.opensource.org/licenses/mit-license.php MIT License
*/

require_once 'ExactApi.php';
require_once 'CaseInsensitiveArray.php';
require_once 'Curl.php';

// Configuration, change these:
$apiBase 		= 'https://start.exactonline.nl/api/';
$clientId 		= '{e4268c43-12d4-411d-9d1e-fdc1bd7fe2c1}';
$clientSecret 	= 'HMeeXg75zo77';
$redirectUri 	= "http://hetwareambacht.nl/oauth_ok";
$division		= "12345";

if(isset($_GET['method'])) {
	$method = $_GET['method'];
	if($method == 'auth') {
		try {

			// Initialize ExactAPI
			$exactApi = new ExactApi('nl', $clientId, $clientSecret, $division);

			$exactApi->getOAuthClient()->setRedirectUri($redirectUri);

			if (!isset($_GET['code'])) {

				// Redirect to Auth-endpoint
				$authUrl = $exactApi->getOAuthClient()->getAuthenticationUrl();
				header('Location: ' . $authUrl, TRUE, 302);
				die('Redirect');

			} else {

				// Receive data from Token-endpoint
				$tokenResult = $exactApi->getOAuthClient()->getAccessToken($_GET['code']);
				echo 'tokenresult: '.$tokenResult;
				print_r($tokenResult);
				$exactApi->setRefreshToken($tokenResult['refresh_token']);

				// List accounts
				$response = $exactApi->sendRequest('crm/Accounts', 'get');
				var_dump($response);

				// Create account
				$response = $exactApi->sendRequest('crm/Accounts', 'post', array(
					'Status'			=>	'C',
					'IsSupplier'		=>	True,
					'Name'				=>	'iWebDevelopment B.V.',
					'AddressLine1'		=>	'Ceresstraat 1',
					'Postcode'			=>	'4811CA',
					'City'				=>	'Breda',
					'Country'			=>	'NL',
					'Email'				=>	'info@iwebdevelopment.nl',
					'Phone'				=>	'+31(0)76-7002008',
					'Website'			=>	'www.iwebdevelopment.nl'

				));
				var_dump($response);
			}
		} catch(ErrorException $e) {
			var_dump($e);
		}
	} else {
		if(file_exists('set.json')) {
			$credentials = json_decode(file_get_contents('set.json'));
			$curl  = new \Curl\Curl();
			$curl->setHeader('Authorization', 'Bearer ' . $credentials->access_token);
			$curl->get($apiBase . 'v1/current/Me');
			if($curl->error == false) {
				print_r($curl->response);
				die;
			} else {
				if($curl->errorCode == '401') {
					header('Location: '.$redirectUri.'?method=auth');
				} else {
					echo $curl->errorCode . ' : '. $curl->errorMessage;
				}
			}
		}
	}
}


if(isset($_GET['code'])) {
	$code = $_GET['code'];

	$curl  = new \Curl\Curl();
	$curl->setOpt(CURLOPT_FOLLOWLOCATION, true);
	$curl->post($apiBase . 'oauth2/token', array(
		'code' => $code,
		'redirect_uri' => $redirectUri,
		'grant_type' => 'authorization_code',
		'client_id' => $clientId,
		'client_secret' => $clientSecret
	));
	$a = 1;
	if($curl->error == false) {
		$credentials = json_decode($curl->rawResponse);
		file_put_contents('set.json', json_encode($credentials));
	}
}

