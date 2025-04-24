    INT(11) UNSIGNED // 0 to 4294967295
    BIGINT(20)
    FLOAT(10,2)
    DOUBLE(16,8)
    DECIMAL(10,2)
    CHAR(10)
    VARCHAR(255)
    TEXT
    BINARY(16)
    VARBINARY(255)       
    DATE // YYYY-MM-DD
    TIME // HH:MM:SS
    DATETIME // YYYY-MM-DD HH:MM:SS

    create table users(
        id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(255) NOT NULL,
        email VARCHAR(255) NOT NULL UNIQUE,
        password VARCHAR(255) NOT NULL,
        created_at DATETIME NOT NULL DEFAULT CURRENT_TIME
    );
    create table comments(
        id INT(11) NOT NULL AUTO_INCREMENT,
        name VARCHAR(255) NOT NULL,
        comment_text TEXT NOT NULL,
        created_at DATETIME NOT NULL DEFAULT CURRENT_TIME,
        users_id INT(11),
        PRIMARY KEY (id),
        FOREIGN KEY (users_id) REFERENCES users(id) ON DELETE SET NULL
    );

    insert into users (name, email, password) values ('John Doe', 'john@lpu.in', 'password123');
    update users set name = 'Charlie Doe', pwd = '123pass' where id = 1 or email = 'john@lpu.in';
    delete from users where id = 1;
    select name, email from users where id = 1;
    select * from users where name like '%John%';
    select users.name, comments.comment_text from users inner join comments on users.id = comments.users_id where users.id = 1;