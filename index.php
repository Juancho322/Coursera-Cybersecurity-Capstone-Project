<!-- Home page. App starts here. -->
<?php
include('config.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="assets/style.css" rel="stylesheet" title="Style" />
        <title>Home</title>
    </head>
    <body>
        <div class="content">
<?php
//We display a welcome message and, if the user is logged in, we display the username
?>

<font size=6><div align='center'>Greetings!</div></font>
<membername>
<?php
echo "<center>";
if(isset($_SESSION['username'])) {
	echo ' '.htmlentities($_SESSION['username'], ENT_QUOTES, 'UTF-8');}
echo "</center>";
?>
</membername>

<br />
<font size=5><div align='center'>This is a practical and elegant messaging system. Enjoy it.</div></font><br /><br />
<?php
//If the user is logged in, we display links to see the list of users, his/her pms and a link to log out
echo "<center>";
if (isset($_SESSION['username'])) {

	echo 'Please see here for a <a href="users.php">list of all users</a> you can send a message to.<br /><br />';

    echo '<a href="new_pm.php" class="link_new_pm">Write new message</a><br />';
echo "</center>";
	//We display the links
?>

<div align='center'><a href="mailbox.php" class="link_new_pm">Mailbox</a></div>
<br /><br />


<div align='center'><a href="logout.php">Log out</a></div>
<?php
}
else {
//Otherwise, we display a link to sign up / log in
?>
<a href="login.php">Log in</a><br />
<a href="sign_up.php">Sign up</a>
<?php
}
?>
		</div>
	</body>
</html>