Prisoner Database Management System

Overview

The Prisoner Database Management System is designed to efficiently manage records of prisoners, jails, jobs, cases, judges, and lawyers. This system ensures structured data storage, easy retrieval, and secure handling of information using SQL.

Features

Prisoner Records Management: Store and manage prisoner details such as name, date of birth, location, and assigned cases.

Jail Information: Track jail locations, types, and assigned prisoners.

Job Assignments: Maintain prisoner job roles within the jail.

Case Tracking: Store and manage case details, verdicts, and lawyer assignments.

Lawyer & Judge Records: Keep track of legal personnel handling different cases.

Database Schema

The database consists of multiple tables:

1. Jail Table

CREATE TABLE Jail (
    J_ID INT PRIMARY KEY,
    J_NAME VARCHAR(100),
    CITY VARCHAR(50),
    STATE VARCHAR(50),
    J_TYPE VARCHAR(50)
);

2. Prisoner Table

CREATE TABLE Prisoner (
    P_ID INT PRIMARY KEY,
    NAME VARCHAR(100),
    DOB DATE,
    CITY VARCHAR(50),
    STATE VARCHAR(50),
    J_ID INT,
    JO_ID INT,
    FOREIGN KEY (J_ID) REFERENCES Jail(J_ID),
    FOREIGN KEY (JO_ID) REFERENCES Job(JO_ID)
);

3. Job Table

CREATE TABLE Job (
    JO_ID INT PRIMARY KEY,
    JO_NAME VARCHAR(100),
    SALARY DECIMAL(10,2),
    J_ID INT,
    FOREIGN KEY (J_ID) REFERENCES Jail(J_ID)
);

4. Case Table

CREATE TABLE Case (
    C_ID INT PRIMARY KEY,
    CASE_TYPE VARCHAR(100),
    VERDICT VARCHAR(50),
    P_ID INT,
    L_ID INT,
    FOREIGN KEY (P_ID) REFERENCES Prisoner(P_ID),
    FOREIGN KEY (L_ID) REFERENCES Lawyer(L_ID)
);

5. Lawyer Table

CREATE TABLE Lawyer (
    L_ID INT PRIMARY KEY,
    L_NAME VARCHAR(100),
    AGE INT,
    CITY VARCHAR(50),
    STATE VARCHAR(50)
);

Sample Query Usage

Insert Prisoner Record

INSERT INTO Prisoner (P_ID, NAME, DOB, CITY, STATE, J_ID, JO_ID)
VALUES (1, 'John Doe', '1985-07-12', 'New York', 'NY', 101, 5);

Retrieve All Prisoners in a Specific Jail

SELECT P.NAME, J.J_NAME FROM Prisoner P
JOIN Jail J ON P.J_ID = J.J_ID
WHERE J.J_NAME = 'Alcatraz';

Find Cases Handled by a Specific Lawyer

SELECT C.CASE_TYPE, C.VERDICT, L.L_NAME FROM Case C
JOIN Lawyer L ON C.L_ID = L.L_ID
WHERE L.L_NAME = 'Michael Ross';

Installation & Setup

Install MySQL or PostgreSQL.

Run the provided SQL scripts to create the database schema.

Populate tables with sample data.

Use SQL queries to interact with the database.

Future Enhancements

Implement a Django/Flask web interface for user-friendly access.

Integrate authentication to secure sensitive data.

Enhance data visualization for better analysis.

Contributing

Contributions are welcome! Feel free to submit pull requests for improvements.

License

This project is open-source and available under the MIT License.

