<?php
                                        /*MODEL DU CREATE POUR LE CRUD */
ini_set('display_errors','1');
ini_set('display_startup_errors','1');
error_reporting(E_ALL);

/*recupere la connexion à la bdd*/
require_once './database/Database.php';

class CreateModel extends Database{
    public function __construct(){
        parent::__construct();
    }
    public function sendAdmin(){
        //requete INSERT INTO pour remplir la bdd depuis la page admin
            $query = $this->pdo->prepare(
            '
                INSERT INTO
                admin
                (id_admin, name, email, password)
                VALUES
                (?, ?, ?, ?)
            '
        ); 
        $password= password_hash($_POST['password'],PASSWORD_DEFAULT);
        $query ->execute(
            [$_POST['id'], 
            $_POST['name'], 
            $_POST['mail'], 
            $password]);
        $send = $query->fetch(PDO::FETCH_ASSOC);
        return $send;
    }
    public function sendAdminTeam(){
        //requete INSERT INTO pour remplir la bdd depuis la page admin equipe
            $query = $this->pdo->prepare(
            '
                INSERT INTO
                about_gallery
                (id_about, url_about, name_about, profession_about, description_about)
                VALUES
                (?, ?, ?, ?, ?)
            '
        );

        $query ->execute(
            [$_POST['id'], 
            $_POST['picture'], 
            $_POST['name'], 
            $_POST['profession'],
            $_POST['description']]);
        $send = $query->fetch(PDO::FETCH_ASSOC);
        return $send;
    }
    public function sendAdminBakery(){
        //requete INSERT INTO pour remplir la bdd depuis la page admin boulangerie
            $query = $this->pdo->prepare(
            '
                INSERT INTO
                bakery_gallery
                (id_bakery, url_bakery, description_bakery)
                VALUES
                (?, ?, ?)
            '
        );
        $query ->execute(
            [$_POST['id'], 
            $_POST['picture'],
            $_POST['description']]);
        $send = $query->fetch(PDO::FETCH_ASSOC);
        return $send;
    }
    public function sendAdminPastry(){
        //requete INSERT INTO pour remplir la bdd depuis la page admin patisserie
            $query = $this->pdo->prepare(
            '
                INSERT INTO
                pastry_gallery
                (id_pastry, url_pastry, description_pastry)
                VALUES
                (?, ?, ?)
            '
        );
        $query ->execute(
            [$_POST['id'], 
            $_POST['picture'],
            $_POST['description']]);
        $send = $query->fetch(PDO::FETCH_ASSOC);
        return $send;
    }
    public function sendAdminPastryClass(){
        //requete INSERT INTO pour remplir la bdd depuis la page admin atelier
            $query = $this->pdo->prepare(
            '
                INSERT INTO
                pastryClass_gallery
                (id_pastryClass, url_pastryClass, description_pastryClass, name_pastryClass, date_pastryClass, price_pastryClass)
                VALUES
                (?, ?, ?, ?, ?, ?)
            '
        );
        $query ->execute(
            [$_POST['id'], 
            $_POST['picture'],
            $_POST['description'],
            $_POST['name'], 
            $_POST['date'],
            $_POST['price']]);
        $send = $query->fetch(PDO::FETCH_ASSOC);
        return $send;
        }
}

?>