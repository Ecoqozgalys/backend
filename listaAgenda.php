<?php
/*******************************************************************
@A small web application in PHP 5. * OO to demonstrate how
@made the connection to the oracle (in this case the Oracle Xe 11g) and
@an example of generic CRUD with PDO.
@Developed by Daniel Mello Siqueira: http://danielsiqueira.net
********************************************************************/
error_reporting(E_ALL);
ini_set('display_errors', 1);
header('Content-Type: text/html ; charset=utf-8');
echo "<meta http-equiv=\"Content-type\" content=\"text/html; charset=utf-8\" />";
require_once 'model/CrudDAO.Class.php';

$dao = new CrudDAO();

$stid = $dao->read("eco_test");
$cnt = $dao->returnCount("eco_test");

echo"<style type='text/css'> th, td{padding:10px;} </style>";
echo "<a href='novoContato.php'>Novo Contato</a><hr/>";
print "<table border='1' cellspacing='0'>"
      ."<tr  style='padding:10px; margin:10px;'><th>Nome</th>  <th>Sobrenome</th>  <th>Gênero</th>  <th>Telefone</th>  <th>Celular</th> <th>E-mail</th><th colspan='2'>Controle</th></tr>";
$i=0;
var_dump($stid);
while ($row = oci_fetch_array($stid)) {
   
   echo "ground";

   print '<b>'.$row['ID']."</b>";

   print '<tr>';
   print "<td>".$row["FISRT_NAME"]." </td> "
        ."<td>".$row["ID"]."</td>";
   echo  "<td> <a href='novoContato.php?id=".$row["ID"]."'>Editar</a></td>";
   echo  "<td> <a href='controller/excluir.php?id=".$row["ID"]."'>Excluir</a></td>";
   print '</tr>';

var_dump($row);
$i++;
}
print '</table>';

