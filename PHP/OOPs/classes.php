<?php 

    class User {

        public $username;
        protected $email;
        public $role = 'member';

        public function __construct($username, $email){
            $this->username = $username;
            $this->email = $email;
        }

        public function __destruct(){
            echo "The user $this->username was removed <br>";
        }

        public function __clone(){
            $this->username = $this->username . '(cloned)<br>';
        }

        public function addFriend(){
            return "$this->username added a new friend.";
        }

        public function message(){
            return "$this->email sent a new message.";
        }

        // getters
        public function getEmail(){
            return $this->email;
        }

        // setters
        public function setEmail($email){
            if(strpos($email, '@') > -1){
                $this->email = $email;
            } else {
                echo 'That is not a valid email addess.';
            }
        }

    }

    class AdminUser extends User {

        public $level;
        public $role = 'admin';

        public function __construct($username, $email, $level){
            $this->level = $level;
            parent::__construct($username, $email);
        }

        public function message(){
            return "$this->email, an admin, sent a new message.";
        }

    }

    $userOne = new User('mario', 'mario@d-march.com');
    $userTwo = new User('luigi', 'luigi@d-march.com');
    $userThree = new AdminUser('yoshi', 'yoshi@d-march.com', 5);

    // unset($userOne);
    $userFour = clone($userOne);
    echo $userFour->username;


?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>OOP</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>

    </body>
</html>