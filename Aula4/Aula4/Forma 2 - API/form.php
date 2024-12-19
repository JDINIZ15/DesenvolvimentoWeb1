
<html>
<head>
    <title>Aula 4</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
</head>
<body>
        <form action="table.php" method="get" id="filtro">
            <label for="nome">Nome:</label>
            <br>
            <input type="text" id="nome" name="nome" placeholder="Digite o seu nome" value="<?= isset($_GET['nome'])?$_GET['nome']:""?>">
            <br>
            <label for="idade">Idade:</label>
            <br>
            <input type="number" id="idade" name="idade" placeholder="Digite a sua idade" value="<?= isset($_GET['idade'])?($_GET['idade']):""?>">
            <br>
            <label for="estado">Estado:</label>
            <br>
            <select id="estado" name="estado" >
            <option value="">Escolha o seu estado de nascência</option>
                <?php
                    $estados = array(
                        "AC" => "Acre",
                        "AL" => "Alagoas",
                        "AP" => "Amapá",
                        "AM" => "Amazonas",
                        "BA" => "Bahia",
                        "CE" => "Ceará",
                        "DF" => "Distrito Federal",
                        "ES" => "Espírito Santo",
                        "GO" => "Goiás",
                        "MA" => "Maranhão",
                        "MT" => "Mato Grosso",
                        "MS" => "Mato Grosso do Sul",
                        "MG" => "Minas Gerais",
                        "PA" => "Pará",
                        "PB" => "Paraíba",
                        "PR" => "Paraná",
                        "PE" => "Pernambuco",
                        "PI" => "Piauí",
                        "RJ" => "Rio de Janeiro",
                        "RN" => "Rio Grande do Norte",
                        "RS" => "Rio Grande do Sul",
                        "RO" => "Rondônia",
                        "RR" => "Roraima",
                        "SC" => "Santa Catarina",
                        "SP" => "São Paulo",
                        "SE" => "Sergipe",
                        "TO" => "Tocantins"
                    );
                    foreach($estados as $chave => $valor){
                        if($chave == $_GET['estado']){
                            echo "<option value ='" . $chave ."' selected>" . $valor . "</option>";
                        }
                        else{
                            echo "<option value ='" . $chave ."'>" . $valor . "</option>";
                        }
                    }
                ?>
            </select>
            <br>
            <label for="cidade">Cidade:</label>
            <br>
            <select id="cidade" name="cidade">
      
            </select>
            <br>
            <br>
            <button type="submit" id="Filtrar" name="Filtrar">Filtrar</button>
        </form>
</body>
</html>