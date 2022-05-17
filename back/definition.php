<?php
    $achat=getDef();
?>
<div class="">
    <div class="page-title">
        <div class="title_left">
            <h3><small>Definitions</small></h3>
        </div>
        
    </div>
    <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Liste</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li>
                        <a href="template1.php?page=insertDef" > <button class="btn btn-danger btn-sm"> Ajouter </button></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">

                 

                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                           
                            <th class="column-title">categorie</th>
                            <th class="column-title">definiton</th>
                            <th class="column-title"></th>
                            <th class="column-title"></th>
                          </tr>
                        </thead>

                        <tbody>
                            <?php for($i=0;$i<count($achat);$i++) {  
                               $achat[$i]['cat']=str_replace('"',"'",$achat[$i]['cat']);   
                            ?>
                                
                            <td class=""><?php echo $achat[$i]['cat'] ?></td>
                            <td class=""><?php echo $achat[$i]['def'] ?> </td>
                         <td class=""><a href="template1.php?page=updateDef&id=<?php echo $achat[$i]['id'] ?>&titre=<?php echo $achat[$i]['cat'] ?>" > <button class="btn btn-danger btn-sm"> Modifier </button></a></td>
                            <td class=""><a href="traitement.php?deleteDef&id=<?php echo $achat[$i]['id'] ?>  " > <button class="btn btn-danger btn-sm">Supprimer </button></a> </td>
                             </tr>
                            <?php } ?>
                        </tbody>
                      </table>
                    </div>
							
					
                  </div>
                </div>
              </div>
</div>