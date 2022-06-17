<?php
      $link = new mysqli("localhost", "root", "", "alquileres411");

            $RFC_C=$_POST[ "RFC_C"];
            $Nombre_C=$_POST[ "Nombre_C"];
            $Telefono_C=$_POST[ "Telefono_C"] ;
            $Direccion_C=$_POST["Direccion_C"];
            $Ciudad=$_POST["Ciudad"];

            echo 'Llega';

            $sql= "INSERT INTO Clientes VALUES('$RFC_C', '$Nombre_C', '$Telefono_C', '$Direccion_C', '$Ciudad')";
            $link->query($sql);
            echo "Registro exitoso";
?>