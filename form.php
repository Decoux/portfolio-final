<?php 

include 'connect_bdd.php';
//Security
$name = htmlspecialchars($_POST['name']);
$mail = htmlspecialchars($_POST['mail']);
$description = htmlspecialchars($_POST['description']);
$message = htmlspecialchars($_POST['message']);

//security
if (isset($name) && isset($mail) && isset($description) && isset($message)){
    if (empty($name) && empty($mail) && empty($description) && empty($message)){
        if (preg_match("#^[a-z0-9-._]+@[a-z0-9-._]{2,}\.[a-z]{2,4}$#", $mail)){
            $req = $bdd->prepare('INSERT INTO portfolio(name, mail, description, message) VALUES (:name, :mail, :description, :message)');

            $req->execute(array(
                'name' => $name,
                'mail' => $mail,
                'description' => $description,
                'message' => $message
            ));
        }
    }
}