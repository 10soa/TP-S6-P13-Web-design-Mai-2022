<?php
include("connection.php");
    function getDef()
    {
        $t=null;
        $j=0;
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
        $j=0;
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
        $j=0;
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
        $j=0;
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
        $j=0;
        $t=null;
        $sql="SELECT * FROM Consequences";
        $news_req = mysqli_query(dbconnect(),$sql);
        while($don=mysqli_fetch_assoc($news_req))
        {
            $t[$j]['id']=$don['id'];
            $t[$j]['titre']=$don['titre'];
            $t[$j]['info']=$don['info'];
            $t[$j]['url']=$don['url'];
            $j++;
        }
        mysqli_free_result($news_req);    
        return $t;
    }
    function getConsFille($id,$url)
    {
        $j=0;
        $t=null;
        $sql="SELECT c.titre as cons,f.* FROM ConsequencesFille f join Consequences c on c.id=f.idC where f.idC=".$id." and c.url='".$url."'";
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
        if($t==null)
        {
            echo "404 not found";
        } 
        return $t;
    }
?>