<?php
$KeyGoogle = "";

function ReCaptcha() {
    global $KeyGoogle;
    ?>
    <div class = "g-recaptcha" data-sitekey ="<?=$KeyGoogle?>" >
    </div> <br/> 
    <?php
}
?>