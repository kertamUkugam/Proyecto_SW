<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet"
      href="estilos/loginStyle.css"/>

</head>

<body>

<h2>LA GRAN PUERTA DE ACCESO</h2>

<form action="Login.php" method="post">
    <div class="imgcontainer">
        <img src="img/img_login.jpg" alt="Avatar" class="avatar">
    </div>

    <div class="container">
        <label><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="uname" required>

        <label><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required>

        <button type="submit">Login</button>
    </div>

    <div class="container" style="background-color:#f1f1f1">

         <a href= "layout.html" <button type="button" class="return">Inicio</a></button>




    </div>
</form>



<?php


if (isset($_POST["uname"])) {

    $link = mysqli_connect("mysql.hostinger.es","u461050408_usr","Prueba1","u461050408_quiz");
    //$link = mysqli_connect("localhost","root","","Quiz");



    if (!$link) {
        die("Connection failed: " . mysqli_connect_error());
    }else {
        session_start();




        $email = $_POST ['uname'];

        $password = $_POST ['psw'];

        $sql="SELECT * FROM Usuario WHERE Email='$email' and Password='$password'";

        $query =mysqli_query($link,$sql);

        $existe=mysqli_num_rows($query);
        if($existe==1){
            $_SESSION['email']=$email;
            $_SESSION['password']=$password;

            if(strcmp($email,"web000@ehu.es")==0){
                header('Location: Revisar.php');

            }else{
                header('Location: GestionPreguntas.php');

            }

        }
        else{
            echo '<script language="javascript">alert("Error de acceso");</script>';
        }
        mysqli_close($link);
    }

}



?>




</body>
</html>
