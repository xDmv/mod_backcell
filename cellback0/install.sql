CREATE TABLE `oc_celback_message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cel_data` date NOT NULL,
  `cel_time` time NOT NULL,
  `cel_message` text NOT NULL,
  `cel_name` text NOT NULL,
  `cel_telefon` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf
CREATE TABLE `oc_celback_setting` (
  `mail` char NOT NULL,
  `bd_mail` int NOT NULL,
  `bg_form` char NOT NULL,
  `color_font_form` char NOT NULL,
  `capcha1gkey` char NOT NULL,
  `capcha2gkey` char NOT NULL,
  `capchagoogle` int NOT NULL
);
