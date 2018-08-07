<?php
/*
 * Simple example to illustrate associative arrays and queries.
 * DANGEROUS: Does not sanitise user input.
 * BAD STYLE: Does not use templates.  Interleaves PHP and HTML.
 */
  include "includes/defs.php";

  /* Get form data. */
  $name = $_GET['name'];
  $year = $_GET['year'];
  $state = $_GET['state'];

  /* Get array of pms that match query in form data. */
  $pms = search($name, $year, $state);

  $goodToGo = false; // confirms records found and no errors present
  // $error = "";

  if(empty($name) && empty($year) && empty($state)){
    $error = "Error: At least one field must contain value.\n";
  } else if (!is_numeric($year) && empty(!$year)){ // check if empty and not numeric
    $error = "Error: Year must be a number.\n";
  } else {
    $error = ""; // make sure error is blank
    $goodToGo = true;
  }

?>

<!-- display results -->
<!DOCTYPE html>
<!-- Results page of associative array search example. -->
<html>
<head>
  <title>Associative array search results page</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="styles/wp.css">
</head>

<body>
  <h2>Australian Prime Ministers</h2>

  <form method="get" action="">
    <p class="error"><?php echo $error; ?></p>
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

  <h3>Results</h3>

  <?php 
    if (count($pms) == 0 || !$goodToGo) { // check results returned and no errors
      echo "<p>No results found.</p>";
    } else { ?>
      <table class="bordered">
        <thead>
          <tr><th>No.</th><th>Name</th><th>From</th><th>To</th><th>Duration</th><th>Party</th><th>State</th></tr>
        </thead>
        <tbody>
          <?php
            foreach($pms as $pm) {
              print "<tr><td>{$pm['index']}</td><td>{$pm['name']}</td><td>{$pm['from']}</td><td>{$pm['to']}</td><td>{$pm['duration']}</td><td>{$pm['party']}</td><td>{$pm['state']}</td></tr>\n";
            }
          ?>
        </tbody>
      </table>
    <?php }
  ?>

  <p><a href="index.html">New search</a></p>

  <hr>
  <p>
    Sources:
    <a href="show.php?file=results.php">results.php</a>
    <a href="show.php?file=includes/defs.php">includes/defs.php</a>
    <a href="show.php?file=includes/pms.php">includes/pms.php</a>
  </p>

</body>
</html>
