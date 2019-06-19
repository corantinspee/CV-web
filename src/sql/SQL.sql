/* CREATION DES TABLES*/
DROP TABLE IF EXISTS contact;
CREATE TABLE contact (
    id_contact int(11) NOT NULL,
    adresse_mail varchar(255) NOT NULL,
    nom_prenom varchar(255) NOT NULL,
    entreprise varchar(255) NOT NULL,
    ville varchar(255) NOT NULL,
    message text NOT NULL,
    PRIMARY KEY (id_contact)
) ENGINE=MyISAM DEFAULT CHARSET=latin1

DROP TABLE IF EXISTS formations;
CREATE TABLE formations (
    id_formations int(11) NOT NULL,
    adresse varchar(255) NOT NULL,
    nom varchar(255) NOT NULL,
    ville varchar(255) NOT NULL,
    PRIMARY KEY (id_formations)
) ENGINE=MyISAM DEFAULT CHARSET=latin1


DROP TABLE IF EXISTS competences;
CREATE TABLE competences (
    id_competences int(11) NOT NULL,
    categorie VARCHAR(255) not NULL,
    domaine varchar(255) NOT NULL,
    nom varchar(255) NOT NULL,
    niveau_competences varchar(255) NOT NULL,
    PRIMARY KEY (id_competences)
) ENGINE=MyISAM DEFAULT CHARSET=latin1


/* INSERTION DES DONNEES*/

INSERT INTO competences (nom,categorie, domaine,niveau_competences)
VALUES
('CCNA','matiere', 'informatique', '10%'),
('linux','matiere','informatique', '10%'),
('PHP', 'matiere','informatique', '10%'),
('html', 'matiere','informatique', '10%'),
('css', 'matiere','informatique', '10%'),
('java', 'matiere','informatique', '10%'),
('Cisco packet','logiciels', 'informatique', '10%'),
('VMWare','logiciels', 'informatique', '10%'),
('Atom','logiciels', 'informatique', '10%'),
('GitHub','logiciels', 'informatique', '10%'),
('fusion 360','logiciels','informatique', '10%');

INSERT INTO contact (nom_prenom, ville, entreprise,adresse_mail,message)
VALUES
('Durand Mathieu', 'Saint-Didier-au-mont-d-or', 'YNOV','durandmathieu@lol.com','De qui patiemur simularit ille quam ferri perire civibus existimaretur qui potuit diutius diutius quam.'),
('Dupont Albert', 'lantignie', 'YNOV','dupontalbert@lol.com','De qui patiemur simularit ille quam ferri perire civibus existimaretur qui potuit diutius diutius quam.');

INSERT INTO formations (nom, ville,adresse)
VALUES
('Lamache', 'Lyon', '75 bld jean XXIII'),
('Ynov', 'Lyon', '36 rue raoul servant');
