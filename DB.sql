CREATE DATABASE SMSOTPDB;

Use SMSOTPDB;

Create Table
    Utilisateur (
        Id int auto_increment primary key,
        Username varchar(50) not null,
        UserPassword varchar(255) not null,
        UserEmail varchar(50) not null,
        UserPhoneNumber varchar(50) not null
    );
