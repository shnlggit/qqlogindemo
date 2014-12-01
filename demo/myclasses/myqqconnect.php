<?php
require_once '../../API/qqConnectAPI.php';
class MyQC extends QC {
	/**
	 *
	 * @param string $access_token        	
	 * @param string $openid        	
	 */
	public function __construct($access_token = "", $openid = "") {
		parent::__construct ( $access_token, $openid );
	}
	/**
	 */
	public function logout() {
		$rec = $this->recorder;
		$rec->delete ( "access_token" );
		$rec->delete ( "openid" );
	}
}
