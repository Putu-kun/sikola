-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Apr 2019 pada 11.48
-- Versi server: 10.1.32-MariaDB
-- Versi PHP: 7.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `persis`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `absen`
--

CREATE TABLE `absen` (
  `kd_absen` varchar(2) NOT NULL,
  `kd_guru` varchar(8) NOT NULL,
  `kd_kelas` varchar(1) NOT NULL,
  `kd_siswa` varchar(10) NOT NULL,
  `tgl` date NOT NULL,
  `keterangan` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE `guru` (
  `kd_guru` varchar(8) NOT NULL,
  `nip` varchar(18) NOT NULL,
  `nuptk` varchar(16) NOT NULL,
  `nm_guru` varchar(25) NOT NULL,
  `kewarganegaraan` varchar(25) NOT NULL,
  `jk` varchar(1) NOT NULL,
  `tgl_lhr` date NOT NULL,
  `tmp_lhr` varchar(20) NOT NULL,
  `pendidikan` varchar(25) NOT NULL,
  `jurusan` varchar(26) NOT NULL,
  `hp` varchar(13) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `tgl_masuk` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`kd_guru`, `nip`, `nuptk`, `nm_guru`, `kewarganegaraan`, `jk`, `tgl_lhr`, `tmp_lhr`, `pendidikan`, `jurusan`, `hp`, `alamat`, `agama`, `tgl_masuk`) VALUES
('GR061920', '195911101381103209', '9442737639300053', 'Wahyu Munanto', 'Indonesia', 'L', '1980-09-04', 'jakarta', 'S1', 'Pendidikan Sosiologi', '0813xxxx', 'Bekasi', 'islam', '2016-10-10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `kd_kelas` varchar(1) NOT NULL,
  `jurusan` varchar(5) NOT NULL,
  `kelas` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`kd_kelas`, `jurusan`, `kelas`) VALUES
('A', 'Ipa', '12.A.1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kepsek`
--

CREATE TABLE `kepsek` (
  `kd_kepsek` varchar(6) NOT NULL,
  `nip` varchar(18) NOT NULL,
  `nm_kepsek` varchar(25) NOT NULL,
  `kewarganegaraan` varchar(35) NOT NULL,
  `jk` varchar(1) NOT NULL,
  `tgl_lhr` date NOT NULL,
  `tmp_lhr` varchar(20) NOT NULL,
  `pendidikan` varchar(25) NOT NULL,
  `jurusan` varchar(26) NOT NULL,
  `hp` varchar(13) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `agama` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kepsek`
--

INSERT INTO `kepsek` (`kd_kepsek`, `nip`, `nm_kepsek`, `kewarganegaraan`, `jk`, `tgl_lhr`, `tmp_lhr`, `pendidikan`, `jurusan`, `hp`, `alamat`, `agama`) VALUES
('KS0619', '196408281987031001', 'Maudy AF', 'Indonesia', 'P', '1962-09-10', 'Washington', 'S2', 'ilmu komunikasi', '0812xxx', 'Bekasi', 'Islam');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mapel`
--

CREATE TABLE `mapel` (
  `kd_mapel` varchar(2) NOT NULL,
  `kd_guru` varchar(8) NOT NULL,
  `nm_mapel` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mapel`
--

INSERT INTO `mapel` (`kd_mapel`, `kd_guru`, `nm_mapel`) VALUES
('01', 'GR061920', 'Matematika');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai`
--

CREATE TABLE `nilai` (
  `kd_siswa` varchar(10) NOT NULL DEFAULT '',
  `kd_ortu` varchar(10) NOT NULL,
  `kd_mapel` varchar(2) NOT NULL,
  `kd_guru` varchar(8) NOT NULL,
  `nisn` varchar(10) NOT NULL,
  `nm_siswa` varchar(25) NOT NULL,
  `jurusan` varchar(5) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `semester` varchar(1) NOT NULL,
  `nilai_tgs` int(3) NOT NULL,
  `nilai_harian` int(3) NOT NULL,
  `nilai_uts` int(3) NOT NULL,
  `nilai_uas` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `nilai`
--

INSERT INTO `nilai` (`kd_siswa`, `kd_ortu`, `kd_mapel`, `kd_guru`, `nisn`, `nm_siswa`, `jurusan`, `kelas`, `semester`, `nilai_tgs`, `nilai_harian`, `nilai_uts`, `nilai_uas`) VALUES
('061019350', '060819350', '01', 'GR061920', '985594618', 'Anaka Fitrodzidke', 'Ipa', '11.A.2', '2', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `ortu`
--

CREATE TABLE `ortu` (
  `kd_ortu` varchar(10) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nm_ortu` varchar(25) NOT NULL,
  `kewarganegaraan` varchar(35) NOT NULL,
  `jk` varchar(1) NOT NULL,
  `tgl_lhr` date NOT NULL,
  `tmp_lhr` varchar(20) NOT NULL,
  `pendidikan` varchar(2) NOT NULL,
  `hp` varchar(13) NOT NULL,
  `pekerjaan` varchar(15) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `penghasilan` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ortu`
--

INSERT INTO `ortu` (`kd_ortu`, `nik`, `nm_ortu`, `kewarganegaraan`, `jk`, `tgl_lhr`, `tmp_lhr`, `pendidikan`, `hp`, `pekerjaan`, `alamat`, `agama`, `penghasilan`) VALUES
('060819350', '32751201220215', 'Agus Chernobyl', 'Indonesia', 'L', '1970-09-10', 'jakarta', 'S1', '08152xxxxx', 'Programmer', 'Bekasi ', 'Islam', 2000000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `kd_siswa` varchar(10) NOT NULL,
  `nisn` varchar(10) NOT NULL,
  `nm_siswa` varchar(25) NOT NULL,
  `kewarganegaraan` varchar(35) NOT NULL,
  `jk` varchar(1) NOT NULL,
  `tgl_lhr` date NOT NULL,
  `tmp_lhr` varchar(20) NOT NULL,
  `email` varchar(25) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `jurusan` varchar(5) NOT NULL,
  `hp` varchar(13) NOT NULL,
  `alamat_siswa` varchar(100) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `nm_ayah` varchar(25) NOT NULL,
  `nik_ayh` varchar(16) NOT NULL,
  `pekerjaan_ayh` varchar(15) NOT NULL,
  `tgl_lhrayh` date NOT NULL,
  `tmp_lhrayh` varchar(20) NOT NULL,
  `pendidikan_ayh` varchar(10) NOT NULL,
  `alamat_ayh` varchar(100) NOT NULL,
  `penghasilan_ayh` double NOT NULL,
  `nm_ibu` varchar(25) NOT NULL,
  `nik_ibu` varchar(16) NOT NULL,
  `pekerjaan_ibu` varchar(15) NOT NULL,
  `tgl_lhribu` date NOT NULL,
  `tmp_lhribu` varchar(20) NOT NULL,
  `pendidikan_ibu` varchar(10) NOT NULL,
  `alamat_ibu` varchar(100) NOT NULL,
  `penghasilan_ibu` double NOT NULL,
  `nm_wali` varchar(25) NOT NULL,
  `nik_wl` varchar(16) NOT NULL,
  `pekerjaan_wl` varchar(15) NOT NULL,
  `tgl_lhrwl` date NOT NULL,
  `tmp_lhrwl` varchar(20) NOT NULL,
  `pendidikan_wl` varchar(10) NOT NULL,
  `alamat_wl` varchar(100) NOT NULL,
  `penghasilan_wl` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`kd_siswa`, `nisn`, `nm_siswa`, `kewarganegaraan`, `jk`, `tgl_lhr`, `tmp_lhr`, `email`, `kelas`, `jurusan`, `hp`, `alamat_siswa`, `agama`, `nm_ayah`, `nik_ayh`, `pekerjaan_ayh`, `tgl_lhrayh`, `tmp_lhrayh`, `pendidikan_ayh`, `alamat_ayh`, `penghasilan_ayh`, `nm_ibu`, `nik_ibu`, `pekerjaan_ibu`, `tgl_lhribu`, `tmp_lhribu`, `pendidikan_ibu`, `alamat_ibu`, `penghasilan_ibu`, `nm_wali`, `nik_wl`, `pekerjaan_wl`, `tgl_lhrwl`, `tmp_lhrwl`, `pendidikan_wl`, `alamat_wl`, `penghasilan_wl`) VALUES
('061019350', '985594618', 'Anaka Fitrodzidke', 'Indonesia', 'P', '2002-03-06', 'jakarta', 'anaka@sekolahan.com', '11.A.2', 'Ipa', '0813xxxxx', 'Villa Mahkota Pesona 3', 'Islam', 'Agus Chernobyl', '327595616510', 'Programmer', '1970-09-10', 'jakarta', 'S1', 'Bekasi', 20000000, 'Fitria Ambarwati', '327598454513232', 'S!', '1970-10-10', 'jakarta', 'SMA', 'Bekasi', 10000000, '', '', '', '0000-00-00', '', '', '', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tu`
--

CREATE TABLE `tu` (
  `kd_tu` varchar(8) NOT NULL,
  `nm_tu` varchar(25) NOT NULL,
  `kewanganegaan` varchar(35) NOT NULL,
  `jk` varchar(1) NOT NULL,
  `tgl_lhr` date NOT NULL,
  `tmp_lhr` varchar(20) NOT NULL,
  `pendidikan` varchar(2) NOT NULL,
  `hp` varchar(13) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `tgl_masuk` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tu`
--

INSERT INTO `tu` (`kd_tu`, `nm_tu`, `kewanganegaan`, `jk`, `tgl_lhr`, `tmp_lhr`, `pendidikan`, `hp`, `alamat`, `agama`, `tgl_masuk`) VALUES
('TU061912', 'Setya Novanto', 'Indonesia', 'L', '1990-09-10', 'jakarta', 'S3', '0845xxxxx', 'Bekasi', 'Islam', '2014-10-10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ujian`
--

CREATE TABLE `ujian` (
  `kd_ujian` varchar(1) NOT NULL,
  `kd_siswa` varchar(10) NOT NULL,
  `kd_mapel` varchar(2) NOT NULL,
  `nm_ujian` varchar(22) NOT NULL,
  `tgl_ujian` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ujian`
--

INSERT INTO `ujian` (`kd_ujian`, `kd_siswa`, `kd_mapel`, `nm_ujian`, `tgl_ujian`) VALUES
('1', '061019350', '01', 'UTS', '2018-06-19');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `absen`
--
ALTER TABLE `absen`
  ADD PRIMARY KEY (`kd_absen`);

--
-- Indeks untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`kd_guru`);

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`kd_kelas`);

--
-- Indeks untuk tabel `kepsek`
--
ALTER TABLE `kepsek`
  ADD PRIMARY KEY (`kd_kepsek`);

--
-- Indeks untuk tabel `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`kd_mapel`);

--
-- Indeks untuk tabel `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`kd_siswa`),
  ADD UNIQUE KEY `kd_mapel_2` (`kd_mapel`),
  ADD KEY `kd_siswa` (`kd_siswa`),
  ADD KEY `kd_ortu_2` (`kd_ortu`);

--
-- Indeks untuk tabel `ortu`
--
ALTER TABLE `ortu`
  ADD PRIMARY KEY (`kd_ortu`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`kd_siswa`);

--
-- Indeks untuk tabel `tu`
--
ALTER TABLE `tu`
  ADD PRIMARY KEY (`kd_tu`);

--
-- Indeks untuk tabel `ujian`
--
ALTER TABLE `ujian`
  ADD PRIMARY KEY (`kd_ujian`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
