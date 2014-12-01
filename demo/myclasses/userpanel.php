<?php
require_once '../API/qqConnectAPI.php';
require_once 'debugUtil.php';
class UserPanel {
	private $token;
	/**
	 */
	public function __construct() {
		$qc = new QC ();
		$this->token = $qc->get_access_token ();
	}
	/**
	 */
	public function buildHead() {
		if (! $this->isLoggedIn ()) {
			$this->buildLoginButtonHeader ();
		}
	}
	/**
	 */
	public function build() {
		if ($this->isLoggedIn ()) {
			$this->buildUserInfo ();
		} else {
			$this->buildLoginButton ();
		}
	}
	private function isLoggedIn() {
		return ! empty ( $this->token );
	}
	private function buildUserInfo() {
		$qc = new QC ();
		$info = $qc->get_user_info ();
		echo "<p>";
		echo "<img src=\"" . $info ['figureurl_qq_1'] . "\">";
		echo ' '.$info ["nickname"];
		echo ' <a href="oauth/logout.php">logout</a>';
		echo "</p>";
	}
	private function buildLoginButtonHeader() {
		echo <<<END_ECHO
<script type="text/javascript">
	function toQzoneLogin() {
	console.log ( "clicked" );
	window.location.replace ( "oauth/index.php" );
}
</script>
END_ECHO;
	}
	private function buildLoginButton() {
		echo <<<END_ECHO
<a href="#" onclick='toQzoneLogin()'><img src="img/qq_login.png"></a>
END_ECHO;
	}
}