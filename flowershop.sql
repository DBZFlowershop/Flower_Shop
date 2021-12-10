CREATE DATABASE flowershop;

USE flowershop;

CREATE TABLE Farm_Location(
	FarmID int NOT NULL, 
    FarmAddress varchar(50) NOT NULL, 
    FarmName varchar(50) NOT NULL, 
    FarmNum int  NOT NULL,
    
    CONSTRAINT PK_FarmID PRIMARY KEY (FarmID)
);
CREATE TABLE Customer(
	CustomerID varchar(15) NOT NULL, 
	CustomerPW varchar(15) NOT NULL, 
    Email varchar(30) NOT NULL, 
    CustomerName varchar(5) NOT NULL, 
    PhoneNumber int NOT NULL, 
    CustomerAddress varchar(50) NOT NULL,
    
    CONSTRAINT PK_CustomerID PRIMARY KEY (CustomerID)
);