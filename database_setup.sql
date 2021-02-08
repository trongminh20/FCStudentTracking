create
database fc_student_tracking;
use
fc_student_tracking;

CREATE TABLE Students
(
    ID           int auto_increment primary key,
    Prog_ID      int,
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
    ID         int auto_increment primary key,
    Prog_ID    varchar(5),
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
    ID         INT AUTO_INCREMENT PRIMARY KEY,
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
    Prog_ID   varchar(5),
    Fee_Name  VARCHAR(50),
    Dom_Price int,
    Int_Price int
);

CREATE TABLE Programs
(
    ID        varchar(5) primary key,
    Prog_Name VARCHAR(50)
);
-- tracking sessions on system
CREATE TABLE sessions
(
    sessionID INT AUTO_INCREMENT PRIMARY KEY,
    userID    INT,
    created   DATETIME,
    logout    DATETIME
);
--the userID must be existed in Employees table
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


-- Insert 5 rows of data into Programs table
INSERT INTO Programs
VALUES ("HCA", "Health Care Assistant");

INSERT INTO Programs
VALUES ("CSW", "Community Support Worker");

INSERT INTO Programs
VALUES ("BK", "Bookkeeping");

INSERT INTO Programs
VALUES ("DA", "Data Analytics");

INSERT INTO Programs
VALUES ("RMT", "Registered Massage Therapy");

-- Insert 5 rows of data into Fees table
INSERT INTO Fees
VALUES (210101, 100, "Application Fee", 150, 150);

INSERT INTO Fees
VALUES (210102, 104, "Intro Course Fee", 300, 300);

INSERT INTO Fees
VALUES (210103, 100, "Textbook Fee", 100, 100);

INSERT INTO Fees
VALUES (210104, 100, "Tuition Fee", 7795, 9580);

INSERT INTO Fees
VALUES (210105, 101, "Administration Fee", 0, 300);

-- Insert 5 rows of data into Employees table
INSERT INTO Employees
VALUES (1000, "jessie.zhang", "250-718-6186", "jessie.zhang@firstcollege.ca", "IT Department", "123456789", 1);

INSERT INTO Employees
VALUES (1001, "timothy.yang", "205-899-3790", "timothy.yang@firstcollege.ca", "Director Office", "123456789", 0);

INSERT INTO Employees
VALUES (1002, "cecily.qiu", "250-859-8417", "cecily.qiu@firstcollege.ca", "Student Service Department", "123456789", 0);

INSERT INTO Employees
VALUES (1003, "jason.zhong", "778-231-3456", "jason.zhong@firstcollege.ca", "President", "123456789", 0);

INSERT INTO Employees
VALUES (1004, "sydney.stoltz", "250-718-8279", "sydney.stoltz@firstcollege.ca", "Student Service Department",
        "123456789", 0);

-- Insert 5 rows of data into StudentTracking table
INSERT INTO StudentTracking
VALUES (100, 3789001, "Yes");

INSERT INTO StudentTracking
VALUES (100, 3789003, "No");

INSERT INTO StudentTracking
VALUES (102, 3789004, "No");

INSERT INTO StudentTrackinges
VALUES (101, 3789000, "Yes");

INSERT INTO StudentTracking
VALUES (101, 3789001, "Yes");

-- Insert 5 rows of data into Requirements table
INSERT INTO Requirements
VALUES (100, "HCA", "Admission Prior to Start Date", "Photo ID");

INSERT INTO Requirements
VALUES (101, "HCA", "Prior to Practice Education", "Name Tag");

INSERT INTO Requirements
VALUES (102, "CSW", "Graduation", "Official Completion Letter");

INSERT INTO Requirements
VALUES (103, "RMT", "Prior to Practice Education", "Uniform Size");

INSERT INTO Requirements
VALUES (104, "RMT", "Admission Prior to Start Date", "CRC");

-- Insert 5 rows of data into Students table
INSERT INTO Students
VALUES (3789000, "HCA", "Jack Kerwin", "778-959-6325", "jack.kerwin@fcstudent.ca", "1010 Clement Ave, Kelowna, V1Y 7E3",
        "Domestic", "Application fee paid.", "Interested");

INSERT INTO Students
VALUES (3789001, "CSW", "Abigail Sloan", "250-123-1425", "abigail.sloan@fcstudent.ca",
        "101-3533 Carrington Rd, West Kelowna, V4T 3G9", "Domestic", "Waiting for contract", "Conditional");

INSERT INTO Students
VALUES (3789002, "HCA", "Norman Dreger", "250-748-5362", "norman.dreger@fcstudent.ca",
        "202-211 Briarwood Rd, Kelowna, V1X 2G4", "International", "Complete", "Enrolled");

INSERT INTO Students
VALUES (3789003, "RMT", "Alec Bryson", "778-582-4785", "alec.bryson@fcstudent.ca",
        "1806 Kloppenburg Crt, Kelowna, V1P 1N6", "Domestic", "", "Interested");

INSERT INTO Students
VALUES (3789004, "RMT", "Calista Cornford", "604-582-1213", "calista.cornford@fcstudent.ca",
        "2159 Clement Ave, Kelowna, V1Y 7E3", "Domestic", "Waiting for transcript.", "Conditional");