<?php
$contacts = [];

function addContact(array &$contacts, string $name, string $email, string $phone)
{
    $contacts[]= ['name'=>$name ,'email'=>$email, 'phone'=>$phone];
}

//display contacts//

function displayContacts(array $contacts)
{
    if(empty($contacts))
    {
        echo "no contacts available\n";
    }else{
        foreach($contacts as $contact)
        {
            echo "Name: {$contact['name']} , Email: {$contact['email']} , Phone: {$contact['phone']}";
        }
    }
}

while (true) {
    echo "\ncontact management menu \n"; 
    echo "1.Add Contact\n2.View Contacts\n3.Exit\n";
    echo "enter your choice\n"; 

    $choice = (int)readline(prompt: "Chose an option: ");

    if($choice === 1)
    {
        $name = readline("Enter Name: ");
        $email = readline("Enter Email: ");
        $phone = readline("phone: ");
        addContact($contacts,$name,$email,$phone);
        echo "$name Added Successfully.\n";
    }elseif($choice === 2)
    {
        displayContacts($contacts);
    }elseif ($choice === 3) {
        echo "Exiting...\n";
        break;
    }else{
        echo "invalid Choice. please try again .\n";
    }
}

