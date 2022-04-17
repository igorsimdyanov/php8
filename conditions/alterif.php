<?php
$ssd = 'Samsung';
if ($ssd == 'Crucial'):
?>
<h1> Crucial </h1>
<?php
elseif ($ssd == 'Kingston'):
?>
<h1> Kingston </h1>
<?php
elseif ($ssd == 'Western Digital'):
?>
<h1> Western Digital </h1>
<?php
else :
?>
<h1> Неизвестный производитель </h1>
<?php
endif;
