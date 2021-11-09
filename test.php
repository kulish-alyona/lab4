Тест 1:
<?php
echo "Hello, World!<br>"
?>


Тест 2:
<?php echo 2+2 ?>


<?php

$f=fopen("count.txt","a+");
flock($f,LOCK_EX);
$count=fread($f,100);
@$count++;
ftruncate($f,0);
fwrite($f,$count);
fflush($f);
flock($f,LOCK_UN);
fclose($f);

?>


<?php

$f=fopen("count.txt","a+");
flock($f,LOCK_EX);
$count=fread($f,100);
flock($f,LOCK_UN);
fclose($f);

echo "<br> Количество посещений: $count"; 
?>