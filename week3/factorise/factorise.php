<?php
  /*
   * Script to print the prime factors of a single positive integer
   * sent from a form.
   * BAD STYLE: Does not use templates.
   */
  include "includes/defs.php";

  # Set $number to the value entered in the form.
  $number = $_GET['number'];

  // check for errors
  if (empty($number)) {
    $error = "Error: Missing value $number\n";
  } else if (!is_numeric($number)) {
    $error = "Error: Nonnumeric value: $number\n";
  } else if ($number < 2 || $number != strval(intval($number))) {
    $error = "Error: Invalid number: $number\n";
  } else {
    $error = "";
  }

  if (!$error){
    # Set $factors to the array of factors of $number.
    $factors = factors($number);
    # Set $factors to a single dot-separated string of numbers in the array.
    $factors = join(" . ", $factors);
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Factors</title>
    <meta charset="utf-8">
    <?php include_once '../../inc/head02.php' ?>
    <link rel="stylesheet" type="text/css" href="styles/wp.css">
  </head>
  
  <body>

    <div class="container mar-lg-t">
      <h1>Factorisation</h1>
      <p><?php if(!$error){echo "$number = $factors"; } ?></p>
      <hr>
    </div>

    <div class="container mar-t">
      <div class="error txt-red mar-b"><?= $error ?></div>
      <div class="flex-row">
        <div class="col-md-4">
          <div class="bx secondary">
            <div class="bx-title">Another Factorisation</div>

            <!-- Resubmit new number  -->
            <form action="" class="frm">
                <p><input type="text" name="number" value="<?= $number ?>"></p>
                <p><input type="submit" value="Factorise it!"></p>
            </form>

          </div>
        </div>
      </div>
    </div>

  </body>
</html>