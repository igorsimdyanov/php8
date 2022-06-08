CREATE TABLE news (
  id SERIAL,
  name TEXT NOT NULL,
  putdate TIMESTAMP NOT NULL
);

CREATE TABLE news_contents (
  id SERIAL,
  content TEXT NOT NULL,
  news_id INTEGER NOT NULL
);
