CREATE TABLE pokedex(
    Numero_Pokemon int(11) primary key,
    Nome varchar(30) not null,
    Tipo_Primario varchar(30) not null,
    Tipo_Secondario varchar(30) not null,
    Prima_Abilità varchar(15) not null,
    Seconda_abilità varchar(15) not null,
    Abilità_Nascosta  varchar(15) not null,
    PS int(3) not null,
    Attacco int(3) not null,
    Difesa int(3) not null,
    Att_Sp int(3) not null,
    Dif_Sp int(3) not null,
    Velocità int(3) not null,
    Totale int(4) not null
);