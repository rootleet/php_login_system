# php_login_system

![alt text](project.png)

# `Deploying`

Clone projec into your web root
Create database called test_db

`Method 1`
execute the following sql queries

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `last_logged_in` text NOT NULL,
  `last_logged_out` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);
  
  ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

`Method 2`
When you create the database, in your php my admin, click on import, and select the file test_db.sql
It will create the users table and make it ready
