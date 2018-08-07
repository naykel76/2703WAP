<!DOCTYPE html>
<html>
  <head>
    <meta charset=utf8>
    <title>Social Posts</title>
    <?php include_once '../inc/head01.php' ?>
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container">
          <div class="mr-auto">
            <a class="navbar-brand" href="#">Social Network</a>
          </div>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="#">Photos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Friends</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Login</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <div class="container mar-lg-t">
      <div class="row">
        <div id="left" class="col-md-4">
          <form id="comment" class="bx light mar-lg-b">
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" placeholder="Enter name">
            </div>
            <div class="form-group">
              <label >Enter message</label>
              <textarea class="form-control" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
        <div id="main" class="col-md-8">
          <div class="card">
            <div class="row">
              <div class="col-sm-2">
                <img class="pad-sm" src="../images/cool-superhero-purple.png" alt="cool super hero profile picture" width="100">
              </div>
              <div class="col-md-10">
                <div class="card-body">
                  <p class="txt-muted nm">01/07/18, <time>8:30pm</time></p>
                  <h5 class="card-title">Cool man Bob says: </h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate vero eligendi laudantium sed accusamus voluptates.</p>
                </div>
              </div>
            </div>
          </div>
          <hr>
          <div class="card">
            <div class="row">
              <div class="col-sm-2">
                <img class="pad-sm" src="../images/robocop-green.png" alt="robocop hero profile picture" width="100">
              </div>
              <div class="col-md-10">
                <div class="card-body">
                  <p class="txt-muted nm">04/07/18, <time>9:27am</time></p>
                  <h5 class="card-title">Robo Mike says: </h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur eius, quaerat minima! Possimus eligendi, labore!</p>
                </div>
              </div>
            </div>
          </div>
          <hr>
          <div class="card">
            <div class="row">
              <div class="col-sm-2">
                <img class="pad-sm" src="../images/smiley-hero-orange.png" alt="cool super hero profile picture" width="100">
              </div>
              <div class="col-md-10">
                <div class="card-body">
                  <p class="txt-muted nm">05/07/18, <time>9:30pm</time></p>
                  <h5 class="card-title">Smiley man Steve says: </h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur placeat, quo animi hic magni temporibus.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>