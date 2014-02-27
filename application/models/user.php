<?php
class User extends CI_Model {
  private static $db;
  function __construct() {
    parent::__construct();
    self::$db = &get_instance()->db;
  }
  static function get_by_email_address($email) {
    return self::$db->where('email', $email)->get('users')->result('User');
  }
  function comments() {
    $this->load->model('comment');
    return $this->db->where('user_id', $this->id)->get('comments')->result('Comment');
  }
}