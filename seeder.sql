CREATE TABLE 'projects'
(
    `id`          int(11) NOT NULL AUTO_INCREMENT,
    `title`       varchar(80) NOT NULL,
    `description` varchar(256) NOT NULL,
    `created_at`  datetime NOT NULL,
    primary key (`id`)
);

CREATE TABLE 'contacts'
(
    `id`         int(11) NOT NULL AUTO_INCREMENT,
    `name`       varchar(80) NOT NULL,
    `email`      varchar(256) NOT NULL,
    `message`    varchar(256) NOT NULL,
    primary key (`id`)
);

insert into projects (title, description)
values ('Project1', 'This is the first project');

insert into projects (title, description)
values ('Project2', 'This is the second project');

insert into projects (title, description)
values ('Project3', 'This is the third project');

insert into projects (title, description)
values ('Project4', 'This is the fourth project');


insert into contacts (name, email, message)
values ('Bobby', 'bobby@gmail.com', 'hello');

insert into contacts (name, email, message)
values ('Tony', 'tony@gmail.com', 'hi');

insert into contacts (name, email, message)
values ('Sofia', 'sofia@gmail.com', 'hola');

insert into contacts (name, email, message)
values ('Angela', 'angela@gmail.com', 'hey');
