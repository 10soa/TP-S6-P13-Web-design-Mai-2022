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
        $sql="SELECT * FROM Luttes";
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
    function getCauses()
    {
        $t=null;
        $sql="SELECT * FROM Causes";
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
    function getConsequences()
    {
        $t=null;
        $sql="SELECT * FROM Consequences";
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
    function getConsFille($id)
    {
        $t=null;
        $sql="SELECT c.titre as cons,f.* FROM ConsequencesFille f join Consequences c on c.id=f.idC where f.idC=".$id;
        $news_req = mysqli_query(dbconnect(),$sql);
        while($don=mysqli_fetch_assoc($news_req))
        {
            $t[$j]['id']=$don['id'];
            $t[$j]['titre']=$don['titre'];
            $t[$j]['info']=$don['info'];
            $t[$j]['cons']=$don['cons'];
            $t[$j]['img']=$don['img'];
            $j++;
        }
        mysqli_free_result($news_req);    
        return $t;
    }
?>