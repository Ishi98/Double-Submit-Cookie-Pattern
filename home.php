<?php

require_once 'token.php';

$val = $_POST["token"];

if(isset($_POST['updatepost'])){
	if(token::checkToken($val,$_COOKIE['csrfTokenCookie'])) {
            echo '<script language="javascript">'; 
	    echo 'alert("CSRF token matched. Server request has been accepted!")';
            echo '</script>';
	}else {
 	    echo '<script language="javascript">';
	    echo 'alert("Server Request Failed, Unauthorized Request!")';
	    echo '</script>';
	}
}
?>
