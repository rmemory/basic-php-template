<?php
  /*
    Receives a request, gather information, delegate response
    Receive request
    Delegate, possibly by getting information from database
    Return a response
  */
  class PagesController {
    public function home() {
      // The primary database object is created by the top level index.php
      // But the interaction with the database occurs here in the
      // controller
      extract($this->getDataFromDatabase());

      return view('index', [
        'tasks' => $tasks,
        'users' => $users
      ]);

    }

    public function about() {
      $my_name="Richard Memory";
      return view('about', ['my_name' => $my_name]);
    }

    public function contact() {
      return view('contact');
    }

    public function about_culture() {
      return view('about-culture');
    }

    public function add_names() {
      /*
      var_dump($_SERVER);

      The following will return the "values".

      names?name=gasg

      $_REQUEST will return 'name' => gasg

      consequently, $_REQUEST['name'] will return gasg

      $_GET would return 'name' => gasg

      And from http://rm.local/names?name=gasg&age=30

      $_REQUEST['name'] would return 30

      But, we don't want to do any of the above, because we will be using
      POST operations instead of GET operations
      */
      //var_dump($_GET['name']);

      // var_dump("You typed: " . $_POST['name']);

      // Now we need to add it to the $database
      // var_dump($app['database']);

      //Need to add a new method to add stuff to the database in
      // QueryBuilder

      // $app['database']->insert('users', [
      //   'names' => $_POST['name']
      // ]);

      App::get('database')->insert('users', [
        'names' => $_POST['name']
      ]);

      extract($this->getDataFromDatabase());
      /*
        After adding the name to the database, redirect back to the
        main page
      */
      /*
        After the post operation, we want to display the main
        page
      */
      header('Location: /');
      // return view('index');
    }

    protected function getDataFromDatabase() {
      // $tasks = $app['database']->selectAll('todos');
      $tasks = App::get('database')->selectAll('todos');

      // Get all user names currently in database
      // $users = $app['database']->selectAll('users');
      $users = App::get('database')->selectAll('users');

      return [
        'tasks' => $tasks,
        'users' => $users
      ];

    }

  }
 ?>
