<?php 








?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud con php</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<div class="contenedorglobal">
    <form action="">
        <div class="contenedor-info">
            <input type="text" name="info" placeholder="Nombre">
            <input type="text" name="info" placeholder="Apellidos">
            <input type="text" name="info" placeholder="Direccion">
            <input type="text" name="info" placeholder="Horario de entrada">
            <input type="text" name="info" placeholder="Team">
            <input type="text" name="info" placeholder="Trainer">
        </div>

        <div class="contenedor-logo">
            <div class="logo">
                <h1>Campuslands</h1>
                <img src="img/campuslogo.jpeg" alt="">
            </div>
            
            <input type="number" name="info" placeholder="Edad">
            <input type="email" name="info" placeholder="Email">
            <input type="number" name="info" placeholder="Cedula">
            <div class="botones">
                <button type="submit"><i class="fa-solid fa-check"></i></button>
                <button type="submit"><i class="fa-solid fa-circle-xmark"></i></button>
                <button type="submit"><i class="fa-solid fa-pencil"></i></button>
                <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            </div>
            
        </div>
    </form>
    <div class="contenedor-tabla">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellidos</th>
                <th scope="col">Direccion</th>
                <th scope="col">Edad</th>
                <th scope="col">Email</th>
                <th scope="col">Horario de entrada</th>
                <th scope="col">Team</th>
                <th scope="col">Trainer</th>
                <th scope="col">Editar</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Jonathan</td>
                <td>Alvarez</td>
                <td>calle falsa 123</td>
                <td>25</td>
                <td>@mdo</td>
                <td>5:00am</td>
                <td>M3</td>
                <td>Miguel</td>
                <td><button type="submit"><i class="fa-solid fa-eye"></i></td></button> 
            </tr>
        </tbody>
    </table>
    </div>


</div>


</body>
</html>