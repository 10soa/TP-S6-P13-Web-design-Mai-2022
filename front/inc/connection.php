<?php
function dbconnect()
{
    static $connect = null;
    if ($connect === null)
    {
        $connect = mysqli_connect('sql102.epizy.com', 'epiz_31733066', 'axZERye66dbS', 'epiz_31733066_climat');
       // $connect = mysqli_connect('localhost', 'root', 'root', 'climat');
        mysqli_set_charset($connect,"utf8mb4");

    }
    return $connect;
}
?>