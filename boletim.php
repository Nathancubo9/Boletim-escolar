<?php 


$nome = isset($_POST['nome']) ? $_POST['nome'] : '';
$nota1 = isset($_POST['nota1']) ? (float)$_POST['nota1'] : 0;
$nota2 = isset($_POST['nota2']) ? (float)$_POST['nota2'] : 0;
$nota3 = isset($_POST['nota3']) ? (float)$_POST['nota3'] : 0;
$nota4 = isset($_POST['nota4']) ? (float)$_POST['nota4'] : 0;

$media = ($nota1 + $nota2 + $nota3 + $nota4) / 4 ;

if($media >= 7){
    $status = 'APROVADO(a)';
} else {
    $status = 'REPROVADO(a)';
}

echo "Nome: " . htmlspecialchars($nome);
echo "<br>Média: " . number_format($media, 2);
echo "<br>Status: " . $status;

?>
