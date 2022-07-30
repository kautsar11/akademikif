

CREATE TABLE `guru` (
  `nip` varchar(191) NOT NULL,
  `nama_guru` varchar(191) NOT NULL,
  PRIMARY KEY (`nip`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO guru VALUES("196907062007012000","NENI YULIANI, S.Pd.");
INSERT INTO guru VALUES("197101051996031000","CECE RAHMAT, S.Pd.");



CREATE TABLE `kelas` (
  `kelas` varchar(191) NOT NULL,
  `nip_wakel` varchar(191) NOT NULL,
  PRIMARY KEY (`kelas`),
  KEY `kelas_nip_wakel_fkey` (`nip_wakel`),
  CONSTRAINT `kelas_nip_wakel_fkey` FOREIGN KEY (`nip_wakel`) REFERENCES `guru` (`nip`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO kelas VALUES("5","196907062007012000");
INSERT INTO kelas VALUES("6","197101051996031000");



CREATE TABLE `mata_pelajaran` (
  `nama_mapel` varchar(191) NOT NULL,
  `kkm_mapel` int(11) NOT NULL,
  PRIMARY KEY (`nama_mapel`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO mata_pelajaran VALUES("B.INDO","70");
INSERT INTO mata_pelajaran VALUES("B.INGGRIS","65");
INSERT INTO mata_pelajaran VALUES("B.SUNDA","70");
INSERT INTO mata_pelajaran VALUES("IPA","65");
INSERT INTO mata_pelajaran VALUES("IPS","65");
INSERT INTO mata_pelajaran VALUES("MATEMATIKA","65");
INSERT INTO mata_pelajaran VALUES("PAI","75");
INSERT INTO mata_pelajaran VALUES("PJOK","75");
INSERT INTO mata_pelajaran VALUES("PKN","75");
INSERT INTO mata_pelajaran VALUES("PRAKARYA","70");
INSERT INTO mata_pelajaran VALUES("SBK","75");



CREATE TABLE `nilai_akhir` (
  `id_nilai` int(11) NOT NULL AUTO_INCREMENT,
  `nisn` varchar(191) NOT NULL,
  `nama_mapel` varchar(191) NOT NULL,
  `nilai_mapel` varchar(191) NOT NULL,
  `id_tahun_ajar` int(11) NOT NULL,
  PRIMARY KEY (`id_nilai`),
  KEY `nilai_akhir_id_tahun_ajar_fkey` (`id_tahun_ajar`),
  KEY `nilai_akhir_nama_mapel_fkey` (`nama_mapel`),
  KEY `nilai_akhir_nisn_fkey` (`nisn`),
  CONSTRAINT `nilai_akhir_id_tahun_ajar_fkey` FOREIGN KEY (`id_tahun_ajar`) REFERENCES `tahun_ajar` (`id_tahun_ajar`) ON UPDATE CASCADE,
  CONSTRAINT `nilai_akhir_nama_mapel_fkey` FOREIGN KEY (`nama_mapel`) REFERENCES `mata_pelajaran` (`nama_mapel`) ON UPDATE CASCADE,
  CONSTRAINT `nilai_akhir_nisn_fkey` FOREIGN KEY (`nisn`) REFERENCES `siswa` (`nisn`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=68 DEFAULT CHARSET=latin1;

INSERT INTO nilai_akhir VALUES("1","0093716461","PAI","83","3");
INSERT INTO nilai_akhir VALUES("2","0093716461","PKN","81","3");
INSERT INTO nilai_akhir VALUES("3","0093716461","B.INDO","80","3");
INSERT INTO nilai_akhir VALUES("4","0093716461","MATEMATIKA","76","3");
INSERT INTO nilai_akhir VALUES("5","0093716461","IPA","78","3");
INSERT INTO nilai_akhir VALUES("6","0093716461","IPS","84","3");
INSERT INTO nilai_akhir VALUES("7","0093716461","SBK","83","3");
INSERT INTO nilai_akhir VALUES("8","0093716461","PJOK","85","3");
INSERT INTO nilai_akhir VALUES("9","0093716461","B.SUNDA","87","3");
INSERT INTO nilai_akhir VALUES("10","0093716461","B.INGGRIS","81","3");
INSERT INTO nilai_akhir VALUES("11","0093716461","PRAKARYA","79","3");
INSERT INTO nilai_akhir VALUES("12","0054834129","PAI","80","1");
INSERT INTO nilai_akhir VALUES("13","0054834129","PKN","75","1");
INSERT INTO nilai_akhir VALUES("14","0054834129","B.INDO","75","1");
INSERT INTO nilai_akhir VALUES("15","0054834129","MATEMATIKA","75","1");
INSERT INTO nilai_akhir VALUES("16","0054834129","IPA","70","1");
INSERT INTO nilai_akhir VALUES("17","0054834129","IPS","70","1");
INSERT INTO nilai_akhir VALUES("18","0054834129","SBK","75","1");
INSERT INTO nilai_akhir VALUES("19","0054834129","PJOK","81","1");
INSERT INTO nilai_akhir VALUES("20","0054834129","B.SUNDA","81","1");
INSERT INTO nilai_akhir VALUES("21","0054834129","B.INGGRIS","79","1");
INSERT INTO nilai_akhir VALUES("22","0054834129","PRAKARYA","77","1");
INSERT INTO nilai_akhir VALUES("57","43534","B.INDO","77","1");
INSERT INTO nilai_akhir VALUES("58","43534","B.INGGRIS","60","1");
INSERT INTO nilai_akhir VALUES("59","43534","B.SUNDA","90","1");
INSERT INTO nilai_akhir VALUES("60","43534","IPA","80","1");
INSERT INTO nilai_akhir VALUES("61","43534","IPS","70","1");
INSERT INTO nilai_akhir VALUES("62","43534","MATEMATIKA","40","1");
INSERT INTO nilai_akhir VALUES("63","43534","PAI","82","1");
INSERT INTO nilai_akhir VALUES("64","43534","PJOK","95","1");
INSERT INTO nilai_akhir VALUES("65","43534","PKN","50","1");
INSERT INTO nilai_akhir VALUES("66","43534","PRAKARYA","80","1");
INSERT INTO nilai_akhir VALUES("67","43534","SBK","90","1");



CREATE TABLE `siswa` (
  `nisn` varchar(191) NOT NULL,
  `nama_siswa` varchar(191) NOT NULL,
  `nama_kelas` varchar(191) NOT NULL,
  PRIMARY KEY (`nisn`),
  KEY `siswa_nama_kelas_fkey` (`nama_kelas`),
  CONSTRAINT `siswa_nama_kelas_fkey` FOREIGN KEY (`nama_kelas`) REFERENCES `kelas` (`kelas`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO siswa VALUES("0054834129","SENI OKTAPIANI","6");
INSERT INTO siswa VALUES("0093716461","AQSAL IBRAHIM","5");
INSERT INTO siswa VALUES("123123","kautsar teguh","6");
INSERT INTO siswa VALUES("43534","ABDIL","5");



CREATE TABLE `tahun_ajar` (
  `id_tahun_ajar` int(11) NOT NULL AUTO_INCREMENT,
  `tahun_ajar` varchar(191) NOT NULL,
  PRIMARY KEY (`id_tahun_ajar`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO tahun_ajar VALUES("1","2017-2018");
INSERT INTO tahun_ajar VALUES("3","2018-2019");

