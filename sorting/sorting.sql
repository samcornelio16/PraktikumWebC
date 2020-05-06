CREATE TABLE `mahasiswa_sort` (
  `id` int(11) NOT NULL,
  `nim` varchar(10) NOT NULL,
  `nama_mahasiswa` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `fakultas` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;



INSERT INTO `mahasiswa_sort` (`id`, `nim`, `nama_mahasiswa`, `alamat`, `jenis_kelamin`, `jurusan`) VALUES
(1, '1708561001', 'I Made Suastika\r\n', 'Cilacap', 'Laki-laki', 'Sistem Informasi'),
(2, '1708561002', 'Angie Safira Indah\r\n', 'Jakarta', 'Perempuan', 'Teknik Informatika'),
(3, '1708561003', 'Benedict Emanuel Sutrisna\r\n', 'Yogyakarta', 'Laki-Laki', 'Sistem Informasi'),
(4, '1708561004', 'I Dewa Gede Rama Satya\r\n', 'Semarang', 'Laki-Laki', 'Teknik Informatika'),
(5, '1708561005', 'I Made Cantiawan Giri Kusuma\r\n', 'Purwokerto', 'Laki-laki', 'Sistem Informasi'),
(6, '1708561006', 'Muhammad Firyanul Rizky\r\n', 'Njojog', 'Laki-laki', 'Sistem Informasi'),
(7, '1708561007', 'Putu Mas Anggita Putra\r\n', 'Prapatan Ciamis', 'Laki-laki', 'Sistem Informasi'),
(10, '1708561008', 'I Putu Agus Wahyu Widiatmika\r\n', 'Jakarta', 'Laki-laki', 'Sistem Informasi'),
(11, '1708561009', 'I Gusti Ayu Purnami Indryaswari\r\n', 'Jakarta', 'Perempuan', 'Teknik Informatika'),
(12, '1708561010', 'I Gusti Bagus Dharma Putra\r\n', 'Jakarta', 'Laki-laki', 'Sistem Informasi'),
(13, '1708561011', 'Sandi\r\n', 'Medan', 'Laki-laki', 'Sistem Informasi'),
(14, '1708561012', 'I Made Budiawan\r\n', 'Palangkaraya', 'Laki-laki', 'Teknik Informatika'),
(15, '1708561013', 'I Putu Denny Indra Putra\r\n', 'Riau', 'Laki-laki', 'Sistem Informasi');


ALTER TABLE `mahasiswa_sort`
  ADD PRIMARY KEY (`id`) USING BTREE;

ALTER TABLE `mahasiswa_sort`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT; 