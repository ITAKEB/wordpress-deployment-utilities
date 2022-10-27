-- sudo mysql -u root -p

create database wordpress;

create user "wordpress"@"%" identified by "password";

grant all privileges on wordpress.* to "wordpress"@"%";

use wordpress;
create table product_table(id int not null auto_increment primary key, name varchar(50) not null, price int);

create table comment_table(id int not null primary key, p_id int, comment varchar(500), FOREIGN KEY (p_id) REFERENCES product_table(id));