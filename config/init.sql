create database dotinstall_sns_php;

grant all on dotinstall_sns_php.* to dbuser@localhost identified by 'mu4uJsif';

use dotinstall_sns_php

create table users (
  id INT NOT NULL auto_increment PRIMARY KEY,
  email VARCHAR(255) UNIQUE ,
  password VARCHAR(255),
  created datetime,
  modified datetime
);

DESC users;