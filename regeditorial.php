<?php
    $link = new mysqli("localhost", "root", "", "biblio411");
    $ClaveEd=$_POST["ClaveEd"];
    $Nombre=$_POST["Nombre"];
    echo $ClaveEd, $Nombre;
    $sql= "INSERT INTO editoriales VALUES ('$ClaveEd','$Nombre')";
    $link->query($sql);
    echo "Registro exitoso";
?>