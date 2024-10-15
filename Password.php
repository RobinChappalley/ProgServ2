<?php
require_once './Generate.php';
header('Content-Type: text/html; charset=UTF-8');


$gen = new Generate();

if (filter_has_var(INPUT_POST, 'submit')) {
    $numberspecials = filter_input(INPUT_POST, 'special', FILTER_VALIDATE_INT);
    $numbernumbers = filter_input(INPUT_POST, 'number', FILTER_VALIDATE_INT);
    $numberuppercase = filter_input(INPUT_POST, 'uppercase', FILTER_VALIDATE_INT);
    $numberlowercase = filter_input(INPUT_POST, 'lowercase', FILTER_VALIDATE_INT);
    $superpassword = $gen->passwordCreate($numberspecials, $numbernumbers, $numberuppercase, $numberlowercase);
   
   // echo $passwordshuffled;
    echo createsForm();
    echo "Votre mot de passe est : " . $superpassword;
} else {
    echo createsForm();
}


function createsForm()
{
    return "<html>
    <head>
        <meta charset='UTF-8'>
        <title>Mot de passe</title>
    </head>
    <body>
        <form action='' method='post'>
            <div>
                Nombre de caractères spéciaux ".valchar()." :
                <input type='number' name='special'>
            </div>
            <div>
                Nombre de chiffres 0-9 :
                <input type='number' name='number'>
                            </div>
                            <div>
                Nombre de lettres majusucles A-Z:
                <input type='number' name='uppercase'>
            </div>
            <div>
                Nombre de lettres minuscules a-z:
                <input type='number' name='lowercase'>
            </div>
            <div>
                <input type='submit' name='submit' value='envoyer'>
            </div>
        </form>
    </body>
</html>";
}

function valchar()
{
    global $gen;
    $chars='';
    for ($i = 0; $i < count($gen->specialchars); $i++) {
         $chars.=$gen->specialchars[$i];
    };
return $chars;
}
