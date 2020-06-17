<?php

    if(isset($_POST['btn-send'])){
        $UserName = $_POST['UName'];
        $Email = $_POST['Email'];
        $Subject = $_POST['Subject'];
        $Msg = $_POST['Msg'];
        

        if(empty($UserName) || empty($Email) || empty($Subject) || empty($Msg)){
            header('location:index.php?error');
        }
        else
        {
            $to = "eliaromano2000@gmail.com";
            $Subject = "Prenotazione presso The Spice restaurant";
            $Message = "Egregio Sig./Sig.ra".$Cognome.$Nome.". /n
            Hai prenotato presso il ristorante The Spice per il giorno ".$Giorno.$Mese.$Anno." per ".$Adulti." adulti e ".$Bambini." bambini lasciandoci il seguente messaggio: /n".$Msg."/n Verrete ricontattati per ricevere conferma presso l'indirizzo email da voi fornito o il numero di telefono";
            if(mail($Email,$Subject,$Message)){
                header("location:index.php?success");
            }
        }
    }
    else
    {
        header("location:index.php");
    }




?>