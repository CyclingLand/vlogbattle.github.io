<?php
    $email=$_POST['email'];
    $subject = 'Stuur nu je vlog in!';
    $message = '<p>Hey,<BR>je kan nu je vlog insturen op de website.<BR>Ga naar</p>
    <a HREF=https://www.vlogbattlebreda.nl/insturen/>vlogbattlebreda.nl/insturen</a>
    <p>en vul daar de vlogende code in: bV5y5RNq </p>;'

    mail($email, $subject, $message);
?>
