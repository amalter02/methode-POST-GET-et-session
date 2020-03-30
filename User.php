<?php 
class User{
    //propriété :
    private $_nom ='malter';
    private $_mdp = '0123';

    //méthode :
    public function afficherNom(){
        echo "<p>Le nom est".$this->_nom."</p>";
    }
    public function setNom($NouveauNom){
        $this->_nom = $NouveauNom;
    }
    public function verifMpd($leNom,$leMdp){
        if($leNom == $this->_nom){
            if($leMdp == $this->_mdp){
                return true;
            }
        }

        return false;
    }
}


?>+