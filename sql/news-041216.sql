CREATE TABLE sp16_news (
        id int(11) NOT NULL AUTO_INCREMENT,
        title varchar(128) NOT NULL,
        slug varchar(128) NOT NULL,
        text text NOT NULL,
        PRIMARY KEY (id),
        KEY slug (slug)
);

insert into sp16_news values (null,'How long do twinkies last?','Twinkies','Here is the article about  twinkies');

insert into sp16_news values (null,'How many calories can a cookie be?','Oreos','Here is the article about  Oreos');

insert into sp16_news values (null,'How much peanut butter is in a nutter butter?','Nutter Butters','Here is the article about Nutter Butters');