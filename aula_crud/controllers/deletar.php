<?php

$varIdAluno = $_GET["id_aluno"];

include("../models/conexao.php");

mysqli_query($conexao, "delete from alunos where codigo = $varIdAluno");


header("location:../index.php")

?>