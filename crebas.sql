/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     03/07/2017 07:19:17 p. m.                    */
/*==============================================================*/


drop table if exists CATEGORIAS;

drop table if exists COMENTARIOS;

drop table if exists ESTATUS;

drop table if exists FOTOS;

drop table if exists LUGARES;

drop table if exists LUGAR_DETALLE;

drop table if exists SUGERENCIAS;

drop table if exists TIPOS_USUARIOS;

drop table if exists UBICACIONES;

drop table if exists USUARIOS;

/*==============================================================*/
/* Table: CATEGORIAS                                            */
/*==============================================================*/
create table CATEGORIAS
(
   ID_CATEGORIA         int not null AUTO_INCREMENT,
   NOMBRE               varchar(120),
   ACTIVOS              bool,
   primary key (ID_CATEGORIA)
);

/*==============================================================*/
/* Table: COMENTARIOS                                           */
/*==============================================================*/
create table COMENTARIOS
(
   ID_COMEN             int not null AUTO_INCREMENT,
   ID_LUGAR             int,
   ID_USUARIO           int,
   DESCRIPCION_COM      varchar(100),
   primary key (ID_COMEN)
);

/*==============================================================*/
/* Table: ESTATUS                                               */
/*==============================================================*/
create table ESTATUS
(
   ID_ESTA              int not null AUTO_INCREMENT,
   DESCRIPCION          text,
   primary key (ID_ESTA)
);

/*==============================================================*/
/* Table: FOTOS                                                 */
/*==============================================================*/
create table FOTOS
(
   ID                   int not null AUTO_INCREMENT,
   ID_LUGAR             int,
   UBICACION            varchar(255),
   primary key (ID)
);

/*==============================================================*/
/* Table: LUGARES                                               */
/*==============================================================*/
create table LUGARES
(
   ID_LUGAR             int not null AUTO_INCREMENT,
   ID_USUARIO           int,
   ID_CATEGORIA         int,
   NOMBRE               varchar(120),
   GRATUITO             bool,
   PRECIO_APROX         decimal(20),
   DIRECCION            text,
   CONCACTO             text,
   TELEFONO             char(15),
   E_MAIL               varchar(50),
   ACTIVOS              bool,
   DESCRIPCION          text,
   primary key (ID_LUGAR)
);

/*==============================================================*/
/* Table: LUGAR_DETALLE                                         */
/*==============================================================*/
create table LUGAR_DETALLE
(
   ID_LUGAR_DET         int not null AUTO_INCREMENT,
   ID_LUGAR             int,
   ACCESO_DIS           bool,
   EMBARAZADA           bool,
   MENOR_EDAD           bool,
   primary key (ID_LUGAR_DET)
);

/*==============================================================*/
/* Table: SUGERENCIAS                                           */
/*==============================================================*/
create table SUGERENCIAS
(
   ID_SUGER             int not null AUTO_INCREMENT,
   ID_USUARIO           int,
   ID_ESTA              int,
   FECHA                date,
   NOMBRE               varchar(120),
   DESCRIPCION          text,
   UBICACION            varchar(255),
   FOTO                 varchar(150),
   primary key (ID_SUGER)
);

/*==============================================================*/
/* Table: TIPOS_USUARIOS                                        */
/*==============================================================*/
create table TIPOS_USUARIOS
(
   ID                   int not null AUTO_INCREMENT,
   TIPO                 varchar(15),
   primary key (ID)
);

/*==============================================================*/
/* Table: UBICACIONES                                           */
/*==============================================================*/
create table UBICACIONES
(
   ID_UBICACION         int not null AUTO_INCREMENT,
   ID_LUGAR             int,
   LONGITUD             varchar(100),
   LATITUD              varchar(100),
   primary key (ID_UBICACION)
);

/*==============================================================*/
/* Table: USUARIOS                                              */
/*==============================================================*/
create table USUARIOS
(
   ID_USUARIO           int not null AUTO_INCREMENT,
   ID                   int,
   NOMBRE               varchar(120),
   APELLIDO_P           varchar(100),
   APELLIDO_M           varchar(100),
   CORREO               varchar(150),
   CONTRASENA           varchar(150),
   TELEFONO             char(15),
   primary key (ID_USUARIO)
);

alter table COMENTARIOS add constraint FK_RELATIONSHIP_4 foreign key (ID_USUARIO)
      references USUARIOS (ID_USUARIO) on delete restrict on update restrict;

alter table COMENTARIOS add constraint FK_RELATIONSHIP_5 foreign key (ID_LUGAR)
      references LUGARES (ID_LUGAR) on delete restrict on update restrict;

alter table FOTOS add constraint FK_RELATIONSHIP_10 foreign key (ID_LUGAR)
      references LUGARES (ID_LUGAR) on delete restrict on update restrict;

alter table LUGARES add constraint FK_RELATIONSHIP_2 foreign key (ID_CATEGORIA)
      references CATEGORIAS (ID_CATEGORIA) on delete restrict on update restrict;

alter table LUGARES add constraint FK_RELATIONSHIP_9 foreign key (ID_USUARIO)
      references USUARIOS (ID_USUARIO) on delete restrict on update restrict;

alter table LUGAR_DETALLE add constraint FK_RELATIONSHIP_3 foreign key (ID_LUGAR)
      references LUGARES (ID_LUGAR) on delete restrict on update restrict;

alter table SUGERENCIAS add constraint FK_RELATIONSHIP_6 foreign key (ID_USUARIO)
      references USUARIOS (ID_USUARIO) on delete restrict on update restrict;

alter table SUGERENCIAS add constraint FK_RELATIONSHIP_7 foreign key (ID_ESTA)
      references ESTATUS (ID_ESTA) on delete restrict on update restrict;

alter table UBICACIONES add constraint FK_RELATIONSHIP_8 foreign key (ID_LUGAR)
      references LUGARES (ID_LUGAR) on delete restrict on update restrict;

alter table USUARIOS add constraint FK_RELATIONSHIP_11 foreign key (ID)
      references TIPOS_USUARIOS (ID) on delete restrict on update restrict;

