
Create Table

CREATE TABLE `goods` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL,
  `typeid` int(10) unsigned NOT NULL,
  `price` double(6,2) unsigned NOT NULL,
  `total` int(10) unsigned NOT NULL,
  `pic` varchar(32) NOT NULL,
  `note` text,
  `addtime` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8
