<?php

if (isset($_COOKIE['respostas'])) {
    $respostas = $_COOKIE['respostas'];
} else {
    $respostas = '';
}
//print_r($_COOKIE);
$i;
$n;
$y;
for ($i = 1; $i <= 9; $i++) {
    if (!isset($_GET['p'. $i]) && isset($_COOKIE["p". $i])) {
        $_GET['p'. $i] = $_COOKIE["p". $i];
    }
}
if (!isset($_GET['copos'])) {
    if ($respostas <= 0 || $respostas == "") {
        echo '<img class="image-copo" src="fatias/copo-vazio.png" ><img class="ml-2 image-copo" src="fatias/copo-vazio.png" ><img class="ml-2 image-copo" src="fatias/copo-vazio.png" ><img class="ml-2 image-copo" src="fatias/copo-vazio.png" ><img class="ml-2 image-copo" src="fatias/copo-vazio.png" ><img class="ml-2 image-copo" src="fatias/copo-vazio.png" ><img class="ml-2 image-copo" src="fatias/copo-vazio.png" ><img class="ml-2 image-copo" src="fatias/copo-vazio.png" ><img class="ml-2 image-copo" src="fatias/copo-vazio.png" >';
    } else {

        for ($i = 1; $i <= $respostas; $i++) {
            echo '<img class="ml-2 image-copo" src="fatias/copo-cheio.png">';
        }
        $erros = 9 - $respostas;
        if ($erros == 9) {
            echo '<img class="image-copo" src="fatias/copo-vazio.png" ><img class="ml-2 image-copo" src="fatias/copo-vazio.png" ><img class="ml-2 image-copo" src="fatias/copo-vazio.png" ><img class="ml-2 image-copo" src="fatias/copo-vazio.png" ><img class="ml-2 image-copo" src="fatias/copo-vazio.png" ><img class="ml-2 image-copo" src="fatias/copo-vazio.png" ><img class="ml-2 image-copo" src="fatias/copo-vazio.png" ><img class="ml-2 image-copo" src="fatias/copo-vazio.png" ><img class="ml-2 image-copo" src="fatias/copo-vazio.png" >';
        } else {
            for ($y = 1; $y <= $erros; $y++) {
                echo '<img class="ml-2 image-copo" src="fatias/copo-vazio.png" >';
            }
        }
    }
} else {
    if (isset($_GET['p1']) && $_GET['p1'] == 'a') {
        echo '<img class="image-copo" src="fatias/copo-cheio.png">';
    } else {
        echo '<img class="image-copo" src="fatias/copo-vazio.png">';
    }
    if (isset($_GET['p2']) && $_GET['p2'] == 'a') {
        echo '<img class="ml-2 image-copo" src="fatias/copo-cheio.png">';
    } else {
        echo '<img class="ml-2 image-copo" src="fatias/copo-vazio.png">';
    }
    if (isset($_GET['p3']) && $_GET['p3'] == 'a') {
        echo '<img class="ml-2 image-copo" src="fatias/copo-cheio.png">';
    } else {
        echo '<img class="ml-2 image-copo" src="fatias/copo-vazio.png">';
    }
    if (isset($_GET['p4']) && $_GET['p4'] == 'a') {
        echo '<img class="ml-2 image-copo" src="fatias/copo-cheio.png">';
    } else {
        echo '<img class="ml-2 image-copo" src="fatias/copo-vazio.png">';
    }
    if (isset($_GET['p5']) && $_GET['p5'] == 'a') {
        echo '<img class="ml-2 image-copo" src="fatias/copo-cheio.png">';
    } else {
        echo '<img class="ml-2 image-copo" src="fatias/copo-vazio.png">';
    }
    if (isset($_GET['p6']) && $_GET['p6'] == 'a') {
        echo '<img class="ml-2 image-copo" src="fatias/copo-cheio.png">';
    } else {
        echo '<img class="ml-2 image-copo" src="fatias/copo-vazio.png">';
    }
    if (isset($_GET['p7']) && $_GET['p7'] == 'a') {
        echo '<img class="ml-2 image-copo" src="fatias/copo-cheio.png">';
    } else {
        echo '<img class="ml-2 image-copo" src="fatias/copo-vazio.png">';
    }
    if (isset($_GET['p8']) && $_GET['p8'] == 'a') {
        echo '<img class="ml-2 image-copo" src="fatias/copo-cheio.png">';
    } else {
        echo '<img class="ml-2 image-copo" src="fatias/copo-vazio.png">';
    }
    if (isset($_GET['p9']) && $_GET['p9'] == 'a') {
        echo '<img class="ml-2 image-copo" src="fatias/copo-cheio.png">';
    } else {
        echo '<img class="ml-2 image-copo" src="fatias/copo-vazio.png">';
    }
}
?>