/*
Удаляем таблицу, если она была создана ранее
Для этого в операторе DROP TABLE добавляем 
ключевое слово IF EXISTS
*/
DROP TABLE IF EXISTS catalogs;
/*
Создание таблицы catalogs для хранения разделов
Интернет-магазина
*/
CREATE TABLE catalogs (
  id INTEGER NOT NULL, -- Первичный ключ
  name TEXT NOT NULL   -- Название каталога
);
