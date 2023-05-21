<?php
class Users
{
  private $no_hp;
  private $password;

  function set_login_data($no_hp, $password)
  {
    $this->no_hp = $no_hp;
    $this->password = $password;
  }

  function get_no_hp()
  {
    return $this->no_hp;
  }

  function get_password()
  {
    return $this->password;
  }

  function set_profile_data()
  {

  }

}

?>