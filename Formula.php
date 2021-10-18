<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />

<title>Form Feedback </title>
</head>

<body>
<?php

// Create a form to collect data
$name = stripslashes($_REQUEST['name']);
$category = $_REQUEST['Category'];
$studentid = $_REQUEST['studentid'];
$phonenumber = stripslashes($_REQUEST['phonenumber']);

//validate the name
if (!empty($_REQUEST['name'])) {
        $name = stripslashes($_REQUEST['name']);
} else {
       $name = NULL;
       echo '<p><font> colour="red">You forgot to enter your name!</font></p>';
}

//validate the category
if (isset($_REQUEST['Category'])) {
    $item = $_REQUEST['Category'];
}else {
    $item = NULL;
    echo'<p><font> colour="red">Your forgot to choose your category!</font></p>';
}

//validate the student id
if (!empty($_REQUEST['$studentid'])) {
        $quantity = ($_REQUEST['$studentid']);
} else {
       $quantity = NULL;
       echo '<p><font> colour="red">You forgot to enter your Student Id!</font></p>';
}

//validate the phone number
if (!empty($_REQUEST['$phonenumber'])) {
        $quantity = ($_REQUEST['phonenumber']);
} else {
       $quantity = NULL;
       echo '<p><font> colour="red">You forgot to enter your Phone Number!</font></p>';
}


// Print the submitted information.
 echo "<p> You ordered <b>$name> <br/>";
 echo "<p> You ordered <b>$studentid> <br/>";


 echo "<p> Thank you for filling up this form </p>";


?>
</body>
