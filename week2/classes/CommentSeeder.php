<?php

/*   

  Class Description: User comment data objects (sample data).

  - Each $comment is a new instance (object) of 'Comment' 
 
  ??? how is the comment applied to the appropiate post??? $post[0], $post[1], $post[2]?

 */

namespace wp;
use wp\Comment;

include_once 'Comment.php';

class CommentSeeder {


  public static function seed() {
  
    $comments = []; // empty comments array

    // comment data objects pushed to the end of the $comments array
    $comments[] = new Comment(
      'kyle',
      '26/12/2017',
      '8:27am',
      'Lorem ipsum dolor sit amet, consectetur adipisicing elit.!'
    );

    $comments[] = new Comment(
      'luke_14',
      '27/12/2017',
      '10:07am',
      'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, dolore!'
    );

    $comments[] = new Comment(
      'xTraT77',
      '27/12/2017',
      '10:30pm',
      'Lorem ipsum dolor sit amet, consectetur adipisicing elit.'
    );

    $comments[] = new Comment(
      'franko',
      '05/2018',
      '11:47am',
      'Lorem ipsum dolor sit amet,consectetur adipisicing elit. Quas obcaecati omnis error,tempora expedita explicabo earum necessitatibus dicta,natus,quam distinctio quos rerum vitae! Neque?'
    );

    $comments[] = new Comment(
      'sue_zipy',
      '06/2018',
      '10:52am',
      'Lorem ipsum dolor sit amet,consectetur adipisicing elit.!'
    );

    $comments[] = new Comment(
      'mrs.magoo',
      '26/02/2018',
      '3:30pm',
      'Lorem ipsum dolor sit amet,consectetur adipisicing elit. Labore dolore,dolorem necessitatibus,ea iure sed non voluptatem aliquam fugit.'
    );

    $comments[] = new Comment(
      'mrs.magoo',
      '26/02/2018',
      '3:33pm',
      'Lorem ipsum dolor sit amet, consectetur adipisicing elit.!'
    );

    return $comments;
  }

}



