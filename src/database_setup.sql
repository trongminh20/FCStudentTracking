-- DROP
-- DATABASE fc_student_tracking;
CREATE
DATABASE fc_student_tracking;
USE
fc_student_tracking;

CREATE TABLE students
(
    id           INT PRIMARY KEY,
    prog_id      VARCHAR(5),
    name         VARCHAR(50),
    phone        VARCHAR(15),
    email        VARCHAR(50),
    address      VARCHAR(50),
    dom_or_int   VARCHAR(13),
    enroll_notes TEXT,
    admin_status VARCHAR(20)
);

CREATE TABLE requirements
(
    id         INT PRIMARY KEY,
    prog_id    VARCHAR(5),
    section    VARCHAR(50),
    field_name VARCHAR(50)
);

CREATE TABLE studentTracking
(
    req_id INT,
    stu_id INT,
    ans    VARCHAR(50)
);

CREATE TABLE employees
(
    id         INT PRIMARY KEY,
    username   VARCHAR(50),
    phone      VARCHAR(15),
    email      VARCHAR(50),
    department VARCHAR(50),
    password   VARCHAR(100),
    admin      INT
);

CREATE TABLE fees
(
    id        INT PRIMARY KEY,
    prog_id   VARCHAR(5),
    fee_name  VARCHAR(50),
    dom_price int,
    int_price int
);

CREATE TABLE programs
(
    id        VARCHAR(5) PRIMARY KEY,
    prog_name VARCHAR(50)
);

CREATE TABLE sessions
(
    session_id INT PRIMARY KEY,
    user_id    INT,
    created    DATETIME,
    logout     DATETIME
);
CREATE TABLE requests
(
    id       INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50),
    request  VARCHAR(100)
);


CREATE TABLE apsds
(
    student_id         INT,
    photo_id           BOOLEAN,
    app_form           VARCHAR(50),
    app_fee            VARCHAR(50),
    app_essay          VARCHAR(30),
    refer_letter       VARCHAR(50),
    resume             VARCHAR(20),
    intro_of_msg       DATETIME,
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
    handbook_notes     VARCHAR(30),
    payment_option     VARCHAR(50),
    ack_and_agr        DATE,
    receive_card       BOOLEAN,
    rmt_stu_matt       VARCHAR(100)
);

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
    student_id        INT,
    tuition_paid      BOOLEAN,
    transcript        BOOLEAN,
    completion_letter BOOLEAN,
    signed_diploma    BOOLEAN,
    exam_date         DATETIME,
    T2202A            BOOLEAN,
    employment        VARCHAR(200)
);

CREATE TABLE invoice
(
    number  INT PRIMARY KEY,
    bill_to VARCHAR(50),
    date    DATE,
    total   INT,
    note    VARCHAR(100)
);

CREATE TABLE intro_msg_detail
(
    id            INT PRIMARY KEY,
    from_date     DATETIME,
    to_date       DATETIME,
    intro_msg_fee VARCHAR(100),
    intro_msg     VARCHAR(100)
);


ALTER TABLE sessions
    ADD CONSTRAINT session_fk
        FOREIGN KEY (user_id)
            REFERENCES Employees (id);

ALTER TABLE Students
    ADD CONSTRAINT Students_FK
        FOREIGN KEY (prog_id)
            REFERENCES Programs (id);

ALTER TABLE Students
    ADD CHECK (dom_or_int IN ('Domestic', 'International'));

ALTER TABLE Requirements
    ADD CONSTRAINT Requirements_FK
        FOREIGN KEY (prog_id)
            REFERENCES Programs (id);

ALTER TABLE StudentTracking
    ADD CONSTRAINT StudentTracking_FK1
        FOREIGN KEY (stu_id)
            REFERENCES Students (id);

ALTER TABLE StudentTracking
    ADD CONSTRAINT StudentTracking_FK2
        FOREIGN KEY (req_id)
            REFERENCES Requirements (id);

ALTER TABLE Fees
    ADD CONSTRAINT fees_Requirements_FK
        FOREIGN KEY (prog_id)
            REFERENCES Programs (id);

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

ALTER TABLE apsds
    ADD CONSTRAINT apsd_stu_fk
        FOREIGN KEY (student_id)
            REFERENCES Students (id);
ALTER TABLE apsds
    ADD CONSTRAINT apsd_stu_unq
        UNIQUE (student_id);
ALTER TABLE ppes
    ADD CONSTRAINT ppe_stu_fk
        FOREIGN KEY (student_id)
            REFERENCES Students (id);
ALTER TABLE ppes
    ADD CONSTRAINT ppes_stu_unq
        UNIQUE (student_id);

ALTER TABLE graduations
    ADD CONSTRAINT grad_stu_fk
        FOREIGN KEY (student_id)
            REFERENCES Students (id);
ALTER TABLE graduations
    ADD CONSTRAINT grad_stu_unq
        UNIQUE (student_id);


ALTER TABLE apsds
    ADD CONSTRAINT introMsg_fk
        FOREIGN KEY (intro_of_msg) REFERENCES intro_msg_detail (id);

-- Insert 5 rows of data into Programs table
INSERT INTO Programs
VALUES ('HCA', 'Health Care Assistant');

INSERT INTO Programs
VALUES ('CSW', 'Community Support Worker');

INSERT INTO Programs
VALUES ('BK', 'Bookkeeping');

INSERT INTO Programs
VALUES ('DA', 'Data Analytics');

INSERT INTO Programs
VALUES ('RMT', 'Registered Massage Therapy');

-- Insert 5 rows of data into Students table
INSERT INTO Students
VALUES (3789000, 'HCA', 'Jack Kerwin', '778-959-6325', 'jack.kerwin@fcstudent.ca', '1010 Clement Ave, Kelowna, V1Y 7E3',
        'Domestic', 'Application fee paid.', 'Interested');

INSERT INTO Students
VALUES (3789001, 'CSW', 'Abigail Sloan', '250-123-1425', 'abigail.sloan@fcstudent.ca',
        '101-3533 Carrington Rd, West Kelowna, V4T 3G9', 'Domestic', 'Waiting for contract', 'Conditional');

INSERT INTO Students
VALUES (3789002, 'HCA', 'Norman Dreger', '250-748-5362', 'norman.dreger@fcstudent.ca',
        '202-211 Briarwood Rd, Kelowna, V1X 2G4', 'International', 'Complete', 'Enrolled');

INSERT INTO Students
VALUES (3789003, 'RMT', 'Alec Bryson', '778-582-4785', 'alec.bryson@fcstudent.ca',
        '1806 Kloppenburg Crt, Kelowna, V1P 1N6', 'Domestic', '', 'Interested');

INSERT INTO Students
VALUES (3789004, 'RMT', 'Calista Cornford', '604-582-1213', 'calista.cornford@fcstudent.ca',
        '2159 Clement Ave, Kelowna, V1Y 7E3', 'Domestic', 'Waiting for transcript.', 'Conditional');

-- Insert 5 rows of data into Fees table
INSERT INTO Fees
VALUES (210101, 'HCA', 'Application Fee', 150, 150);

INSERT INTO Fees
VALUES (210102, 'RMT', 'Intro Course Fee', 300, 300);

INSERT INTO Fees
VALUES (210103, 'CSW', 'Textbook Fee', 100, 100);

INSERT INTO Fees
VALUES (210104, 'HCA', 'Tuition Fee', 7795, 9580);

INSERT INTO Fees
VALUES (210105, 'DA', 'Administration Fee', 0, 300);

-- Insert 5 rows of data into Employees table
INSERT INTO Employees
VALUES (1000, 'jessie.zhang', '250-718-6186', 'jessie.zhang@firstcollege.ca', 'IT Department', '123456789', 1);

INSERT INTO Employees
VALUES (1001, 'timothy.yang', '205-899-3790', 'timothy.yang@firstcollege.ca', 'Director Office', '123456789', 0);

INSERT INTO Employees
VALUES (1002, 'cecily.qiu', '250-859-8417', 'cecily.qiu@firstcollege.ca', 'Student Service Department', '123456789', 0);

INSERT INTO Employees
VALUES (1003, 'jason.zhong', '778-231-3456', 'jason.zhong@firstcollege.ca', 'President', '123456789', 0);

INSERT INTO Employees
VALUES (1004, 'sydney.stoltz', '250-718-8279', 'sydney.stoltz@firstcollege.ca', 'Student Service Department',
        '123456789', 0);

-- Insert 5 rows of data into Requirements table
INSERT INTO Requirements
VALUES (100, 'HCA', 'Admission Prior to Start Date', 'Photo ID');

INSERT INTO Requirements
VALUES (101, 'HCA', 'Prior to Practice Education', 'Name Tag');

INSERT INTO Requirements
VALUES (102, 'CSW', 'Graduation', 'Official Completion Letter');

INSERT INTO Requirements
VALUES (103, 'RMT', 'Prior to Practice Education', 'Uniform Size');

INSERT INTO Requirements
VALUES (104, 'RMT', 'Admission Prior to Start Date', 'CRC');

-- Insert 5 rows of data into StudentTracking table
INSERT INTO StudentTracking
VALUES (100, 3789001, 'Yes');

INSERT INTO StudentTracking
VALUES (100, 3789003, 'No');

INSERT INTO StudentTracking
VALUES (102, 3789004, 'No');

INSERT INTO StudentTracking
VALUES (101, 3789000, 'Yes');

INSERT INTO StudentTracking
VALUES (101, 3789001, 'Yes');

-- Insert 5 rows of data into apsds table
INSERT INTO apsds
VALUES (3789000,
        TRUE,
        'Received and signed',
        'Received with Invoice',
        'Received and reviewed',
        'Received one',
        'Not received',
        '2021-06-11 08:00:00',
        'Received with Invoice',
        TRUE,
        NULL,
        90,
        'Received and clear',
        'Not received',
        '2021-06-12',
        NULL,
        'Transcript received',
        'jack.kerwin@fcstudent.ca',
        NULL,
        'Received but not signed',
        NULL,
        'StudentAidBC',
        NULL,
        NULL,
        NULL);

INSERT INTO apsds
VALUES (3789001,
        TRUE,
        'Received and signed',
        'Received with Invoice',
        'Received and reviewed',
        'Received two',
        'Received',
        '2020-12-17 08:00:00',
        'Received with Invoice',
        TRUE,
        'Completed at DT location',
        NULL,
        'Received and clear',
        'Received and clear',
        '2020-12-17',
        TRUE,
        'Transcript received',
        'abigail.sloan@fcstudent.ca',
        '2020-12-19',
        'Received and signed',
        'Received and signed',
        'StudentAidBC',
        '2020-12-19',
        TRUE,
        'Sheet, oil bottle, laptop');

INSERT INTO apsds
VALUES (3789002,
        FALSE,
        'Received not signed',
        'Received with Invoice',
        'Received and reviewed',
        'Received one',
        'Not received',
        '2021-06-12 16:00:00',
        'Received with Invoice',
        TRUE,
        NULL,
        88,
        'Received and clear',
        'Not received',
        '2021-06-13',
        NULL,
        'Diploma received',
        'norman.dreger@fcstudent.ca',
        NULL,
        'Received and signed',
        NULL,
        'Monthly payment',
        NULL,
        NULL,
        NULL);

INSERT INTO apsds
VALUES (3789003,
        TRUE,
        'Received and signed',
        'Received with Invoice',
        'Received and reviewed',
        'Received two',
        'Received',
        '2020-12-17 08:00:00',
        'Received with Invoice',
        TRUE,
        'Completed at DT location',
        NULL,
        'Received and clear',
        'Received and clear',
        '2020-12-18',
        TRUE,
        'Diploma received',
        'alec.bryson@fcstudent.ca',
        '2020-12-19',
        'Received and signed',
        'Received and signed',
        'Payment plan',
        '2020-12-19',
        TRUE,
        'Sheet, oil bottle, laptop, holster');

INSERT INTO apsds
VALUES (3789004,
        FALSE,
        'Received and signed',
        'Received with Invoice',
        'Received and reviewed',
        'Received one',
        'Not received',
        '2021-06-11 08:00:00',
        'Received with Invoice',
        FALSE,
        NULL,
        NULL,
        'Received and clear',
        'Not received',
        '2021-06-12',
        NULL,
        'Diploma received',
        'alec.bryson@fcstudent.ca',
        NULL,
        'Received but not signed',
        NULL,
        'StudentAidBC',
        NULL,
        NULL,
        NULL);

--Insert 5 rows of data into ppes table
INSERT INTO ppes
VALUES (3789000,
        NULL,
        '1634 Harvey Ave, Kelowna, BC V1Y 6G2',
        NULL,
        NULL,
        NULL,
        NULL,
        NULL,
        NULL,
        NULL,
        NULL);

INSERT INTO ppes
VALUES (3789001,
        'Small',
        '1634 Harvey Ave, Kelowna, BC V1Y 6G2',
        NULL,
        '2020-12-16',
        '2021-01-11',
        '2020-12-14 11:00:00',
        '2020-12-15',
        '2020-12-16',
        TRUE,
        TRUE);

INSERT INTO ppes
VALUES (3789002,
        NULL,
        '1634 Harvey Ave, Kelowna, BC V1Y 6G2',
        NULL,
        NULL,
        NULL,
        NULL,
        NULL,
        NULL,
        NULL,
        NULL);

INSERT INTO ppes
VALUES (3789003,
        'Large',
        '1634 Harvey Ave, Kelowna, BC V1Y 6G2',
        NULL,
        '2020-12-16',
        '2021-01-11',
        '2020-12-14 11:00:00',
        '2020-12-15',
        '2020-12-16',
        TRUE,
        TRUE);

INSERT INTO ppes
VALUES (3789004,
        NULL,
        '1634 Harvey Ave, Kelowna, BC V1Y 6G2',
        NULL,
        NULL,
        NULL,
        NULL,
        NULL,
        NULL,
        NULL,
        NULL);

--Insert 5 rows of data into graduations table
INSERT INTO graduations
VALUES (3789000,
        NULL,
        NULL,
        NULL,
        NULL,
        NULL,
        NULL,
        NULL);

INSERT INTO graduations
VALUES (3789001,
        TRUE,
        TRUE,
        TRUE,
        TRUE,
        '2021-05-10',
        TRUE,
        'Got a job offer from Lotus Massage Therapy clinic');

INSERT INTO graduations
VALUES (3789002,
        NULL,
        NULL,
        NULL,
        NULL,
        NULL,
        NULL,
        NULL);

INSERT INTO graduations
VALUES (3789003,
        TRUE,
        TRUE,
        TRUE,
        TRUE,
        '2021-03-15',
        TRUE,
        'Got a job offer from Lackshore Massage Therapy clinic');

INSERT INTO graduations
VALUES (3789004,
        NULL,
        NULL,
        NULL,
        NULL,
        NULL,
        NULL,
        NULL);