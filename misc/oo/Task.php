<?php
  class Task {
    public $description;
    public $title;
    public $completed ;

    public function __construct($title, $description) {
      $this->title = $title;
      $this->description = $description;

      $this->completed = false;
    }

    public function complete() {
      $this->completed = true;
    }

    public function isComplete() {
      return $completed;
    }
  }

  $task = new Task('Learn OOP', 'Learning a bunch of class information');

  var_dump($task->description);
?>
