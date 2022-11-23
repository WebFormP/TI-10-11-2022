<?php
/*
CECI EST NOTRE CONTROLEUR FRONTAL
*/
// si il existe une variable get nommée p (on a cliqué sur un lien)
if(isset($_GET['p'])){
    // utilisation du switch
    switch($_GET['p']){
        case 'geo':
            include "geographie.php";
            break;
        case 'hist':
            include "histoire.php";
            break;
        case 'cult':
            include "culture.php";
            break;
        case 'gal':
            include 'galerie.php';
            break;
        case 'form':
            include 'contact.php';
            break;
        case 'link':
            include 'liens.php';
            break;
        default:
            include_once "home.php";
    }
// sinon pas de $_GET['p'];    
}else{
    // inclusion d'homepage une seule fois
    include_once "home.php";
}