CREATE TABLE users (
    idUser INT AUTO_INCREMENT PRIMARY KEY, 
    mail VARCHAR(40) NOT NULL UNIQUE,      
    username VARCHAR(16) NOT NULL UNIQUE, 
    passHash VARCHAR(60) NOT NULL,        
    userFirstName VARCHAR(60) NOT NULL,   
    userLastName VARCHAR(120) NOT NULL,    
    creationDate DATETIME DEFAULT CURRENT_TIMESTAMP, 
    removeDate DATETIME DEFAULT NULL,      
    lastSignIn DATETIME DEFAULT NULL,      
    active TINYINT(1) DEFAULT 1           
)