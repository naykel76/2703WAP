<?php 
use wp\PostSeeder;
include_once 'classes/PostSeeder.php';

  $posts = PostSeeder::seed(); // return array of posts as objects

  $posts[0]->addComment('kyle', '26/12/2017', '8:27am', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.!');
  $posts[0]->addComment('luke_14', '27/12/2017', '10:07am', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, dolore!');
  $posts[0]->addComment('xTraT77', '27/12/2017', '10:30pm', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.');
  $posts[1]->addComment('franko', '05/2018', '11:47am', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas obcaecati omnis error, tempora expedita explicabo earum necessitatibus dicta, natus, quam distinctio quos rerum vitae! Neque?');
  $posts[1]->addComment('sue_zipy', '06/2018', '10:52am', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.!');
  $posts[2]->addComment('mrs.magoo', '26/02/2018', '3:30pm', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore dolore, dolorem necessitatibus, ea iure sed non voluptatem aliquam fugit.');
  $posts[2]->addComment('mrs.magoo', '26/02/2018', '3:33pm', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.!');

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset=utf8>
  <title>Social Posts No2</title>
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
                <!-- comments as associative array -->
                <p><?php $comments = $post->getComments() ?></p>
                <?php foreach($comments as $comment) : ?>
                  <p class="nm"><a href="#"><?= $comment['username']  ?></a> commented: <?= $comment['comment']  ?></p>
                  <small class="txt-muted"><time><?= $comment['date'] . " at " . $comment['time'] ?></time></small>
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


