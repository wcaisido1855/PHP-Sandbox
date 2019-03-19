<?php
    $user =['name' => 'Will', 'email' => 'test@test.com', 'age' => 35];

    setcookie('user', $user, time() + (86400 * 30)); 