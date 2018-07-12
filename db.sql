create database PRUEBAPHP;
use PRUEBAPHP;

create table T_USER(
    ID_USER int primary key auto_increment,
    NAME_USER varchar(100),
    PASS varchar(100)
);

insert into T_USER(NAME_USER, PASS) values('Daniel', '81dc9bdb52d04dc20036dbd8313ed055');
SELECT * FROM T_USER;

create table T_VIDEO(
    ID_VIDEO int primary key auto_increment,
    URL_VIDEO varchar(255),
    NAME_VIDEO varchar(100)
);

truncate table T_VIDEO;

insert into T_VIDEO(URL_VIDEO, NAME_VIDEO) values('https://player.vimeo.com/video/279534075', 'Video de prueba 1');
insert into T_VIDEO(URL_VIDEO, NAME_VIDEO) values('https://player.vimeo.com/video/279533264', 'Video de prueba 2');
insert into T_VIDEO(URL_VIDEO, NAME_VIDEO) values('https://player.vimeo.com/video/279535500', 'Video de prueba 3');
insert into T_VIDEO(URL_VIDEO, NAME_VIDEO) values('https://player.vimeo.com/video/279534791', 'Video de prueba 4');
insert into T_VIDEO(URL_VIDEO, NAME_VIDEO) values('https://player.vimeo.com/video/279534075', 'Video de prueba 5');
select * from T_VIDEO;

create table T_LOG(
    ID_LOG int primary key auto_increment,
    ID_USER int,
    IP varchar(15),
    DATE_REGISTER datetime,
    MSG varchar(255),
    TYPE_LOG varchar(20),
    BROWSER varchar(255),
    foreign key(ID_USER) references T_USER(ID_USER)
);
