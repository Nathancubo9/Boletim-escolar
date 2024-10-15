<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boletim Escolar</title>
</head>
<body>
<h2>Adicione suas notas</h2>

   <form method="post" action="boletim.php">
       <label for="nome">Nome do aluno:</label>
       <input type="text" name="nome" placeholder="Nome do aluno" required><br><br>

       <label for="nota1">Nota 1:</label>
       <input type="number" name="nota1" min="0" max="10" placeholder="Digite a nota 1" required><br><br>

       <label for="nota2">Nota 2:</label>
       <input type="number" name="nota2" min="0" max="10" placeholder="Digite a nota 2" required><br><br>

       <label for="nota3">Nota 3:</label>
       <input type="number" name="nota3" min="0" max="10" placeholder="Digite a nota 3" required><br><br>

       <label for="nota4">Nota 4:</label>
       <input type="number" name="nota4" min="0" max="10" placeholder="Digite a nota 4" required><br><br>

       <input type="submit" name="enviar" value="Enviar">
   </form>

</body>
</html>
