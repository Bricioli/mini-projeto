<?php 

print "<button type='button' class='btn btn-dark btn-lg mt-3' onclick=\"if(getDay() == 5 && hour() > 7 ){alert('Não é possivel criar tarefas as sextas depois das 13hs');}else{false;}\">Enviar</button>";
print date("D/m/Y/H:i");

?>