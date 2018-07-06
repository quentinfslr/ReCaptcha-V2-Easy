<?php
//Cles 
$KeySite = "";
$KeySecret ="";

function ReCaptcha() {
    global $KeyGoogle;
    ?>
 <script src = "https://www.google.com/recaptcha/api.js" async defer ></script>
    <div class = "g-recaptcha" data-sitekey ="<?=$KeyGoogle?>" >
    </div> <br/> 
    <?php
}
function ReCaptchaValider(){
    
}
?>