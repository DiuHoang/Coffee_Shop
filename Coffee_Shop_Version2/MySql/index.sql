drop database coffee_shop;
create database coffee_shop;
use coffee_shop;

create table users(
	id int(11) auto_increment primary key,
    username varchar(50),
    fullName varchar(100),
    email varchar(100),
    password varchar(50),
    gender varchar(10)
);

insert into users values(1, "admin", "Admintrator", "admin@gmail.com", "admin", "Female");
insert into users values(2, "diu", "Hoang Diu", "diu@gmail.com", "diu", "Female");
insert into users values(3, "huong", "Huong Ho", "huong@gmail.com", "huong", "Male");
select * from users;
create table products(
	id int(11) auto_increment primary key,
    name varchar(100),
    price float,
    size varchar(5),
    image varchar(100)
);

insert into products values (1, "CaCao Nalee Slim", 600000, "M", "Images/cacao-nalee-slim.jpg");
insert into products values (2, "Capochino Korean", 500000, "M", "Images/capochino.jpg");
insert into products values (3, "Matcha Tiramisu", 600000, "M", "Images/matcah-tiramisu.jpg");
insert into products values (4, "Coffee Dang", 800000, "L", "Images/cafe-dang.jpg");
insert into products values (5, "Nuoc Ep Ha Noi", 800000, "L", "Images/nuoc-ep.jpg");
insert into products values (6, "CaCao Nalee Slim", 600000, "M", "Images/cacao-nalee-slim.jpg");
insert into products values (7, "Capochino Korean", 500000, "M", "Images/capochino.jpg");
insert into products values (8, "Matcha Tiramisu", 600000, "M", "Images/matcah-tiramisu.jpg");
insert into products values (9, "Coffee Dang", 800000, "L", "Images/cafe-dang.jpg");
insert into products values (10, "Nuoc Ep Ha Noi", 800000, "L", "Images/nuoc-ep.jpg");

create table order_list(
	id int(11) auto_increment primary key,
    id_user int(11) not null,
    id_product int(11) not null,
    quantity int(4),
    
    foreign key (id_user) references users(id),
    foreign key (id_product) references products(id)
);
insert into order_list values(1, 2, 5, 1);
select * from order_list;
select u.fullName as NameOfCus, u.email as EmailOfCus, p.name as NameOfProduct, p.image, p.price, o.quantity from order_list as o, users as u, products as p 
where u.id = o.id and o.id = p.id;
