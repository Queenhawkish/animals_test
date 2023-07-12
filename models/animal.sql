#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: type
#------------------------------------------------------------

CREATE TABLE type(
        id_type Int  Auto_increment  NOT NULL ,
        Type    Varchar (50)
	,CONSTRAINT type_PK PRIMARY KEY (id_type)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: race
#------------------------------------------------------------

CREATE TABLE race(
        id_race   Int  Auto_increment  NOT NULL ,
        Race      Varchar (50) NOT NULL ,
        Type_race Varchar (50) NOT NULL ,
        id_type   Int NOT NULL
	,CONSTRAINT race_PK PRIMARY KEY (id_race)

	,CONSTRAINT race_type_FK FOREIGN KEY (id_type) REFERENCES type(id_type)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: sex
#------------------------------------------------------------

CREATE TABLE sex(
        id_sex Int  Auto_increment  NOT NULL ,
        Sex    Varchar (50) NOT NULL
	,CONSTRAINT sex_PK PRIMARY KEY (id_sex)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: color
#------------------------------------------------------------

CREATE TABLE color(
        id_color Int  Auto_increment  NOT NULL ,
        Color    Varchar (50) NOT NULL
	,CONSTRAINT color_PK PRIMARY KEY (id_color)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: animals
#------------------------------------------------------------

CREATE TABLE animals(
        id_animal    Int  Auto_increment  NOT NULL ,
        name         Varchar (50) NOT NULL ,
        animal_type  Varchar (50) NOT NULL ,
        animal_race  Varchar (50) NOT NULL ,
        animal_sex   Varchar (50) NOT NULL ,
        animal_color Varchar (50) NOT NULL ,
        weight       Int NOT NULL ,
        tattoo       Bool NOT NULL ,
        chip         Bool NOT NULL ,
        date         Date NOT NULL ,
        id_type      Int NOT NULL ,
        id_color     Int NOT NULL ,
        id_sex       Int NOT NULL ,
        id_race      Int NOT NULL
	,CONSTRAINT animals_PK PRIMARY KEY (id_animal)

	,CONSTRAINT animals_type_FK FOREIGN KEY (id_type) REFERENCES type(id_type)
	,CONSTRAINT animals_color0_FK FOREIGN KEY (id_color) REFERENCES color(id_color)
	,CONSTRAINT animals_sex1_FK FOREIGN KEY (id_sex) REFERENCES sex(id_sex)
	,CONSTRAINT animals_race2_FK FOREIGN KEY (id_race) REFERENCES race(id_race)
)ENGINE=InnoDB;

