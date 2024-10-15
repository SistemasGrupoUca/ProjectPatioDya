<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="EstiloIngreso.css">
    <title>Ingreso</title>
</head>
<body>
    <header>
        <img class="Logo" src="./images/DYA2.png">
        <h2 class="h21"> Crear Usuario</h2>
        <span class="user-detail"><h2>DYA IMPORT &amp; EXPORT SA.S.</h2></span>
    </header>
        <div class="container">
         <img class="img" src="./images/Imagen1.jpg">
        </div>
        <div class="container2">
            <img class="img2" src="./images/Imagen2.jpg">
        </div>
        <div class="buttons">    
        <button onclick="NewUser()" class="btn"> Nuevo Usuario</button>
        </div>
        <div class="Button-container">
            <button class="btn1" >Usuario Antiguo</button>
        </div>
        <script>
            function NewUser(){
                location.href ="NewUser.php"
            }
        </script>

</body>
</html>
