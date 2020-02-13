-- Exercice 1 : FONCTION

DROP FUNCTION IF EXISTS DateFr;
DELIMITER $$
CREATE FUNCTION DateFr (pDate datetime)
RETURNS char
(10)
BEGIN
	RETURN DATE_FORMAT(pDate, '%d/%m/%Y');
END
$$
DELIMITER ;

select DateFr(NOW());

-----------------------------------------

-- Exercice 2 : VUE

DROP VIEW IF EXISTS VUE_ARTICLES;
CREATE VIEW VUE_ARTICLES
AS
	select DateFr(a.datePublication) as datePublication, u.pseudo, a.titre, a.resume, count(*) as nb_commentaires
	from article a
		inner join utilisateur u on u.idUtilisateur=a.idUtilisateur
		left outer join commentaire com on com.idArticle=a.idArticle
	group by a.datePublication, u.pseudo, a.titre, a.resume
	order by a.datePublication desc;

-- using it
select *
from VUE_ARTICLES LIMIT
5;


-- listing on index
DROP VIEW IF EXISTS VUE_ARTICLES_CATEGORIES;
CREATE VIEW VUE_ARTICLES_CATEGORIES
AS
	select DateFr(a.datePublication) as datePublication, u.pseudo, a.titre, a.resume,
		c.nom as Categorie, count(com.idCommentaire) as nb_commentaires
	from article a
		inner join utilisateur u on u.idUtilisateur=a.idUtilisateur
		inner join categorie_article ca on ca.idArticle=a.idArticle
		inner join categorie c on c.idCategorie=ca.idCategorie
		left outer join commentaire com on com.idArticle=a.idArticle
	group by a.datePublication, u.pseudo, a.titre, a.resume, c.nom
	order by a.datePublication desc;

-- using it 
select *
from VUE_ARTICLES_CATEGORIES
where Categorie='Amour';


-- -----------------------------------------

-- Exercice 3 : PROCEDURE STOCKEE


DROP PROCEDURE IF EXISTS PS_ARTICLE;
DELIMITER |
CREATE PROCEDURE PS_ARTICLE (particleid int)
BEGIN
	select DateFr(a.datePublication) as datePublication, u.pseudo, a.titre, a.resume, a.contenu
	from article a
		inner join utilisateur u on u.idUtilisateur=a.idUtilisateur
	where a.idArticle=particleid
	order by a.datePublication desc;
END
|
DELIMITER ;

call PS_ARTICLE
(2);


ALTER TABLE `article`
ADD `nbLectures` INT NOT NULL DEFAULT '0';
DROP PROCEDURE IF EXISTS PS_ARTICLE;
DELIMITER |
CREATE PROCEDURE PS_ARTICLE (particleid int)
BEGIN
	update article set nbLectures=nbLectures+1 where idArticle=particleid;

	select DateFr(a.datePublication) as datePublication, u.pseudo, a.titre, a.resume, a.contenu, a.nbLectures
	from article a
		inner join utilisateur u on u.idUtilisateur=a.idUtilisateur
	where a.idArticle=particleid
	order by a.datePublication desc;
END
|
DELIMITER ;

-----------------------------------------

-- Exercice 4 : TRIGGER

DROP TRIGGER IF EXISTS TR_ARTICLE_INSERT;
DELIMITER |
CREATE TRIGGER TR_ARTICLE_INSERT BEFORE
INSERT
ON
article
FOR
EACH
ROW
BEGIN
	IF LENGTH(NEW.resume) <1 THEN
	set NEW
	.resume = LEFT
	(NEW.contenu,150);
END
IF;
END
|
DELIMITER ;

DROP TRIGGER IF EXISTS TR_ARTICLE_UPDATE;
DELIMITER |
CREATE TRIGGER TR_ARTICLE_UPDATE BEFORE
UPDATE
ON article FOR EACH ROW
BEGIN
	IF LENGTH(NEW.resume) <1 THEN
	set NEW
	.resume = LEFT
	(NEW.contenu,150);
END
IF;
END
|
DELIMITER ;

INSERT INTO article
	( titre, resume, contenu, idUtilisateur, datePublication)
VALUES
	('Lorem ipsum', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 1, '2017-03-17 10:27:00');
select *
from article;

update article set resume='' where titre='Lorem ipsum';
select *
from article;

DROP TRIGGER IF EXISTS trArticlesBeforeInsert
;
DELIMITER |
CREATE TRIGGER trArticlesBeforeInsert  BEFORE
INSERT
ON
article
FOR
EACH
ROW
BEGIN
	IF LENGTH(NEW.resume) <1 THEN
	set NEW
	.resume = LEFT
	(NEW.contenu,150);
END
IF;
END
|
DELIMITER ;


DROP TRIGGER IF EXISTS trArticlesBeforeUpdate;
DELIMITER |
CREATE TRIGGER trArticlesBeforeUpdate BEFORE
UPDATE
ON article FOR EACH ROW
BEGIN
	IF LENGTH(NEW.resume) <1 THEN
	set NEW
	.resume = LEFT
	(NEW.contenu,150);
END
IF;
END
|
DELIMITER ;

INSERT INTO article
	( titre, resume, contenu, idUtilisateur, datePublication)
VALUES
	('Lorem ipsum', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 1, '2017-03-17 10:27:00');
select *
from article;

update article set resume='' where titre='Lorem ipsum';
select *
from article;


-----------------------------------------

-- Exercice 5 :VARABLES ET CURSEUR

DROP PROCEDURE IF EXISTS PS_ARTICLE;
DELIMITER |
CREATE PROCEDURE PS_ARTICLE (particleid int)
BEGIN
	DECLARE v_nom VARCHAR
	(150);
DECLARE v_categs text;

DECLARE done INT DEFAULT 0;
DECLARE curseur_cat CURSOR FOR select nom
from categorie c
	inner join categorie_article ca on ca.idCategorie=c.idCategorie
where ca.idArticle=particleid;
DECLARE
CONTINUE
HANDLER FOR NOT FOUND
SET done
= 1;

set v_categs
='';

OPEN curseur_cat;
my_cur_loop:
LOOP
FETCH curseur_cat
INTO v_nom;
IF done = 1 THEN
				LEAVE my_cur_loop;
END
IF;
			set v_categs
= CONCAT
(v_categs, v_nom, ', ');
END LOOP my_cur_loop;
CLOSE curseur_cat;

update article set nbLectures=nbLectures+1 where idArticle=particleid;

select DateFr(a.datePublication) as datePublication, u.pseudo, a.titre, a.resume, a.contenu, a.nbLectures, v_categs as catégories
from article a
	inner join utilisateur u on u.idUtilisateur=a.idUtilisateur
where a.idArticle=particleid
order by a.datePublication desc;
END
|
DELIMITER ;

call PS_ARTICLE
(2);


-- -----------------------------------------

-- Exercice 6 : TRANSACTION ET GESTION DES ERREURS

DELIMITER |
CREATE PROCEDURE psStatistiques ()
BEGIN
	DECLARE v_id int;
DECLARE v_pseudo VARCHAR
(100);
DECLARE v_nbarts int;
DECLARE v_dtderart datetime;
DECLARE	v_nbcomms int;
DECLARE v_dtdercom datetime;

DECLARE curseur_util CURSOR	
    FOR select u.id, u.pseudo, count(a.idArticle), max(a.datePublication), count(c.id), max(c.dateCommentaire)
from utilisateur u
	left outer join article a on a.idUtilisateur = u.id
	left outer join commentaire c on c.idUtilisateur=u.id
group by u.id;

DECLARE EXIT HANDLER FOR SQLEXCEPTION
BEGIN
	ROLLBACK;
	SELECT 'Une erreur est survenue...';
	SELECT 'Annulation des calculs de statistiques ...';
END;

START TRANSACTION;

TRUNCATE TABLE Statistiques;

OPEN curseur_util;

LOOP
FETCH curseur_util
INTO v_id, v_pseudo, v_nbarts, v_dtderart, v_nbcomms, v_dtdercom;
insert into Statistiques
	(id, pseudo, nb_articles, date_derarticle, nb_comments, date_dercomment)
values
	(v_id, v_pseudo, v_nbarts, v_dtderart, v_nbcomms, v_dtdercom);

END LOOP;

CLOSE curseur_util;

COMMIT;

select 'Les statistiques sont à jour ...';

END|
DELIMITER ; 