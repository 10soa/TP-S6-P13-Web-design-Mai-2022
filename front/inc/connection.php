<?php
function dbconnect()
{
    static $connect = null;
    if ($connect === null)
    {
        // $connect = mysqli_connect('sql311.epizy.com', 'epiz_31730890', '24wbiixyb9', 'epiz_31730890_climat');
        $connect = mysqli_connect('localhost', 'root', 'root', 'climat');
        mysqli_set_charset($connect,"utf8mb4");

    }
    return $connect;
}
?>