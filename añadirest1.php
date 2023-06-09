<!DOCTYPE html>
<html>
<head>
    <title>Añadir estadio</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }

        header {
            text-align: center;
            margin-bottom: 20px;
        }

        h1 {
            margin: 0;
        }

        form {
            margin-top: 20px;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"],
        input[type="number"],
        input[type="date"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            border: none;
            color: #fff;
            font-size: 16px;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0069d9;
        }
    </style>
</head>
<body>
    <header>
        <h1>Añadir estadio</h1>
    </header>
    <?php
        $id_equipo = $_GET["id_equipo"];
    ?>
    <div class="container">
        <form method="POST" action="añadirest2.php">
            <div>
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" required>
            </div>

            <div>
                <label for="capacidad">Capacidad:</label>
                <input type="number" name="capacidad" required>
            </div>

            <div>
                <label for="fundacion">Año de fundación:</label>
                <input type="date" name="fundacion" required>
            </div>

            <input type="hidden" name="id_equipo" value="<?php echo $id_equipo; ?>">

            <input type="submit" value="Añadir" name="Añadir">
        </form>
    </div>
</body>
</html>
