<?php

class User {
    private $email;
    private $password;
    private $userData;

    public function __construct($email, $password){
        $this->Userdata = [
            (object) [
                'username' => 'Anugrah',
                'email' => 'anugrahTADKP@gmail.com',
                'password' => '12345'
            ],
            (object) [
                'username' => 'Budi',
                'email' => 'budiTADKP@gmail.com',
                'password' => '12345'
            ]
            ];
        $this->email = $email;
        $this->password = $password;
    }
    
    protected function auth(){
        foreach($this->Userdata as $key => $value){
            if($value->email == $this->email && $value->password == $this->password){
                return $value;
            }
        }
        return false;
    }

    public function login(){
        $isUser = $this->auth();
        if($isUser){
            return $isUser;
        } else {
            return false;
        }
    }
}
?>