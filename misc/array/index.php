<?php

// Arrays
// http://php.net/manual/en/language.types.array.php

class Post {
  public $title;
  public $published;

  public function __construct($title, $published) {
    $this->title = $title;
    $this->published = $published;
  }
}

$posts = [
  new Post('My First Post', true),
  new Post('My Second Post', true),
  new Post('My Third Post', true),
  new Post('My Fourth Post', false)
];

/*
array_filter
http://php.net/manual/en/function.array-filter.php
*/
// Find all unpublished posts
// Always returns an array. Stated differently, the
// boolean returned from the callback function determines
// whether the original $post object is included in the array
// returned in the $unpublishedPosts var. The original $post
// object isn't modified in any way, the filter just
// determines whehther its included in that returned array
// or not.
$unpublishedPosts = array_filter($posts, function ($post) {
  return ! $post->published;
});

var_dump($unpublishedPosts);

/*
array_map
http://php.net/manual/en/function.array-map.php
*/
// Transform posts (notice the reverse arg order)
// Always returns an array
// It could be something totally different, like strings
$modified = array_map(function ($post) {
  return 'foobar';
}, $posts);

var_dump($modified);

$modified = array_map(function ($post) {

  // It could transform (modify) public (not protected)
  // fields in the post object
  $post->published = true;
  return $post;
}, $posts);
var_dump($modified);

// But the above could be handled with a simple for loop
// without using array_map
foreach ($posts as $post) {
  $post->published = true;
}
var_dump($modified);

// Array map is most useful when you have to modify what
// gets returned. This next one returns each post object
// in its own array of one, or an array of arrays. In other
// words, in this case, $modified will be a collection of
// arrays and not a collection of Post objects

$modified = array_map(function ($post) {
  return (array)$post;
}, $posts);
var_dump($modified);

// Or I could even return an array of associative arrays like this
$modified = array_map(function ($post) {
  return ['title' => $post->title];
}, $posts);
var_dump($modified);

// The following will cause the entire $posts array to be
// iteratively replaced with an array of single entry arrays
// Note the usage of the implied $index var.
foreach ($posts as $index => $post) {
  $posts[$index]=(array)$post;
}
var_dump($posts);

// But the same thing is much more effectively accomplished with
// array_map
$posts = array_map(function ($post) {
  return (array)$post;
}, $posts);
var_dump($posts);

/*
array_column
http://php.net/manual/en/function.array-column.php
*/

// The first example will show how array_map could be used
// to do the same thing as array_map, but in a not as
// convienent way. Here we want to return an array of
// the post titles.

$titles = array_map(function ($post) {
  return $post->title;
}, $posts);
var_dump($titles);

// It is better to use array_column here.
// array_column(<array_obj>, <key_or_name_of_public_property>)
// Note that 'title' must be a public scope class var.
// In other words, this will return a new array of all of the
// title strings from the $posts array (no longer in post
// objects)
$titles = array_column($posts, 'title');
var_dump($titles);

// We can add a third argument to array_column, which does
// the same thing as the previous step, but now it returns
// an associative array where in this case, the $published
// field is the key, and the title is the value. Yes, the
// 'key' is the third arg, and the 'value' is the second arg.
$titles = array_column($posts, 'title' ,'published');
var_dump($titles);

 ?>
