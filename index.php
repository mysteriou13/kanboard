

<center>
vecchioboard
</br>
gestionaire de projet

</br>

<a href = "https://vecchionet.com"> retour a l'accueil </a>

</center>

<div style = "display:flex;">

</div>

<?php 
ini_set('display_errors', 1);

use Kanboard\Core\Controller\Runner;

try {
    require __DIR__.'/app/common.php';
    $container['router']->dispatch();
    $runner = new Runner($container);
    $runner->execute();
} catch (Exception $e) {
    echo 'Internal Error: '.$e->getMessage();
}
?>
