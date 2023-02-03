<?php $active = $_GET['page'] ?? 1 ;
$order = $_GET['order'] ?? '';
$par = $_GET['par'] ?? '';
?>
<nav aria-label="Page navigation" style="align-self: center;
margin: 10px auto;">
  <ul class="pagination">
<?php
if($active > 1){
?>
                        <li class="page-item prev">
                              <a class="page-link" href="?page=<?=$active -1?>"><i class="tf-icon bx bx-chevrons-left"></i></a>
                            </li>
                      <?php
}
                      if($paginacao['pages'] <=5 ){
                        for($page = 1; $page <= $paginacao['pages']; $page++){
                        
                            ?>
                                                <li class="page-item prev">
                                                <li class="page-item" id="pag<?=$page?>">
                                                  <a class="page-link" href="?page=<?=$page?>&order=<?=$order?>&par=<?=$par?>"><?=$page?></a>
                                                </li>
                                                <?php 
                                           
                                            }
                                           

                      }

                      else{
                        for($page = 1; $page <= $paginacao['pages']; $page++){
                          for($pag = $active; $pag <($active + 5); $pag++){
                          if($pag>=($paginacao['pages'])){
                            break;
                          }
                            ?>
                            <li class="page-item prev">
                                            <li class="page-item" id="pag<?=$pag?>">
                                              <a class="page-link" href="?page=<?=$pag?>&order=<?=$order?>&par=<?=$par?>"><?=$pag?></a>
                                            </li>
                        <?php  }
                          break;
                         }
                      
                      
                     ?>
                     <li class="page-item" id="pag<?=$page?>">
                                                  <a class="page-link" href="?page=<?=$page?>&order=<?=$order?>&par=<?=$par?>">...</a>
                                                </li>
                                                <li class="page-item" id="pag<?=$paginacao['pages']?>">
                                                                             <a class="page-link" href="?page=<?=$paginacao['pages']?>&order=<?=$order?>&par=<?=$par?>"><?=$paginacao['pages']?> </a>
                                                                           </li>
                                                <?php }
                                                if($active < $paginacao['pages']){
                                                  ?>
                                                                             <li class="page-item prev">
                                                         <a class="page-link" href="?page=<?=$active +1?>"><i class="tf-icon bx bx-chevrons-right"></i></a>
                                                       </li>
                                                                        <?php
                                                  }
                                                ?>      
                                                                       
                          </ul>
                        </nav>

<script>
          var active = "<?=$active?>";
          if(!(active)){
              document.getElementById('pag1').classList.add('active');
            }
            document.getElementById('pag'+active).classList.add('active');

</script>