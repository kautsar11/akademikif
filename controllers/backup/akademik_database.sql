

CREATE TABLE `guru` (
  `nip` varchar(191) NOT NULL,
  `nama_guru` varchar(191) NOT NULL,
  PRIMARY KEY (`nip`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO guru VALUES("196002221979121002","DARTIKA, S.PD");
INSERT INTO guru VALUES("196612121986102002","EMEH TARSIMAH, S.PD");
INSERT INTO guru VALUES("196907062007012000","NENI YULIANI, S.Pd.");
INSERT INTO guru VALUES("197101051996031000","CECE RAHMAT, S.Pd.");
INSERT INTO guru VALUES("197432121582602074","TATI GUSTINI, S.PD");
INSERT INTO guru VALUES("198507182011012001","ULI NURHAYATI, S.PD");
INSERT INTO guru VALUES("198903262905012536","AI LINDA MEGASARI, S.PD");



CREATE TABLE `kelas` (
  `kelas` varchar(191) NOT NULL,
  `nip_wakel` varchar(191) NOT NULL,
  PRIMARY KEY (`kelas`),
  KEY `kelas_nip_wakel_fkey` (`nip_wakel`),
  CONSTRAINT `kelas_nip_wakel_fkey` FOREIGN KEY (`nip_wakel`) REFERENCES `guru` (`nip`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO kelas VALUES("1","196612121986102002");
INSERT INTO kelas VALUES("5","196907062007012000");
INSERT INTO kelas VALUES("6","197101051996031000");
INSERT INTO kelas VALUES("3","197432121582602074");
INSERT INTO kelas VALUES("4","198507182011012001");
INSERT INTO kelas VALUES("2","198903262905012536");



CREATE TABLE `mata_pelajaran` (
  `nama_mapel` varchar(191) NOT NULL,
  `kkm_mapel` int(11) NOT NULL,
  PRIMARY KEY (`nama_mapel`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO mata_pelajaran VALUES("B.INDO","79");
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
  `id_nilai` int(191) NOT NULL AUTO_INCREMENT,
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
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;

INSERT INTO nilai_akhir VALUES("1","0093716461","PAI","83","1");
INSERT INTO nilai_akhir VALUES("2","0093716461","PKN","81","1");
INSERT INTO nilai_akhir VALUES("3","0093716461","B.INDO","80","1");
INSERT INTO nilai_akhir VALUES("4","0093716461","MATEMATIKA","76","1");
INSERT INTO nilai_akhir VALUES("5","0093716461","IPA","78","1");
INSERT INTO nilai_akhir VALUES("6","0093716461","IPS","84","1");
INSERT INTO nilai_akhir VALUES("7","0093716461","SBK","83","1");
INSERT INTO nilai_akhir VALUES("8","0093716461","PJOK","85","1");
INSERT INTO nilai_akhir VALUES("9","0093716461","B.SUNDA","87","1");
INSERT INTO nilai_akhir VALUES("10","0093716461","B.INGGRIS","81","1");
INSERT INTO nilai_akhir VALUES("11","0093716461","PRAKARYA","79","1");
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
INSERT INTO nilai_akhir VALUES("34","0051489081","B.INDO","89","1");
INSERT INTO nilai_akhir VALUES("35","0051489081","B.INGGRIS","90","1");
INSERT INTO nilai_akhir VALUES("36","0051489081","B.SUNDA","88","1");
INSERT INTO nilai_akhir VALUES("37","0051489081","IPA","83","1");
INSERT INTO nilai_akhir VALUES("38","0051489081","IPS","86","1");
INSERT INTO nilai_akhir VALUES("39","0051489081","MATEMATIKA","93","1");
INSERT INTO nilai_akhir VALUES("40","0051489081","PAI","80","1");
INSERT INTO nilai_akhir VALUES("41","0051489081","PJOK","93","1");
INSERT INTO nilai_akhir VALUES("42","0051489081","PKN","87","1");
INSERT INTO nilai_akhir VALUES("43","0051489081","PRAKARYA","94","1");
INSERT INTO nilai_akhir VALUES("44","0051489081","SBK","84","1");



CREATE TABLE `siswa` (
  `nisn` varchar(191) NOT NULL,
  `nama_siswa` varchar(191) NOT NULL,
  `nama_kelas` varchar(191) NOT NULL,
  PRIMARY KEY (`nisn`),
  KEY `siswa_nama_kelas_fkey` (`nama_kelas`),
  CONSTRAINT `siswa_nama_kelas_fkey` FOREIGN KEY (`nama_kelas`) REFERENCES `kelas` (`kelas`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO siswa VALUES("0051489081","AAS ASHERAH","5");
INSERT INTO siswa VALUES("0054834129","SENI OKTAPIAN","6");
INSERT INTO siswa VALUES("0059410148","DEVIANA  AULIA  SUKMA","5");
INSERT INTO siswa VALUES("0063768388","ARIS  NURALIF","5");
INSERT INTO siswa VALUES("0066855930","DINDA  NOVITA  CAHYA","5");
INSERT INTO siswa VALUES("0075006297","BAYA  RESTU  RAYHAN","6");
INSERT INTO siswa VALUES("0093716461","AQSAL IBRAHIM","5");
INSERT INTO siswa VALUES("161701005","DEDE  SRI  RAHAYU","4");



CREATE TABLE `tahun_ajar` (
  `id_tahun_ajar` int(11) NOT NULL AUTO_INCREMENT,
  `tahun_ajar` varchar(191) NOT NULL,
  PRIMARY KEY (`id_tahun_ajar`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO tahun_ajar VALUES("1","2017-2018");
INSERT INTO tahun_ajar VALUES("3","2018-2019");



CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_nilai_akhir` AS select `nilai_akhir`.`nisn` AS `nisn`,`siswa`.`nama_siswa` AS `nama_siswa`,`nilai_akhir`.`nama_mapel` AS `nama_mapel`,`nilai_akhir`.`nilai_mapel` AS `nilai_mapel`,`tahun_ajar`.`tahun_ajar` AS `tahun_ajar`,`tahun_ajar`.`id_tahun_ajar` AS `id_tahun_ajar`,`kelas`.`kelas` AS `kelas` from (((`nilai_akhir` join `tahun_ajar` on(`tahun_ajar`.`id_tahun_ajar` = `nilai_akhir`.`id_tahun_ajar`)) join `siswa` on(`siswa`.`nisn` = `nilai_akhir`.`nisn`)) join `kelas` on(`kelas`.`kelas` = `siswa`.`nama_kelas`)) order by `siswa`.`nama_siswa`;

INSERT INTO view_nilai_akhir VALUES("0051489081","AAS ASHERAH","PAI","80","2017-2018","1","5");
INSERT INTO view_nilai_akhir VALUES("0051489081","AAS ASHERAH","SBK","84","2017-2018","1","5");
INSERT INTO view_nilai_akhir VALUES("0051489081","AAS ASHERAH","IPA","83","2017-2018","1","5");
INSERT INTO view_nilai_akhir VALUES("0051489081","AAS ASHERAH","PJOK","93","2017-2018","1","5");
INSERT INTO view_nilai_akhir VALUES("0051489081","AAS ASHERAH","B.INDO","89","2017-2018","1","5");
INSERT INTO view_nilai_akhir VALUES("0051489081","AAS ASHERAH","IPS","86","2017-2018","1","5");
INSERT INTO view_nilai_akhir VALUES("0051489081","AAS ASHERAH","PKN","87","2017-2018","1","5");
INSERT INTO view_nilai_akhir VALUES("0051489081","AAS ASHERAH","B.INGGRIS","90","2017-2018","1","5");
INSERT INTO view_nilai_akhir VALUES("0051489081","AAS ASHERAH","MATEMATIKA","93","2017-2018","1","5");
INSERT INTO view_nilai_akhir VALUES("0051489081","AAS ASHERAH","PRAKARYA","94","2017-2018","1","5");
INSERT INTO view_nilai_akhir VALUES("0051489081","AAS ASHERAH","B.SUNDA","88","2017-2018","1","5");
INSERT INTO view_nilai_akhir VALUES("0093716461","AQSAL IBRAHIM","IPS","84","2017-2018","1","5");
INSERT INTO view_nilai_akhir VALUES("0093716461","AQSAL IBRAHIM","B.INGGRIS","81","2017-2018","1","5");
INSERT INTO view_nilai_akhir VALUES("0093716461","AQSAL IBRAHIM","B.INDO","80","2017-2018","1","5");
INSERT INTO view_nilai_akhir VALUES("0093716461","AQSAL IBRAHIM","SBK","83","2017-2018","1","5");
INSERT INTO view_nilai_akhir VALUES("0093716461","AQSAL IBRAHIM","PRAKARYA","79","2017-2018","1","5");
INSERT INTO view_nilai_akhir VALUES("0093716461","AQSAL IBRAHIM","MATEMATIKA","76","2017-2018","1","5");
INSERT INTO view_nilai_akhir VALUES("0093716461","AQSAL IBRAHIM","PJOK","85","2017-2018","1","5");
INSERT INTO view_nilai_akhir VALUES("0093716461","AQSAL IBRAHIM","PAI","83","2017-2018","1","5");
INSERT INTO view_nilai_akhir VALUES("0093716461","AQSAL IBRAHIM","IPA","78","2017-2018","1","5");
INSERT INTO view_nilai_akhir VALUES("0093716461","AQSAL IBRAHIM","B.SUNDA","87","2017-2018","1","5");
INSERT INTO view_nilai_akhir VALUES("0093716461","AQSAL IBRAHIM","PKN","81","2017-2018","1","5");
INSERT INTO view_nilai_akhir VALUES("0054834129","SENI OKTAPIAN","B.INGGRIS","79","2017-2018","1","6");
INSERT INTO view_nilai_akhir VALUES("0054834129","SENI OKTAPIAN","B.INDO","75","2017-2018","1","6");
INSERT INTO view_nilai_akhir VALUES("0054834129","SENI OKTAPIAN","SBK","75","2017-2018","1","6");
INSERT INTO view_nilai_akhir VALUES("0054834129","SENI OKTAPIAN","PRAKARYA","77","2017-2018","1","6");
INSERT INTO view_nilai_akhir VALUES("0054834129","SENI OKTAPIAN","MATEMATIKA","75","2017-2018","1","6");
INSERT INTO view_nilai_akhir VALUES("0054834129","SENI OKTAPIAN","PJOK","81","2017-2018","1","6");
INSERT INTO view_nilai_akhir VALUES("0054834129","SENI OKTAPIAN","PAI","80","2017-2018","1","6");
INSERT INTO view_nilai_akhir VALUES("0054834129","SENI OKTAPIAN","IPA","70","2017-2018","1","6");
INSERT INTO view_nilai_akhir VALUES("0054834129","SENI OKTAPIAN","B.SUNDA","81","2017-2018","1","6");
INSERT INTO view_nilai_akhir VALUES("0054834129","SENI OKTAPIAN","PKN","75","2017-2018","1","6");
INSERT INTO view_nilai_akhir VALUES("0054834129","SENI OKTAPIAN","IPS","70","2017-2018","1","6");

