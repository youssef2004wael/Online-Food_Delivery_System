<?php 
Class User{
    // attributes of the class
    private $id;
    private $first_name;
    private $last_name;
    private $Email;
    private $Password;
    // the constructor
    // public function __construct($id,$first_name,$last_name,$Email,$Password){
        
    // }
    public Function Greetings(){
        echo "Hello test";
        echo PHP_EOL;
    }
    
}

$hell = new User();
$hell->Greetings();
