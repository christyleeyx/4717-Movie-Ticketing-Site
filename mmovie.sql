drop table if exists customer;
create table if not exists customer (
  user_ID int unsigned not null auto_increment primary key,
  uname varchar(50) not null,
  email varchar(50) not null,
  phone varchar(8)  not null,
  UNIQUE (phone)
);

drop table if exists movie;
create table if not exists movie (
  movie_ID int unsigned not null auto_increment primary key,
  title varchar(50) not null,
  poster_link varchar(500) not null,
  moviedescription text not null,
  trailer_link varchar(500) not null,
  gallery_link varchar(500) not null
);

drop table if exists shows;
create table if not exists shows (
  show_ID int unsigned not null auto_increment primary key,
  showdate date not null,
  showtiming varchar(8) not null,
  movie_ID int unsigned not null,
  FOREIGN KEY (movie_ID) REFERENCES movie(movie_ID)
);

drop table if exists show_seat;
create table if not exists show_seat (
  show_seat_ID int unsigned not null auto_increment primary key,
  show_ID int unsigned not null,
  seat varchar(8) not null,
  order_no int unsigned not null,
  seatstatus int unsigned not null,
  FOREIGN KEY (show_ID) REFERENCES shows(show_ID)
);

drop table if exists orders;
create table if not exists orders (
  order_no int unsigned not null auto_increment primary key,
  user_ID int unsigned not null,
  uname varchar(50) not null,
  phone varchar(8) not null,
  show_ID int unsigned not null,
  FOREIGN KEY (user_ID) REFERENCES customer(user_ID),
  FOREIGN KEY (show_ID) REFERENCES shows(show_ID),
  UNIQUE (phone)
);

