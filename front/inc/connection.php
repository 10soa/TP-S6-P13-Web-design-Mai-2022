<?php
function dbconnect()
{
    static $connect = null;
    if ($connect === null)
    {
        // $connect = mysqli_connect('sql211.epizy.com', 'epiz_28269328', 'QVSVaAYcrJ3w', 'epiz_28269328_commerce');
        $connect = mysqli_connect('localhost', 'root', 'root', 'climat');

    }
    return $connect;
}
?>