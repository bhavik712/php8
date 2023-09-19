<?php

class User{
    public function profile(){
        return null;
    }
}

class Profile{
    public function role(){
        return 'Laravel Developer';
    } 
}


$user = new User;
//user profile is null so will return the default value
echo $user->profile()?->role() ?? 'Unemployed';

?>