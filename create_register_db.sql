-- Step 1: Create the database
CREATE DATABASE IF NOT EXISTS RegisterDB;
USE RegisterDB;

-- Step 2: Create the table to store register details
CREATE TABLE IF NOT EXISTS RegisterDetails (
    Bill_No INT PRIMARY KEY,          -- Unique identifier for the bill
    Description VARCHAR(255),         -- Description of the bill
    Budget_Head VARCHAR(100),         -- Budget head/category
    Bill_Date DATE,                   -- Date of the bill
    Bill_Amount DECIMAL(10, 2),       -- Amount of the bill
    Status VARCHAR(50),               -- Status of the bill (e.g., Paid, Pending)
    Remarks TEXT,                     -- Additional remarks
    Actions VARCHAR(100)              -- Actions to be taken (e.g., Approve, Reject)
);

-- Step 3: Insert a sample record into the table
INSERT INTO RegisterDetails (Bill_No, Description, Budget_Head, Bill_Date, Bill_Amount, Status, Remarks, Actions)
VALUES (
    1,                              -- Bill_No
    'Office Supplies Purchase',     -- Description
    'Operational Expenses',         -- Budget_Head
    '2023-10-01',                   -- Bill_Date
    1500.75,                        -- Bill_Amount
    'Pending',                      -- Status
    'Awaiting approval from manager.', -- Remarks
    'Approve'                       -- Actions
);

-- Step 4: Query to retrieve all records from the table
SELECT * FROM RegisterDetails;
