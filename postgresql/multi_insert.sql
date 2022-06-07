DROP TABLE IF EXISTS catalogs;
CREATE TABLE catalogs (
  id SERIAL,
  name TEXT NOT NULL
);
INSERT INTO catalogs
  (name)
VALUES
  ('Процессоры'),
  ('Материнские платы'),
  ('Видеоадаптеры'),
  ('Жесткие диски'),
  ('Оперативная память');
