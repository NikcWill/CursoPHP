<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em PHP</title>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>
    <?php 
    // 0x = hexa decimal 0b = binario 0 =  octal
        // $num = 0b1011;
        // echo " O valor da variavel é $num";

        // $v = 300;
        // var_dump($v);

        // $num = (integer)3e2;
        // echo " o valor é $num "; 
        // var_dump($num);

        // $num =(integer)"950";
        // var_dump($num);

        // $casado = true;
        // var_dump($casado);
        // print " o valor de casado é: $casado";

        // $vet = [6,2,9,3,5];
        // var_dump($vet);

        class Pessoa{
            private String $nome;
        }

        $p = new Pessoa;
        var_dump($p);

    ?>
    
</body>
</html>