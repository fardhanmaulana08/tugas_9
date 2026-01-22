<?php
    class User {
        private $username;

        public function setUsername($username) {
            $this->username = $username;
        }

        public function getUsername() {
            return $this->username;
        }
    }

    $user = new User();
    $user->setUsername("john_doe");
    echo "Username: " . $user->getUsername() . "\n";
    $user->setUsername("jane_doe");
    echo "Username setelah diubah: " . $user->getUsername();
?>
