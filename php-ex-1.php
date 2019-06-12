<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
    // imposto la variabile testo e come contenuto do proprio una stringa contenente un testo.
    $testo = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';

    // trasformo la stringa in un array contenente le sue singole parole
    $paroletesto = explode(' ', $testo );

    // imposto la variabiel "proibita" con parametro GET: la variabile avrà quindi il contenuto di quanto segue ?proibita=
    $proibita = $_GET['proibita'];

    // e questa parola proibita andrà sostituita con il contenuto della variabile chiamata "sostitutiva"
    $sostitutiva = '***';

    // ora dico al codice di:
    // 1) prendere il contenuto della variabile "proibita"
    // 2) sostituirlo con il contenuto della variabile "sostitutiva"
    // 3) e di fare il tutto all'interno della variabile "paroletesto" (cioé all'interno dell'array contenente le singole parole della stringa di partenza)

    $nuovotesto = str_replace($proibita, $sostitutiva, $paroletesto);

    // stampo a schermo l'array per verificare che abbia sostituito la parola proibita con la parola sostitutiva
    var_dump($nuovotesto);

     ?>


  </body>
</html>
