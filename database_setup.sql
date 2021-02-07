create database fc_student_tracking;
use fc_student_tracking;

CREATE TABLE Students
(
    ID           int auto_increment primary key,
    Prog_ID      int,
    Name         VARCHAR(50),
    Phone        VARCHAR(15),
    Email        VARCHAR(50),
    Address      VARCHAR(50),
    Dom_OR_Int   VARCHAR(13),
    Enroll_Notes VARCHAR(200),
    Admin_Status VARCHAR(20)
);

CREATE TABLE Requirements
(
    ID         int auto_increment primary key,
    Prog_ID    int,
    Section    VARCHAR(50),
    Field_Name VARCHAR(50)
);

CREATE TABLE StudentTracking
(
    Req_ID int,
    Stu_ID int,
    ANS    VARCHAR(50)
);

CREATE TABLE Employees
(
    ID         INT AUTO_INCREMENT PRIMARY,
    Username   VARCHAR(50),
    Phone      VARCHAR(15),
    Email      VARCHAR(50),
    Department VARCHAR(50),
    Password   VARCHAR(100),
    admin      INT
);

CREATE TABLE Fees
(
    ID        int auto_increment primary key,
    Prog_ID   int,
    Fee_Name  VARCHAR(50),
    Dom_Price int,
    Int_Price int
);

CREATE TABLE Programs
(
    ID        int auto_increment primary key,
    Prog_Name VARCHAR(50)
);
CREATE TABLE sessions
(
    sessionID   INT AUTO_INCREMENT PRIMARY KEY,
    userID      INT,
    created     DATETIME,
    logout      DATETIME
);
ALTER TABLE sessions
    ADD CONSTRAINT session_fk
    FOREIGN KEY (userID)
    REFERENCES Employees(ID);

ALTER TABLE Students
    ADD CONSTRAINT Students_FK
    FOREIGN KEY (Prog_ID)
    REFERENCES Programs (ID);

ALTER TABLE Students
    ADD CHECK (Dom_OR_Int IN ('Domestic', 'International'));

ALTER TABLE Requirements
    ADD CONSTRAINT Requirements_FK
    FOREIGN KEY (Prog_ID)
    REFERENCES Programs (ID);

ALTER TABLE StudentTracking
    ADD CONSTRAINT StudentTracking_FK1
    FOREIGN KEY (Stu_ID)
    REFERENCES Students (ID);

ALTER TABLE StudentTracking
    ADD CONSTRAINT StudentTracking_FK2
    FOREIGN KEY (Req_ID)
    REFERENCES Requirements (ID);

ALTER TABLE Fees
    ADD CONSTRAINT fees_Requirements_FK
    FOREIGN KEY (Prog_ID)
    REFERENCES Programs (ID);

ALTER TABLE Employees
    ADD CHECK (admin IN (0,1));

ALTER TABLE Employees
    ADD CONSTRAINT user_uniq
    UNIQUE (username);
