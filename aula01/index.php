<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP - Aula 01</title>
</head>

<body>
<?php
$titulo = "Primeira aula de PHP";
?>
    <h1>
    <?php echo $titulo;?>
    </h1>

<!-- condicionais -->

<?php
    // $idade = 17;

    // if ($idade <= 17) {
    //     echo "<h2>não pode comprar</h2>";
    // } else {
    //     echo "boa diversão";
    // }
    
    ?>
    
    <!-- exercício de if e else -->
    <p> Exercício de condicionais</p>
    <p>1 - Verificar se uma pessoa deve votar ou não, ou se está pessoa tem o voto facultativo</p>

    <?php
    $idade = 70;
        if ($idade <16) {
            echo "<h2>vc não pode votar</h2>";
        } else if ($idade >=16 && $idade <18 || $idade >70) {
            echo "<h2>seu voto é facultativo</h2>";        
        } else 
            echo "<h2>vc deve votar</h2>";
        
    ?>    
        
    <!-- switch -->
        

         <?php
            $genero="Masculino";

        switch ( $genero ) {
            case "Masculino":
                echo "É do gênero masculino";
                break;
            case "Feminino":
                echo "É do gênero feminino";
                break;
            default:
                echo "Prefere não dizer";
                break;
        }
        // mesmo código usando if e else

        // if ($genero == "Masculino") {
        //     echo "É do gênero masculino";
        // } else if($genero == "Feminino") {
        //     echo "É do gênero feminino";
        // } else {
        //     echo "Prefere não dizer";
        // }
               
    ?>

    <!-- Exercício de switch -->

            <p>Exercício  de Condicionais de Switch</p>
            <p>1 - Verificar se uma variável é 0 e retornar, você informou o valor 0.
            Ou , se a variável 1 e retornar , vc informou o valor 1;
            ou se a variável é qualquer outro número e retornar o valor informado</p>

    <?php
        $valor=0;

        switch ($valor) {
            case 0:
                echo "vc informou o valor " . $valor;
                break;
            case 1:
            // concatenando dentro da propria frase
                echo "vc informou o valor  $valor";
                break;    
            default:
                echo "vc informou o valor " . $valor;
                break;
        } 


        ?>   

        <hr>
        <h1> arrays</h1>

        <?php
            $arrayAnimais = ["cachorro",
                            "gato",
                            "girafa", 
                             "elefante"];
            echo"<pre>";
            var_dump($arrayAnimais);
            echo"</pre>";

            $estojo = array(
                "caneta azul",
                "caneta verde",
                "caneta vermelha",
                "controle do projetor"
            );
        ?>

        <hr>
        <h1> arrays associativos</h1>

  $usuario = [
            "email" => "vtorres@digitalhouse.com",
            "senha" => "123456"   
        ];

        // percorrendo array usuario
        echo "<pre>";
            var_dump($usuario);
        echo "</pre>";


        $arraySimples = [0,1,2,3,"quatro","cinco"];
    var_dump($arraySimples);

    $arrayAssociativo = ["nome" => "Fulano", "sobrenome" => "da Silva", "idade" => 33];
    var_dump($arrayAssociativo);


       <?php

$arr = [0,1,2,3,4,5,6,7,8,9,10];
$tabuadaDe = 3;

foreach ( $arr as $item ) {

    echo $item * $tabuadaDe . "<br>";

}
?>


DESAFIO: CRIAR A TABELA DE TABUADA DE 0 A 10

</body>
</html>