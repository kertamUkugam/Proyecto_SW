<html>


<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

    <script language = "javascript">
        XMLHttpRequestObject = new XMLHttpRequest();
        XMLHttpRequestObject.onreadystatechange = function() {
            if (XMLHttpRequestObject.readyState == 4) {
                if (XMLHttpRequestObject.status == 200) {
                    document.getElementById("txtHint").innerHTML = XMLHttpRequestObject.response;

                }
            }
        }

        function pedirDatos() {
            XMLHttpRequestObject.open("POST", "VerTodoProfesor.php", true);
            XMLHttpRequestObject.send();

        }


        function añadirDatos(){
            XMLHttpRequestObject.open("POST","EditarPreguntas.php",true);
            XMLHttpRequestObject.send();
        }

    </script>

</head>

<body>
<h1>SELECCIONE LA OPCION DESEADA</h1>

<input type = "button" value = "Mostrar preguntas" onclick="pedirDatos()"/>

<input type = "button" value = "Editar preguntas " onclick="añadirDatos()"/>

<div id="txtHint" >
    <p>Elija una de las dos opciones. </p>
</div>

<br><br><br>

<span><a href='layout.html'>Inicio</a></span>



<?php
session_start();
if(!isset($_SESSION['email']) || $_SESSION['email'] != "web000@ehu.es") {

    header('Location: Mensajes/SoloProfesor.html');

}

?>

</body>


</html>