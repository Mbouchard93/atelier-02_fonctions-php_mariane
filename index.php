<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./index.css">
</head>
<body>
    <header>
        <h1>Atelier 02 - Les fonctions</h1>
    </header>
    <?php function user($user, $age){
        return "Bonjour je m'appel $user et j'ai $age !" ;
    }

    $array = [10 , 20 , 30];
    $result = array_map(function($value){
        return ($value + 2) * 2 ;
    }, $array);

    $pattern =  "/\d+/";
    $string = "je m'appel mariane et j'ai 30 ans";
    $stringAll = "j'ai plusieurs nombre 10, 20, 30";
   preg_match($pattern, $string, $number);
   preg_match_all($pattern, $stringAll, $numbers);

   $arr = [10, 11, 22, 8 , 6, 10 , 2, 24, 18, 7, 17 ,1, 33];
   $resul = array_filter($arr, function($value){
        return $value % 2 === 0;
   })
    ?>
    <h2>
    <?php echo user('mariane', 30) ?> 
    </h2>
    <div>
        <h3>Fonction array_map() </h3>
        <p>Explication : array_map parcourt tous les éléments d'un tableau et retourne
          un nouveau tableau en appliquant une fonction spécifiée à chaque élément. Dans
         cette exemple,parcourt mon tableau. Pour chaque valeur, il ajoute 2 à la valeur, puis multiplie le résultat par 2. Le résultat est un nouveau tableau avec les valeurs modifiées</p>
        <p>Tableau initale : <?php echo implode(', ',$array)   ?></p>       
         <p>Tableau finale : <?php echo implode(', ',$result)   ?> </p>
    </div>
    <div>
    <h3>Fonction preg_match()</h3>
        <p> 
        La fonction preg_match() recherche un modèle (pattern) dans une chaîne de caractères en utilisant une expression régulière (regex). Si elle trouve le modèle, elle renvoie 1, sinon elle renvoie 0. Si on lui demande de stocker le résultat, elle place la première correspondance dans un tableau.

Si on veut trouver toutes les correspondances (comme plusieurs nombres), on utilise preg_match_all(). Cette fonction va trouver tous les éléments qui correspondent et les mettre dans un tableau de tableau les tableau sont séparer par les groupe de pattern à rechercher.</p>
        <p>chaîne de caractère initiale : <?php echo $string  ?></p>       
         <p>Résultat : <?php echo implode(',', $number) ?> </p>
         <p>Résultat preg_match_all() : 
            <?php 
                foreach($numbers[0] as $numb) {
                    echo $numb . ' '; 
                }
            ?>  
            </p>
    </div>
    <div>
        <h3>Fonction array_filter()</h3>
        <p>array_filter() est pratique pour filtrer des données d'une manière simple, comme garder les éléments qui respectent certaines conditions. Dans cet exemple, elle filtre les données et retourne seulement les nombres pairs à l'aide de l'opérateur modulo. Elle retourne le reste, donc si la valeur est égale à 1, elle n'est pas paire et n'est donc pas conservée dans le tableau.</p>
        <p>Tableau initiale :  <?php echo implode(', ',$arr)   ?> </p>
        <p>Résultat : <?php echo implode(', ', $resul) ?> </p>
    </div>
</body>
</html>

