CREATE TABLE users (
    id INT(3) PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(255) UNIQUE NOT NULL,
    email VARCHAR(255) NOT NULL,
    role VARCHAR(200) DEFAULT "suscriber",
    password VARCHAR(250)
);

CREATE TABLE tasks (
    id INT(3) PRIMARY KEY AUTO_INCREMENT,
    task_text VARCHAR(255),
    statut VARCHAR(50),
    user_id INT,
    FOREIGN KEY (user_id) REFERENCES users (id)
);
-- remove foreign key user_id for test and add default statut "en attente"
CREATE TABLE tasks (
    id INT(3) PRIMARY KEY AUTO_INCREMENT,
    task_text VARCHAR(255),
    statut VARCHAR(50) DEFAULT "En attente"
);