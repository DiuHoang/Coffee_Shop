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

create table orders(
	id int(11) auto_increment primary key,
    name_cus varchar(50),
    address_cus varchar(70),
    phone_cus int(12),
    size_product varchar(3),
    quantity_product int(40),
    id_product int,

    foreign key (id_product) references products(id)
);

INSERT INTO orders VALUES (1, "diu", "Quang Binh" , 0986535, "M", 2, 2);
select o.id, o.name_cus, o.address_cus, o.phone_cus, o.size_product, o.quantity_product, p.name, p.price from orders as o, products as p 
where o.id = p.id;
