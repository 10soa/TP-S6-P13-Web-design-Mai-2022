<?php
function dbconnect()
{
    static $connect = null;
    if ($connect === null)
    {
       // $connect = mysqli_connect('sql313.epizy.com', 'epiz_31733338', 'fZuFYYcwNy0n92', 'epiz_31733338_climat');
        $connect = mysqli_connect('localhost', 'root', 'root', 'climat');
        mysqli_set_charset($connect,"utf8mb4");

    }
    return $connect;
}
?>