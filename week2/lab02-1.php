<?php
  // empty array for posts data
  $posts = array();

  //message data to be pushed to $posts array 
  $posts[0] = [
    'username' => 'mikey1983',
    'date' => '25/12/2017',
    'time' => '3:57pm',
    'comment' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam soluta nemo nobis?',
    'image' => '../images/guitar.jpg'
  ];
  $posts[1] = [
    'username' => 'sue_zipy',
    'date' => '5/01/2018',
    'time' => '8:13am',
    'comment' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur nemo delectus dicta!',
    'image' => '../images/barbie.jpg'
  ];
  $posts[2] = [
    'username' => 'joXyz',
    'date' => '26/02/2018',
    'time' => '11:30pm',
    'comment' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, nulla incidunt aut!',
    'image' => '../images/spiderman.jpg'
  ];
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset=utf8>
    <title>Social Posts No1</title>
    <?php include_once '../inc/head01.php' ?>
    <link rel="stylesheet" href="inc/custom.css">
  </head>
  <body>
    <div class="container mar-lg-tb">
      <div id="main" class="bx">
        <?php foreach($posts as $post): ?>
        <div class="row light mar-b">
          <div class="col-md-3">
            <img src=" <?= $post['image']; ?> " height='128'>
          </div>
          <div class="col-md-9">
            <div class="bx pad-sm pad-lg-l">
              <a href="#"><?= $post['username']; ?></a><br>
              <small class="txt-muted"><time><?= $post['date']; ?> at <?= $post['time']; ?></time></small>
              <p><?= $post['comment']; ?></p>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </body>
</html>