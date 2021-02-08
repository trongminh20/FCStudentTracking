<<<<<<< HEAD
CREATE TABLE Students(ID Number, Prog_ID NUMBER, Name VARCHAR2(50), Phone VARCHAR2(15), Email VARCHAR2(50), Address VARCHAR2(50), Dom_OR_Int VARCHAR2(13), Enroll_Notes VARCHAR2(200), Admin_Status VARCHAR2(20));
ALTER TABLE Students ADD CONSTRAINT Students_PK PRIMARY KEY(ID);
ALTER TABLE Students ADD CONSTRAINT Students_FK FOREIGN KEY(Prog_ID) REFERENCES Programs(ID);
ALTER TABLE Students ADD CHECK(Dom_OR_Int IN (‘Domestic’, ‘International’));

CREATE TABLE Requirements(ID Number, Prog_ID NUMBER, Section VARCHAR2(50), Field_Name VARCHAR2(50));
ALTER TABLE Requirements ADD CONSTRAINT Requirements_PK PRIMARY KEY(ID);
ALTER TABLE Requirements ADD CONSTRAINT Requirements_FK FOREIGN KEY(Prog_ID) REFERENCES Programs(ID);

CREATE TABLE StudentTracking(Req_ID NUMBER, Stu_ID NUMBER, ANS VARCHAR2(50));
ALTER TABLE StudentTracking ADD CONSTRAINT StudentTracking_FK1 FOREIGN KEY(Stu_ID) REFERENCES Students(ID);
ALTER TABLE StudentTracking ADD CONSTRAINT StudentTracking_FK2 FOREIGN KEY(Req_ID) REFERENCES Requirements(ID);

CREATE TABLE Employees(ID NUMBER, Username VARCHAR2(50), Phone VARCHAR2(15), Email VARCHAR2(50), Department VARCHAR(50), Password VARCHAR2(50));
ALTER TABLE Employees ADD CONSTRAINT Employees_PK PRIMARY KEY(ID);

CREATE TABLE Fees(ID NUMBER, Prog_ID NUMBER, Fee_Name VARCHAR2(50), Dom_Price NUMBER, Int_Price NUMBER);
ALTER TABLE Fees ADD CONSTRAINT Fees_PK PRIMARY KEY(ID);
ALTER TABLE Fees ADD CONSTRAINT Requirements_FK FOREIGN KEY(Prog_ID) REFERENCES Programs(ID);

CREATE TABLE Programs(ID NUMBER, Prog_Name VARCHAR2(50));
ALTER TABLE Programs ADD CONSTRAINT Programs_PK PRIMARY KEY(ID);
=======
drop database fc_student_tracking;
create database fc_student_tracking;
use fc_student_tracking;

CREATE TABLE Students
(
    ID           INT PRIMARY KEY,
    Prog_ID      VARCHAR(5),
    Name         VARCHAR(50),
    Phone        VARCHAR(15),
    Email        VARCHAR(50),
    Address      VARCHAR(50),
    Dom_OR_Int   VARCHAR(13),
    Enroll_Notes TEXT,
    Admin_Status VARCHAR(20)
);

CREATE TABLE Requirements
(
    ID         INT PRIMARY KEY,
    Prog_ID    VARCHAR(5),
    Section    VARCHAR(50),
    Field_Name VARCHAR(50)
);

CREATE TABLE StudentTracking
(
    Req_ID INT,
    Stu_ID INT,
    ANS    VARCHAR(50)
);

CREATE TABLE Employees
(
    ID         INT PRIMARY KEY,
    Username   VARCHAR(50),
    Phone      VARCHAR(15),
    Email      VARCHAR(50),
    Department VARCHAR(50),
    Password   VARCHAR(100),
    admin      INT
);

CREATE TABLE Fees
(
    ID        INT PRIMARY KEY,
    Prog_ID   VARCHAR(5),
    Fee_Name  VARCHAR(50),
    Dom_Price int,
    Int_Price int
);

CREATE TABLE Programs
(
    ID        VARCHAR(5) PRIMARY KEY,
    Prog_Name VARCHAR(50)
);

CREATE TABLE sessions
(
    sessionID INT PRIMARY KEY,
    userID    INT,
    created   DATETIME,
    logout    DATETIME
);
ALTER TABLE sessions
    ADD CONSTRAINT session_fk
        FOREIGN KEY (userID)
            REFERENCES Employees (ID);

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

--  if the user is an admin then 1, else 0
ALTER TABLE Employees
    ADD CHECK (admin IN (0, 1));

-- not duplicated username
ALTER TABLE Employees
    ADD CONSTRAINT user_uniq
        UNIQUE (username);
>>>>>>> 3a1b0e7db000538e43c4445c28a5c1a93d016cfd
