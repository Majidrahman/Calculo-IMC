<!doctype html>
<html lang=pt>
    <head>
        <meta charset="utf-8">
        <title>Calculadora IMC</title>
    </head>

    <body>
        <p>Entre com peso e altura</p>

        <form>
            Peso: <input name="peso">
            <br>
            Altura: <input name="altura">
            <br>
                        
            <button>Calcular o IMC</button>
        </form>

        <?php
            
            if (isset ($_GET["peso"]) && isset ($_GET["altura"])) {
                $peso = $_GET["peso"];
                $altura = $_GET["altura"];
                $imc = ($peso / ($altura * $altura));
                echo "<p>Seu IMC é $imc</p>";

                if ($imc <= 18.5) {
                    echo "<p>Abaixo do peso</p>";
                } else if ($imc <24.9) {
                    echo "<p>Peso Normal</p>";
                }else if ($imc <29.9) {
                    echo "<p>Levemente acima do peso</p>";
                }else if ($imc <34.9) {
                    echo "<p>Obesidade grau I</p>";
                }else if ($imc <34.9) {
                    echo "<p>Obesidade grau II (severa)</p>";
                } else {
                    echo "<p>Obesidade grau III (mórbida<p>";

            }
        }
        ?>
        
   </body>
   </html>