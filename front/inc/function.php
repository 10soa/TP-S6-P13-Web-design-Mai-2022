<?php
include("connection.php");
    function getDef()
    {
        $t=null;
        $sql="SELECT * FROM def";
        $news_req = mysqli_query(dbconnect(),$sql);
        while($don=mysqli_fetch_assoc($news_req))
        {
            $t[$j]['id']=$don['id'];
            $t[$j]['cat']=$don['cat'];
            $t[$j]['def']=$don['def'];
            $j++;
        }
        mysqli_free_result($news_req);    
        return $t;
    }
    function getHistoire()
    {
        $t=null;
        $sql="SELECT * FROM Historiques";
        $news_req = mysqli_query(dbconnect(),$sql);
        while($don=mysqli_fetch_assoc($news_req))
        {
            $t[$j]['id']=$don['id'];
            $t[$j]['titre']=$don['titre'];
            $t[$j]['info']=$don['info'];
            $j++;
        }
        mysqli_free_result($news_req);    
        return $t;
    }
    function getLuttes()
    {
        $t=null;
        $sql="SELECT * FROM Historiques";
        $news_req = mysqli_query(dbconnect(),$sql);
        while($don=mysqli_fetch_assoc($news_req))
        {
            $t[$j]['id']=$don['id'];
            $t[$j]['titre']=$don['titre'];
            $t[$j]['info']=$don['info'];
            $j++;
        }
        mysqli_free_result($news_req);    
        return $t;
    }
?>