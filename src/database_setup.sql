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
CREATE TABLE requests
(
    id       INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50),
    request  VARCHAR(100)
);

CREATE TABLE invoices
(
    number INT PRIMARY KEY,
    bill_to VARCHAR(50),
    date    DATE,
    total   INT,
    note    VARCHAR(100)
);
--table for Admission Prior to Start Date
CREATE TABLE apsd
(
    student ID
    photo_id    VARCHAR(2),
    app_form
    app_fee
    app_essay
    refer_letter
    resume
    intro_mess_course
    fee_paid_invoice
    welcome_letter_sent
    completed
    ennglish test result
    CRC
    Medical note from physican
    interview date and time
    approved
    high school diploma and trascipt
    college email address
    student number
    letter of acceptance
    enrollment contract
    RMT General handbook receive date
    student aid subclass_origin
    RMT student handbook
    acknowledgement and agreement transform
    sheet set
    labtop
    goniometer
    oil holster
    bottle
    student General handbook aaf & photogram waiver transform
);

--prior to practice education
CREATE TABLE ppe
(
    student_id,
    clinic shirt size,
    order date,
    pick-up date,
    first aid and CPR  date and time,
    first aid and cpR location and contact person,
    certificate receive mark,
    clinic handbook receive date,
    acknowledgement and agreement form
    medical file(vaccinations)
);

CREATE TABLE graduation(
    tuition paid in full,
    official student transcript,
    official comleteion letter

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

ALTER TABLE requests
    ADD CONSTRAINT req_fk
        FOREIGN KEY (username)
            REFERENCES Employees (username);