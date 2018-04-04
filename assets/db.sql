create table login(
	log_id int auto_increment primary key,
	login_name varchar(100),
	log_mobile bigint,
	log_email varchar(100),
	log_pass varchar(100),
	log_time timestamp
);

create table login(

ca_id int auto_increment primary key,
ca_name varchar(100),
ca_time timestamp
);

create table brand(
br_id int auto_increment primary key,
br_name varchar(100),
br_time timestamp
);
create table wishlist (
wi_id int auto_increment primary key,
wi_pid int,
wi_uid int,
wi_time timestamp
);


create table product(
p_id int auto_increment primary key,
p_name text,
p_mrp decimal(8,2),
p_dis tinyint,
p_caid int,
p_brid int,
p_imgpath text,
p_desc longtext,
p_time timestamp
);


