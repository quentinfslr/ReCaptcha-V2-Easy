<?php
include './ReCaptcha.php';

if (isset($_POST["Submit"])) {
    //Call function check validate
    if (ReCaptchaValidate()) {
        echo "validate";
    } else {
        echo "invalidate";
    }
}
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>ReCaptcha V2 Easy</title>  
    </head>
    <body>
        <form action="#" method="POST">
<?php ReCaptcha(); ?>
            <input type="submit" value="Submit" name="Submit" />
        </form>
    </body>
</html>