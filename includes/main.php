

<main>
    <?PHP

if(isset($_GET['page'])){

    $page = $_GET['page'];

}
else {
    $page= 'accueil';

}

$list=glob("./includes/*.inc.php");

$page="./includes/".$page.".inc.php";

if(in_array($page,$list)){

    require $page;

}
else{


    require  "./includes/accueil.inc.php";
}

//require './includes/' . $page . '.php';

    ?>

</main>