create table user
(
    id       int auto_increment
        primary key,
    login    varchar(15) null,
    password varchar(20) null
);

create table candidat
(
    id             int auto_increment
        primary key,
    nom            varchar(100)     null,
    pere           varchar(100)     null,
    mere           varchar(100)     null,
    sexe           char default 'M' null,
    nationalite    varchar(25)      null,
    adresse        varchar(255)     null,
    date_naissance date             null,
    user_id        int              null,
    constraint candidat_user_id_fk
        foreign key (user_id) references user (id)
);

create table mariage
(
    id           int auto_increment
        primary key,
    epoux_id     int           null,
    epouse_id    int           null,
    date_mariage date          null,
    etat         int default 1 null comment '1=encours; 2=publie, 3=conteste, 4=annule',
    user_id      int           null,
    constraint mariage_candidat_id_fk
        foreign key (epouse_id) references candidat (id),
    constraint mariage_candidat_id_fk_2
        foreign key (epoux_id) references candidat (id),
    constraint mariage_user_id_fk
        foreign key (user_id) references user (id)
);


