<?php include_once'cabecalho.php';?>

    <h4>Consultar por Nome:</h4>
    <form action="consultar.php" method="get">
    Nome:<br/>
    <input type="text" placeholder="Digite o nome" name="nome" required/>
    <br/><br/>
    <input type="submit" value="Buscar"/>

</form>
<?php

if(isset($_GET["nome"])) {

//pegar o campo nome da tela
$nome= $_GET["nome"];

//abrir uma conexão com o banco
include_once'./conexao.php';

//montar a instrução sql para buscar a informação 
$sql= "select * from cliente where nome like '".$nome."%'";

//mysql-query() -> executa a instrução no banco
 $result= mysqli_query($con,$sql);
 if(mysqli_num_rows($result)>0)
{

?>
<table class="table">
     <tr><br/>
        <td>Nome</td>
        <td>E-mail</td>
        <td>Telefone</td>
        <td>Data de cadastro</td>
        <td>Editar</td>
        <td>Excluir</td>
     </tr>


<?php
}else{
    echo "<br/>Não existe cliente com esse nome.";
}
}

include_once'./rodape.php';
?>

