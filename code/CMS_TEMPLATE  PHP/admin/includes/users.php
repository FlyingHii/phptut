<?php
namespace Admin\Includes;

class Users extends \Admin\Includes\DataObject
{
    public $id;
    public $username;
    public $password;
    public $firstName;
    public $lastName;
    public $userImage;

    protected static $dbTableFields = array('username', 'password', 'first_name','last_name', 'user_image');
    protected static $mainTable = 'users';
}