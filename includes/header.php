<?php
include("includes/config.php");
include("includes/classes/User.php");

/* I DON'T THINK THAT THERE IS ANY NEED TO DECLARE OTHER CLASSES IN THIS SECTION SINCE THEY'RE GOING TO BE DECLARED IN THE #mainContent ANYWAY*/

// include("includes/classes/Artist.php");
// include("includes/classes/Album.php");
// include("includes/classes/Song.php");
// include("includes/classes/Playlist.php");


//If no user is logged in, redirect the user the register page.
if(isset($_SESSION['userLoggedIn'])) {
	$userLoggedIn = new User($con, $_SESSION['userLoggedIn']);
	$username = $userLoggedIn->getUsername();
	echo "<script>userLoggedIn = '$username'</script>";
}
else {
	header("Location: register.php");
}

?>

<html>
<head>
	<title>Welcome to Slotify!</title>

	<link rel="stylesheet" type="text/css" href="assets/css/style.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="assets/js/script.js"></script>
</head>

<body>

	<div id="mainContainer">

		<div id="topContainer"> 

			<?php include("includes/navBarContainer.php"); ?>

			<div id="mainViewContainer">

				<div id="mainContent">