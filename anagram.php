<?php
$liste = fopen("liste.txt","r");



foreach($liste as $line)//J'AVAIS UTILISÉ FILE() PLUS HAUT, CELA NE MARCHE QU'AVEC LES ENTIER ET PAS AVEC LES STRING J'AIMERAIS SAVOIR POURQUOI
{
    
    if($line == "a")
    {
        echo "oui";
        
    }
   
}

