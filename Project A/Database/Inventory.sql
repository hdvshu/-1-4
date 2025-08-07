-- Max8086 104195667
CREATE DATABASE `Inventory` DEFAULT CHARACTER SET utf8mb4;

USE `Inventory`;


DROP TABLE IF EXISTS `vendor`;
CREATE TABLE vendor (
    id INT AUTO_INCREMENT PRIMARY KEY,
    supplier_name VARCHAR(255) NOT NULL,
    supplier_contact VARCHAR(20) NOT NULL,
    supplier_address VARCHAR(255) NOT NULL,
    item_name VARCHAR(255) NOT NULL,
    item_quantity INT NOT NULL,
    unit_price DECIMAL(10, 2) NOT NULL,
    total_cost DECIMAL(10, 2) NOT NULL
)ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=gbk;

-- Medicine Inventory Table----------------------------------
CREATE TABLE Medicine (
    id INT AUTO_INCREMENT PRIMARY KEY,
    ItemName VARCHAR(100),
    Supplier VARCHAR(100),
    Quantity INT 
)ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- Inserting data into Medicine Inventory Table
INSERT INTO Medicine
VALUES ('1','Bisoprolol', 'QiaoJun', 250),
        ('2', 'Metformin', 'B', 500),
        ('3', 'Ramipril', 'C', 300),
        ('4', 'Atorvastatin', 'D', 400),
        ('5', 'Aspirin', 'E', 1000);
    -- ('Losartan', 200),
    -- ('Warfarin', 600),
    -- ('Insulin', 50), -- Assuming insulin quantity is in vials
    -- ('Levothyroxine', 200),
    -- ('Omeprazole', 300),
    

-- Food Inventory Table----------------------------------------
CREATE TABLE Food (
    id INT AUTO_INCREMENT PRIMARY KEY,
    ItemName VARCHAR(100),
    Supplier VARCHAR(50),
    Quantity INT
)ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- Inserting data into Food Inventory Table
INSERT INTO Food 
VALUES 
    ('1', 'Fruits and vegetables', 'AA', 500),
    ('2', 'Dairy products', 'BB', 200),
    ('3', 'Grains', 'CC', 300),
    ('4', 'Proteins', 'DD',400),
    ('5','Snacks',  'EE', 500);
    -- ('Canned goods', 1000),
    

-- MedicalSupplies Inventory Table-----------------------------------
CREATE TABLE MedicalSupplies (
    id INT AUTO_INCREMENT PRIMARY KEY,
    ItemName VARCHAR(100),
    Supplier VARCHAR(5),
    Quantity INT
)ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- Inserting data into MedicalSupplies Inventory Table
INSERT INTO MedicalSupplies
VALUES 
    ('1','Mobility aids', 'AAA', 20),
    ('2', 'Bandages', 'BBB', 1000),
    ('3', 'Wound dressings', 'CCC', 800),
    -- ('Syringes', 2000),
    ('4', 'Gloves', 'DDD', 5000),
    ('5', 'Catheters', 'EEE', 300);



-- CleaningSupplies Inventory Table--------------------------------
CREATE TABLE CleaningSupplies (
    id INT AUTO_INCREMENT PRIMARY KEY,
    ItemName VARCHAR(100),
    Supplier VARCHAR(5),
    Quantity INT
)ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- Inserting data into Cleaning Supplies Inventory Table
INSERT INTO CleaningSupplies
VALUES 
    ('1', 'Toothpaste tubes', 'AAAA', 100),
    ('2', 'Toilet rolls', 'BBBB', 500),
    ('3', 'Shampoo and conditioner', 'CCCC', 100),
    ('4', 'Soap bars', 'DDDD', 100),
    -- ('Toothbrushes', 100),
    -- ('Floss', 100),
    -- ('Body wash', 100),
    ('5','Moisturiser', 'EEEE', 100);


-- Linen Inventory Table--------------------------------------------
CREATE TABLE Linen (
    id INT AUTO_INCREMENT PRIMARY KEY,
    ItemName VARCHAR(100),
    Supplier VARCHAR(5),
    Quantity INT
)ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- Inserting data into Linen Inventory Table
INSERT INTO Linen
VALUES 
    ('1','Bed sets', 'AAAAA', 250),
    ('2','Towels', 'BBBBB', 250);
