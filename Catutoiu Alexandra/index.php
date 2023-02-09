<?php
//check for required fields from the form
if ((!$_POST['subscribe'])) {
    header("Location: index.html");
    exit;
}

//connect to server and select database

$conn = mysqli_connect('localhost', 'root', '', 'Subscribers');

//create and issue the first query
$add_subscriber = "insert into Subscribers values ('', '$_POST[subscribe]')";

mysqli_query($conn, $add_subscriber) or die(mysqli_error($conn));


//create nice message for user
$msg = "<P>The <strong>subscription</strong> has been sent.</p>";
?>
<html>
<head>
<title>You are now subscribed</title>
</head>
<body>
<h1>You are now subscribed!</h1>
<?php print $msg; ?>
</body>
</html>