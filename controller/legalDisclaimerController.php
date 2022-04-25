<?php
ini_set('display_errors','1');
ini_set('display_startup_errors','1');
error_reporting(E_ALL);


class legalDisclaimerController{
    private $LegalDisclaimer;

    public function showLegalDisclaimer(){
       return $this->LegalDisclaimer;
        //var_dump($blop);
    }
}
$template = 'legalDisclaimer';
?>