<?php
if(count($_POST)>0){
    


if (isset($_POST["submit_mail"])) {
    $name = $_POST['name'] ;
    $email = $_POST['email'] ;
    $telephone = $_POST['telephone'] ;
    $assignment = $_POST['uppdraget'] ;
    $address= $_POST['adress'] ;
    $estate = $_POST['fastighet'] ;
    $painting_type = $_POST['målas'] ;
    $decorating = $_POST['tapetsering'] ;
    $painting = $_POST['storlek'] ;
    $size= $_POST['påbörjas'] ;
    $start_work = $_POST['avdrag'];
    $message = $_POST['subject'] ;
    
    $mess ="<br><b>Namn:</b><br> " . $name . "\r\n" .
            "<br><br><b>E-post:</b><br> " . $email . "\r\n" .
            "<br><br><b>Telefonnummer:</b><br> " . $telephone . "\r\n" .
            "<br><br><b>Uppdraget ska utföras åt:</b><br> " . $assignment . "\r\n" .
            "<br><br><b>Adress:</b><br> " . $address . "\r\n" .
            "<br><br><b>Typ av fastighet?</b><br> " . $estate . "\r\n" .
            "<br><br><b>Vad ska målas/tapetseras?</b><br> " . $painting_type . "\r\n" .
            "<br><br><b>Typ av målning/tapetsering önskas?</b><br> " . $decorating . "\r\n" .
            "<br><br><b>Vilken storlek kommer projektet att ha?</b><br> " . $painting . "\r\n" .
            "<br><br><b>När ska uppdraget påbörjas:</b><br> " . $size. "\r\n" .
            "<br><br><b>ROT avdrag</b><br> " . $start_work. "\r\n" .
            "<br><br><b>Beskriv uppdraget: " . $message ;

    $headers = 'From: webmaster@example.com' . "\r\n".
        "Content-type: text/html; charset=utf-8\r\n".
        'Reply-To: webmaster@example.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    if(mail('info@vvlmalerifirma.se',"Offert",$mess,"$headers")){
         header( "Location: http://xn--mlarensollentuna-dob.se/index.html" );
    }
    
}

    
}
?>

