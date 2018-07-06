<?php
//Cles 
$KeySite = "";
$KeySecret = "";

function ReCaptcha() {
    global $KeySite;
    ?>
    <script src = "https://www.google.com/recaptcha/api.js" async defer ></script>
    <div class = "g-recaptcha" data-sitekey ="<?= $KeySite ?>" >
    </div> <br/> 
    <?php
}

function ReCaptchaValider() {
    global $KeySecret;

    //Parameter returned by the recaptcha
    $Reply = $_POST['g-recaptcha-response'];
    //We recover the IP
    $remoteip = $_SERVER['REMOTE_ADDR'];
    

    $api_url = "https://www.google.com/recaptcha/api/siteverify?secret=".$KeySecret. "&response=".$Reply."&remoteip=".$remoteip;
    $decode = json_decode(file_get_contents($api_url), true);

    //Check Reply
    if ($decode['success'] == true)
        return true;
     else 
        return false;
 
}
?>