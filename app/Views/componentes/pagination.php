<?php $active = $_GET['page'] ?? '' ;
$order = $_GET['order'] ?? '';
$par = $_GET['par'] ?? '';
?>
<nav aria-label="Page navigation" style="align-self: center;
margin: 10px auto;">
                      <ul class="pagination">
                  
                      <?php for($page = 1; $page <= $paginacao['pages']; $page++){
                        
        ?>
                            <li class="page-item prev">
                            <li class="page-item" id="pag<?=$page?>">
                              <a class="page-link" href="?page=<?=$page?>&order=<?=$order?>&par=<?=$par?>"><?=$page?></a>
                            </li>
                            <?php }
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