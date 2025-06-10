<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Calculadora Simple</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <h1>Calculadora PHP</h1>
    <form method="POST" action="">
      <input type="number" name="num1" placeholder="Número 1" required>
      
      <select name="operador" required>
        <option value="+">+</option>
        <option value="-">-</option>
      </select>

      <input type="number" name="num2" placeholder="Número 2" required>

      <button type="submit">Calcular</button>
    </form>

    <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = floatval($_POST["num1"]);
        $num2 = floatval($_POST["num2"]);
        $operador = $_POST["operador"];
        $resultado = 0;

        if ($operador == "+") {
          $resultado = $num1 + $num2;
        } elseif ($operador == "-") {
          $resultado = $num1 - $num2;
        }

        echo "<div class='resultado'>Resultado: <strong>$resultado</strong></div>";
      }
    ?>
  </div>
</body>
</html>
