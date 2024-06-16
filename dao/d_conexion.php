<?php
 function conectar($ipservidor,$usuario,$contrasena,$dbb)
 {

   $basededatos= mysqli_connect($ipservidor,$usuario,$contrasena,$dbb);
    if($basededatos==null)
     {
        return null; 
    }
    else
    { 
        return $basededatos;
    }
 }


?>