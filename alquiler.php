<?php
      $link = new mysqli("localhost", "root", "", "alquileres411");

            $Cod_Al=$_POST[ "Cod_Al"];
            $Fianza=$_POST[ "Fianza"];
            $Fecha_inicio=$_POST[ "Fecha_inicio"] ;
            $Fecha_fin=$_POST["Fecha_fin"];
            $Fecha_Firma=$_POST["Fecha_Firma"];
            $Importe_men=$_POST["Importe_men"];
            $Id_Vivienda=$_POST["Id_Vivienda"];
            $NIF_I=$_POST["NIF_I"];

            echo 'Llega';

            $sql= "INSERT INTO alquiler VALUES('$Cod_Al', '$Fianza', '$Fecha_inicio', '$Fecha_fin', '$Fecha_Firma', '$Importe_men', '$Id_Vivienda', '$NIF_I')";
            $link->query($sql);
            echo "Registro exitoso";
?>