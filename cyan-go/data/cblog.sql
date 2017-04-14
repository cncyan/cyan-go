CREATE DATABASE IF NOT EXISTS `cyanblog`;
USE `cyanblog`;
--admintable
DROP TABLE IF EXISTS `cb_admin`;
CREATE TABLE `cb_admin`(
`id` tinyint unsigned auto_increment key,
`username` varchar(20) not null unique,
`password` char(50) not null,
`email` varchar(50) not null
);
--articlecate
DROP TABLE IF EXISTS `cb_acate`;
CREATE TABLE `cb_acate`(
`id` int unsigned auto_increment key,
`acname` varchar(50) unique
);

--article
DROP TABLE IF EXISTS `cb_article`;
CREATE TABLE `cb_article`(
`id` int unsigned auto_increment key,
`aname` varchar(50) not null unique,
`asn` varchar(50) not null,
`adesc` text,
`atime` int unsigned not null,
`aid` int unsigned not null
);

--projectcate
DROP TABLE IF EXISTS `cb_pcate`;
CREATE TABLE `cb_pcate`(
`id` int unsigned auto_increment key,
`pcname` varchar(50) unique
);

--project
DROP TABLE IF EXISTS `cb_project`;
CREATE TABLE `cb_project`(
`id` int unsigned auto_increment key,
`pname` varchar(50) not null unique,
`psn` varchar(50) not null,
`pdesc` text,
`ptime` int unsigned not null,
`pid` int unsigned not null
);
--imgs第一版可能不用
DROP TABLE IF EXISTS `cb_pimg`;
CREATE TABLE `cb_pimg`(
`id` int unsigned auto_increment key,
`mid` int not null,
`imgpath` varchar(50) not null
);

alter table cb_project add column snimg varchar(30);
alter table cb_article add column asnimg varchar(30);
