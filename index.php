<?php

if(isset($_POST['save'])){
post();
  
};

function post (){
    $nombre = $_POST["nombre"];
    $apellidos = $_POST["apellidos"];
    $direccion = $_POST["direccion"];
    $horario = $_POST["horario"];
    $team = $_POST["team"];
    $trainer = $_POST["trainer"];
    $edad = $_POST["edad"];
    $email = $_POST["email"];
    $cedula = $_POST["cedula"];

    $usuario = array(
        "Nombre" => $nombre,
        "Apellidos" => $apellidos,
        "Direccion" => $direccion,
        "Horario" => $horario,
        "Team" => $team,
        "Trainer" => $trainer,
        "Edad" => $edad,
        "Email" => $email,
        "Cedula" => $cedula
    );

    $usuarioJson = json_encode($usuario);

    $options = array(
    'http'=> array(
    'method' => "POST",
    'header'=> "Content-Type: application/json",
    'content'=>$usuarioJson
    )
    );

    $config = stream_context_create($options);
    $url = "https://648387abf2e76ae1b95ca019.mockapi.io/datosCrud";
    $data = file_get_contents($url, false, $config);    
}



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
    <form method="POST">
        <div class="contenedor-info">
            <input type="text" name="nombre" placeholder="Nombre">
            <input type="text" name="apellidos" placeholder="Apellidos">
            <input type="text" name="direccion" placeholder="Direccion">
            <input type="text" name="horario" placeholder="Horario de entrada">
            <input type="text" name="team" placeholder="Team">
            <input type="text" name="trainer" placeholder="Trainer">
        </div>

        <div class="contenedor-logo">
            <div class="logo">
                <h1>Campuslands</h1>
                <img src="img/campuslogo.jpeg" alt="">
            </div>
            
            <input type="number" name="edad" placeholder="Edad">
            <input type="email" name="email" placeholder="Email">
            <input type="number" name="cedula" placeholder="Cedula">
            <div class="botones">
                <button type="submit" name="save"><i class="fa-solid fa-check"></i></button>
                <button type="submit" name="delete"><i class="fa-solid fa-circle-xmark"></i></button>
                <button type="submit" name="edit"><i class="fa-solid fa-pencil"></i></button>
                <button type="submit" name="search"><i class="fa-solid fa-magnifying-glass"></i></button>
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
                <td class="ojito"><button name="get" type="submit"><i class="fa-solid fa-eye"></i></td></button> 
            </tr>
        </tbody>
    </table>
    </div>


</div>


</body>
</html>