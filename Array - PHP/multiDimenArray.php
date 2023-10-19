<?php

/*

Assignment 5: Multidimensional Arrays

* Create a multidimensional array to represent a simple contact list with names and email addresses.
* Add a new contact to the list.
* Display the updated contact list.

*/

// Method 1 
$usersContacts = [
    ['name' =>'yahya mahmud','email'=> 'yahya@gmail.com'],
    ['name' =>'john doe','email'=> 'johndeo@gmail.com'],
    ['name' =>'roben garcia','email'=> 'garcia@gmail.com']
];
$addUser = ['name' =>'alexndar','email'=> 'alexandar@gmail.com',];
$usersContacts[] = $addUser;

foreach ($usersContacts as $contact) {
    // echo "Name:-" . $contact['name'] . ", Email:-". $contact['email'] . PHP_EOL;
}



// method 2 array_push
$contacts = [ 
    ['name'=> 'abraham','email'=> 'abraham@x.com'],
    ['name'=> 'joseph','email'=> 'joseph@x.com']
];
$addingContact = [
    'name' =>'linkon', 'email' => 'linkon@x.com',
];

$addContact = array_push($contacts, $addingContact);
foreach ($contacts as $contact2){
    echo $contact2['name'] . " ". $contact2['email'].PHP_EOL;
}
