<?php
function treeRmdir($directory)
{
    $dir = opendir($directory);
    while (($file = readdir($dir)) !== false) {
        // Если функция readdir() вернула файл — удаляем его
        if (is_file("$directory/$file")) {
            unlink("$directory/$file");
        }
        // Если функция readdir() вернула каталог, и он
        // не равен текущему или родительскому — осуществляем
        // рекурсивный вызов full_del_dir() для этого каталога
        elseif (is_dir("$directory/$file") &&
                $file != "." &&
                $file != "..")
        {
            treeRmdir("$directory/$file");
        }
   }
   closedir($dir);
   rmdir($directory);
}

treeRmdir('temp');
