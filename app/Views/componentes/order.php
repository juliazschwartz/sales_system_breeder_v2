<?php $order = '';
if(isset($_GET['order'])){
  $_GET['order'] == 'asc' ? $order = 'desc' : $order = 'asc';
}
?>