<!DOCTYPE html>
<html>
<head>
    <title>Añadir equipo</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
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
        input[type="number"] {
            width: 100%;
            padding: 5px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <header>
        <h1>Añadir equipo</h1>
    </header>
    
    <form method="POST" action="añadir2.php">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required>
        
        <label for="puntos">Puntos:</label>
        <input type="number" name="puntos" required>
        
        <input type="submit" value="Añadir" name="Añadir">
    </form>
</body>
</html>

