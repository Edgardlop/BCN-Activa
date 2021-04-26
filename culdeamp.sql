
-- -----------------------------------------------------
--  Borra el Schema culdeamp si existe
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS culdeamp ;

-- -----------------------------------------------------
-- Crea el Schema culdeamp
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS culdeamp  ;
-- -----------------------------------------------------
-- Indicamos que utilizaremos la base de datos culdeamp
-- -----------------------------------------------------
USE culdeamp ;

-- -----------------------------------------------------
-- Si la Tabla Cliente existe la borramos
-- -----------------------------------------------------
DROP TABLE IF EXISTS Cliente ;

-- -----------------------------------------------------
-- Si la Tabla Cliente no existe la creaamos
-- -----------------------------------------------------
CREATE TABLE  Cliente (
  ID_Cliente INT NOT NULL AUTO_INCREMENT,
  NombreCli VARCHAR(45) NOT NULL,
  ApellidoCli VARCHAR(45) NOT NULL,
  DireccioCli TEXT(50) NOT NULL,
  TelefonoCli VARCHAR(45) NULL DEFAULT NULL,
  EmailCli VARCHAR(45) NULL DEFAULT NULL,
  RegisCli DATE NOT NULL,  PRIMARY KEY (ID_Cliente))
;

-- 
-- drop table	Cliente;
--

-- -----------------------------------------------------
-- Crea Tabla Proveedo
-- -----------------------------------------------------

CREATE TABLE Proveedor (
  id_Proveedor INT NOT NULL AUTO_INCREMENT,
  Nombre_Provee VARCHAR(50) NOT NULL,
  Calle_Provee VARCHAR(45) NOT NULL,
  NumeroCalle_Provee INT NOT NULL,
  Piso_Prove VARCHAR(15) NOT NULL,
  Puerta_Provee VARCHAR(10) NOT NULL,
  CiudadProvee VARCHAR(45) NOT NULL,
  CodPos_Provee INT NOT NULL,
  Pais_Provee VARCHAR(45) NOT NULL,
  Telef_Provee VARCHAR(20) NOT NULL,
  Fax_Provee INT(20) NOT NULL,
  NIF_Provee VARCHAR(10) NOT NULL,
  PRIMARY KEY (id_Proveedor));



-- -----------------------------------------------------
-- Crea Tabla Gafas
-- -----------------------------------------------------

CREATE TABLE Gafas (
  ID_Gafas INT NOT NULL AUTO_INCREMENT,
  Marca_gaf VARCHAR(45) NOT NULL,
  Graduacion_Iz_Gafa FLOAT NOT NULL,
  Graduacion_Der_Gafa FLOAT NOT NULL,
  Montura_Gafas VARCHAR(10) NOT NULL,
  Color_Mont_Gafa VARCHAR(10) NOT NULL,
  Color_Xtal_Gafa VARCHAR(45) NOT NULL,
  Precio_Gafa DECIMAL(10) NOT NULL,
  PRIMARY KEY (ID_Gafas),
  CONSTRAINT id_Proveedor
    FOREIGN KEY (ID_Gafas)
    REFERENCES culdeamp.Proveedor (id_Proveedor)
   );

-- -----------------------------------------------------
-- Creamos la Tabla Vendedor
-- -----------------------------------------------------


CREATE TABLE Vendedor (
  id_Vendedor INT NOT NULL AUTO_INCREMENT,
  Nombre_Ven VARCHAR(45) NOT NULL,
  Apellido_vende VARCHAR(45) NOT NULL,
  PRIMARY KEY (id_Vendedor));

-- ---------------------
-- Crea la Tabla Ventas
-- ---------------------

CREATE TABLE Ventas (
  ID_Ventas INT (10) NOT NULL AUTO_INCREMENT,
  Fecha_venta date ,
  ID_Cliente int(10) ,
  ID_Vendedor int(10) ,
  ID_Gafas int(10) ,
  PRIMARY KEY (ID_Ventas),
  CONSTRAINT ID_Cliente
    FOREIGN KEY (ID_Ventas)
    REFERENCES Cliente (ID_Cliente)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT ID_Vendedor
    FOREIGN KEY (ID_Ventas)
    REFERENCES Vendedor (id_Vendedor)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT ID_Gafas
    FOREIGN KEY (ID_Ventas)
    REFERENCES Gafas (ID_Gafas)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);

-- -----------------------------------------------------
-- Crear Tabla Montura_Gafas
-- -----------------------------------------------------
 -- DROP TABLE Montura_Gafas;
 
 
CREATE TABLE Monturas (
  ID_Montura_Gafas INT NOT NULL,
  Mont_metal TINYTEXT not NULL,
  Mon_madera TINYTEXT NOT NULL,
  Mon_Plastic TINYTEXT NOT NULL,
  PRIMARY KEY (ID_Montura_Gafas),
  CONSTRAINT id_proveedor
    FOREIGN KEY (ID_Montura_Gafas)
    REFERENCES Proveedor (id_Proveedor)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);


