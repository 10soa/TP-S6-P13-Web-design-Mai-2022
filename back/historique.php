<?php
    $achat=getHistoire();
?>
<div class="">
    <div class="page-title">
        <div class="title_left">
            <h3><small>Historiques</small></h3>
        </div>
        
    </div>
    <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Liste</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li>
                        <a href="template1.php?page=insertCause" > <button class="btn btn-danger btn-sm"> Ajouter </button></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">

                 

                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                           
                            <th class="column-title">titre</th>
                            <th class="column-title">information</th>
                            <th class="column-title"></th>
                            <th class="column-title"></th>
                          </tr>
                        </thead>

                        <tbody>
                            <?php for($i=0;$i<count($achat);$i++) {  
                               $achat[$i]['titre']=str_replace('"',"'",$achat[$i]['titre']);   
                            ?>
                                
                            <td class=""><?php echo $achat[$i]['titre'] ?></td>
                            <td class=""><?php echo $achat[$i]['info'] ?> </td>
                         <td class=""><a href="template1.php?page=updateHis&id=<?php echo $achat[$i]['id'] ?>&titre=<?php echo $achat[$i]['titre'] ?>" > <button class="btn btn-danger btn-sm"> Modifier </button></a></td>
                            <td class=""><a href="traitement.php?deleteHis&id=<?php echo $achat[$i]['id'] ?>  " > <button class="btn btn-danger btn-sm">Supprimer </button></a> </td>
                             </tr>
                            <?php } ?>
                        </tbody>
                      </table>
                    </div>
							
					
                  </div>
                </div>
              </div>
</div>