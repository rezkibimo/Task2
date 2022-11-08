CREATE DATABASE sales_database;

USE sales_database;

CREATE TABLE customerTable (
    customer_id INT NOT NULL,
    customer_name VARCHAR(32) NOT NULL,
    customer_amount  INT NOT NULL,
    broker_id INT NOT NULL,
    PRIMARY KEY (customer_id)
);

INSERT INTO customerTable 
    (customer_id, customer_name) 
VALUES 
    (1, "sam", 3000, 4),
    (2, "john", 4000, 2),
    (3, "mack", 5000, 2),
    (4, "test", 3000, 3),
    (5, "june", 2000, 3),
    (6, "mike", 4000, 1),
    (7, "annie", 4000, 2),
    (8, "micheal", 2000, 1),
    (9, "tom", 2000, 4),
    (10, "jason", 6000, 4);

CREATE TABLE brokerTable (
    broker_id INT NOT NULL,
    broker_name VARCHAR(32) NOT NULL,
    PRIMARY KEY (broker_id)
);

INSERT INTO broker 
    (broker_id, broker_name) 
VALUES 
    (1, "Ted"),
    (2, "Mark"),
    (3, "Aaron"),
    (4, "Luke");