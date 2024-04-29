<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora PHP</title>
    <style>
        body {
            font-family: sans-serif;
            margin: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
            width: 300px;
            margin: 0 auto;
        }

        label {
            margin-bottom: 5px;
        }

        input[type="number"],
        select {
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .resultado {
            margin-top: 20px;
            border: 1px solid #ccc;
            padding: 10px;
            border-radius: 5px;
            text-align: center;
        }
    </style>

    <script>
        const form = document.querySelector('form');

        form.addEventListener('submit', function(event) {
            event.preventDefault();

            const num1 = document.getElementById('num1').value;
            const num2 = document.getElementById('num2').value;

            if (num1 === '' || num2 === '') {
                alert('Ambos campos deben estar llenos');
                return;
            }

            if (num2 === '0') {
                alert('No se puede dividir por cero');
                return;
            }

            form.submit();
        });
    </script>


</head>
<body>
    <h1>Calculadora PHP</h1>

    <form action="?" method="post">
        <label for="num1">Número 1:</label>
        <input type="number" id="num1" name="num1" required>

        <label for="num2">Número 2:</label>
        <input type="number" id="num2" name="num2" required>

        <button type="submit" name="BtnCalcular">Calcular</button>
    </form>
    <div class="resultado" style="center">
    <?php 
            if (isset($_POST['BtnCalcular']))
            {
                if (isset($_POST['num1']) && isset($_POST['num2'])) 
                {
                    $num1 = $_POST['num1'];
                    $num2 = $_POST['num2'];
                }

                echo "<p>Los resultados de las operaciones son: <br><br>" .
                    "Suma de: " . $num1 . " + " . $num2 . " = " . $num1 + $num2 . "<br><br>" .
                    "Resta de: " . $num1 . " - " . $num2 . " = " . $num1 - $num2 . "<br><br>" .
                    "Multiplicación de: " . $num1 . " * " . $num2 . " = " . $num1 * $num2 . "<br><br>" .
                    "División de: " . $num1 . " / " . $num2 . " = " . $num1 / $num2 . "</p>";
            } 
    ?>
    </div>
</body>
</html>