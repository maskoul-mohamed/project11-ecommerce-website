<?php

    header( "Content-type: application/json" );
    include "gestion.php";
    // Trouver tous les employés depuis la base de données 
    $gestion= new Gestion();
    $data= $gestion->getTotalProductCart();
    echo json_encode($data);
?>