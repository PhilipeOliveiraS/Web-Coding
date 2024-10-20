<!DOCTYPE HTML>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <title>Formulário de Matrícula</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 20px;
        }
        .container {
            background-color: #ffffff;
            border-radius: 8px;
            padding: 20px;
            max-width: 500px;
            margin: 0 auto;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h2 {
            color: #2c3e50;
            text-align: center;
            border-bottom: 2px solid #3498db;
            padding-bottom: 10px;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            margin-top: 10px;
            color: #34495e;
        }
        input[type="text"] {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #bdc3c7;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #2ecc71;
            color: white;
            border: none;
            padding: 10px 20px;
            margin-top: 20px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: #27ae60;
        }
        .divider {
            height: 1px;
            background-color: #ecf0f1;
            margin: 20px 0;
        }
    </style>
</head>
<body>
<div class="container">
    <h2>Formulário de Matrícula</h2>
    <form action="<?php ($_SERVER["PHP_SELF"]); ?>" method="post">
    
        <label for="f_nome">Nome:</label>
        <input type="text" id="f_nome" name="f_nome">
        
        <label for="f_idade">Idade:</label>
        <input type="text" id="f_idade" name="f_idade">
        
        <label for="f_curso">Curso:</label>
        <input type="text" id="f_curso" name="f_curso">
        
        <label for="f_periodo">Período:</label>
        <input type="text" id="f_periodo" name="f_periodo">
        
        <input type="submit" value="Enviar">
    </form>

    <div class="divider"></div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome1 = $_POST["f_nome"];
        $idade1 = $_POST["f_idade"];
        $curso1 = $_POST["f_curso"];
        $periodo1 = $_POST["f_periodo"];
        
        echo "<p>Nome: $nome1</p>";
        echo "<p>Idade: $idade1</p>";
        echo "<p>Curso: $curso1</p>";
        echo "<p>Período: $periodo1</p>";
    }
    ?>
</div>
</body>
</html>