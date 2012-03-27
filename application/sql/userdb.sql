create table user(
id int not null auto_increment,
name char(32) not null, 
primary key(id));

insert into user(name) values('user1'), ('user2'), ('user3'), ('user4');