DROP TABLE IF EXISTS `posts`;

CREATE TABLE Posts(
'id' int(20) NOT NULL AUTO_INCREMENT,
'username'  VARCHAR(255),
'name' VARCHAR(255),
'longitude' FLOAT NOT NULL,
'type' ENUM('image', 'video'),
'post_url' VARCHAR(255) NOT NULL,
'date_created' DATE NOT NULL,
'date_updated' DATE,
PRIMARY KEY ('post_id'),
FOREIGN KEY ('user_id') REFERENCES Users('user_id')
);
