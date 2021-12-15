CREATE DATABASE flowershop;

USE flowershop;

CREATE TABLE Farm_Location(
	FarmID int NOT NULL, 
    FarmAddress varchar(50) NOT NULL, 
    FarmName varchar(50) NOT NULL, 
    FarmNum int  NOT NULL,
    
    CONSTRAINT PK_FarmID PRIMARY KEY (FarmID)
);

INSERT INTO farm_location(FarmID, FarmAddress, FarmName, FarmNum) 
VALUES(1, '36.603680, 127.501891', 'dasom-flower', 0432686633),
(2, '36.704246, 127.427970','hosoo-flower farm', 043352845),
(3, '36.611371, 127.479500', 'Cheongju flower farm', 0432654633),
(4, '36.642143, 127.473226', 'flower deliver', 0432353593);

CREATE TABLE Customer(
	CustomerID varchar(15) NOT NULL, 
	CustomerPW varchar(15) NOT NULL, 
    Email varchar(30) NOT NULL, 
    CustomerName varchar(5) NOT NULL, 
    PhoneNumber int NOT NULL, 
    CustomerAddress varchar(50) NOT NULL,
    
    CONSTRAINT PK_CustomerID PRIMARY KEY (CustomerID)
);

CREATE TABLE Flower(
    FlowerID int unsigned,
    FlowerName varchar(30) not null,
    FlowerPrice int unsigned not null,
    Category varchar(10) not null,
    FlowerImg varchar(30) not null,
    
    primary key(FlowerID)
);

INSERT INTO Flower(FlowerID, FLowerName, FlowerPrice, Category, FlowerImg) 
VALUES
    (001, 'Camomile', 25, 'situation', 'contex1.jpg'),
    (002, 'Papiopedilloom', 35, 'situation', 'contex2.jpg'),
    (003, 'Gongjakcho', 20, 'situation', 'contex3.png'),
    (004, 'freesia', 25, 'situation', 'contex4.jpg'),
    (005, 'Carnation', 30, 'situation', 'contex5.jpg'),
    (006, 'Pink hydrange', 20, 'situation', 'contex6.jpeg'),
    (007, 'Cotton', 25, 'situation', 'contex7.jpg'),
    (008, 'buque', 20, 'situation', 'contex8.jpg'),
	(009, 'Pink Lanumculus', 25, 'Spring', 'spring1.png'),
    (010, 'Georber', 35, 'Spring', 'spring2.png'),
    (011, 'Gongjakcho', 20, 'Spring', 'spring3.jpg'),
    (012, 'Yellow prisia', 25, 'Spring', 'spring4.jpg'),
    (013, 'Pink Tulip', 30, 'Spring', 'spring5.jpeg'),
    (014, 'Oxford, Butterfly', 20, 'Spring', 'spring6.jpeg'),
    (015, 'Big flower', 70, 'Spring', 'spring7.jpeg'),
    (016, 'Mango tulip', 20, 'Spring', 'spring8.jpg'),
    (017, 'Purple hydrangea', 25, 'Summer', 'summer1.jpg'),
    (018, 'Yellow rose', 35, 'Summer', 'summer2.jpeg'),
    (019, 'Blue rose', 20, 'Summer', 'summer3.jpeg'),
    (020, 'Lavenderace rose', 25, 'Summer', 'summer4.jpeg'),
    (021, 'delphinium', 30, 'Summer', 'summer5.jpeg'),
    (022, 'Blue hydrangea', 20, 'Summer', 'summer6.jpeg'),
    (023, 'Calla', 20, 'Summer', 'summer7.jpeg'),
    (024, 'Pink hydrange', 25, 'Summer', 'summer8.jpeg'),
    (025, 'Yellow, Pink rose', 20, 'Summer', 'summer9.jpeg'),
    (026, 'Mixed flower', 25, 'Summer', 'summer10.jpeg'),
    (027, 'Mini rose', 20, 'Summer', 'summer11.jpeg'),
    (028, 'Green hydrange', 30, 'Summer', 'summer12.jpeg'),
    (029, 'sunflower', 30, 'Fall', 'fall1.jpg'),
    (030, 'Chrysanthemum', 30, 'Fall', 'fall2.jpg'),
    (031, 'White Chrysanthemum', 20, 'Fall', 'fall3.jpg'),
    (032, 'Purple globe amaranth', 25, 'Fall', 'fall4.jpg'),
    (033, 'Red globe amaranth', 30, 'Fall', 'fall5.jpg'),
    (034, 'Pink Patrinia scabiosaefolia', 20, 'Fall', 'fall6.jpg'),
    (035, 'Purple Patrinia scabiosaefolia', 20, 'Fall', 'fall7.jpg'),
    (036, 'Yellow Patrinia scabiosaefolia', 25, 'Fall', 'fall8.jpg'),
    (037, 'Pink dahlia', 20, 'Fall', 'fall9.jpg'),
    (038, 'burgundy dahlia', 25, 'Fall', 'fall10.jpg'),
    (039, 'Orange dahlia', 20, 'Fall', 'fall11.jpeg'),
    (040, 'Cosmos', 30, 'Fall', 'fall12.jpg'),
    (041, 'Cotton flower', 25, 'Winter', 'winter1.jpg'),
    (042, 'Stoke', 30, 'Winter', 'winter2.jpg'),
    (043, 'Siklamen', 30, 'Winter', 'winter3.jpg'),
	(049, 'Custom1', 30, 'Custom', 'pros.png'),
    (050, 'Custom2', 50, 'Custom', 'prom.png'),
    (051, 'Custom3', 70, 'Custom', 'prol.png'),
    (052, 'Custom4', 30, 'Custom', 'pts.png'),
    (053, 'Custom5', 50, 'Custom', 'ptm.png'),
    (054, 'Custom6', 70, 'Custom', 'ptl.png'),
    (055, 'Custom7', 30, 'Custom', 'pras.png'),
    (056, 'Custom8', 50, 'Custom', 'pram.png'),
    (057, 'Custom9', 70, 'Custom', 'pral.png'),
    (058, 'Custom10', 30, 'Custom', 'wros.png'),
    (059, 'Custom11', 50, 'Custom', 'wrom.png'),
    (060, 'Custom12', 70, 'Custom', 'wrol.png'),
    (061, 'Custom13', 30, 'Custom', 'wts.png'),
    (062, 'Custom14', 50, 'Custom', 'wtm.png'),
    (063, 'Custom15', 70, 'Custom', 'wtl.png'),
    (064, 'Custom16', 30, 'Custom', 'wras.png'),
    (065, 'Custom17', 50, 'Custom', 'wram.png'),
    (066, 'Custom18', 70, 'Custom', 'wral.png'),
    (067, 'Custom19', 30, 'Custom', 'gros.png'),
    (068, 'Custom20', 50, 'Custom', 'grom.png'),
    (069, 'Custom21', 70, 'Custom', 'grol.png'),
    (070, 'Custom22', 30, 'Custom', 'gts.png'),
    (071, 'Custom23', 50, 'Custom', 'gtm.png'),
    (072, 'Custom24', 70, 'Custom', 'gtl.png'),
    (073, 'Custom25', 30, 'Custom', 'gras.png'),
    (074, 'Custom26', 50, 'Custom', 'gram.png'),
    (075, 'Custom27', 70, 'Custom', 'gral.png');

CREATE TABLE FlowerExplanation( 
    FlowerID INT UNSIGNED REFERENCES Flower(FlowerID) ON DELETE CASCADE,
    Explanation VARCHAR(80) NOT NULL,
    PRIMARY KEY(FlowerID)
);

INSERT INTO FlowerExplanation VALUES
    (001, 'When visiting a person in a difficult situation or a hospital'),
    (002, 'When encouraging the future of good people'),
    (003, 'When you want to make peace'),
    (004, 'When cheering for a new beginning'),
    (005, 'Mother Day'),
    (006, 'Couple anniversary'),
    (007, 'Christmas'),
    (008, 'Wedding');

CREATE TABLE Custom(
    CustomID INT NOT NULL,
    FlowerID INT, 
    WrapColor VARCHAR(10) NOT NULL,
    FlowerType VARCHAR(20) NOT NULL,
    Size VARCHAR(10) NOT NULL,
    PRIMARY KEY(CustomID)
);

INSERT INTO Custom(CustomID, FlowerID, WrapColor, FlowerType, Size) VALUES 
    (1, 049, 'Pink', 'Rose', 'Small'),
    (2, 050, 'Pink', 'Rose', 'Medium'),
    (3, 051, 'Pink', 'Rose', 'Large'),
    (4, 052, 'Pink', 'Tulip', 'Small'),
    (5, 053, 'Pink', 'Tulip', 'Medium'),
    (6, 054, 'Pink', 'Tulip', 'Large'),
    (7, 055, 'Pink', 'Ranunculus', 'Small'),
    (8, 056, 'Pink', 'Ranunculus', 'Medium'),
    (9, 057, 'Pink', 'Ranunculus', 'Large'),
    (10, 058, 'White', 'Rose', 'Small'),
    (11, 059, 'White', 'Rose', 'Medium'),
    (12, 060, 'White', 'Rose', 'Large'),
    (13, 061, 'White', 'Tulip', 'Small'),
    (14, 062, 'White', 'Tulip', 'Medium'),
    (15, 063, 'White', 'Tulip', 'Large'),
    (16, 064, 'White', 'Ranunculus', 'Small'),
    (17, 065, 'White', 'Ranunculus', 'Medium'),
    (18, 066, 'White', 'Ranunculus', 'Large'),
    (19, 067, 'Gray', 'Rose', 'Small'),
    (20, 068, 'Gray', 'Rose', 'Medium'),
    (21, 069, 'Gray', 'Rose', 'Large'),
    (22, 070, 'Gray', 'Tulip', 'Small'),
    (23, 071, 'Gray', 'Tulip', 'Medium'),
    (24, 072, 'Gray', 'Tulip', 'Large'),
    (25, 073, 'Gray', 'Ranunculus', 'Small'),
    (26, 074, 'Gray', 'Ranunculus', 'Medium'),
    (27, 075, 'Gray', 'Ranunculus', 'Large');

CREATE TABLE Cart(
	CartID INT auto_increment NOT NULL,
    CustomerID VARCHAR(15) REFERENCES Customer(CustomerID) ON DELETE CASCADE,
    FlowerID INT UNSIGNED REFERENCES Flower(FlowerID),
    Quantity INT UNSIGNED NOT NULL DEFAULT 1,
    PRIMARY KEY(CartID)
);

CREATE TABLE Card(
    CustomerID VARCHAR(15) not null,
    CardNumber varchar(30) not null,
    ValidThru int unsigned not null,
    CardPW int not null,
    CVC int not null,
    
    primary key(CardNumber)
);
CREATE TABLE FOrder(
    OrderID int auto_increment NOT NULL,
    CustomerID VARCHAR(15) not null,
    OrderDate varchar(15) not null,
    Delivery varchar(15) not null,
    PaymentMethod varchar(15) not null,
    
    primary key(OrderID)
);

CREATE TABLE OrderDetail(
    OrderDetailID int auto_increment NOT NULL, 
    OrderID INT,
    FlowerID INT not null,
    Quantity INT not null,
    
    primary key(OrderDetailID)
);

CREATE VIEW wishlist 
AS SELECT Cart.CustomerID, Flower.FlowerImg, Flower.FlowerName, Flower.Category 
FROM Flower, Cart
WHERE Flower.FlowerID=Cart.FlowerID;


