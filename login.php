<?php
    session_start();

    if(empty($_POST) or (empty($_POST["usuario"])) or (empty($_POST["senha"]))){
        print "<script>location.href='index.php';</script>";
    }

    include('config.php');

    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];

    $sql = "SELECT * FROM usuarios
            WHERE usuario = '($usuario)'
            AND senha = '".md5($senha)."'";

    $res = $con->query($sql) or die($con-error);

    $row = $res->fetch_object()

    $qtd = $res->num_row;

    if($qtd > 0){
        $_SESSION["usuario"] = $usuario;
        $_SESSION["nome"] = $row->nome;
        $_SESSION["tipo"] = $row->tipo;
        print "<script>location.href='deshboard.php';</script>"
    }else{
        print "<script>alert('Usuario e/ou ssenha incorreto(s)');</script>"
        print "<script>location.href='index.php';</script>"
    }