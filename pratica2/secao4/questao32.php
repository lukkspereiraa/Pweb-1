<?php


if (!isset($_SESSION['visor'])) {
    $_SESSION['visor'] = '';
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $input = $_POST['input'];

    if ($input === "C") {
     
        $_SESSION['visor'] = '';
    } elseif ($input === "=") {
        $expression = $_SESSION['visor'];

        $expression = str_replace(['×', '÷'], ['*', '/'], $expression);

        if (preg_match('/^[0-9+\-.*\/() ]+$/', $expression)) {
            try {
            
                @eval("\$resultado = $expression;");
                $_SESSION['visor'] = (string)$resultado;
            } catch (Throwable $e) {
                $_SESSION['visor'] = "Erro";
            }
        } else {
            $_SESSION['visor'] = "Erro";
        }
    } else {
   
        $_SESSION['visor'] .= $input;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <title>Calculadora Clássica PHP</title>
    <style>
        body {
            font-family: 'Courier New', Courier, monospace;
            background: #222;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .calculadora {
            background: #333;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 15px #000;
            width: 280px;
        }
        .visor {
            background: black;
            color: lime;
            font-size: 2rem;
            padding: 15px;
            text-align: right;
            border-radius: 5px;
            margin-bottom: 15px;
            height: 50px;
            overflow-x: auto;
            font-weight: bold;
            user-select: none;
        }
        form {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 10px;
        }
        button {
            font-size: 1.5rem;
            padding: 15px 0;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            color: white;
            background: #444;
            box-shadow: inset 0 -3px 0 #222;
            transition: background 0.2s ease;
        }
        button:hover {
            background: #555;
        }
        button.operator {
            background: #f57c00;
            box-shadow: inset 0 -3px 0 #b35e00;
        }
        button.operator:hover {
            background: #ffa726;
        }
        button.equal {
            background: #388e3c;
            box-shadow: inset 0 -3px 0 #2e7d32;
            grid-column: span 2;
        }
        button.equal:hover {
            background: #4caf50;
        }
        button.clear {
            background: #d32f2f;
            box-shadow: inset 0 -3px 0 #b71c1c;
        }
        button.clear:hover {
            background: #e53935;
        }
    </style>
</head>
<body>
    <div class="calculadora">
        <div class="visor"><?= htmlspecialchars($_SESSION['visor']) ?></div>
        <form method="POST" action="">
            <button type="submit" name="input" value="7">7</button>
            <button type="submit" name="input" value="8">8</button>
            <button type="submit" name="input" value="9">9</button>
            <button type="submit" name="input" value="÷" class="operator">÷</button>

            <button type="submit" name="input" value="4">4</button>
            <button type="submit" name="input" value="5">5</button>
            <button type="submit" name="input" value="6">6</button>
            <button type="submit" name="input" value="×" class="operator">×</button>

            <button type="submit" name="input" value="1">1</button>
            <button type="submit" name="input" value="2">2</button>
            <button type="submit" name="input" value="3">3</button>
            <button type="submit" name="input" value="-" class="operator">−</button>

            <button type="submit" name="input" value="0">0</button>
            <button type="submit" name="input" value=".">.</button>
            <button type="submit" name="input" value="C" class="clear">C</button>
            <button type="submit" name="input" value="+" class="operator">+</button>

            <button type="submit" name="input" value="=" class="equal">=</button>
        </form>
    </div>
</body>
</html>
