<?php

    if(isset($_POST['btn-send'])){
        $Nome =     $_POST['Nome'];
        $Cognome =  $_POST['Cognome'];
        $Telefono = $_POST['Telefono'];
        $Email =    $_POST['Email'];
        $Giorno =   $_POST['Giorno'];
        $Mese =     $_POST['Mese'];
        $Anno =     $_POST['Anno'];
        $Adulti =   $_POST['Adulti'];
        $Bambini =  $_POST['Bambini'];
        $Msg =      $_POST['Msg'];

        if(empty($nome) || empty($cognome) || empty($email) || empty($adulti) || empty($bambini) || empty($msg)){
            header('location:prenotazioni.php?error');
        }
        else
        {
            $to = "eliaromano2000@gmail.com";
            $Subject = "Prenotazione presso The Spice restaurant";
            $Message = "Egregio Sig./Sig.ra".$Cognome.$Nome.". /n
            Hai prenotato presso il ristorante The Spice per il giorno ".$Giorno.$Mese.$Anno." per ".$Adulti." adulti e ".$Bambini." bambini lasciandoci il seguente messaggio: /n".$Msg."/n Verrete ricontattati per ricevere conferma presso l'indirizzo email da voi fornito o il numero di telefono";
            if(mail($Email,$Subject,$Message)){
                header("location:prenotazioni.php?success");
            }
        }
    }
    else
    {
        header("location:prenotazioni.php");
    }




?>