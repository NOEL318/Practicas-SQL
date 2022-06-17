<?php
      $link = new mysqli("localhost", "root", "", "alquileres411");

            $Matricula=$_POST[ "Matricula"];
            $Marca=$_POST[ "Marca"];
            $Modelo=$_POST[ "Modelo"] ;
            $Precio=$_POST["Precio"];
            $Color=$_POST["Color"];
            $RFC_C=$_POST["RFC_C"];

            echo 'Llega';

            $sql= "INSERT INTO Coches VALUES('$Matricula', '$Marca', '$Modelo', '$Precio', '$Color', '$RFC_C')";
            $link->query($sql);
            echo "Registro exitoso";
?>