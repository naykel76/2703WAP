<?php

/*   

  Class Description: Initial user message data objects (sample data).

  - Each $post is a new instance (object) of 'Post' 
  - Each $post object is pushed to the the last position of the $posts array.
  - PostSeeder::seed(); is a static method to generate sample posts.

 */

namespace wp;
use wp\Post;

include_once 'Post.php';

class PostSeeder {

  public static function seed() {
    // empty array waiting for posts
    $posts = [];

    // post data objects pushing to the end of the $posts array
    $posts[] = new Post(
      'mikey1983',
      '25/12/2017',
      '3:57pm',
      'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus molestias quas dolorem, quos illo fuga. Voluptates minima tempora illo, distinctio!',
      '../images/guitar.jpg'
    );

    $posts[] = new Post(
      'sue_zipy',
      '5/01/2018',
      '8:13am',
      'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur nemo delectus dicta!',
      '../images/barbie.jpg'
    );

    $posts[] = new Post(
      'joXyz',
      '26/02/2018',
      '11:30pm',
      'Ipsam neque aspernatur consectetur, voluptate consequatur maiores ullam porro, dolores rerum veniam beatae minus itaque autem temporibus repellendus at sit. Quidem assumenda ipsa aspernatur, et odio placeat maxime officia, dignissimos consequatur, consectetur, minima ut vel illum omnis eligendi atque recusandae.',
      '../images/spiderman.jpg'
    );

    return $posts;
  }

}