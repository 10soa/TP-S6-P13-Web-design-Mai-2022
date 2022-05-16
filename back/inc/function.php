<?php
include("connection.php");
    function getAdmin($log,$mdp)
    {
        $t=null;
        $j=0;
        $resultats=dbconnect()->query("SELECT * FROM Admin where login='".$log."' and mdp='".$mdp."'");
        $resultats->setFetchMode(PDO::FETCH_OBJ); 
        while( $ligne = $resultats->fetch() ) // on récupère la liste des membres
        {
            $t[$j]['id']=$ligne->id;
            $t[$j]['login']=$ligne->login;
            $t[$j]['mdp']=$ligne->mdp;
            $j++;
        }
        $resultats->closeCursor();   
        return $t;
    }
    function deleteCons($id)
    {
        dbconnect()->exec("delete from ConsequencesFille where idC=".$id);
        dbconnect()->exec("delete from Consequences where id=".$id);
    }
    function insertCons($titre,$info)
    {
        $info=str_replace("'",'"',$info);
        $titre=str_replace("'",'"',$titre);
        $url=str_replace(" ","-",$titre);
        dbconnect()->exec("insert into Consequences values(default,'".$titre."','".$info."')");
       // echo "insert into Consequences values(default,'".$titre."','".$info."',"."'".$url."')";
    }
    function insertConsF($titre,$info,$id)
    {
        $info=str_replace("'",'"',$info);
        $titre=str_replace("'",'"',$titre);
        dbconnect()->exec("insert into ConsequencesFille values(default,'".$titre."',null,'".$info."',".$id.")");
       // echo "insert into Consequences values(default,'".$titre."','".$info."',"."'".$url."')";
    }
    function updateCons($id,$titre,$info)
    {
        $info=str_replace("'",'"',$info);
        $titre=str_replace("'",'"',$titre);
        $url=str_replace(" ","-",$titre);
        dbconnect()->exec("update Consequences set titre='".$titre."',info='".$info."',url='".$url."' where id=".$id);
         //echo "update Consequences set titre='".$titre."',info='".$info,"',url='".$url."' where id=".$id;
    }
    function getDef()
    {
        $t=null;
        $j=0;
        $resultats=dbconnect()->query("SELECT * FROM def");
        $resultats->setFetchMode(PDO::FETCH_OBJ); 
        while( $ligne = $resultats->fetch() ) // on récupère la liste des membres
        {
            $t[$j]['id']=$ligne->id;
            $t[$j]['cat']=$ligne->cat;
            $t[$j]['def']=$ligne->def;
            $j++;
        }
        $resultats->closeCursor();   
        return $t;
    }
    function getHistoire()
    {
        $t=null;
        $j=0;
        $resultats=dbconnect()->query("SELECT * FROM Historiques");
       $resultats->setFetchMode(PDO::FETCH_OBJ); 
        while($ligne=$resultats->fetch())
        {
            $t[$j]['id']=$ligne->id;
            $t[$j]['titre']=$ligne->titre;
            $t[$j]['info']=$ligne->info;
            $j++;
        }
        $resultats->closeCursor();     
        return $t;
    }
    function getLuttes()
    {
        $j=0;
        $t=null;
        $resultats=dbconnect()->query("SELECT * FROM Luttes");
       $resultats->setFetchMode(PDO::FETCH_OBJ); 
        while($ligne=$resultats->fetch())
        {
            $t[$j]['id']=$ligne->id;
            $t[$j]['titre']=$ligne->titre;
            $t[$j]['info']=$ligne->info;
            $j++;
        }
        $resultats->closeCursor();     
        return $t;
    }
    function getCauses()
    {
        $j=0;
        $t=null;
        $resultats=dbconnect()->query("SELECT * FROM Causes");
       $resultats->setFetchMode(PDO::FETCH_OBJ); 
        while($ligne=$resultats->fetch())
        {
            $t[$j]['id']=$ligne->id;
            $t[$j]['titre']=$ligne->titre;
            $t[$j]['info']=$ligne->info;
            $j++;
        }
        $resultats->closeCursor();     
        return $t;
    }
    function getConsequences()
    {
        $j=0;
        $t=null;
        $resultats=dbconnect()->query("SELECT * FROM Consequences");
       $resultats->setFetchMode(PDO::FETCH_OBJ); 
        while($ligne=$resultats->fetch())
        {
            $t[$j]['id']=$ligne->id;
            $t[$j]['titre']=$ligne->titre;
            $t[$j]['info']=$ligne->info;
            $t[$j]['url']=$ligne->url;
            $j++;
        }
        $resultats->closeCursor();     
        return $t;
    }
    function getConsFille($id,$url)
    {
        $j=0;
        $t=null;
        $resultats=dbconnect()->query("SELECT c.titre as cons,f.* FROM ConsequencesFille f join Consequences c on c.id=f.idC where f.idC=".$id." and c.url='".$url."'");
       $resultats->setFetchMode(PDO::FETCH_OBJ); 
        while($ligne=$resultats->fetch())
        {
            $t[$j]['id']=$ligne->id;
            $t[$j]['titre']=$ligne->titre;
            $t[$j]['info']=$ligne->info;
            $t[$j]['cons']=$ligne->cons;
            $t[$j]['img']=$ligne->img;
            $j++;
        }
        $resultats->closeCursor();    
        if($t==null)
        {
            echo "404 not found";
        } 
        return $t;
    }
?>