CREATE TABLE Cookies (
      id SERIAL NOT NULL PRIMARY KEY
    , display_name VARCHAR(30)
    , 
);

CREATE TABLE Soda (
      id SERIAL NOT NULL PRIMARY KEY
    , display_name VARCHAR(30)
);

CREATE TABLE Soaps (
      id SERIAL NOT NULL PRIMARY KEY
    , display_name VARCHAR(30)
);

CREATE TABLE Chocolate (
      id SERIAL NOT NULL PRIMARY KEY
    , display_name VARCHAR(30)
);

CREATE TABLE Gum (
    id SERIAL NOT NULL PRIMARY KEY
    , display_name VARCHAR(30)
);