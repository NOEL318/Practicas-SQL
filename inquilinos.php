<?php
      $link = new mysqli("localhost", "root", "", "alquileres411");

            $NIF_I=$_POST[ "NIF_I"];
            $Nombre_I=$_POST[ "Nombre_I"];
            $Apellidos_I=$_POST[ "Apellidos_I"] ;
            $Telefono_I=$_POST["Telefono_I"];
            $Direccion_I=$_POST["Direccion_I"];
            $Fecha_Nac=$_POST["Fecha_Nac"];


            echo 'Llega';

            $sql= "INSERT INTO inquilino VALUES('$NIF_I', '$Nombre_I', '$Apellidos_I', '$Telefono_I', '$Direccion_I', '$Fecha_Nac')";
            $link->query($sql);
            echo "Registro exitoso";
?>