<?php
      $link = new mysqli("localhost", "root", "", "biblio411");

            $CodigoA=$_POST[ "CodigoA"];
            $Nombre=$_POST[ "NombreA"];
            $ApellidoP=$_POST[ "ApellidoP"] ;
            $ApellidoM=$_POST["ApellidoM"];
            echo $CodigoA;
            echo $Nombre, $ApellidoM;

            $sql= "INSERT INTO autores VALUES('$CodigoA', '$Nombre', '$ApellidoP', '$ApellidoM')";
            $link->query($sql);
            echo "Registro exitoso";
?>