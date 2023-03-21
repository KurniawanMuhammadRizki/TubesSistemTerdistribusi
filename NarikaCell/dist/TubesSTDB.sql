create database TubesSTDB;
use TubesSTDB;
create table pulsa(
	nomer varchar(20),
    operator varchar(20),
    nominal varchar (20),
    pembayaran varchar(20));
select * from pulsa;
alter table pulsa add primary key(nomer);
alter table pulsa modify pembayaran varchar(50);

create table token(
	noid varchar(20) primary key,
    nominal varchar(20));
ALTER TABLE token
ADD COLUMN pembayaran varchar(20);
select * from token;