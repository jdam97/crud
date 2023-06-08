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

   

</div>


</body>
</html>