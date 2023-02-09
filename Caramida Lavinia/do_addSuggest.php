<?php
//check for required fields from the form
if ((!$_POST['suggest_owner']) || (!$_POST['TypeSuggest_title'])|| (!$_POST['post_text'])) {
    header("Location: add_Suggest.html");
    exit;
}

//connect to server and select database

$conn = mysqli_connect('localhost', 'root', '', 'baza_proiect');

//create and issue in the query
$add_Suggestion = "insert into suggest_posts values ('', '$_POST[post_text]','$_POST[TypeSuggest_title]', now(), '$_POST[suggest_owner]')";

mysqli_query($conn, $add_Suggestion) or die(mysqli_error($conn));


//create nice message for user
$msg = "<P>The <strong> suggest</strong> has been created.</p>";
?>
<html>
<head>
<title>New Suggest Added</title>
</head>
<body>
<h1>New Suggest Added</h1>
<?php print $msg; ?>
</body>
</html>
