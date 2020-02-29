<?php
if(count($_POST)>0){
    if (isset($_POST["submit_kontakt"])) {
        
        $headers = 'From: webmaster@example.com' . "\r\n".
                    "Content-type: text/html; charset=utf-8\r\n".
                    'Reply-To: webmaster@example.com' . "\r\n" .
                    'X-Mailer: PHP/' . phpversion().
                    'Content-type: text/html; charset=utf-8';
        
        $mess = "<b>Namn:</b><br>" . $_POST["name"] . "\r\n" .
                "<br><br><b>Epost:</b><br> " . $_POST["email"] . "\r\n" .
                "<br><br><b>Ämne:</b><br> " . $_POST["subject"] . "\r\n" .
                "<br><br><b>Meddelande:</b><br> " . $_POST["meassage_text"] . "\r\n";
        
        
        if(mail('info@vvlmalerifirma.se',"Kontakt",$mess,"$headers")){
            header( "Location: http://xn--mlarensollentuna-dob.se/kontakt.php?message=success" );
        }
        
    }

}

