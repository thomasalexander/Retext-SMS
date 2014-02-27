<?php
$this->load->model('user');

$user = User::get_by_email_address('tmaynar1@gmail.com');

echo "<h2>Comments by $user->name</h2>";

foreach ($user->comments() as $comment) {

echo "<p>$comment->body</p>";

$this->load->view('welcome',$data);
}