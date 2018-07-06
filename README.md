# ReCaptcha-V2-Easy
Tool pour intégrer ReCaptcha facilement dans un site web

# Installation

 

Télécharger le fichier ReCaptcha.php dans votre projet. Modifier le  fichier ReCaptcha.php en ajoutant vos clés ([obtenir les    clés](https://www.google.com/recaptcha/admin#list))

    $KeySite = "";
    $KeySecret = "";

# Utilisation 
 Inclure le fichier **ReCaptcha.php**  dans la page où vous voulez mettre le ReCaptcha
 
 Pour afficher le ReCaptcha utiliser la fonction **ReCaptcha** appeler là dans un formulaire en POST comme ceci :
 

     <form action="#" method="POST">
            <?php ReCaptcha(); ?>
            <input type="submit" value="Submit" name="Submit" />
     </form>

 Maintenant pour vérifier si le Captcha est valide, utiliser la fonction **ReCaptchaValidate** 
 Cette fonction retourne un booléen
 Voici un exemple qui montre comment l'utiliser
 

    if (isset($_POST["Submit"])) {
        //Call func tion check validate
        if (ReCaptchaValidate())
            echo "validate";
        else
            echo "invalidate";
    }



 


