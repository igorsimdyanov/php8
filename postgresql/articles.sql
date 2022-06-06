CREATE TABLE articles (
  id SERIAL,
  title VARCHAR(40),
  body TEXT,
  user_id INTEGER,
  created_at TIMESTAMP,
  updated_at TIMESTAMP
);
