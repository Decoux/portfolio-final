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

< ? php 
        
        /*$myArray = array("https://github.com/Decoux/Ecommerce-Nicolas-Paul" => "img/E-commerce.png",
                        "https://github.com/Decoux/PaireGame2" => "img/Paires_game.png",
                        "https://github.com/Decoux/calculator" => "img/calaculette.png",
                        "https://github.com/Decoux/behance" => "img/behance.png",
                        "https://github.com/YesWeWeb/PBA-Amelie-Balen-Paul" => "img/pba.png",
                        "https://github.com/Decoux/pfc" => "img/PFC.png",
                        "https ://github.com/Decoux/pfc" => "img/formulaire_inscription.png"
                      );

        ?>
        <?php foreach ($myArray as $key => $value){ ?>
          <div class="col-12 col-md-7 mx-auto abs_2 parent ">
            <a href=" <?php echo $key; ?> "><img class="mx-auto orientation d-block w-100" src=" <?php echo $value ; ?> " alt="<?php echo $value; ?>"></a>
          </div>
        <?php } */ ?> 