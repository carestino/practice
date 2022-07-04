/*
La información para las mascotas de guardan en dos tablas distintas

CREATE TABLE `dogs` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB;
INSERT INTO `dogs` (`id`, `name`)
VALUES
	(1, 'Pelusa'),
	(2, 'Negro'),
	(3, 'Chiqui');


CREATE TABLE `cats` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB;
INSERT INTO `cats` (`id`, `name`)
VALUES
	(1, 'Mishina'),
	(2, 'Negro');



Escriba una consulta en SQL que seleccione los distintos nombres de manera única de ambas tablas de mascotas.

Luego que la escribas podes ejecutarla y probarla sobre las tablas que están en el enunciado.
*/

-- todo sql
