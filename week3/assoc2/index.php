<?php 

$error =""; // initialise blank variable to prevent error on load
$action = "?";

if(isset($_GET['submitted'])){ // check if form submitted
 
  $name = $_GET['name'];
  $year = $_GET['year'];
  $state = $_GET['state'];

  if(empty($name) && empty($year) && empty($state)){
    $error = "Error: At least one field must contain value.\n";
  } else if (!is_numeric($year) && empty(!$year)){ // check if empty or if not numeric
    $error = "Error: Year must be a number.\n";
  } else {
    $error = "";
    $action = "results.php";
    echo "there are no errors" ;
  }


  echo $error;
}

?>

<!DOCTYPE html>
<!-- Home page of PM database search example. -->
<html>
<head>
  <title>Associative array search example</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="styles/wp.css">
</head>

<body>
  <h2>Australian Prime Ministers</h2>
  <h3>Query</h3>

    <!-- ? submittes the form to itself -->
    <form method="get" action="results.php">
      <table>
        <tr>
          <td>Name: </td><td><input type="text" name="name"></td>
        </tr>
        <tr>
          <td>Year: </td><td><input type="text" name="year"></td>
        </tr>
        <tr>
          <td>State: </td><td><input type="text" name="state"></td>
        </tr>
        <tr>
          <td colspan=2><input type="submit" value="Search" name="submitted"><input type="reset" value="Reset"></td>
        </tr>
      <table>
    </form>

    <hr>
    <p>
      Source:
      <a href="show.php?file=index.html">index.html</a> 
    </p>
  </body>
  </html>
