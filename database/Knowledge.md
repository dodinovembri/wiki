# Knowledge
```sql
CREATE TABLE knowledge(
	id INT NOT NULL AUTO_INCREMENT,
	status INT NULL DEFAULT '1',
	created_at DATETIME NOT NULL,
	modified_at DATETIME NULL,
	creator_id INT NULL,
	modifier_id INT NULL,
	title TEXT NULL,
	knowledge TEXT NULL,
	PRIMARY KEY (id)
)
```