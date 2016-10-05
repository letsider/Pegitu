<?php


$connexion=mysql_pconnect(SERVER,USER,PASSWD);


        if(!$connexion){
          echo "Désolé, connexion à " . SERVER . "impossible \n";
          exit;
        }

        if(!mysql_select_db(BASE,$connexion)){
          echo "Désolé, connexion à " . BASE . "impossible \n";
          exit;
        }

        mysql_query("SET NAMES UTF8");

        mysql_select_db(BASE);?>

