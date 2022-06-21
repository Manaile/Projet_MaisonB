<?php
                                        /*MODEL DE LA PAGE 'QUI SOMMES NOUS' */
ini_set('display_errors','1');
ini_set('display_startup_errors','1');
error_reporting(E_ALL);

/*recupere la connexion à la bdd*/
require_once './database/Database.php'; 

class AboutUsModel extends Database{
    public function __construct(){
        parent::__construct();
    }
    public function getAboutUsImg(): array{
        //petite requête sympatoche pour récuperer url,nom,description et poste de l'équipe.
        $query = $this->pdo->prepare
        (
            'SELECT url_about,
            description_about,
            name_about,
            profession_about
            FROM about_gallery'
        );

        $query->execute();
        $AboutUsImg = $query->fetchAll(PDO::FETCH_ASSOC);
        return $AboutUsImg;
        //on récupère tt ce petit beau monde dans notre variable..
    }
   
}

?>