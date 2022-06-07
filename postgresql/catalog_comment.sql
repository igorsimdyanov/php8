DROP TABLE IF EXISTS catalogs;
CREATE TABLE catalogs (
  id INTEGER NOT NULL,
  name TEXT NOT NULL
);
COMMENT ON TABLE catalogs IS 'Разделы интернет-магазина';
COMMENT ON COLUMN catalogs.id IS 'Первичный ключ';
COMMENT ON COLUMN catalogs.name IS 'Название раздела';
