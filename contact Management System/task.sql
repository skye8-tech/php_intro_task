CREATE TABLE tasks (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    description TEXT,
    status ENUM('created', 'in-progress', 'done') NOT NULL DEFAULT 'created'
);
CREATE TABLE comments(
    id INT AUTO_INCREMENT PRIMARY KEY,
    task_id INT ,
    comment TEXT ,
    FOREIGN KEY (task_id) REFERENCES tasks(id) 
);