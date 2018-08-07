<!DOCTYPE html>
<!-- Home page for basic factorisation example. -->
<html>
<head>
  <title>Factorisation form</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="styles/wp.css">
  <?php include_once '../../inc/head02.php' ?>
</head>

<body>
  <div class="container mar-lg-t">
    <div class="flex-row">
      <div class="col-md-4">
        <h1>Factorisation</h1>
        <div class="bx primary">

          <form class="frm" method="get" action="factorise.php">
            <p><input type="text" name="number" placeholder="enter number to factorise"></p>
            <p><input type="submit" value="Factorise it!"></p>
          </form>
          
        </div>
      </div>
    </div>
  </div>
</body>
</html>

