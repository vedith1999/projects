<?php
session_start();
if(!isset($_SESSION['email'])) {
	header('Location: index.php');
} else {
	?>
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
 <script src="js/core.js"></script>
<button onclick="userLogout();">Logout</button>
<div class="response">Test</div>
<?php
}
?>