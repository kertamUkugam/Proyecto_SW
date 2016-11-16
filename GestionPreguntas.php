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
        XMLHttpRequestObject.open("POST", "VerPreguntas.php", true);
        XMLHttpRequestObject.send();

    }


    function añadirDatos(){
        XMLHttpRequestObject.open("POST","InsertarPregunta.php",true);
        XMLHttpRequestObject.send();
    }

</script>


</head>



<body>



    <input type = "button" value = "Mostrar preguntas" onclick="pedirDatos()"/>

    <input type = "button" value = "Insertar preguntas la BD" onclick="añadirDatos()"/>

<div id="txtHint" >
    <p>En verdad te digo hijo mío, que aquí se verá la información que buscas. </p>
</div>

<br><br><br>
<span><a href='layout.html'>Inicio</a></span>


<?php
session_start();
if(!isset($_SESSION['email']) || $_SESSION['email'] == "web000@ehu.es") {

    header('Location: Mensajes/NoLogeado.html');

}

?>

</body>


</html>
