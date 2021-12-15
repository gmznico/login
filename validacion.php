<?php
    $error;

    if(!empty($_POST['nick']) && !empty($_POST['password'])){
        $nick = $_POST['nick'];
        $password = $_POST['password'];
        if ($nick == "usuario" && $password == "123") {
            $error = "Ingreso";
            header("Location: page.php?correcto=$correcto");
        }elseif ($nick == "usuario1" && $password == "123") {
            $error = "Ingreso";
            header("Location: page.php?correcto=$correcto");
        }
        else{
            $error = "incorrecto";
            header("Location: index.php?error=$error");
        }
    }else{ 
        $error = "vacio";
        header("Location: index.php?error=$error");
    }

?>