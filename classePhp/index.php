<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excercício</title>
</head>
<body>

<h1>Excercício PHP</h1>

<?php

/**
 * Define as informações e valores das pessoas e imprime na tela 
 * @author Eduarda Müller 
 * @access public
*/

include('Pessoa.php');

include('Medico.php');

$m = new Medico();

$m->setNome('Gabrielly de Vargas');
$m->setDataNascimento('16-06-2005');
$m->setCpf('076.865.198-18');
$m->setRg('9899899897');
$m->setCrm('78437739');

echo " <b> Dados da Médica: </b> <br><br>";

echo "Nome: ".$m->getNome(); 
echo "<br>";
echo "Nascimento: ".$m->getDataNascimento(); 
echo "<br>";
echo "RG: ".$m->getRg(); 
echo "<br>";
echo "CPF: ".$m->getCpf(); 
echo "<br>" ;
echo "CRM: ".$m->getCrm(); 
echo "<br><br><br>";

//////////////////////////////////////////////////////////////////////////////////////////

include('Engenheiro.php');

$e = new Engenheiro();

$e->setNome('Carolina Thomas Rosback');
$e->setDataNascimento('26-06-2004');
$e->setCpf('088.345.135-68');
$e->setRg('074820184737');
$e->setCrea('218983902');

echo " <b> Dados da Engenheira: </b> <br><br>";

echo "Nome: ".$e->getNome(); 
echo "<br>";
echo "Nascimento: ".$e->getDataNascimento();
echo "<br>";
echo "RG: ".$e->getRg(); 
echo "<br>";
echo "CPF: ".$e->getCpf(); 
echo "<br>" ;
echo "Crea: ".$e->getCrea(); 
echo "<br><br><br>";

//////////////////////////////////////////////////////////////////////////////////////////

include('Motorista.php');

$mo = new Motorista();

$mo->setNome('Eduarda Berti Müller');
$mo->setDataNascimento('09-02-2005');
$mo->setCpf('052.570.670-48');
$mo->setRg('7874278932479');
$mo->setCnh('783823928');


echo "<b> Dados da Motorita: </b> <br><br>";

echo "Nome: ".$mo->getNome(); 
echo "<br>";
echo "Nascimento: ".$mo->getDataNascimento(); 
echo "<br>";
echo "RG: ".$mo->getRg(); 
echo "<br>";
echo "CPF: ".$mo->getCpf(); 
echo "<br>" ;
echo "CNH:".$mo->getCnh(); 
echo "<br><br><br>";



?>
    
</body>
</html>