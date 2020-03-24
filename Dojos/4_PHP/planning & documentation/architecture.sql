#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: category
#------------------------------------------------------------

CREATE TABLE category(
        category_id   Int  Auto_increment  NOT NULL ,
        category_name Varchar (50) NOT NULL
	,CONSTRAINT category_PK PRIMARY KEY (category_id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: user
#------------------------------------------------------------

CREATE TABLE user(
        user_id       Int  Auto_increment  NOT NULL ,
        user_name     Varchar (50) NOT NULL ,
        user_email    Varchar (75) NOT NULL ,
        user_password Varchar (30) NOT NULL ,
        user_type     Varchar (30) NOT NULL
	,CONSTRAINT user_PK PRIMARY KEY (user_id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: article
#------------------------------------------------------------

CREATE TABLE article(
        article_id         Int  Auto_increment  NOT NULL ,
        article_title      Varchar (100) NOT NULL ,
        article_text       Varchar (2000) NOT NULL ,
        article_image      Varchar (200) ,
        date_published     TimeStamp NOT NULL ,
        publication_status Bool NOT NULL ,
        category_id        Int NOT NULL
	,CONSTRAINT article_PK PRIMARY KEY (article_id)

	,CONSTRAINT article_category_FK FOREIGN KEY (category_id) REFERENCES category(category_id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: comment
#------------------------------------------------------------

CREATE TABLE comment(
        comment_id    Int  Auto_increment  NOT NULL ,
        comment_title Varchar (200) NOT NULL ,
        comment_text  Varchar (200) NOT NULL ,
        comment_date  TimeStamp NOT NULL ,
        article_id    Int NOT NULL ,
        user_id       Int NOT NULL
	,CONSTRAINT comment_PK PRIMARY KEY (comment_id)

	,CONSTRAINT comment_article_FK FOREIGN KEY (article_id) REFERENCES article(article_id)
	,CONSTRAINT comment_user0_FK FOREIGN KEY (user_id) REFERENCES user(user_id)
)ENGINE=InnoDB;

