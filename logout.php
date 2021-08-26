<?php
session_start();


if(isset($_SESSION['idUser'])){
        session_destroy();
    header('location:/IntellCap/');

}else{
    header('location:/IntellCap/');
}


?>