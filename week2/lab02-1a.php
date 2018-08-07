<?php

/*  
  - load posts from xml data file 
  - posts will be returned as an object
*/

  $postObj = simplexml_load_file('inc/data.xml');

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset=utf8>
  <title>Social Posts No1 xml</title>
  <?php include_once '../inc/head01.php' ?>
  <link rel="stylesheet" href="inc/custom.css">
</head>
<body>
  <div class="container mar-lg-tb">
    <div id="main" class="bx">
      <?php foreach($postObj->post as $post): ?>
        <div class="row light mar-b">
          <div class="col-md-3">
            <img src=" <?= $post->image; ?> " height='128'>
          </div>
          <div class="col-md-9">
            <div class="bx pad-sm pad-lg-l">
              <a href="#"><?= $post->username; ?></a><br>
              <small class="txt-muted"><time><?= $post->date; ?> at <?= $post->time; ?></time></small>
              <p><?= $post->message; ?></p>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</body>
</html>




