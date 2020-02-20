CREATE TABLE Cookies (
      id SERIAL NOT NULL PRIMARY KEY
    , display_name VARCHAR(30)
    , price NUMERIC (5,2)
);

CREATE TABLE Soda (
      id SERIAL NOT NULL PRIMARY KEY
    , display_name VARCHAR(30)
    , price NUMERIC (5,2)
    , yes_no BIT
);

CREATE TABLE Soaps (
      id SERIAL NOT NULL PRIMARY KEY
    , display_name VARCHAR(30)
    , price NUMERIC (5,2)
);

CREATE TABLE Chocolate (
      id SERIAL NOT NULL PRIMARY KEY
    , display_name VARCHAR(30)
    , price NUMERIC (5,2)
    , ounces NUMERIC (5,2)
);

CREATE TABLE Gum (
    id SERIAL NOT NULL PRIMARY KEY
    , display_name VARCHAR(30)
    , price NUMBER
    , pieces INTEGER
);