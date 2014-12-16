
CREATE DATABASE openForumDB;

USE openForumDB;

CREATE TABLE USERS (
                User_ID INT NOT NULL,
                User_Name VARCHAR(256) NOT NULL,
                Post_Count INT NOT NULL,
                Password_Hash NVARCHAR(256) NOT NULL,
                PRIMARY KEY (User_ID)
);


CREATE TABLE THREADS (
                Thread_ID INT NOT NULL,
                User_ID INT NOT NULL,
                Title NVARCHAR(512) NOT NULL,
                Date DATE NOT NULL,
                PRIMARY KEY (Thread_ID),
                FOREIGN KEY (User_ID) REFERENCES USERS(User_ID)
);

CREATE TABLE USER_SUBSCRIPTIONS (
				Subscription_ID INT NOT NULL,
				User_ID INT NOT NULL,
				Thread_ID INT NOT NULL,
				PRIMARY KEY (Subscription_ID),
				FOREIGN KEY (User_ID) REFERENCES USERS(User_ID),
				FOREIGN KEY (Thread_ID) REFERENCES THREADS(Thread_ID)
);

CREATE TABLE POSTS (
                Post_ID INT NOT NULL,
                Thread_ID INT NOT NULL,
                User_ID INT NOT NULL,
                Date DATE NOT NULL,
                Title NVARCHAR(512),
                Body NVARCHAR (1000) NOT NULL,
                PRIMARY KEY (Post_ID),
                FOREIGN KEY (Thread_ID) REFERENCES THREADS(Thread_ID),
                FOREIGN KEY (User_ID) REFERENCES USERS(User_ID)
);
