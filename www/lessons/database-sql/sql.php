-- Structured Query Language --

SELECT statements are a SQL query 

SELECT column1, column2 
FROM table_name;

- Select all -
SELECT *

SELECT * FROM articles

///LAYOUT:
SELECT column2, column2
FROM table_name

---

WHERE clauses - Whenever you use a WHERE in the query,
any columns in the WHERE clause need an index

///LAYOUT:
SELECT column2, column2
FROM table_name
WHERE condition;

WHERE condition AND/OR condition2;

SELECT * FROM article WHERE id = 2


SELECT * 
FROM `article` 
WHERE title = 'An interesting post' 
	OR title = 'First post';

-----

ORDERING the result set - use index if using column for faster results

SELECT column1
FROM table_name
ORDER BY column1, column2; (default is ascending)
ORDER BY column1 DESC;

ex:
$sql = "SELECT *
        FROM article
        ORDER BY published_at;";