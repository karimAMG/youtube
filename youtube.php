 <?php
$id = $_POST['id'];
$format = $_POST['format'];
echo '<center><iframe 
style="width:100%;min-width:200px;max-width:350px;height:57px;border:0;overflow:hidden;" 
scrolling="no" 
src="//ytbapi.com/dl.php?link='.$id.'&format='.$format.'&text=fff&color=ff5722">
</iframe></center><br><br><br>';
?>