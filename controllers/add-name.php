<?php
// var_dump($_SERVER);
/*
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

$app['database']->insert('users', [
  'names' => $_POST['name']
]);

/*
  After adding the name to the database, redirect back to the
  main page
*/
header('Location: /');

?>
