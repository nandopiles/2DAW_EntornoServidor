
CREATE DATABASE fepila;
USE fepila;
-- if the table exists it will be deleted
DROP TABLE IF EXISTS `people`;
-- creates the table
CREATE TABLE IF NOT EXISTS `people` (
    `name` VARCHAR(50) NOT NULL,
    `age` INTEGER NOT NULL,
    `style` VARCHAR(50) NOT NULL,
    PRIMARY KEY(`name`)
);
-- inserts data examples
INSERT INTO `people` (`name`, `age`, `style`) VALUES ('Nando', 21, 'rap');
INSERT INTO `people` (`name`, `age`, `style`) VALUES ('Cruzi', 25, 'trap');
INSERT INTO `people` (`name`, `age`, `style`) VALUES ('Travis', 24, 'trap');
INSERT INTO `people` (`name`, `age`, `style`) VALUES ('Dellaosa', 23, 'experimental');