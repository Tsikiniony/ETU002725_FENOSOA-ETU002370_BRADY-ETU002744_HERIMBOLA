Create table TheAdmin(
  idAdmin int auto_increment primary key,
  nomAdmin varchar(30),
  mdpAdmin int
);
insert into TheAdmin(nomAdmin,mdpAdmin) values('admin',1234);

Create table TheUser(
  idUser int auto_increment primary key,
  nomUser varchar(30),
  mdpUser int
);
insert into TheUser(nomUser,mdpUser) values('user1',1);

Create table TheThe(
  idThe int auto_increment primary key,
  nomThe varchar(30),
  occupation decimal(16,2),
  rendement decimal(16,2)
);
insert into TheThe(nomThe,occupation,rendement) values('The noir',1,0.5);
insert into TheThe(nomThe,occupation,rendement) values('The vert',1.8,1);
insert into TheThe(nomThe,occupation,rendement) values('The blanc',1.2,0.7);

create table TheDepense(
  idDepense int auto_increment primary key,
  nomDepense varchar(30)
);
insert into TheDepense(nomDepense) values('carburant');
insert into TheDepense(nomDepense) values('engrais');

Create table TheParcelle(
  idParcelle int auto_increment primary key,
  surface decimal(16,2),
  idThe int references thethe(idThe)
);
insert into TheParcelle(surface, idThe) values(10, 1);
insert into TheParcelle(surface, idThe) values(25, 3);


Create table TheCeuilleur(
  idCeuilleur int auto_increment primary key,
  nomCeuilleur varchar(30),
  genre varchar(1),
  dateNaissance date,
  salaire decimal(16,2)
);
insert into TheCeuilleur(nomCeuilleur, genre, dateNaissance, salaire) values('Pierre', 'f', '2012-12-01', 2000);
insert into TheCeuilleur(nomCeuilleur, genre, dateNaissance, salaire) values('Bobo', 'm', '2002-02-02', 2000);

Create table TheOffice(
  id int auto_increment primary key,
  idUser int,
  dateCeuillette datetime,
  idCeuilleur int,
  idParcelle int,
  poidsParcelleTaloha decimal(16,2),
  poidsParcelleAmzao decimal(16,2),
  poidCeuillit decimal(16,2),
  dateDepense datetime,
  idDepense int,
  Montant decimal(16,2)
);
insert into TheOffice values(1,'1', '2024-02-13', '1',1,23,22,1, '2024-02-13', '2', '2000');

create table TheGlobal(
  idTheGlobal int auto_increment primary key,
  idUser int,
  dateDebut date,
  datefin date,
  poidsTotalCeuillette decimal(16,2),
  poidsRestantParcelle decimal(16,2),
  revient decimal(16,2)
);

create table TheMois(
  idMois int auto_increment primary key,
  nomMois varchar(20),
  dateDebut date,
  dateFin date
);

create table TheMoisChoix(
  nomMois varchar(20)
);

