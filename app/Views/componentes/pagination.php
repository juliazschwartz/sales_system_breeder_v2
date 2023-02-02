<?php $active = $_SERVER['REQUEST_URI'] ;
?>
<nav aria-label="Page navigation" style="align-self: center;
margin: 10px auto;">
                      <ul class="pagination">
                  
                      <?php for($page = 1; $page <= $paginacao['pages']; $page++){
                        
        ?>
                            <li class="page-item prev">
                            <li class="page-item" id="pag<?=$page?>">
                              <a class="page-link" href="?page=<?=$page?>"><?=$page?></a>
                            </li>
                            <?php }
                            ?>
                            
                          </ul>
                        </nav>

<script>
          var active = "<?=$active?>".split('page=')[1];
          document.getElementById('pag'+active).classList.add('active');

</script>