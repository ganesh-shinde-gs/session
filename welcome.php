<?php
session_start();
if (isset($_SESSION['name'])) {
	echo "Welcome" . " " . $_SESSION['name'];
	echo "<br/>";
	echo "<style>
a {
  color: hotpink;
}
</style>";
	echo "<a href='destroy.php'>Logout</a>";
} else {
	header('location:index.php');
	die();
}
