<?php 
  use wp\PostSeeder;
  include_once 'classes/PostSeeder.php';

  use wp\CommentSeeder;
  include_once 'classes/CommentSeeder.php';

  $posts = PostSeeder::seed(); // return array of posts as objects
  $comments = CommentSeeder::seed(); // return array of posts as objects
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset=utf8>
  <title>Social Posts No3</title>
  <?php include_once '../inc/head01.php' ?>
  <link rel="stylesheet" href="inc/custom.css">
</head>
<body>
  <div class="container mar-lg-tb">
    <div id="main" class="bx">
      <!-- posts as object -->
      <?php foreach($posts as $post): ?>
        <div id="message" class="row mar-b bdr">
          <div class="col-md-3">
            <img src="<?= $post->getImage() ?>" height="128" class="pad-sm">
          </div>
          <div class="col-md-9">
            <small class="txt-muted"><time><?= $post->getDate() . " at " . $post->getTime() ?></time></small>
            <p class="mar-sm-b"><a href="#"><?= $post->getUsername() ?></a> posted a message:</p>
            <p><?= $post->getMessage() ?></p>
            <div id="comments" class="row">
              <div class="col-12 light">
                <!-- comments as object -->
                <?php foreach($comments as $comment) : ?>
                  <p class="nm"><a href="#"><?= $comment->getUsername()  ?></a> commented: <?= $comment->getComment()  ?></p>
                  <small class="txt-muted"><time><?= $comment->getDate() . " at " . $comment->getTime() ?></time></small>
                  <hr>
                <?php endforeach ?>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</body>
</html>
