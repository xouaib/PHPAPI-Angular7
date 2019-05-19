## Create DB
ng7_crud  
CREATE TABLE IF NOT EXISTS `products` (  
  `p_id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,  
  `p_name` varchar(128) NOT NULL,  
  `p_description` text NOT NULL,  
  `p_price` double NOT NULL,  
  `p_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,  
  `p_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE   CURRENT_TIMESTAMP  
);  

## Add data
INSERT INTO `products` (`p_id`, `p_name`, `p_description`, `p_price`) VALUES  
  (1, 'Basketball', 'A ball used in the NBA.', 49.99),  
  (3, 'Gatorade', 'This is a very good drink for athletes.', 1.99),  
  (4, 'Eye Glasses', 'It will make you read better.', 6),  
  (5, 'Trash Can', 'It will help you maintain cleanliness.', 3.95),  
  (6, 'Mouse', 'Very useful if you love your computer.', 11.35),  
  (7, 'Earphone', 'You need this one if you love music.', 7),  
  (8, 'Pillow', 'Sleeping well is important.', 8.99);  
  
## Angular 7 CRUD
https://github.com/xouaib/AngularCRUD
