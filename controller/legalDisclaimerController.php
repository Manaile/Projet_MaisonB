<?php
                                            /*CONTROLLER DE LA PAGE 'MENTION LEGALE'*/
ini_set('display_errors','1');
ini_set('display_startup_errors','1');
error_reporting(E_ALL);

class legalDisclaimerController{
    private $LegalDisclaimer;

    public function showLegalDisclaimer(){
       return $this->LegalDisclaimer;
    }
}
?>