-- Max8086 104195667
CREATE DATABASE `members` DEFAULT CHARACTER SET utf8mb4;

USE `members`;

SET FOREIGN_KEY_CHECKS=0;
CREATE TABLE patients (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(255) NOT NULL,
    last_name VARCHAR(255) NOT NULL,
    address VARCHAR(255),
    email VARCHAR(255),
    phone VARCHAR(20),
    dob VARCHAR(10),
    gender ENUM('female', 'male'),
    emergency_name VARCHAR(255),
    relationship VARCHAR(100),
    address1 VARCHAR(255),
    emergency_phone VARCHAR(20),
    medical_ailment VARCHAR(255),
    blood_type VARCHAR(10),
    allergies VARCHAR(255),
    surgery_history TEXT,
    smoke_history TEXT,
    drink_alcohol ENUM('yes', 'no'),
    medicare_no VARCHAR(20),
    private_insurance VARCHAR(100),
    insurance_no VARCHAR(20)
);

INSERT INTO `patients` 
VALUES (
    '1',
    'John', 
    'Doe',
    '123 Elderly St', 
    'elderly@example.com', 
    '0123-456-789', 
    '1940-01-01', 
    'male', 
    'Emergency Contact', 
    'Child', 
    '456 Emergency Ave', 
    '987-654-3210', 
    'Arthritis', 
    'A+', 
    'Penicillin', 
    'Appendectomy in 1985', 
    'Non-smoker', 
    'no', 
    '1234567890', 
    'Medicare Advantage', 
    'MA123456'
);

CREATE TABLE employee (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(255),
    last_name VARCHAR(255),
    phone VARCHAR(20),
    email VARCHAR(50),
    address TEXT,
    dob VARCHAR(20),
    gender ENUM('female', 'male'),
    -- emergency_contacts
    emergency_name VARCHAR(255),
    relationship VARCHAR(255),
    address1 TEXT,
    emergency_phone VARCHAR(20),
    -- banking_information
    bank_name VARCHAR(255),
    full_name VARCHAR(25),
    bsb VARCHAR(10),
    account_no VARCHAR(20),
    -- superannuation_information
    provider VARCHAR(255),   
    member_id VARCHAR(25),
    tax VARCHAR(20)
);
-- INSERT INTO employee (first_name, last_name, start_date, position_title, gender, dob, address, suburb, state, postcode, phone_number, email_address, tax_file_number, hourly_pay_rate)
-- VALUES ('1','Roderika', 'Loux', '2015-07-20', 'Carer', 'Female', '1993-05-15', '8 Forest Hill Avenue', 'Noosa Heads', 'Queensland', '4567', '0432 109 876', 'roderikaloux84@gmail.com', '123-456-789', 22.00);

