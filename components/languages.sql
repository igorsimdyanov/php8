CREATE TABLE languages (
  id SERIAL,
  name TEXT NOT NULL
);
INSERT INTO
  languages (name)
VALUES
  ('C++'), ('Pascal'), ('Perl'),
  ('PHP'), ('C#'), ('Visual Basic'),
  ('BASH'), ('Python'), ('Ruby'),
  ('SQL'), ('Fortran'), ('JavaScript'),
  ('Lua'), ('UML'), ('Java');
