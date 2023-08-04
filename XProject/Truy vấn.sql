CREATE DATABASE IF NOT EXISTS XProject;

USE XProject;

CREATE TABLE IF NOT EXISTS employees (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    email VARCHAR(100) UNIQUE,
    birth_date DATE
);

USE XProject;

insert into employees (id, first_name, last_name, email, birth_date) values (1, 'Danya', 'Babe', 'dbabe0@fastcompany.com', '10/29/2022');
insert into employees (id, first_name, last_name, email, birth_date) values (2, 'Tonnie', 'Cammell', 'tcammell1@yelp.com', '12/6/2022');
insert into employees (id, first_name, last_name, email, birth_date) values (3, 'Gael', 'Pashby', 'gpashby2@ucsd.edu', '4/25/2023');
insert into employees (id, first_name, last_name, email, birth_date) values (4, 'Umeko', 'Cowterd', 'ucowterd3@ning.com', '3/21/2023');
insert into employees (id, first_name, last_name, email, birth_date) values (5, 'Melvyn', 'Benoy', 'mbenoy4@independent.co.uk', '7/23/2023');
insert into employees (id, first_name, last_name, email, birth_date) values (6, 'Adena', 'Devinn', 'adevinn5@sciencedaily.com', '10/18/2022');
insert into employees (id, first_name, last_name, email, birth_date) values (7, 'Fredrika', 'Fonquernie', 'ffonquernie6@chronoengine.com', '11/3/2022');
insert into employees (id, first_name, last_name, email, birth_date) values (8, 'Carol-jean', 'Vyvyan', 'cvyvyan7@google.ru', '8/19/2022');
insert into employees (id, first_name, last_name, email, birth_date) values (9, 'Alexandr', 'Itzcovichch', 'aitzcovichch8@examiner.com', '5/9/2023');
insert into employees (id, first_name, last_name, email, birth_date) values (10, 'Dayle', 'Lamb-shine', 'dlambshine9@hc360.com', '12/8/2022');
insert into employees (id, first_name, last_name, email, birth_date) values (11, 'Kenna', 'Jozwiak', 'kjozwiaka@printfriendly.com', '9/28/2022');
insert into employees (id, first_name, last_name, email, birth_date) values (12, 'Reginald', 'Diggell', 'rdiggellb@youku.com', '2/8/2023');
insert into employees (id, first_name, last_name, email, birth_date) values (13, 'Arleta', 'Gallaway', 'agallawayc@fda.gov', '7/26/2023');
insert into employees (id, first_name, last_name, email, birth_date) values (14, 'Cosetta', 'Humber', 'chumberd@photobucket.com', '1/30/2023');
insert into employees (id, first_name, last_name, email, birth_date) values (15, 'Heddi', 'Schrei', 'hschreie@microsoft.com', '11/6/2022');
insert into employees (id, first_name, last_name, email, birth_date) values (16, 'Thacher', 'Critchell', 'tcritchellf@miibeian.gov.cn', '2/15/2023');
insert into employees (id, first_name, last_name, email, birth_date) values (17, 'Stanley', 'Kincey', 'skinceyg@buzzfeed.com', '6/9/2023');
insert into employees (id, first_name, last_name, email, birth_date) values (18, 'Moises', 'Abry', 'mabryh@weebly.com', '8/1/2023');
insert into employees (id, first_name, last_name, email, birth_date) values (19, 'Pincus', 'Hatchman', 'phatchmani@blogspot.com', '12/12/2022');
insert into employees (id, first_name, last_name, email, birth_date) values (20, 'Blondell', 'Espinel', 'bespinelj@livejournal.com', '8/20/2022');
insert into employees (id, first_name, last_name, email, birth_date) values (21, 'Lark', 'Corbitt', 'lcorbittk@devhub.com', '1/18/2023');
insert into employees (id, first_name, last_name, email, birth_date) values (22, 'Ninette', 'Gallahue', 'ngallahuel@mozilla.com', '7/14/2023');
insert into employees (id, first_name, last_name, email, birth_date) values (23, 'Amy', 'Bartlomiejczyk', 'abartlomiejczykm@phoca.cz', '10/15/2022');
insert into employees (id, first_name, last_name, email, birth_date) values (24, 'Ailene', 'Whight', 'awhightn@clickbank.net', '11/28/2022');
insert into employees (id, first_name, last_name, email, birth_date) values (25, 'Jacobo', 'Allnatt', 'jallnatto@gov.uk', '10/18/2022');
insert into employees (id, first_name, last_name, email, birth_date) values (26, 'Stacee', 'Crosfeld', 'scrosfeldp@nationalgeographic.com', '3/25/2023');
insert into employees (id, first_name, last_name, email, birth_date) values (27, 'Roderic', 'Gueny', 'rguenyq@surveymonkey.com', '2/27/2023');
insert into employees (id, first_name, last_name, email, birth_date) values (28, 'Phyllida', 'Syrett', 'psyrettr@squarespace.com', '3/24/2023');
insert into employees (id, first_name, last_name, email, birth_date) values (29, 'Tris', 'Foxcroft', 'tfoxcrofts@amazon.com', '8/27/2022');
insert into employees (id, first_name, last_name, email, birth_date) values (30, 'Steffen', 'Harkus', 'sharkust@indiegogo.com', '12/10/2022');
insert into employees (id, first_name, last_name, email, birth_date) values (31, 'Quinton', 'Langford', 'qlangfordu@illinois.edu', '5/31/2023');
insert into employees (id, first_name, last_name, email, birth_date) values (32, 'Sibeal', 'Fawlkes', 'sfawlkesv@sciencedaily.com', '10/16/2022');
insert into employees (id, first_name, last_name, email, birth_date) values (33, 'Christabella', 'Scarse', 'cscarsew@i2i.jp', '6/16/2023');
insert into employees (id, first_name, last_name, email, birth_date) values (34, 'Annamarie', 'Kennermann', 'akennermannx@sciencedaily.com', '1/28/2023');
insert into employees (id, first_name, last_name, email, birth_date) values (35, 'Davis', 'Ottewell', 'dottewelly@omniture.com', '11/25/2022');
insert into employees (id, first_name, last_name, email, birth_date) values (36, 'Corliss', 'Chable', 'cchablez@com.com', '6/28/2023');
insert into employees (id, first_name, last_name, email, birth_date) values (37, 'Sauncho', 'Easterby', 'seasterby10@elegantthemes.com', '9/8/2022');
insert into employees (id, first_name, last_name, email, birth_date) values (38, 'Niki', 'Erwin', 'nerwin11@dyndns.org', '7/18/2023');
insert into employees (id, first_name, last_name, email, birth_date) values (39, 'Leupold', 'Gilyatt', 'lgilyatt12@bloglovin.com', '4/17/2023');
insert into employees (id, first_name, last_name, email, birth_date) values (40, 'Hershel', 'Penwright', 'hpenwright13@qq.com', '4/19/2023');
insert into employees (id, first_name, last_name, email, birth_date) values (41, 'Jenica', 'Chantler', 'jchantler14@godaddy.com', '9/28/2022');
insert into employees (id, first_name, last_name, email, birth_date) values (42, 'Shawn', 'Doghartie', 'sdoghartie15@archive.org', '11/29/2022');
insert into employees (id, first_name, last_name, email, birth_date) values (43, 'Nancey', 'Vasilkov', 'nvasilkov16@google.ru', '8/16/2022');
insert into employees (id, first_name, last_name, email, birth_date) values (44, 'Robinette', 'Burkhill', 'rburkhill17@themeforest.net', '8/14/2022');
insert into employees (id, first_name, last_name, email, birth_date) values (45, 'Juana', 'Charlewood', 'jcharlewood18@paypal.com', '11/5/2022');
insert into employees (id, first_name, last_name, email, birth_date) values (46, 'Craig', 'covino', 'ccovino19@ox.ac.uk', '2/10/2023');
insert into employees (id, first_name, last_name, email, birth_date) values (47, 'Zsa zsa', 'Lilford', 'zlilford1a@dropbox.com', '1/11/2023');
insert into employees (id, first_name, last_name, email, birth_date) values (48, 'Larry', 'Pighills', 'lpighills1b@nydailynews.com', '5/6/2023');
insert into employees (id, first_name, last_name, email, birth_date) values (49, 'Sigfrid', 'Campana', 'scampana1c@odnoklassniki.ru', '7/6/2023');
insert into employees (id, first_name, last_name, email, birth_date) values (50, 'Sula', 'Baigrie', 'sbaigrie1d@time.com', '8/16/2022');