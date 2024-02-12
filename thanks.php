<?php
$firstname = $_POST['user_firstname'];
$userName = $_POST['user_name'];
$userChoice = $_POST['user_choice'];
$phoneNumber = $_POST['phone_number'];
$user_email = $_POST['user_email'];
$message = $_POST['user_message']
?>


<p>
    Merci <?php echo $firstname . " " . $userName?> de nous avoir contacté à propos de <?php echo $message ?>.

    Un de nos conseillers vous contactera soit à l’adresse <?php echo $user_email?> ou par téléphone au <?php echo $phoneNumber ?> dans les plus brefs délais pour traiter votre demande :

    <?php echo $message ?>
</p>
