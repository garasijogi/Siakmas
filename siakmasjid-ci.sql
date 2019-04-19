/*
SQLyog Community v13.1.2 (64 bit)
MySQL - 10.1.37-MariaDB : Database - siakmasjid-ci
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`siakmasjid-ci` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `siakmasjid-ci`;

/*Table structure for table `akun` */

DROP TABLE IF EXISTS `akun`;

CREATE TABLE `akun` (
  `kode_akun` varchar(3) NOT NULL,
  `kel_akun` varchar(1) NOT NULL,
  `nama_akun` varchar(258) NOT NULL,
  PRIMARY KEY (`kode_akun`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `akun` */

insert  into `akun`(`kode_akun`,`kel_akun`,`nama_akun`) values 
('10','1','Aset Lancar'),
('101','1','Kas'),
('102','1','Perlengkapan'),
('11','1','Aset Tidak Lancar'),
('112','1','Peralatan'),
('113','1','Menara'),
('114','1','Bangunan'),
('115','1','Lahan Parkir'),
('116','1','Tanah'),
('117','1','Kendaraan'),
('40','4','Pendapatan Sewa'),
('401','4','Infaq Peminjaman Peralatan'),
('402','4','Infaq Pemakaian Ruangan'),
('41','4','Pendapatan Parkir'),
('42','4','Infaq Pengurusan Jenazah'),
('43','4','Pendapatan non-halal'),
('44','4','Peribadatan'),
('441','4','Infaq Kotak Jumat'),
('442','4','Infaq Peryaan Hari Besar Islam'),
('443','4','Infaq Pengajian'),
('444','4','Infaq Ramadhan'),
('45','4','Infaq TPA dan Tahfidz'),
('46','4','ZISWAF'),
('461','4','Infaq dari Donatur'),
('462','4','Infaq Kotak Dana Operasional'),
('463','4','Infaq Kotak Dana Sosial'),
('464','4','Zakat Fitrah'),
('465','4','Fidyah'),
('466','4','Infaq untuk Baksos'),
('467','4','Waqaf'),
('499','4','Pendapatan Lainnya'),
('50','5','Beban Operasional'),
('501','5','Beban Listrik, Air, dan Telepon'),
('502','5','Beban Pemeliharaan'),
('503','5','Beban Administrasi'),
('504','5','Beban Perlengkapan'),
('505','5','Beban Kerusakan dan Kehilangan Aset'),
('506','5','Beban Transportasi'),
('507','5','Insentif Pengurus Masjid'),
('51','5','Beban Renovasi dan Pembangunan'),
('511','5','Pembelian Material'),
('512','5','Upah Tukang'),
('52','5','Peribadatan'),
('521','5','Insentif Penceramah/Khatib'),
('522','5','Insentif Marbot'),
('523','5','Beban Perayaan Hari Besar Islam'),
('524','5','Beban Buletin Dakwah'),
('525','5','Peribadatan Lainnya'),
('53','5','Ramadhan'),
('531','5','Shalat Tarawih'),
('532','5','Konsumsi Buka Puasa dan Sahur'),
('533','5','Peringatan Nuzulul Qur\'an'),
('54','5','Penyaluran ZISWAF'),
('541','5','Penyaluran Zakat Fitrah dan Fidyah'),
('542','5','Penyaluran untuk Beasiswa'),
('543','5','Penyaluran untuk Besuk Orang Sakit'),
('544','5','Penyaluran untuk Aktivitas Kepemudaan'),
('545','5','Sumbangan untuk Anak Yatim'),
('546','5','Sumbangan Ta\'ziyah'),
('547','5','Sumbangan untuk Bencana Alam'),
('55','5','Pendidikan'),
('551','5','Penyaluran untuk TPA dan Tahfidz'),
('552','5','Beban Pelatihan'),
('559','5','Beban Lainnya');

/*Table structure for table `aset` */

DROP TABLE IF EXISTS `aset`;

CREATE TABLE `aset` (
  `id_aset` int(11) NOT NULL,
  `id_infotr` int(11) NOT NULL,
  `id_jenis_aset` int(11) NOT NULL,
  `nama_alat` text NOT NULL,
  `merek` text NOT NULL,
  `harga` float NOT NULL,
  PRIMARY KEY (`id_aset`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `aset` */

/*Table structure for table `infotr01_penerimaanterikat` */

DROP TABLE IF EXISTS `infotr01_penerimaanterikat`;

CREATE TABLE `infotr01_penerimaanterikat` (
  `id_infotr` varchar(64) NOT NULL,
  `tanggal` date NOT NULL,
  `keterangan` text NOT NULL,
  `jenis` varchar(255) NOT NULL,
  `p_jenis` varchar(54) NOT NULL,
  `pemberi` text NOT NULL,
  PRIMARY KEY (`id_infotr`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `infotr01_penerimaanterikat` */

insert  into `infotr01_penerimaanterikat`(`id_infotr`,`tanggal`,`keterangan`,`jenis`,`p_jenis`,`pemberi`) values 
('2019-04-0112321','2019-04-01','Operasional Mustjeed','Infaq Kotak Dana Operasional','ZISWAF','Yasmin'),
('2019-04-0112351','2019-04-01','Fidyah Bulan Puasa','Fidyah','ZISWAF','Furqon Ali Anjay'),
('2019-04-0212131','2019-04-02','Infaq Pengajian Warga','Infaq Pengajian','Peribadatan','Yayasan At-Taqorub'),
('2019-04-0512111','2019-04-05','Infaq Mingguan Jumat','Infaq Kotak Jumat','Peribadatan','Hamba Allah'),
('2019-04-0512113','2019-04-05','Jumat Mingguan','Infaq Kotak Jumat','Peribadatan','Hamba Allah'),
('2019-04-0512141','2019-04-05','Zakat Bulan Ramadhan','Infaq Ramadhan','Peribadatan','Pak Robi Purba'),
('2019-04-0512331','2019-04-05','Dana Sosial Bulan Maret','Infaq Kotak Dana Sosial','ZISWAF','Hamba Allah'),
('2019-04-0612121','2019-04-06','Maulid Nabi Dana Bantuan','Infaq Perayaan Hari Besar Islam','Peribadatan','Furqoni'),
('2019-04-0712311','2019-04-07','Donatur Pembangunan Masjid','Infaq dari Donatur','ZISWAF','Furqon'),
('2019-04-0712341','2019-04-07','Zakat 1430H','Zakat Fitrah','ZISWAF','Hamba Allah'),
('2019-04-0712361','2019-04-07','Baksos Warga Sekitar','Infaq untuk Baksos','ZISWAF','JJ Corp'),
('2019-04-0712371','2019-04-07','Waqaf Warga','Waqaf','ZISWAF','Bambang Suprapto'),
('2019-04-0812211','2019-04-08','SPP TPA','Infaq TPA dan Tahfidz','Pendidikan','Yahya Amin');

/*Table structure for table `jenis_aset` */

DROP TABLE IF EXISTS `jenis_aset`;

CREATE TABLE `jenis_aset` (
  `id_jenis_aset` int(11) NOT NULL,
  `nama_aset` text NOT NULL,
  `jenis_aset` text NOT NULL,
  `jumlah` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL,
  PRIMARY KEY (`id_jenis_aset`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `jenis_aset` */

/*Table structure for table `pengurus` */

DROP TABLE IF EXISTS `pengurus`;

CREATE TABLE `pengurus` (
  `nip` varchar(11) NOT NULL,
  `nama` text NOT NULL,
  `jabatan` text NOT NULL,
  `no_telepon` varchar(13) NOT NULL,
  `email` text NOT NULL,
  PRIMARY KEY (`nip`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `pengurus` */

/*Table structure for table `profil` */

DROP TABLE IF EXISTS `profil`;

CREATE TABLE `profil` (
  `id` int(1) NOT NULL,
  `nama_masjid` text NOT NULL,
  `alamat` text NOT NULL,
  `no_telepon` varchar(13) NOT NULL,
  `no_rekening` varchar(52) NOT NULL,
  `tahun_berdiri` varchar(50) NOT NULL,
  `AD/ART` text NOT NULL,
  `badan_hukum` text NOT NULL,
  `luas_tanah` varchar(50) NOT NULL,
  `sertifikat_wakaf` varchar(13) NOT NULL,
  `sertifikat_yayasan` varchar(13) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `profil` */

insert  into `profil`(`id`,`nama_masjid`,`alamat`,`no_telepon`,`no_rekening`,`tahun_berdiri`,`AD/ART`,`badan_hukum`,`luas_tanah`,`sertifikat_wakaf`,`sertifikat_yayasan`) values 
(1,'Masjid Al-Ishlah','Jl. Boni','5135','3425342','1990','-','-','26 km3','-','-');

/*Table structure for table `tr01_penerimaanterikat` */

DROP TABLE IF EXISTS `tr01_penerimaanterikat`;

CREATE TABLE `tr01_penerimaanterikat` (
  `id_tr` int(6) NOT NULL AUTO_INCREMENT,
  `id_infotr` varchar(40) NOT NULL,
  `kode_sub` int(5) NOT NULL,
  `kode_akun` int(3) NOT NULL,
  `debit` float NOT NULL,
  `kredit` float NOT NULL,
  PRIMARY KEY (`id_tr`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

/*Data for the table `tr01_penerimaanterikat` */

insert  into `tr01_penerimaanterikat`(`id_tr`,`id_infotr`,`kode_sub`,`kode_akun`,`debit`,`kredit`) values 
(1,'2019-04-0512141',1214,101,250000000,0),
(2,'2019-04-0512141',1214,401,0,250000000),
(3,'2019-04-0212131',1213,101,500000,0),
(4,'2019-04-0212131',1213,401,0,500000),
(5,'2019-04-0812211',1221,101,250000,0),
(6,'2019-04-0812211',1221,401,0,250000),
(7,'2019-04-0512111',1211,101,3000000,0),
(8,'2019-04-0512111',1211,401,0,3000000),
(9,'2019-04-0712311',1231,101,4500000,0),
(10,'2019-04-0712311',1231,401,0,4500000),
(11,'2019-04-0712371',1237,101,1250000,0),
(12,'2019-04-0712371',1237,401,0,1250000),
(13,'2019-04-0112321',1232,101,800000,0),
(14,'2019-04-0112321',1232,401,0,800000),
(15,'2019-04-0112351',1235,101,780000,0),
(16,'2019-04-0112351',1235,401,0,780000),
(17,'2019-04-0712361',1236,101,240000,0),
(18,'2019-04-0712361',1236,401,0,240000),
(19,'2019-04-0512331',1233,101,450000,0),
(20,'2019-04-0512331',1233,401,0,450000),
(21,'2019-04-0712341',1234,101,6500000,0),
(22,'2019-04-0712341',1234,401,0,6500000),
(23,'2019-04-0512113',1211,101,25000000,0),
(24,'2019-04-0512113',1211,401,0,25000000),
(25,'2019-04-0612121',1212,101,450000,0),
(26,'2019-04-0612121',1212,401,0,450000);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
