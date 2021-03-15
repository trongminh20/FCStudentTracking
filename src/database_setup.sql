CREATE TABLE students
(
    id           INT PRIMARY KEY,
    prog_id      VARCHAR(5),
    name         VARCHAR(50),
    birthdate    DATE,
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


CREATE TABLE invoices
(
    number  INT PRIMARY KEY,
    bill_to VARCHAR(50),
    date    DATE,
    total   INT,
    note    VARCHAR(100)
);


CREATE TABLE apsds
(
    student_id             INT,
    photo_id               VARCHAR(3),
    app_form               VARCHAR(50),
    app_fee                VARCHAR(50),
    app_essay              VARCHAR(3),
    refer_letter           VARCHAR(50),
    resume                 VARCHAR(3),
    intro_of_msg_day1_from DATETIME,
    intro_of_msg_day1_to   DATETIME,
    intro_of_msg_day2_from DATETIME,
    intro_of_msg_day2_to   DATETIME,
    intro_fee              VARCHAR(100),
    intro_msg_complete     VARCHAR(100),
    welcome_letter         VARCHAR(3),
    eng_test_result        INT,
    eng_com_form           VARCHAR(3),
    crc_result             VARCHAR(50),
    medical_notes          VARCHAR(3),
    interview_date         DATETIME,
    interview_approved     VARCHAR(3),
    dips_and_trans         VARCHAR(50),
    stu_email              VARCHAR(50),
    accept_letter_date     DATETIME,
    enroll_contract        VARCHAR(50),
    handbook_notes         VARCHAR(300),
    pay_option             VARCHAR(50),
    ack_and_agr            DATETIME,
    received_card          VARCHAR(3),
    rmt_stu_materials      VARCHAR(100),
    photo_waiver_date   DATE,
    health_check_date   DATE


);

CREATE TABLE ppes
(
    student_id            INT,
    name_tag              VARCHAR(3),
    clinic_shirt_size     VARCHAR(30),
    order_date            DATE,
    pickup_date           DATE,
    fa_and_cpr_dt         DATETIME,
    fa_and_cpr_contact    VARCHAR(100),
    cert_fa_cpr_receive   DATE,
    foodsafe_dt           DATETIME,
    cert_foodsafe_receive DATE,
    crc_receive           DATE,
    speco                 VARCHAR(3),
    cli_handbook_receive  DATE,
    cli_ack_and_agr       VARCHAR(3),
    medical_file          VARCHAR(3)
);

CREATE TABLE graduations
(
    student_id          INT,
    tuition_paid        VARCHAR(3),
    official_transcript VARCHAR(3),
    completion_letter   VARCHAR(3),
    signed_diploma      VARCHAR(3),
    exam_date           DATETIME,
    T2202A              VARCHAR(3),
    employment          VARCHAR(200)
);

CREATE TABLE invoice
(
    number  INT PRIMARY KEY,
    bill_to VARCHAR(50),
    date    DATE,
    total   INT,
    note    VARCHAR(100)
);

CREATE TABLE payment_tracking
(
    student_id    INT,
    domestic      VARCHAR(3),
    international VARCHAR(3),
    app_fee       INT,
    intro_msg_fee INT,
    materials_fee INT,
    textbook_fee  INT,
    admin_fee     INT,
    1st_payment   INT,
    2nd_payment   INT,
    3rd_payment   INT,
    4th_payment   INT,
    5th_payment   INT,
    6th_payment   INT,
    7th_payment   INT,
    8th_payment   INT,
    9th_payment   INT,
    10th_payment  INT,
    total         INT
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

ALTER TABLE payment_tracking
    ADD CONSTRAINT pay_stu_fk
        FOREIGN KEY (student_id)
            REFERENCES students (id);

