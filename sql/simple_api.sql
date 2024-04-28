drop database if exists simple_api;
create database if not exists simple_api;
use simple_api;

create table if not exists products(
    id int auto_increment not null,
    name varchar(100) not null,
    primary key(id)
);

insert into products(name) values
    ('Motherboard'),
    ('Central processing units (CPU)'),
    ('Random access memories (RAM)'),
    ('Internal solid state drivers (SSD)'),
    ('Graphics processing unit (GPU)'),
    ('Power supply units (PSU)'),
    ('Computer case'),
    ('Monitor'),
    ('Monitor stand'),
    ('Keyboard'),
    ('Mouse'),
    ('Mouse pad');