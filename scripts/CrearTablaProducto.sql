USE iaw_db;
CREATE TABLE productos (
codigo integer primary key,
descripcion varchar(128),
rebaja integer,
estarebajas integer,
precio integer
);