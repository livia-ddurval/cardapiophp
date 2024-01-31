<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:opsz,wght@6..12,300&display=swap" rel="stylesheet">
    <title>Cardapio Semanal</title>
</head>
<body>
<header><h1>Cardápio fresco e variado</h1></header>
    <?php
        $dias = array(
            "Segunda",
            "Terça",
            "Quarta",
            "Quinta",
            "Sexta",
            "Sábado",
        );
        $acompanhamento = array( 
            "Vegetais assados",
            "Arroz branco",
            "Brócolis cozido",
            "Couve refogado",
            "Salada de Folhas Verdes com Tomate",
            "Abobrinha assada",
        );
        $prato_princ = array(
            "Carne assada com batatas, arroz e feijão",
            "Espaguete com molho de tomate, almôndegas e feijão",
            "Estrogonofe de frango com batata palha, arroz branco e feijão",
            "Feijoada com arroz branco",
            "Macarrão ao pesto, arroz e iscas de frango",
            "Lasanha de berinjela com carne moída, arroz branco e feijão",
        );
        $sobremesa = array (
            "Pudim de leite condensado",
            "Salada de frutas",
            "Gelatina de uva",
            "Laranja",
            "Banana",
            "Mousse de chocolate",
        );
    ?>
    <main>
        <section>
    <?php
    
    foreach ($dias as $valor => $valores) {
        echo "<div class='amarelo'>";
        echo "<div class='semana'><h3>".$dias[$valor]."</h3></div>";
        echo "<div class='food'><ul><h4>Prato Principal:</h4><li>".$prato_princ[$valor]."</li></ul>";
        echo "<ul><h4>Acompanhamento:</h4><li>".$acompanhamento[$valor]."</li></ul>";
        echo "<ul><h4>Sobremesa:</h4><li>".$sobremesa[$valor]."</li></ul></div>";
        echo "</div>";
    }
      ?>
        </section>
    </main>  
    <footer><h3>
                 <?php  $empresaNome = "NutriNilMar";
                      echo $empresaNome; 
                ?>
            </h3>
    </footer>
</body>
</html>
