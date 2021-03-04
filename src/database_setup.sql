DROP
DATABASE fc_student_tracking;
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


ALTER TABLE sessions
    ADD CONSTRAINT session_fk
        FOREIGN KEY (userID)
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
ALTER TABLE ppes
    ADD CONSTRAINT ppe_stu_fk
        FOREIGN KEY (student_id)
            REFERENCES Students (id);
ALTER TABLE graduations
    ADD CONSTRAINT grad_stu_fk
        FOREIGN KEY (student_id)
            REFERENCES Students (id);

