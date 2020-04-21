<?php
  if (isset($_POST['submit'])) {
    $nome = $_POST['name'];
    $mailFrom = $_POST['mail'];
    $oggetto = $_POST['oggetto'];
    $messaggio = $_POST['messaggio'];

    $mailTo = "matt.past@virgilio.it";
    $headers = "From: ".$mailFrom;
    $txt = "Hai ricevuto un'e-mail da ".$nome.".\n\n".$messaggio;

    mail($mailTo, $oggetto, $txt, $headers);
    header("Location: Contattami.html?mailsend");
  }
