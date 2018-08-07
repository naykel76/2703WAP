<?php

/*

  Class Description:  Post class for initial user posts.

*/

namespace wp;

class Post {

  // member variables for post data
  protected $username;
  protected $date;
  protected $time;
  protected $message;
  protected $image;
  protected $comments;

  // constructor class, called when class is instantiated
  function __construct($username, $date, $time, $message, $image) {
    $this->username = $username;
    $this->date     = $date;
    $this->time     = $time;
    $this->message  = $message;
    $this->image    = $image;
    $this->comments = []; // initialise empty array for user comments
  }

  /* 'getClasses' (or accessors) allow access to otherwise protected variables and
  return stored values of the applicable protected member $variable */

  function getUsername() {
    return $this->username;
  }

  function getDate() {
    return $this->date;
  }

  function getTime() {
    return $this->time;
  }

  function getMessage() {
    return $this->message;
  }

  function getImage() {
    return $this->image;
  } 


  /* 
    function to add comments to associative $comments array. Data manually 
    created in the lab02-2.php file.
    $posts[index]->addComment('username', 'date', 'time', 'comment');
  */

  function addComment($username, $date, $time, $comment) {
  // append the 'new associative array with comments' data to the end of 'comments array'
    $this->comments[] = [
      'username' => $username,
      'date'     => $date,
      'time'     => $time,
      'comment'  => $comment
    ];
  }

  function getComments() {
    return $this->comments;
  } 


  /* function to add comments as objects*/
  // get comments from Comment.php
  function addComment2($username, $comment) {
    // where is the source of this data? How is it associated with the appropiate data?
  }

  function getComments2() {
    return $this->comments;
  } 


}