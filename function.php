<?php

# CREATED FUNCTION TO GET PASSWORD RANDOM
function random_password($lenght)
{
$password = '';

# STRING OF CHARACTERS
$characters = 'abcdefghilmnopqrstuvwxyzABCDEFGHILMNOPQRSTUVWXYZ0123456789!"£$%&/()=[]*+§';

# TOTAL CHARACTERS
$characters_lenght = mb_strlen($characters);
# MIN LENGHT 
$min_lenght = 6;
# CONTROL 
if(empty($lenght)) return 'Non hai inserito i caratteri minimi richiesti';
if($lenght < $min_lenght ) return "Caratteri minimi richiesti $min_lenght";


# GENERATOR PASSWORD
while(mb_strlen($password) < $lenght) {
  $random_index = rand(0, $characters_lenght - 1);

  $random_characters = $characters[$random_index];

  $password .= $random_characters;
}
session_start();
$_SESSION['password'] = $password;
return true;
}