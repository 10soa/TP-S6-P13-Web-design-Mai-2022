<?php
function dbconnect()
{
   /* static $connect = null;
    if ($connect === null)
    {
       // $connect = mysqli_connect('sql313.epizy.com', 'epiz_31733338', 'fZuFYYcwNy0n92', 'epiz_31733338_climat');
        $connect = mysqli_connect('localhost', 'root', 'root', 'climat');
        mysqli_set_charset($connect,"utf8mb4");

    }
    return $connect;*/
   // $user='postgres';
   // $pass='kalisi61';
       $user='yayhqisfnzoxqi';
       //$dsn='pgsql:host=localhost;port=5432;dbname=climat1';
       $dsn='pgsql:host=ec2-54-228-32-29.eu-west-1.compute.amazonaws.com;port=5432;dbname=dbj5286g25hi9d';
       $pass='399361126a6f51ca153633b0a4633b098205f72f3ebd4e83c1bb0b37816000dd';
       try {
        	$dbh = new PDO($dsn, $user, $pass);
            $dbh->exec("SET client_encoding='UTF8'");
        	//print "Connecte ";
       //     pg_set_client_encoding($dbh,"utf-8");
        	return $dbh;
      } catch (PDOException $e) {
       	print "Erreur ! : " . $e->getMessage();
        	die();
       }

}
?>