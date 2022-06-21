<?php
                                        /*MODEL DE LA PAGE 'NOUS CONTACTER' */
ini_set('display_errors','1');
ini_set('display_startup_errors','1');
error_reporting(E_ALL);

/*recupere la connexion à la bdd*/
require_once './database/Database.php';

class ContactUsModel extends Database{
    public function __construct(){
        parent::__construct();
    }
    public function sendContactUs(){
        //the requête INSERT! on envoie les données remplis dans les input dans la bdd
        //si le user fait le choix 2 on envoie vers la bonne table et bien evidemment il doit tout remplir les champs!
        if(!empty($_POST) && $_POST['choice']=="2"){
            $query = $this->pdo->prepare(
            '
                INSERT INTO
                contact
                (nameContact, phoneContact, mailContact, messageContact)
                VALUES
                (?, ?, ?, ?)
            '
        );

            $query ->execute(
                [$_POST['name'], 
                $_POST['phone'], 
                $_POST['mail'], 
                $_POST['message']]);
            $send = $query->fetch(PDO::FETCH_ASSOC);
            return $send; //on enferme tout cela dans la variable $send
        }
        //par contre si l'user fait le choix 1 et qu'il rempli toujours ts les champs on envoie vers the good table
        else if(!empty($_POST) && $_POST['choice']=="1"){
            $query = $this->pdo->prepare(
                '
                    INSERT INTO
                    reviews
                    (nameReviews, phoneReviews, mailReviews, messageReviews)
                    VALUES
                    (?, ?, ?, ?)
                '
            );

            $query ->execute(
                [$_POST['name'], 
                $_POST['phone'], 
                $_POST['mail'], 
                $_POST['message']]);
            $send = $query->fetch(PDO::FETCH_ASSOC);
            return $send; //on enferme tout cela dans la variable $send
        }
        //si l'user croit nous avoir sans remplir ce qu'on lui demande..bah c'est pas bon mon coco petit message d'alert
        else if(!empty($_POST) && $_POST['choice']=="0"){
            return  "Merci d'indiquer l'objet de votre demande.";
        }

    }
   
}

?>