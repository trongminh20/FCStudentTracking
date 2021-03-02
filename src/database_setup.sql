drop
database fc_student_tracking;
create
database fc_student_tracking;
use
fc_student_tracking;

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

--admission prior to start date

CREATE TABLE apsds
(
    student_id         INT,
    photo_id           BOOLEAN,
    app_form           VARCHAR(50),
    app_fee            VARCHAR(50),
    app_essay          VARCHAR(30),
    refer_letter       VARCHAR(50),
    Resume             VARCHAR(20),
    intro_of_msg       DATE,
    fee_paid_inv       VARCHAR(50),
    w_letter_sent      BOOLEAN,
    Completed          VARCHAR(30),
    eng_test_res       INT,
    CRC                VARCHAR(50),
    medical_note       VARCHAR(20),
    interview          date,
    approved           BOOLEAN,
    diploma_and_trans  varchar(50),
    stu_email          varchar(50),
--         Student Number
    accept_letter_date DATE,
    enrollment_contact varchar(50),
    handbook_notes varchar(5),
    payment_option varchar(50),
    ack_and_agr date,
    receive_card boolean,



        RMT General Handbook Receive Date
        Student Aid BC (optional)/payment plan
        RMT Student Handbook Receive Date
        Acknowledgement and Agreement Form
        Sheet Set
        Labtop
        Goniometer
        Oil Holster
        Bottle
        Student General Handbook AAF & Photography Waiver Form
);

--prior to practice education
CREATE TABLE ppes
(
    Clinic Shirt Size
        Order Date
        Pick-up Date
        First Aid & CPR Date & Time
        First Aid & CPR Location & Contact Person
        Certificate Receive Mark
        Clinic Handbook Receive Date
        Acknowledgement and Agreement Form
        Medical File (Vaccinations)

);

CREATE TABLE graduations
(
    Tuition Paid in Full
        Official Student Transcript
        Official Completion Letter
        Copy of signed Diploma
        Board Exam Date
        Copy of T2202A (tax form)
        Employment Following Up

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