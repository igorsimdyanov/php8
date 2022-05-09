<?php
echo "<a href='page.php'>Ссылка на страницу PHP</a><br />";
if(isset($_SERVER['HTTP_REFERER'])) {
    echo $_SERVER['HTTP_REFERER'];
}
