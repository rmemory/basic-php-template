This is an example of a very basic template of a PHP website, with rudamentary URL routing, and MVC structure.
It requires access to a mysql database, containing a database "mytodo" and a table titles "todos". I'll leave the 
installation and configuration of both Apache (or other) web server and mysql. But, once the web server is running, 
and mysql is installed, you can create a simple example database and todos table like this:

```
$ mysql -u root -p
mysql> create database mytodo;
mysql> use mytodo;
mysql> create table todos (description text, completed boolean);
mysql> describe todos;
mysql> drop table todos;
mysql> create table todos (id integer PRIMARY KEY AUTO_INCREMENT description text NOT NULL, completed boolean NOT NULL);
mysql> show tables;
mysql> insert into todos (description, completed) values('Got to the store', false);
mysql> select * from todos;
mysql> update todos set description='Go to the store' where id=1;
mysql> insert into todos (description, completed) values('Make the bed', false);
mysql> insert into todos (description, completed) values('Clean house', false);
mysql> update todos set completed=true where id=1;

mysql> use mytodo; 
mysql> create table users (id integer PRIMARY KEY AUTO_INCREMENT, names text NOT NULL);
mysql> select * users;
```

The code in this repo can then be checked out in to the root location of a web server, add the proper mysql password to
config.php, and it should work.
