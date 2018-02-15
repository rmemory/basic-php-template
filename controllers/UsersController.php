<?php

class UsersController {

  public function index() {
    // return the users view
    $users = App::get('database')->selectAll('users');

    return view ('users', ['users' => $users]);
  }

}

 ?>
