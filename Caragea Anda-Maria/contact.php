
<?php
//check for required fields from the form
if ((!$_POST['name']) || (!$_POST['email'])|| (!$_POST['message'])) {
    header("Location: contact.html");
    exit;
}

//connect to server and select database

$conn = mysqli_connect('localhost', 'root', '', 'proiect');

//create and issue the first query
$add_contact = "insert into contact values ('', '$_POST[name]', '$_POST[email]', '$_POST[message]')";

mysqli_query($conn, $add_contact) or die(mysqli_error($conn));


//create nice message for user
$msg = "<P>The <strong>message</strong> has been sent.</p>";
?>
<html>
<head>
<title>New Message Added</title>
</head>
<body>
<h1>New Message Added</h1>
<?php print $msg; ?>
</body>
</html>