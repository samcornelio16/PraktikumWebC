CREATE TABLE IF NOT EXISTS `user` (
  `nama` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=64 ;
 

INSERT INTO `user` ( `nama`, `alamat`, `pekerjaan`) VALUES
( 'Andi', 'Surabaya', 'web programmer'),
( 'Santoso', 'Jakarta', 'Web Designer'),
( 'Samsul', 'Sumedang', 'Pegawai');