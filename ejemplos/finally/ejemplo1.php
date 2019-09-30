<?php
    try
    {
        echo "Bloque try\n";
        throw new Exception ();
    }
    catch (Exception $ex)
    {
        echo "Excepcion cazada\n";
    }
    finally
    {
        echo "Bloque finally\n";
    }