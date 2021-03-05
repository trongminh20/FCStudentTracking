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

--admission prior to start date

CREATE TABLE apsds
(
    student_id         INT,
    photo_id           BOOLEAN,
    app_form           VARCHAR(50),
    app_fee            VARCHAR(50),
    app_essay          VARCHAR(30),
    refer_letter       VARCHAR(50),
    resume             VARCHAR(20),
    intro_of_msg       DATE,
    fee_paid_inv       VARCHAR(50),
    w_letter_sent      BOOLEAN,
    completed          VARCHAR(30),
    eng_test_res       INT,
    crc                VARCHAR(50),
    medical_note       VARCHAR(20),
    interview          DATE,
    approved           BOOLEAN,
    diploma_and_trans  VARCHAR(50),
    stu_email          VARCHAR(50),
    accept_letter_date DATE,
    enroll_contract    VARCHAR(50),
    handbook_notes     VARCHAR(5),
    payment_option     VARCHAR(50),
    ack_and_agr        DATE,
    receive_card       BOOLEAN,
    rmt_stu_matt       VARCHAR(100),
);

--prior to practice education
CREATE TABLE ppes
(
    student_id         INT,
    clinic_shirt_size  VARCHAR(30),
    first_aid_loc      VARCHAR(100),
    first_aid_contact  VARCHAR(50),
    order_date         DATE,
    pickup_date        DATE,
    first_aid_and_cpr  DATETIME,
    cert_mark_received DATE,
    handbook_received  DATE,
    ack_and_agr        BOOLEAN,
    medical_file       BOOLEAN
);

CREATE TABLE graduations
(
    student_id INT,
    tuition_paid,
    transcript,
    completion_letter,
    signed_diploma,
    exam_date,
    T2202A,
    employment
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