<?php

/*

  Class Description:  

*/

namespace wp;

class Comment {

  private $username;
  private $date;
  private $time;
  private $comment;

  // parameteres are passed from CommentSeeder.php
  function __construct($username, $date, $time, $comment) {
    $this->username = $username;
    $this->date = $date;
    $this->time = $time;
    $this->comment = $comment;
  }


  /* 'getClasses' (or accessors) allow access to otherwise protected variables and
  return stored values of the applicable protected member $variable */
  
  public function getUsername() {
    return $this->username;
  }

  function getDate() {
    return $this->date;
  }

  function getTime() {
    return $this->time;
  }

  public function getComment() {
    return $this->comment;
  }

}