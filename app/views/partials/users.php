<h1>All Users</h1>

<?php foreach ($users as $user) : ?>
  <li><?= $user->names; ?></li>

<?php endforeach; ?>

<!-- name submission -->
<h1>Submit your name</h1>
<!-- Submit a name, trigger a controller, and fetch data -->
<!-- Note that "GET" methods will modify the url, to look something
     like this when the user presses the Submit button:

     http://rm.local/names?name=gasg

     But, we want submissions to occur via post operations
     instead of get operations.
-->
<!--form method="GET" action="/names"-->
<form method="POST" action="/users">
  <!-- Always include the "name" attribute to input, otherwise
       it won't submit. When pressing the submit button, it
      creates a url that looks like this:
      http://rm.local/names?name=asdf
     -->
  <input name="name"></input>
  <button type="submit">Submit</button>
</form>
