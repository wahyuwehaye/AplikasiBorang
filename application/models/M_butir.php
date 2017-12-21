<?php

class M_butir extends CI_Model {

        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
                $this->load->database();
                $this->load->helper('date');
        }

        public function get_entire_data()
        {
                //$query = $this->db->get('butir');

                return $this->db->select("*")
              ->from('butir')
              ->order_by('butir', 'ASC')
              ->get()
              ->result_array();
			  /*
			  $this->order_by('butir','ASC');
			  $query = $this->get('butir');
			  return $query->result_array();
			  */
        }

        public function insert_entry()
        {
                $data = array(
                        'butir' => $this->input->post('butir'),
                        'bakumutu' => $this->input->post('bakumutu'),
                        // 'penjelasan' => $this->input->post('penjelasan'),
                        'keterangan' => $this->input->post('keterangan'),
                        'id_borang' => $this->input->post('id_borang'),
                        'created_at'=> date('Y-m-d H:i:s'),
                );

                $this->db->insert('butir', $data);
                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Menambahkan Butir  ".$this->input->post('butir'),
                        'created_at'=> date('Y-m-d H:i:s')
                );

                $this->db->insert('log', $data);
        }
        public function buatbutir($id){
            $this->db->query("INSERT INTO `butir` (`butir`, `bakumutu`, `penjelasan`, `keterangan`, `created_at`, `updated_at`, `id_borang`) VALUES
('1.1.a', 'Kejelasan dan kerealistikan visi, misi, tujuan, dan sasaran Program Studi', '', 'Nilai 4 - Memiliki visi, misi, tujuan, dan sasaran yang sangat jelas dan sangat realistik', NOW(), NOW(), ".$id."),
('1.1.b', 'Strategi Pencapaian sasaran dengan rentang waktu yang jelas dan didukung oleh dokumen', '', 'Nilai 4 - \r\nStrategi pencapaian sasaran :\r\n(1) dengan tahapan waktu yang jelas dan sangat realistik\r\n(2) didukung dokumen yang sangat lengkap', NOW(), NOW(), ".$id."),
('1.2', 'Sosialisasi yang efektif tercermin dari tingkat pemahaman pihak terkait', '', 'Nilai 4 - Dipahami dengan baik oleh seluruh sivitas akademika dan tenaga kependidikan', NOW(), NOW(), ".$id."),
('2.1', 'Tata Pamong menjamin terwujudnya visi, terlaksanakannya misi, tercapainya tujuan, berhasilnya strategi yang digunakan secara kredibel, transparan, akuntabel, bertanggung jawab, dan adil', '', 'Nilai 4 - Program studi memiliki tata pamong yang memungkinkan terlaksananya secara konsisten prinsip tata pamong, dan menjamin penyelenggaraan program studi yang memenuhi 5 aspek berikut : (1) kredibel, (2) transparan, (3) akuntabel, (4) bertanggung jawab dan (5) adil', NOW(), NOW(), ".$id."),
('2.2', 'Karekteristik kepemimpinan yang efektiif', '', 'Nilai 4 - Kepemimpinan program studi memiliki karakteristik yang kuat dalam : (1) kepemimpinan operasional, (2) kepemimpinan organisasi, (3) kepemimpinan publik', NOW(), NOW(), ".$id."),
('2.3', 'Sistem Pengelolaan fungsional dan opeerasional program studi mencakup: planning, organizing, staffing, leading, controlling yang efektif dilaksanakan', '', 'Nilai 4 - Sistem pengelolaan fungsional dan operasional program studi berjalan sesuai dengan SOP, yang didukung dokumen yang lengkap', NOW(), NOW(), ".$id."),
('2.4', 'Pelaksanaan penjaminan mutu di program studi\r\n\r\nPelaksanaannya antara lain dengan adanya: kelompok dosen bidang ilmu yang menilai mutu soal ujian, silabus, dan tugas akhir, serta penguji luar (external examiner) ', '', 'Nilai 4 - Sistem penjaminan mutu berjalan sesuai dengan standar penjaminan mutu, ada  umpan balik dan tindak lanjutnya, yang didukung dokumen yang lengkap', NOW(), NOW(), ".$id."),
('2.5', 'Penjaringan umpan balik  dan tindak lanjutnya.\r\nSumber umpan balik antara lain dari: (1) dosen, (2) mahasiswa, (3) alumni, (4) pengguna lulusan.\r\n\r\nUmpan balik digunakan untuk perbaikan kurikulum, pelaksanaan proses pembelajaran, dan peningkatan kegiatan program studi', '', 'Nilai 4 - Umpan balik diperoleh dari dosen, mahasiswa, alumni dan pengguna serta ditindaklanjuti secara berkelanjutan', NOW(), NOW(), ".$id."),
('2.6', 'Upaya-upaya yang telah dilakukan penyelenggara program studi untuk menjamin keberlanjutan (sustainability) program studi ini antara lain mencakup:\r\na. Upaya untuk peningkatan animo calon mahasiswa\r\nb. Upaya peningkatan mutu manajemen\r\nc. Upaya untuk peningkatan mutu lulusan\r\nd. Upaya untuk pelaksanaan dan hasil kerjasama kemitraan\r\ne. Upaya dan prestasi dalam memperoleh dana hibah kompetitif', '', 'Nilai 4 - Ada bukti semua usaha dilakukan berikut hasilnya.\r\n', NOW(), NOW(), ".$id."),
('3.1.1.a', 'Rasio calon mahasiswa yang ikut seleksi : daya tampung', '', 'Nilai 4 - Jika rasio ≥ 5, \r\nmaka skor = 4.', NOW(), NOW(), ".$id."),
('3.1.1.b', 'Rasio mahasiswa baru reguler yang melakukan registrasi : calon mahasiswa baru reguler yang lulus seleksi', '', 'Nilai 4 - Jika rasio ≥ 95%, maka skor = 4', NOW(), NOW(), ".$id."),
('3.1.1.c', 'Rasio mahasiswa baru transfer terhadap mahasiswa baru bukan transfer', '', 'Nilai 4 - Jika RM ≤ 0.25, maka skor = 4', NOW(), NOW(), ".$id."),
('3.1.1.d', 'Rata-rata Indeks Prestasi Kumulatif (IPK) selama lima tahun terakhir', '', 'Nilai 4 - Jika IPK ≥ 3, maka skor = 4', NOW(), NOW(), ".$id."),
('3.1.2', 'Penerimaan mahasiswa non-reguler selayaknya tidak membuat beban dosen sangat berat, jauh melebihi beban ideal  (sekitar 12 sks)', '', 'Nilai 4 - Jumlah mahasiswa yang diterima masih memungkinkan dosen mengajar seluruh mahasiswa dengan total beban mendekati ideal, yaitu kurang atau sama dengan 13 sks ', NOW(), NOW(), ".$id."),
('3.1.3', 'Penghargaan atas prestasi mahasiswa di bidang nalar, bakat dan minat', '', 'Nilai 4 - Ada bukti penghargaan juara lomba ilmiah, olah raga, maupun seni tingkat nasional atau internasional', NOW(), NOW(), ".$id."),
('3.1.4.a', 'Tuliskan data jumlah mahasiswa reguler tujuh tahun terakhir ', '', '', NOW(), NOW(), ".$id."),
('3.1.4.b', 'Tuliskan data jumlah mahasiswa reguler tujuh tahun terakhir ', '', '', NOW(), NOW(), ".$id."),
('3.2', 'Mahasiswa memiliki akses untuk mendapatkan pelayanan mahasiswa yang dapat dimanfaatkan untuk membina dan mengembangkan penalaran, minat, bakat, seni, dan kesejahteraan. \r\n\r\nJenis pelayanan kepada mahasiswa antara lain:\r\n1. Bimbingan dan konseling\r\n2. Minat dan bakat (ekstra kurikuler)\r\n3. Pembinaan soft skill\r\n4. Layanan beasiswa\r\n5. Layanan kesehatan', '', 'Nilai 4 - Ada semua (5 jenis) pelayanan mahasiswa yang dapat diakses. ', NOW(), NOW(), ".$id."),
('3.3.1.a', 'Upaya pelacakan dan perekaman data lulusan', '', 'Nilai 4 - Ada upaya yang intensif untuk melacak  lulusan dan datanya terekam secara komprehensif', NOW(), NOW(), ".$id."),
('3.3.1.b', 'Penggunaan hasil pelacakan untuk perbaikan: \r\n(1) proses pembelajaran, \r\n(2) penggalangan dana, \r\n(3) informasi pekerjaan, \r\n(4) membangun jejaring.', '', 'Nilai 4 - Hasil pelacakan untuk perbaikan  4 item.', NOW(), NOW(), ".$id."),
('3.3.1.c', 'Pendapat pengguna (employer) lulusan terhadap kualitas alumni.\r\nAda 7 jenis kompetensi.\r\nSkor akhir = [4 x (a) + 3 x (b) + 2 x (c) + (d)] / 7', '', 'Nilai 4 - Skor = Skor akhir', NOW(), NOW(), ".$id."),
('3.3.2', 'Profil masa tunggu kerja pertama\r\n\r\nRMT = rata-rata masa tunggu lulusan memperoleh pekerjaan yang pertama', '', 'Nilai 4 - Jika RMT ≤ 3 bulan, maka skor = 4.', NOW(), NOW(), ".$id."),
('3.3.3', ' Profil kesesuaian bidang kerja dengan bidang studi\r\n\r\nPBS = persentase kesesuaian bidang kerja dengan bidang studi (keahlian) lulusan', '', 'Nilai 4 - Jika PBS ≥ 80%, maka skor = 4', NOW(), NOW(), ".$id."),
('3.4.1', 'Partisipasi alumni dalam mendukung pengembangan akademik program studi dalam bentuk: \r\n(1) Sumbangan dana\r\n(2) Sumbangan fasilitas\r\n(3) Keterlibatan dalam kegiatan akademik\r\n(4) Pengembangan jejaring\r\n(5) Penyediaan fasilitas untuk kegiatan akademik', '', 'Nilai 4 - Semua bentuk partisipasi dilakukan oleh alumni.', NOW(), NOW(), ".$id."),
('3.4.2', 'Partisipasi lulusan dan alumni dalam mendukung pengembangan non-akademik program studi dalam bentuk: \r\n(1) Sumbangan dana\r\n(2) Sumbangan fasilitas\r\n(3) Keterlibatan dalam kegiatan non akademik\r\n(4) Pengembangan jejaring \r\n(5) Penyediaan fasilitas untuk kegiatan non akademik', '', 'Nilai 4 - Semua bentuk partisipasi dilakukan oleh alumni', NOW(), NOW(), ".$id."),
('4.1', 'Pedoman tertulis tentang sistem seleksi, perekrutan, penempatan, pengembangan, retensi, dan pemberhentian dosen dan tenaga kependidikan', '', 'Nilai 4 - Ada pedoman tertulis yang lengkap; dan ada bukti dilaksanakan secara konsisten', NOW(), NOW(), ".$id."),
('4.2.1', 'Pedoman tertulis tentang sistem monitoring dan evaluasi, serta rekam jejak kinerja dosen dan tenaga kependidikan', '', 'Nilai 4 - Ada pedoman tertulis yang lengkap; dan ada bukti dilaksanakan secara konsisten', NOW(), NOW(), ".$id."),
('4.2.2', 'Pelaksanaan monitoring dan evaluasi kinerja dosen di bidang  pendidikan, penelitian, pelayanan/pengabdian kepada masyarakat', '', 'Nilai 4 - Ada bukti tentang kinerja dosen di bidang  \r\n(1) pendidikan\r\n(2) penelitian \r\n(3) pelayanan/ pengabdian kepada masyarakat yang terdokumentasi dengan baik.  \r\n', NOW(), NOW(), ".$id."),
('4.3.1.a', 'Dosen tetap berpendidikan (terakhir) S2 dan S3 yang bidang keahliannya sesuai dengan kompetensi PS \r\nKD1 = Persentase dosen tetap berpendidikan (terakhir) S2 dan S3 yang bidang keahliannya sesuai dengan kompetensi PS', '', 'Nilai - Jika KD1 ≥ 90%, maka skor = 4\r\n', NOW(), NOW(), ".$id."),
('4.3.1.b', 'Dosen tetap yang berpendidikan S3 yang bidang keahliannya sesuai dengan kompetensi PS\r\nKD2 = Persentase dosen tetap yang berpendidikan S3 yang bidang keahliannya sesuai dengan kompetensi PS', '', 'Nilai 4 - Jika KD2 ≥ 40%, maka skor = 4', NOW(), NOW(), ".$id."),
('4.3.1.c', 'Dosen tetap yang memiliki jabatan lektor kepala dan guru besar yang bidang keahliannya sesuai dengan kompetensi PS\r\nKD3 = Persentase Dosen tetap yang memiliki jabatan lektor kepala dan guru besar yang bidang keahliannya sesuai dengan kompetensi PS', '', 'Nilai 4 - Jika KD3 ≥ 40%, maka skor = 4.', NOW(), NOW(), ".$id."),
('4.3.1.d', 'Dosen yang memiliki Sertifikat Pendidik Profesional\r\nKD4 = Persentase dosen yang memiliki Sertifikat Pendidik Profesional', '', 'Nilai - Jika KD4 ≥ 40%, maka skor = 4', NOW(), NOW(), ".$id."),
('4.3.2', 'Rasio mahasiswa terhadap dosen tetap yang bidang keahliannya sesuai dengan bidang PS (RMD)\r\n\r\nCatatan: \r\n- Jumlah mahasiswa reguler diambil dari tabel 3.1.1., yaitu jumlah dari kolom (7) dan kolom (8) pada baris TS.\r\n- Jumlah mahasiswa non-reguler diambil dari tabel 3.1.2, yaitu jumlah dari kolom (7) dan kolom (8) pada baris TS\r\n- Jumlah dosen tetap diambil dari tabel 4.3.1.', '', 'Nilai 4 - Jika 27 ≤ RMD ≤ 33, maka skor = 4.\r\nNilai 4 - Jika 17 ≤ RMD ≤ 23, maka skor = 4.', NOW(), NOW(), ".$id."),
('4.3.3', 'Rata-rata beban dosen per semester, atau rata-rata FTE (Fulltime Teaching Equivalent)  \r\n\r\nRFTE = rata-rata FTE', '', 'Nilai 4 - Jika 11 ≤ RFTE ≤  13 sks, maka skor = 4.\r\n', NOW(), NOW(), ".$id."),
('4.3.4 & 4.3.5', 'Kesesuaian keahlian (pendidikan terakhir) dosen dengan mata kuliah yang diajarkannya', '', 'Nilai 4 - Semua mata kuliah diajar oleh dosen yang sesuai keahliannya', NOW(), NOW(), ".$id."),
('4.3.4 & 4.3.5', 'Tingkat kehadiran dosen tetap dalam mengajar\r\nPKDT = Persentase kehadiran dosen tetap dalam perkuliahan (terhadap jumlah kehadiran yang direncanakan)', '', 'Nilai 4 - Jika PKDT ≥ 95%, maka skor = 4', NOW(), NOW(), ".$id."),
('4.4.1', 'Persentase jumlah dosen tidak tetap, terhadap jumlah seluruh dosen (= PDTT)', '', 'Nilai 4 - Jika PDTT ≤ 10%, maka skor = 4', NOW(), NOW(), ".$id."),
('4.4.2.a', 'Kesesuaian keahlian dosen tidak tetap dengan mata kuliah yang diampu', '', 'Nilai 4 - Semua dosen tidak tetap mengajar mata kuliah yang sesuai keahliannya', NOW(), NOW(), ".$id."),
('4.4.2.b', 'Pelaksanaan tugas/ tingkat kehadiran dosen tidak tetap dalam mengajar\r\n\r\nPKDTT = Persentase kehadiran dosen tidak tetap dalam perkuliahan (terhadap jumlah kehadiran yang direncanakan)', '', 'Nilai 4 - Jika PKDTT ≥ 95%, maka skor = 4.\r\n', NOW(), NOW(), ".$id."),
('4.5.1', 'Kegiatan tenaga ahli/pakar (sebagai pembicara dalam seminar/pelatihan, pembicara tamu, dsb, dari luar PT sendiri (tidak termasuk dosen tidak tetap).\r\nJTAP = Jumlah tenaga ahli/pakar.\r\nCatatan: Tenaga ahli dari luar perguruan tinggi dengan tujuan untuk pengayaan pengetahuan dan bukan untuk mengisi kekurangan tenaga pengajar, tidak bekerja secara rutin', '', 'Nilai 4 - Jika JTAP  12 orang, maka skor = 4.', NOW(), NOW(), ".$id."),
('4.5.2', 'Peningkatan kemampuan dosen tetap melalui program tugas belajar dalam bidang yang sesuai dengan bidang PS.\r\n\r\nPerhitungan skor sebagai berikut:\r\nApabila dosen tetap berpendidikan (terakhir) S2 dan S3 yang bidang keahliannya sesuai dengan kompetensi PS > 90%\r\natau dosen tetap yang berpendidikan S3 yang bidang keahliannya sesuai dengan kompetensi PS > 40%, maka skor pada butir ini = 4.\r\n\r\nJika tidak, gunakan aturan di bawah:\r\nN2 = Jumlah dosen yang mengikuti tugas belajar jenjang S2 pada bidang keahlian yang sesuai dengan PS dalam kurun waktu tiga tahun terakhir.\r\nN3 = Jumlah dosen yang mengikuti tugas belajar jenjang S3 pada bidang keahlian yang sesuai dengan PS dalam kurun waktu tiga tahun terakhir\r\n\r\nSD  = (0.75 N2 + 1.25 N3)', '', 'Nilai 4 - Jika SD ≥ 4, maka skor = 4.', NOW(), NOW(), ".$id."),
('4.5.3', 'Kegiatan dosen tetap yang bidang keahliannya sesuai dengan PS dalam seminar ilmiah/ lokakarya/ penataran/ workshop/ pagelaran/ pameran/peragaan yang tidak hanya melibatkan dosen PT sendiri.', '', 'Nilai 4 - Jika SP ≥ 3, maka skor = 4.', NOW(), NOW(), ".$id."),
('4.5.4', 'Prestasi dalam mendapatkan penghargaan hibah, pendanaan program dan kegiatan akademik dari tingkat nasional dan internasional; besaran dan proporsi dana penelitian dari sumber institusi sendiri dan luar institusi. \r\nCatatan: selama tiga tahun terakhir', '', 'Nilai 4 - Mendapatkan penghargaan hibah, pendanaan program dan kegiatan akademik dari institusi internasional (disertai bukti)', NOW(), NOW(), ".$id."),
('4.5.5', 'Reputasi dan keluasan jejaring dosen dalam bidang akademik dan profesi', '', 'Nilai 4 - Lebih dari 30%  dosen tetap menjadi anggota masyarakat bidang ilmu tingkat internasional', NOW(), NOW(), ".$id."),
('4.6.1.a', 'Pustakawan dan kualifikasinya\r\n\r\nCatatan: nilai dihitung dengan rumus berikut:\r\n\r\nA = (4 X1 + 3 X2 + 2 X3)/4\r\n\r\nX1 = jumlah pustakawan yang berpendidikan S2 atau S3.\r\nX2 = jumlah pustakawan yang berpendidikan D4 atau S1.\r\nX3 = jumlah pustakawan yang berpendidikan D1, D2, atau D3.', '', 'Nilai 4 - Jika A ≥ 4, maka skor = 4', NOW(), NOW(), ".$id."),
('4.6.1.b', 'Laboran, teknisi, operator, programer\r\n\r\nCatatan:\r\nAgar dibandingkan dengan kegiatan yang seharusnya dilakukan dalam PS yang bersangkutan.', '', 'Nilai 4 - Jumlah cukup dan sangat baik kegiatannya', NOW(), NOW(), ".$id."),
('4.6.1.c', 'Tenaga administrasi\r\n\r\nCatatan: nilai dihitung dengan rumus berikut:\r\nD = (4 X1 + 3 X2 + 2 X3 + X4)/4\r\n\r\nMisalkan:\r\nX1 = jumlah tenaga administrasi yang berpendidikan D4 atau S1 ke atas.\r\nX2 = jumlah tenaga administrasi yang berpendidikan D3.\r\nX3 = jumlah tenaga administrasi  yang berpendidikan D1 atau D2\r\nX4 = jumlah tenaga administrasi yang berpendidikan SMU/SMK', '', 'Nilai 4 - Jika  D ≥ 4, maka skor = 4.', NOW(), NOW(), ".$id."),
('4.6.2', 'Upaya yang telah dilakukan PS dalam meningkatkan kualifikasi dan kompetensi tenaga kependidikan. \r\n\r\nUpaya peningkatan kualifikasi dan kompetensi dikaitkan dengan:\r\n1.Pemberian kesempatan belajar/pelatihan\r\n2.Pemberian fasilitas, termasuk dana\r\n3.Jenjang karir ', '', 'Nilai 4 - Upaya pengembangan telah dilakukan dengan sangat baik sehingga dapat meningkatkan kualifikasi dan kompetensi tenaga kependidikan', NOW(), NOW(), ".$id."),
('5.1.1.a', 'Kompetisi lulusan\r\nKelengkapan dan perumusan kompetensi', '', 'NIlai 4 - Kurikulum memuat kompetensi lulusan secara lengkap (utama, pendukung, lainnya) yang terumuskan secara sangat jelas.', NOW(), NOW(), ".$id."),
('5.1.1.b', 'Orientasi dan kesesuaian dengan visi dan misi', '', 'Nilai 4 - Sesuai dengan visi-misi, sudah berorientasi  ke masa depan', NOW(), NOW(), ".$id."),
('5.1.2.a', 'Struktur Kurikulum\r\nKesesuaian matakuliah dan urutannya dengan standar kompetensi \r\n\r\nCatatan:\r\nUntuk menilai kesesuaian mata kuliah dan urutannya, bila perlu asesor memperhatikan silabus/materi  mata kuliah', '', 'Nilai 4 - Sesuai dengan standar kompetensi, sudah berorientasi  ke masa depan', NOW(), NOW(), ".$id."),
('5.1.2.b', 'Persentase mata kuliah  yang dalam penentuan nilai akhirnya memberikan bobot pada tugas-tugas (prektikum/praktek, PR atau makalah) ≥ 20%  PTGS\r\n\r\nCara penghitungan:\r\nJumlah mata kuliah  yang diberi tanda √ pada kolom (7) dibagi dengan jumlah total mata kuliah wajib dan pilihan', '', 'Nilai 4 -Jika PTGS ≥ 50%, maka skor = 4', NOW(), NOW(), ".$id."),
('5.1.2.c', 'Mata kuliah dilengkapi dengan deskripsi mata kuliah, silabus dan SAP\r\nPDMK = Persentase mata kuliah yang memiliki deskripsi, silabus dan SAP.', '', 'Nilai - Jika PDMK ≥ 95%, maka skor = 4', NOW(), NOW(), ".$id."),
('5.1.3', 'Fleksibilitas mata kuliah pilihan\r\n\r\nBMKP = Bobot mata kuliah pilihan dalam sks\r\nRMKP = Rasio sks mata kuliah pilihan yang disediakan/dilaksanakan terhadap sks mata kuliah pilihan yang harus diambil \r\n\r\nCatatan:\r\nBagi PS yang memiliki jalur pilihan/peminatan/konsentrasi,  matakuliah yang khas jalur pilihan/peminatan/ konsentrasi dianggap sebagai mata kuliah pilihan.', '', 'Nilai 4 - Jika BMKP ≥ 9 sks dan yang disediakan/ dilaksanakan ≥ 2 kali sks mata kuliah pilihan yang harus diambil, maka skor = 4', NOW(), NOW(), ".$id."),
('5.1.4', 'Substansi praktikum dan pelaksanaan praktikum.\r\n\r\nCatatan:\r\nPeer group diharapkan menentukan modul-modul praktikum yang harus dilakukan, syarat minimal maupun yang lebih baik.', '', 'Pelaksanaan modul praktikum lebih dari cukup  (ditambah dengan demonstrasi di laboratorium ) di PT sendiri', NOW(), NOW(), ".$id."),
('5.2.a', 'Pelaksanaan peninjauan kurikulum selama 5 tahun terakhir', '', 'Nilai 4 - Pengembangan dilakukan secara mandiri dengan melibatkan pemangku kepentingan internal dan eksternal dan memperhatikan visi, misi, dan umpan balik program studi', NOW(), NOW(), ".$id."),
('5.2.b', 'Penyesuaian kurikulum dengan perkembangan Ipteks dan kebutuhan', '', 'Nilai 4 - Pembaharuan kurikulum dilakukan sesuai dengan perkembangan ilmu di bidangnya dan kebutuhan pemangku kepentingan', NOW(), NOW(), ".$id."),
('5.3.1.a', 'Pelaksanaan pembelajaran memiliki mekanisme untuk memonitor, mengkaji, dan memperbaiki setiap semester tentang:\r\n(a) kehadiran mahasiswa\r\n(b) kehadiran dosen\r\n(c) materi kuliah', '', 'Nilai 4 - Skor = NA.', NOW(), NOW(), ".$id."),
('5.3.1.b', 'Mekanisme penyusunan materi perkuliahan', '', 'Nilai 4 - Materi kuliah disusun oleh kelompok dosen dalam satu bidang ilmu, dengan memperhatikan masukan dari dosen lain atau dari pengguna lulusan ', NOW(), NOW(), ".$id."),
('5.3.2', 'Mutu soal ujian', '', 'Nilai 4 - Mutu soal ujian untuk lima mata kuliah yang diberikan semuanya bermutu baik, dan sesuai dengan GBPP/SAP', NOW(), NOW(), ".$id."),
('5.4.1.a', 'Rata-rata banyaknya mahasiswa per dosen Pembimbing Akademik (PA) per semester (=RMPA)', '', 'Nilai 4 - Jika RMPA ≤ 20, maka skor = 4.', NOW(), NOW(), ".$id."),
('5.4.1.b', 'Pelaksanaan kegiatan pembimbingan akademik', '', 'Nilai 4 - Dilakukan oleh seluruh dosen PA dengan baik sesuai panduan tertulis', NOW(), NOW(), ".$id."),
('5.4.1.c', 'Jumlah rata-rata pertemuan pembimbingan per mahasiswa per semester (= PP)', '', 'Nilai 4 - Jika PP ≥ 3.0 maka skor = 4', NOW(), NOW(), ".$id."),
('5.4.2', 'Efektivitas kegiatan perwalian', '', 'Nilai 4 - Sistem bimbingan akademik sangat efektif', NOW(), NOW(), ".$id."),
('5.5.1.a', 'Ketersediaan panduan, sosialisasi,  dan penggunaan', '', 'Nilai 4 - Ada panduan tertulis yang disosialisasikan dan dilaksanakan dengan konsisten', NOW(), NOW(), ".$id."),
('5.5.1.b', 'Rata-rata mahasiswa per dosen pembimbing tugas akhir (=RMTA)', '', 'Nilai 4 - Jika 0 < RMTA ≤ 4, maka skor = 4.', NOW(), NOW(), ".$id."),
('5.5.1.c', 'Rata-rata jumlah pertemuan/pembimbingan selama penyelesaian TA (=RBTA)', '', 'Nilai 4 - Jika RBTA ≥ 8, maka skor = 4', NOW(), NOW(), ".$id."),
('5.5.1.d', 'Kualifikasi akademik dosen pembimbing tugas akhir', '', 'Nilai 4 - Seluruh dosen pembimbing berpendidikan minimal S2 dan sesuai dengan bidang keahliannya', NOW(), NOW(), ".$id."),
('5.5.2', 'Rata-rata waktu penyelesaian penulisan tugas akhir (=RPTA)', '', 'Nilai 4 - Struktur kurikulum tugas akhir dijadwalkan selesai dalam satu semester: Jika RPTA ≤ 6 bulan, maka skor = 4. Struktur kurikulum tugas akhir dijadwalkan selesai dalam dua semester: Jika RPTA ≤ 12 bulan, maka skor = 4.', NOW(), NOW(), ".$id."),
('5.6', 'Upaya perbaikan sistem pembelajaran yang telah dilakukan selama tiga tahun terakhir berkaitan dengan: \r\na. Materi\r\nb. Metode pembelajaran\r\nc. Penggunaan teknologi pembelajaran\r\nd. Cara-cara evaluasi', '', 'Nilai 4 - Upaya perbaikan dilakukan untuk  semua dari yang seharusnya diperbaiki/ ditingkatkan', NOW(), NOW(), ".$id."),
('5.7.1', 'Kebijakan tertulis tentang suasana akademik (otonomi keilmuan, kebebasan akademik, kebebasan mimbar akademik, kemitraan dosen-mahasiswa)', '', 'Nilai 4 - Kebijakan lengkap mencakup informasi tentang otonomi keilmuan, kebebasan akademik, kebebasan mimbar akademik, dan kemitraan dosen-mahasiswa, serta dilaksanakan secara konsisten', NOW(), NOW(), ".$id."),
('5.7.2', 'Ketersediaan dan kelengkapan jenis prasarana, sarana serta dana yang memungkinkan terciptanya interaksi akademik antara sivitas akademika', '', 'Nilai 4 - Tersedia, milik sendiri,  sangat lengkap dan dana yang sangat memadai', NOW(), NOW(), ".$id."),
('5.7.3', 'Interaksi akademik berupa program dan kegiatan akademik, selain perkuliahan dan tugas-tugas khusus, untuk menciptakan suasana akademik (seminar, simposium, lokakarya, bedah buku dll)', '', 'Nilai 4 - Kegiatan ilmiah yang terjadwal dilaksanakan setiap bulan', NOW(), NOW(), ".$id."),
('5.7.4', 'Interaksi akademik antara dosen-mahasiswa, antar mahasiswa, serta antar dosen', '', 'Nilai 4 - Upaya baik dan hasilnya suasana kondusif untuk meningkatkan suasana akademik yang baik', NOW(), NOW(), ".$id."),
('5.7.5', 'Pengembangan perilaku kecendekiawanan\r\n\r\nBentuk kegiatan antara lain dapat berupa:\r\n1. Kegiatan penanggulangan kemiskinan.\r\n2. Pelestarian lingkungan.\r\n3. Peningkatan kesejahteraan masyarakat.\r\n4. Kegiatan penanggulangan masalah  ekonomi, politik, sosial, budaya, dan lingkungan lainnya.', '', 'Nilai 4 - Kegiatan yang dilakukan sangat menunjang pengembangan perilaku kecendekiawanan', NOW(), NOW(), ".$id."),
('6.1', 'Keterlibatan program studi dalam perencanaan target kinerja, perencanaan kegiatan/ kerja dan perencanaan alokasi dan pengelolaan dana.', '', 'Nilai 4 - Program studi secara otonom melaksanakan perencanaan alokasi  dan pengelolaan dana', NOW(), NOW(), ".$id."),
('6.2.1', 'Penggunaan dana untuk operasional (pendidikan, penelitian, pengabdian pada masyarakat, termasuk gaji dan upah).\r\n\r\nJumlah dana operasional/mahasiswa/tahun (=DOM)', '', 'Nilai 4 - Jika DOM ≥ 18 juta, maka skor = 4', NOW(), NOW(), ".$id."),
('6.2.2', 'Dana penelitian dalam tiga tahun terakhir.\r\n\r\nRata-rata dana penelitian/dosen tetap/tahun (=RPD)', '', 'Nilai 4 - Jika RPD ≥ 3 juta, maka skor = 4.', NOW(), NOW(), ".$id."),
('6.2.3', 'Dana yang diperoleh dalam rangka pelayanan/pengabdian kepada masyarakat dalam tiga  tahun terakhir \r\n(= RPKM).', '', 'Nilai 4 - Jika RPKM ≥ 1.5 juta, maka skor = 4.', NOW(), NOW(), ".$id."),
('6.3.1', 'Luas ruang kerja dosen.\r\n\r\nCatatan: Data diambil dari kolom 3, tabel 6.3.1.\r\nJika luas ruang rata-rata untuk dosen tetap (= jumlah luas ruang dosen tetap dibagi dengan jumlah dosen tetap) kurang dari 4 m2, maka skor pada subbutir ini = nol.  ', '', 'Nilai 4 - Nilai pada butir ini tidak hanya didasarkan pada perhitungan skor luas ruang dosen tetap saja, tetapi juga didasarkan pada kenyamanan,  sehingga dosen dapat melaksanakan kegiatan Tridharma PT dengan baik.  Untuk itu asesor diberikan kemungkinan untuk memberikan tambahan/pengurangan nilai maksimum sebesar 1.5.', NOW(), NOW(), ".$id."),
('6.3.2', 'Prasarana (kantor, ruang kelas, ruang laboratorium, studio, ruang perpustakaan, kebun percobaan, dsb. kecuali  ruang dosen) yang dipergunakan PS dalam proses pembelajaran.', '', 'Nilai 4 - Prasarana lengkap dan mutunya sangat baik untuk proses pembelajaran. ', NOW(), NOW(), ".$id."),
('6.3.3', 'Prasarana lain yang menunjang (misalnya tempat olah raga, ruang bersama, ruang himpunan mahasiswa, poliklinik)', '', 'Nilai 4 - Prasarana penunjang lengkap dan mutunya sangat baik untuk memenuhi kebutuhan mahasiswa', NOW(), NOW(), ".$id."),
('6.4.1.a', ' Bahan pustaka berupa buku teks', '', 'Nilai 4 - Skor = (Jumlah judul) / 100.', NOW(), NOW(), ".$id."),
('6.4.1.b', 'Bahan pustaka berupa disertasi/tesis/ skripsi/ tugas akhir', '', 'Nilai 4 - Skor = (Jumlah judul) / 50', NOW(), NOW(), ".$id."),
('6.4.1.c', 'Bahan pustaka berupa jurnal ilmiah terakreditasi Dikti', '', 'Nilai 4 -  ≥ 3 judul jurnal, nomornya lengkap', NOW(), NOW(), ".$id."),
('6.4.1.d', 'Bahan pustaka  berupa jurnal ilmiah internasional ', '', 'Nilai 4 -  ≥ 2 judul jurnal, nomornya lengkap', NOW(), NOW(), ".$id."),
('6.4.1.e', 'Bahan pustaka berupa prosiding seminar dalam tiga tahun terakhir', '', 'Nilai 4 - Jika jumlah prosiding seminar ≥ 9, maka skor = 4', NOW(), NOW(), ".$id."),
('6.4.2', 'Akses ke perpustakaan di luar PT atau sumber pustaka lainnya', '', 'Nilai 4 - Ada beberapa perpustakaan di luar PT yang dapat diakses dan sangat baik fasilitasnya \r\nAtau jika nilai rata-rata dari butir 6.4.1  3.\r\n', NOW(), NOW(), ".$id."),
('6.4.3', 'Ketersediaan, akses dan pendayagunaan sarana utama di lab (tempat praktikum, bengkel, studio, ruang simulasi, rumah sakit, puskesmas/balai kesehatan, green house, lahan untuk pertanian, dan sejenisnya)', '', 'Nilai 4 - Sangat memadai, terawat dengan sangat baik, dan PS memiliki akses yang sangat baik (memiliki fleksibilitas dalam menggunakannya di luar kegiatan praktikum terjadwal).', NOW(), NOW(), ".$id."),
('6.5.1', 'Sistem informasi dan fasilitas yang digunakan PS dalam proses pembelajaran (hardware, software, e-learning, perpustakaan, dll.)', '', 'Nilai 4 - Dengan komputer yang terhubung dengan jaringan luas/internet, software yang berlisensi dengan jumlah yang memadai. Tersedia fasilitas e-learning yang digunakan secara baik, dan akses on-line ke koleksi perpustakaan.', NOW(), NOW(), ".$id."),
('6.5.2', 'Aksesibilitas data dalam sistem informasi\r\n\r\nNilai butir ini didasarkan pada hasil penilaian 11 jenis data (lihat kolom 1 pada tabel butir 6.5.2) dengan cara berikut:\r\n\r\nSkor akhir = \r\n(jumlah total skor pada ke-11 jenis data) : 11\r\n\r\nSedang  untuk setiap jenis data, penilaian didasarkan atas aturan berikut:\r\n1: Data ditangani secara manual \r\n2: Data ditangani dengan komputer tanpa jaringan\r\n3: Data ditangani dengan komputer, serta dapat diakses melalui  jaringan lokal (LAN)\r\n4: Data ditangani dengan komputer, serta dapat diakses melalui jaringan luas (WAN)', '', 'Nilai 4 - Skor = Skor akhir', NOW(), NOW(), ".$id."),
('7.1.1', 'Jumlah penelitian yang sesuai dengan bidang keilmuan PS, yang dilakukan oleh dosen tetap yang bidang keahliannya sama dengan PS, selama 3 tahun', '', 'Nilai 4 - Jika NK ≥ 2, maka skor = 4.', NOW(), NOW(), ".$id."),
('7.1.2', 'Keterlibatan mahasiswa yang melakukan tugas akhir dalam penelitian dosen\r\n\r\nCara penilaian dilakukan dengan menghitung sebagai berikut:\r\nPD =  Persentase mahasiswa yang melakukan tugas akhir dalam penelitian dosen', '', 'Nilai 4 - Jika PD ≥ 25%, maka skor = 4.', NOW(), NOW(), ".$id."),
('7.1.3', 'Jumlah artikel ilmiah yang dihasilkan oleh dosen tetap yang bidang keahliannya sama dengan PS, selama 3 tahun', '', 'Nilai 4 - Jika NK ≥ 6, maka skor = 4.', NOW(), NOW(), ".$id."),
('7.1.4', 'Karya-karya PS/institusi yang telah memperoleh perlindungan Hak atas Kekayaan Intelektual (HaKI) dalam tiga tahun terakhir', '', 'Nilai 4 - Dua atau lebih karya yang memperoleh HaKI', NOW(), NOW(), ".$id."),
('7.2.1', 'Jumlah kegiatan pelayanan/pengabdian kepada masyarakat (PkM) yang dilakukan oleh dosen tetap yang bidang keahliannya sama dengan PS selama tiga tahun.', '', 'Nilai 4 - Jika NK ≥ 1, maka skor = 4.', NOW(), NOW(), ".$id."),
('7.2.2', ' Keterlibatan mahasiswa dalam kegiatan pelayanan/pengabdian kepada masyarakat', '', 'Nilai 4 - Mahasiswa terlibat penuh dan diberi tanggung jawab.', NOW(), NOW(), ".$id."),
('7.3.1', 'Kegiatan kerjasama dengan instansi di dalam negeri dalam tiga tahun terakhir\r\n\r\nCatatan;\r\nTingkat kecukupan bergantung pada jumlah dosen tetap PS.', '', 'Nilai 4 - Ada kerjasama dengan institusi di dalam negeri, banyak dalam jumlah.  Semuanya  relevan dengan bidang keahlian PS.', NOW(), NOW(), ".$id."),
('7.3.2', 'Kegiatan kerjasama dengan instansi di luar negeri dalam tiga tahun terakhir.\r\n\r\nCatatan;\r\nTingkat kecukupan bergantung pada jumlah dosen tetap PS', '', 'Nilai 4 - Ada kerjasama dengan institusi di luar negeri, banyak dalam jumlah.  Semuanya  relevan dengan bidang keahlian PS.', NOW(), NOW(), ".$id.")");
                
                $this->db->query("INSERT INTO `dokumenpendukung` (`butir`, `aspek`, `dokumen`, `filename`, `status`, `created_at`, `updated_at`, `id_borang`) VALUES
('1.1.a', 'Kejelasan dan kerealistikan visi, misi, tujuan, dan sasaran program studi.', 'Notulen FGD diskusi dengan stakeholder external dan internal.', '', '', NOW(), NOW(), ".$id."),
('1.1.a', 'Kejelasan dan kerealistikan visi, misi, tujuan, dan sasaran program studi.', 'daftar hadir  FGD diskusi dengan stakeholder external dan internal', '', '', NOW(), NOW(), ".$id."),
('1.1.a', 'Kejelasan dan kerealistikan visi, misi, tujuan, dan sasaran program studi.', 'Foto-foto FGD diskusi dengan stakeholder external dan internal', '', '', NOW(), NOW(), ".$id."),
('1.1.b', 'Strategi pencapaian sasaran dengan rentang waktu yang jelas dan didukung oleh dokumen.', 'Renstra Prodi yang berlaku sekarang yang berisi VMTS dan sasaran serta strategi pencapaian sasaran dan indikator pencapaian sasaran.', '', '', NOW(), NOW(), ".$id."),
('1.1.b', 'Strategi pencapaian sasaran dengan rentang waktu yang jelas dan didukung oleh dokumen.', 'Renop', '', '', NOW(), NOW(), ".$id."),
('1.2', 'Sosialisasi visi-misi.  Sosialisasi yang efektif tercermin dari tingkat pemahaman seluruh pemangku kepentingan internal yaitu sivitas akademika (dosen dan mahasiswa) dan tenaga kependidikan.', 'bukti Foto-Foto sosialisasi visi dan misi.', '', '', NOW(), NOW(), ".$id."),
('1.2', 'Sosialisasi visi-misi.  Sosialisasi yang efektif tercermin dari tingkat pemahaman seluruh pemangku kepentingan internal yaitu sivitas akademika (dosen dan mahasiswa) dan tenaga kependidikan.', 'questioner pemahaman visi dan misi yang sudah diisi.', '', '', NOW(), NOW(), ".$id."),
('1.2', 'Sosialisasi visi-misi.  Sosialisasi yang efektif tercermin dari tingkat pemahaman seluruh pemangku kepentingan internal yaitu sivitas akademika (dosen dan mahasiswa) dan tenaga kependidikan.', 'hasil pengolahan questioner pemahaman visi dan misi.', '', '', NOW(), NOW(), ".$id."),
('2.1', 'Tata pamong menjamin terwujudnya visi, terlaksananya misi, tercapainya tujuan, berhasilnya strategi yang digunakan secara kredibel, transparan, akuntabel, bertanggung jawab, dan adil.', 'Bukti-bukti pemaparan di borang yang terkait dengan tata pamong kredibel', '', '', NOW(), NOW(), ".$id."),
('2.1', 'Tata pamong menjamin terwujudnya visi, terlaksananya misi, tercapainya tujuan, berhasilnya strategi yang digunakan secara kredibel, transparan, akuntabel, bertanggung jawab, dan adil.', 'Bukti-bukti pemaparan di borang yang terkait dengan tata pamong transparan.', '', '', NOW(), NOW(), ".$id."),
('2.1', 'Tata pamong menjamin terwujudnya visi, terlaksananya misi, tercapainya tujuan, berhasilnya strategi yang digunakan secara kredibel, transparan, akuntabel, bertanggung jawab, dan adil.', 'Bukti-bukti pemaparan di borang yang terkait dengan tata pamong akuntabel', '', '', NOW(), NOW(), ".$id."),
('2.1', 'Tata pamong menjamin terwujudnya visi, terlaksananya misi, tercapainya tujuan, berhasilnya strategi yang digunakan secara kredibel, transparan, akuntabel, bertanggung jawab, dan adil.', 'Bukti-bukti pemaparan di borang yang terkait dengan tata pamong bertanggung jawab', '', '', NOW(), NOW(), ".$id."),
('2.1', 'Tata pamong menjamin terwujudnya visi, terlaksananya misi, tercapainya tujuan, berhasilnya strategi yang digunakan secara kredibel, transparan, akuntabel, bertanggung jawab, dan adil.', 'Bukti-bukti pemaparan di borang yang terkait dengan tata pamong adil', '', '', NOW(), NOW(), ".$id."),
('2.2', 'Karakteristik kepemimpinan yang efektif (kepemimpinan operasional, kepemimpinan organisasi, kepemimpinan publik).', 'Bukti-bukti terkait pemaparan di borang yang terkait dengan kepemimpinan operasional.', '', '', NOW(), NOW(), ".$id."),
('2.2', 'Karakteristik kepemimpinan yang efektif (kepemimpinan operasional, kepemimpinan organisasi, kepemimpinan publik).', 'Bukti-bukti terkait pemaparan di borang yang terkait dengan kepemimpinan organisasi.', '', '', NOW(), NOW(), ".$id."),
('2.2', 'Karakteristik kepemimpinan yang efektif (kepemimpinan operasional, kepemimpinan organisasi, kepemimpinan publik).', 'Bukti-bukti terkait pemaparan di borang yang terkait dengan kepemimpinan publik', '', '', NOW(), NOW(), ".$id."),
('2.3', 'Sistem pengelolaan fungsional dan operasional program studi mencakup: planning, organizing, staffing, leading, controlling yang efektif dilaksanakan.', 'Bukti-bukti pemaparan di borang yang terkait dengan planning', '', '', NOW(), NOW(), ".$id."),
('2.3', 'Sistem pengelolaan fungsional dan operasional program studi mencakup: planning, organizing, staffing, leading, controlling yang efektif dilaksanakan.', 'Bukti-bukti pemaparan di borang yang terkait dengan organizing', '', '', NOW(), NOW(), ".$id."),
('2.3', 'Sistem pengelolaan fungsional dan operasional program studi mencakup: planning, organizing, staffing, leading, controlling yang efektif dilaksanakan.', 'Bukti-bukti pemaparan di borang yang terkait dengan staffing', '', '', NOW(), NOW(), ".$id."),
('2.3', 'Sistem pengelolaan fungsional dan operasional program studi mencakup: planning, organizing, staffing, leading, controlling yang efektif dilaksanakan.', 'Bukti-bukti pemaparan di borang yang terkait dengan leading', '', '', NOW(), NOW(), ".$id."),
('2.3', 'Sistem pengelolaan fungsional dan operasional program studi mencakup: planning, organizing, staffing, leading, controlling yang efektif dilaksanakan.', 'Bukti-bukti pemaparan di borang yang terkait dengan controlling', '', '', NOW(), NOW(), ".$id."),
('2.4', 'Pelaksanaan penjaminan mutu di program studi.', 'dokumen kebijakan mutu', '', '', NOW(), NOW(), ".$id."),
('2.4', 'Pelaksanaan penjaminan mutu di program studi.', 'dokumen standar mutu', '', '', NOW(), NOW(), ".$id."),
('2.4', 'Pelaksanaan penjaminan mutu di program studi.', 'dokumen manual mutu', '', '', NOW(), NOW(), ".$id."),
('2.4', 'Pelaksanaan penjaminan mutu di program studi.', 'dokuman Instrukti Kerja', '', '', NOW(), NOW(), ".$id."),
('2.4', 'Pelaksanaan penjaminan mutu di program studi.', 'Dokumen form IK.', '', '', NOW(), NOW(), ".$id."),
('2.4', 'Pelaksanaan penjaminan mutu di program studi.', 'hasil audit mutu', '', '', NOW(), NOW(), ".$id."),
('2.4', 'Pelaksanaan penjaminan mutu di program studi.', 'dokumen terkait tindak lanjut dari temuan audit', '', '', NOW(), NOW(), ".$id."),
('2.5', 'Penjaringan umpan balik  dan tindak lanjutnya.', 'questioner yang diisi mahasiswa terkait umpan balik.', '', '', NOW(), NOW(), ".$id."),
('2.5', 'Penjaringan umpan balik  dan tindak lanjutnya.', 'questioner yang diisi dosen terkait umpan balik', '', '', NOW(), NOW(), ".$id."),
('2.5', 'Penjaringan umpan balik  dan tindak lanjutnya.', 'questioner yang diisi alumni terkait umpan balik', '', '', NOW(), NOW(), ".$id."),
('2.5', 'Penjaringan umpan balik  dan tindak lanjutnya.', 'questioner yang diisi pengguna lulusan terkait umpan balik', '', '', NOW(), NOW(), ".$id."),
('2.6', 'Upaya untuk menjamin keberlanjutan (sustainability) program studi.', 'Upaya untuk peningkatan animo calon mahasiswa', '', '', NOW(), NOW(), ".$id."),
('2.6', 'Upaya untuk menjamin keberlanjutan (sustainability) program studi.', 'Upaya peningkatan mutu manajemen', '', '', NOW(), NOW(), ".$id."),
('2.6', 'Upaya untuk menjamin keberlanjutan (sustainability) program studi.', 'Upaya untuk peningkatan mutu lulusan', '', '', NOW(), NOW(), ".$id."),
('2.6', 'Upaya untuk menjamin keberlanjutan (sustainability) program studi.', 'Upaya untuk pelaksanaan dan hasil kerjasama kemitraan', '', '', NOW(), NOW(), ".$id."),
('2.6', 'Upaya untuk menjamin keberlanjutan (sustainability) program studi.', 'Upaya dan prestasi dalam memperoleh dana hibah kompetitif', '', '', NOW(), NOW(), ".$id."),
('3.1.1.a', 'Rasio calon mahasiswa yang ikut seleksi terhadap daya tampung.', 'SK tentang daya tampung prodi 5 tahun berakhir', '', '', NOW(), NOW(), ".$id."),
('3.1.1.a', 'Rasio calon mahasiswa yang ikut seleksi terhadap daya tampung.', 'dokumen tentang data mahasiswa yang ikut seleksi 5 tahun terakhir', '', '', NOW(), NOW(), ".$id."),
('3.1.1.b', 'Rasio mahasiswa baru reguler yang melakukan registrasi terhadap calon mahasiswa baru reguler yang lulus seleksi.', 'dokumen tentang mahasiswa yang melakukan pendaftaran ulang.', '', '', NOW(), NOW(), ".$id."),
('3.1.1.b', 'Rasio mahasiswa baru reguler yang melakukan registrasi terhadap calon mahasiswa baru reguler yang lulus seleksi.', 'dokumen dan data tentang daftar mahasiswa yang lulus seleksi.', '', '', NOW(), NOW(), ".$id."),
('3.1.1.c', 'Rasio mahasiswa baru transfer terhadap mahasiswa baru regular.', 'dokumen tentang kebijakan dan syarat penerimaan mahasiswa transfer.', '', '', NOW(), NOW(), ".$id."),
('3.1.1.c', 'Rasio mahasiswa baru transfer terhadap mahasiswa baru regular.', 'Dokumen tentang data-data mahasiswa transfer yang diterima', '', '', NOW(), NOW(), ".$id."),
('3.1.1.d', 'Rata-rata Indeks Prestasi Kumulatif (IPK) selama lima tahun terakhir.', 'dokumen tentang data-data IPK 5 tahun terakhir.', '', '', NOW(), NOW(), ".$id."),
('3.1.2', 'Penerimaan mahasiswa non-reguler (selayaknya tidak membuat beban dosen sangat berat, jauh melebihi beban ideal sekitar 12 sks).', 'dokumen tentang kebijakan penerimaan mahasiswa non-reguler.', '', '', NOW(), NOW(), ".$id."),
('3.1.3', 'Penghargaan atas prestasi mahasiswa di bidang nalar, bakat dan minat.', 'Bukti (sertfikat, piala, medali, dan sebagainya) bahwa mahasiswa memenangkan suatu kejuaraan/kompetisi.', '', '', NOW(), NOW(), ".$id."),
('3.1.4.a', 'Persentase kelulusan tepat waktu.', 'SK yudisium yang berisi daftar mahasiswa-mahasiswa yang lulus tepat waktu.', '', '', NOW(), NOW(), ".$id."),
('3.1.4.b', 'Persentase mahasiswa yang DO atau mengundurkan diri.', 'Data mahasiswa aktif dari tahun ke tahun (7 tahun terakhir )', '', '', NOW(), NOW(), ".$id."),
('3.2.1', 'Layanan dan kegiatan kemahasiswaan (ragam, jenis, dan aksesibilitasnya) yang dapat dimanfaatkan untuk membina dan mengembangkan penalaran, minat, bakat, seni, dan kesejahteraan.', 'Bukti (dokumen dan foto) tentang layana kegiatan kemahasiswaan yang terkait dengan Bimbingan dan konseling', '', '', NOW(), NOW(), ".$id."),
('3.2.1', 'Layanan dan kegiatan kemahasiswaan (ragam, jenis, dan aksesibilitasnya) yang dapat dimanfaatkan untuk membina dan mengembangkan penalaran, minat, bakat, seni, dan kesejahteraan.', 'Bukti (dokumen dan foto) tentang layana kegiatan kemahasiswaan yang terkait dengan Minat dan bakat (ekstra kurikuler)', '', '', NOW(), NOW(), ".$id."),
('3.2.1', 'Layanan dan kegiatan kemahasiswaan (ragam, jenis, dan aksesibilitasnya) yang dapat dimanfaatkan untuk membina dan mengembangkan penalaran, minat, bakat, seni, dan kesejahteraan.', 'Bukti (dokumen dan foto) tentang layana kegiatan kemahasiswaan yang terkait dengan Pembinaan soft skill', '', '', NOW(), NOW(), ".$id."),
('3.2.1', 'Layanan dan kegiatan kemahasiswaan (ragam, jenis, dan aksesibilitasnya) yang dapat dimanfaatkan untuk membina dan mengembangkan penalaran, minat, bakat, seni, dan kesejahteraan.', 'Bukti (dokumen dan foto) tentang layana kegiatan kemahasiswaan yang terkait dengan Layanan beasiswa', '', '', NOW(), NOW(), ".$id."),
('3.2.1', 'Layanan dan kegiatan kemahasiswaan (ragam, jenis, dan aksesibilitasnya) yang dapat dimanfaatkan untuk membina dan mengembangkan penalaran, minat, bakat, seni, dan kesejahteraan.', 'Bukti (dokumen dan foto) tentang layana kegiatan kemahasiswaan yang terkait dengan Layanan kesehatan', '', '', NOW(), NOW(), ".$id."),
('3.2.2', 'Kualitas layanan kepada mahasiswa.', 'Bukti (dokumen dan foto) tentang layana kegiatan kemahasiswaan yang terkait dengan Bimbingan dan konseling', '', '', NOW(), NOW(), ".$id."),
('3.2.2', 'Kualitas layanan kepada mahasiswa.', 'Bukti (dokumen dan foto) tentang layana kegiatan kemahasiswaan yang terkait dengan Minat dan bakat (ekstra kurikuler)', '', '', NOW(), NOW(), ".$id."),
('3.2.2', 'Kualitas layanan kepada mahasiswa.', 'Bukti (dokumen dan foto) tentang layana kegiatan kemahasiswaan yang terkait dengan Pembinaan soft skill', '', '', NOW(), NOW(), ".$id."),
('3.2.2', 'Kualitas layanan kepada mahasiswa.', 'Bukti (dokumen dan foto) tentang layana kegiatan kemahasiswaan yang terkait dengan Layanan beasiswa', '', '', NOW(), NOW(), ".$id."),
('3.2.2', 'Kualitas layanan kepada mahasiswa.', 'Bukti (dokumen dan foto) tentang layana kegiatan kemahasiswaan yang terkait dengan Layanan kesehatan', '', '', NOW(), NOW(), ".$id."),
('3.3.1.a', 'Upaya pelacakan dan perekaman data lulusan.', 'dokumen kebijakan tracer-study', '', '', NOW(), NOW(), ".$id."),
('3.3.1.a', 'Upaya pelacakan dan perekaman data lulusan.', 'dokumen yang berisi data-data alumni', '', '', NOW(), NOW(), ".$id."),
('3.3.1.a', 'Upaya pelacakan dan perekaman data lulusan.', 'dokumen yang berisi hasil survey pelacakan lulusan', '', '', NOW(), NOW(), ".$id."),
('3.3.1.b', 'Penggunaan hasil pelacakan untuk perbaikan: (1) proses pembelajaran, (2) penggalangan dana, (3) informasi pekerjaan, (4) membangun jejaring.', 'Bukti-bukti (dokumen, berita acara, foto) yang membuktikan bahwa hasil tracer study digunakan untuk proses pembelajaran', '', '', NOW(), NOW(), ".$id."),
('3.3.1.b', 'Penggunaan hasil pelacakan untuk perbaikan: (1) proses pembelajaran, (2) penggalangan dana, (3) informasi pekerjaan, (4) membangun jejaring.', 'Bukti-bukti (dokumen, berita acara, foto) yang membuktikan bahwa hasil tracer study digunakan untuk penggalangan dana', '', '', NOW(), NOW(), ".$id."),
('3.3.1.b', 'Penggunaan hasil pelacakan untuk perbaikan: (1) proses pembelajaran, (2) penggalangan dana, (3) informasi pekerjaan, (4) membangun jejaring.', 'Bukti-bukti (dokumen, berita acara, foto) yang membuktikan bahwa hasil tracer study digunakan untuk informasi pekerjaan', '', '', NOW(), NOW(), ".$id."),
('3.3.1.b', 'Penggunaan hasil pelacakan untuk perbaikan: (1) proses pembelajaran, (2) penggalangan dana, (3) informasi pekerjaan, (4) membangun jejaring.', 'Bukti-bukti (dokumen, berita acara, foto) yang membuktikan bahwa hasil tracer study digunakan untuk membangun jejaring', '', '', NOW(), NOW(), ".$id."),
('3.3.1.c', 'Pendapat pengguna lulusan terhadap mutu alumni.', 'Dokumen hasil survey yang diisi pengguna lulusan (ada nama pengguna lulusan dan cap perusahaan atau kop surat perusahaan) tentang mutu alumni.', '', '', NOW(), NOW(), ".$id."),
('3.3.2', 'Profil masa tunggu kerja pertama (dalam bulan).', 'Hasil tracer-study yang berisi hasil survey masa tunggu kerja pertama untuk mahasiswa 3 angkatan.', '', '', NOW(), NOW(), ".$id."),
('3.3.3', 'Profil kesesuaian bidang kerja dengan bidang studi (keahlian) lulusan.', 'Hasil tracer-study yang berisi hasil survey kesesuaian bidang kerja dengan bidang studi (keahlian) lulusan.', '', '', NOW(), NOW(), ".$id."),
('3.4.1', 'Bentuk partisipasi lulusan dan alumni dalam mendukung pengembangan akademik program studi.', 'Bukti-bukti (dokumen, berita acara, foto) yang membuktikan bahwa alumni dalam bidang akademik menyumbang/terlibat untuk Sumbangan dana', '', '', NOW(), NOW(), ".$id."),
('3.4.1', 'Bentuk partisipasi lulusan dan alumni dalam mendukung pengembangan akademik program studi.', 'Bukti-bukti (dokumen, berita acara, foto) yang membuktikan bahwa alumni dalam bidang akademik menyumbang/terlibat untuk Sumbangan fasilitas', '', '', NOW(), NOW(), ".$id."),
('3.4.1', 'Bentuk partisipasi lulusan dan alumni dalam mendukung pengembangan akademik program studi.', 'Bukti-bukti (dokumen, berita acara, foto) yang membuktikan bahwa alumni dalam bidang akademik menyumbang/terlibat untuk Keterlibatan dalam kegiatan akademik', '', '', NOW(), NOW(), ".$id."),
('3.4.1', 'Bentuk partisipasi lulusan dan alumni dalam mendukung pengembangan akademik program studi.', 'Bukti-bukti (dokumen, berita acara, foto) yang membuktikan bahwa alumni dalam bidang akademik menyumbang/terlibat untuk Pengembangan jejaring', '', '', NOW(), NOW(), ".$id."),
('3.4.1', 'Bentuk partisipasi lulusan dan alumni dalam mendukung pengembangan akademik program studi.', 'Bukti-bukti (dokumen, berita acara, foto) yang membuktikan bahwa alumni dalam bidang akademik menyumbang/terlibat untuk Penyediaan fasilitas untuk kegiatan akademik', '', '', NOW(), NOW(), ".$id."),
('3.4.2', 'Bentuk partisipasi lulusan dan alumni dalam mendukung pengembangan non-akademik program studi. ', 'Bukti-bukti (dokumen, berita acara, foto) yang  membuktikan bahwa alumni dalam bidang non-akademik menyumbang/terlibat untuk Sumbangan dana', '', '', NOW(), NOW(), ".$id."),
('3.4.2', 'Bentuk partisipasi lulusan dan alumni dalam mendukung pengembangan non-akademik program studi. ', 'Bukti-bukti (dokumen, berita acara, foto) yang  membuktikan bahwa alumni dalam bidang non-akademik menyumbang/terlibat untuk Sumbangan fasilitas', '', '', NOW(), NOW(), ".$id."),
('3.4.2', 'Bentuk partisipasi lulusan dan alumni dalam mendukung pengembangan non-akademik program studi. ', 'Bukti-bukti (dokumen, berita acara, foto) yang  membuktikan bahwa alumni dalam bidang non-akademik menyumbang/terlibat untuk Keterlibatan dalam kegiatan akademik', '', '', NOW(), NOW(), ".$id."),
('3.4.2', 'Bentuk partisipasi lulusan dan alumni dalam mendukung pengembangan non-akademik program studi. ', 'Bukti-bukti (dokumen, berita acara, foto) yang  membuktikan bahwa alumni dalam bidang non-akademik menyumbang/terlibat untuk Pengembangan jejaring', '', '', NOW(), NOW(), ".$id."),
('3.4.2', 'Bentuk partisipasi lulusan dan alumni dalam mendukung pengembangan non-akademik program studi. ', 'Bukti-bukti (dokumen, berita acara, foto) yang  membuktikan bahwa alumni dalam bidang non-akademik menyumbang/terlibat untuk Penyediaan fasilitas untuk kegiatan non-akademik', '', '', NOW(), NOW(), ".$id."),
('4.1', 'Pedoman tertulis tentang sistem seleksi, perekrutan, penempatan, pengembangan, retensi, dan pemberhentian dosen dan tenaga kependidikan. ', 'Dokumen/peraturan/SK yang berisi tentang sistem seleksi', '', '', NOW(), NOW(), ".$id."),
('4.1', 'Pedoman tertulis tentang sistem seleksi, perekrutan, penempatan, pengembangan, retensi, dan pemberhentian dosen dan tenaga kependidikan. ', 'Dokumen/peraturan/SK yang berisi tentang perekrutan', '', '', NOW(), NOW(), ".$id."),
('4.1', 'Pedoman tertulis tentang sistem seleksi, perekrutan, penempatan, pengembangan, retensi, dan pemberhentian dosen dan tenaga kependidikan. ', 'Dokumen/peraturan/SK yang berisi tentang penempatan', '', '', NOW(), NOW(), ".$id."),
('4.1', 'Pedoman tertulis tentang sistem seleksi, perekrutan, penempatan, pengembangan, retensi, dan pemberhentian dosen dan tenaga kependidikan. ', 'Dokumen/peraturan/SK yang berisi tentang pengembangan', '', '', NOW(), NOW(), ".$id."),
('4.1', 'Pedoman tertulis tentang sistem seleksi, perekrutan, penempatan, pengembangan, retensi, dan pemberhentian dosen dan tenaga kependidikan. ', 'Dokumen/peraturan/SK yang berisi tentang retensi', '', '', NOW(), NOW(), ".$id."),
('4.1', 'Pedoman tertulis tentang sistem seleksi, perekrutan, penempatan, pengembangan, retensi, dan pemberhentian dosen dan tenaga kependidikan. ', 'Dokumen/peraturan/SK yang berisi tentang pemberhentian dosen dan tenaga kependidikan', '', '', NOW(), NOW(), ".$id."),
('4.2.1', 'Pedoman tertulis tentang sistem monitoring dan evaluasi, serta rekam jejak kinerja akademik dosen dan kinerja tenaga kependidikan. ', 'Dokumen/peraturan/SK tentang sistem monitoring dan evaluasi, serta rekam jejak kinerja akademik dosen dan kinerja tenaga kependidikan.', '', '', NOW(), NOW(), ".$id."),
('4.2.2', 'Pelaksanaan monitoring dan evaluasi kinerja dosen di bidang  pendidikan, penelitian, dan pengabdian kepada masyarakat.', 'Bukti pelaksanaan monev kinerja dosen di bidang pendidikan, penelitian, dan pengabdian kepada masyarakat.', '', '', NOW(), NOW(), ".$id."),
('4.3.1.a', 'Dosen tetap berpendidikan (terakhir) S2 dan S3 yang bidang keahliannya sesuai dengan kompetensi PS.', 'data-data seluruh dosen tetap sesuai PS beserta ijazah.', '', '', NOW(), NOW(), ".$id."),
('4.3.1.b', 'Dosen tetap yang berpendidikan S3 yang bidang keahliannya sesuai dengan kompetensi PS.', 'data-data seluruh dosen tetap sesuai PS yang bergelar S3 beserta ijazah.', '', '', NOW(), NOW(), ".$id."),
('4.3.1.c', 'Dosen tetap yang memiliki jabatan lektor kepala dan guru besar yang bidang keahliannya sesuai dengan kompetensi PS.', 'Data SK kenaikan jabatan lektor kepala dan guru besar semua dosen tetap sesuai PS', '', '', NOW(), NOW(), ".$id."),
('4.3.1.d', 'Dosen yang memiliki Sertifikat Pendidik Profesional.', 'Data SK Serdos semua dosen tetap sesuai PS.', '', '', NOW(), NOW(), ".$id."),
('4.3.2', 'Rasio mahasiswa terhadap dosen tetap yang bidang keahliannya sesuai dengan bidang PS.', 'daftar dosen tetap', '', '', NOW(), NOW(), ".$id."),
('4.3.2', 'Rasio mahasiswa terhadap dosen tetap yang bidang keahliannya sesuai dengan bidang PS.', 'daftar mahasiswa (student body) PS.', '', '', NOW(), NOW(), ".$id."),
('4.3.3', 'Rata-rata beban dosen per semester, atau rata-rata FTE (Fulltime Teaching Equivalent). ', 'Bukti SK beban dosen di bidang pengajaran, penelitian, pengabdian masyarakat dan manajemen (struktural).', '', '', NOW(), NOW(), ".$id."),
('4.3.4 & 4.3.5', 'Kesesuaian keahlian (pendidikan terakhir) dosen dengan mata kuliah yang diajarkannya.', 'Jadwal mata kuliah beserta dosennya pada tahun TS.', '', '', NOW(), NOW(), ".$id."),
('4.3.4 & 4.3.5', 'Tingkat kehadiran dosen tetap dalam mengajar.', 'Rekap kehadiran mengajar seluruh dosen tetap sesuai PS', '', '', NOW(), NOW(), ".$id."),
('4.3.4 & 4.3.5', 'Tingkat kehadiran dosen tetap dalam mengajar.', 'BAP (berita acara perkuliahan) yang didalamnya ada tanda tangan dosen setiap kehadiran.', '', '', NOW(), NOW(), ".$id."),
('4.4.1', 'Rasio jumlah dosen tidak tetap, terhadap jumlah seluruh dosen.', 'Daftar dan SK dosen tidak tetap.', '', '', NOW(), NOW(), ".$id."),
('4.4.2.a', 'Kesesuaian keahlian dosen tidak tetap dengan mata kuliah yang diampu.', 'Jadwal mata kuliah beserta dosennya di tahun TS.', '', '', NOW(), NOW(), ".$id."),
('4.4.2.b', 'Pelaksanaan tugas atau tingkat kehadiran dosen tidak tetap dalam mengajar.', 'Berita acara perkuliahan untuk semua dosen tidak tetap.', '', '', NOW(), NOW(), ".$id."),
('4.5.1', 'Kegiatan tenaga ahli/pakar sebagai pembicara dalam seminar/pelatihan, pembicara tamu, dsb, dari luar PT sendiri (tidak termasuk dosen tidak tetap).', 'Bukti (CV, surat undangan, materi yang disampaikan, foto, sertifikat) kegiatan tenaga ahli/pakar tersebut.', '', '', NOW(), NOW(), ".$id."),
('4.5.2', 'Peningkatan kemampuan dosen tetap melalui program tugas belajar dalam bidang yang sesuai dengan bidang PS.', 'SK tugas belajar dosen  dan kartu mahasiswa dosen yang tugas belajar studi lanjut.', '', '', NOW(), NOW(), ".$id."),
('4.5.3', 'Kegiatan dosen tetap yang bidang keahliannya sesuai dengan PS dalam seminar ilmiah/ lokakarya/ penataran/ workshop/ pagelaran/ pameran/peragaan yang tidak hanya melibatkan dosen PT sendiri.', 'Sertifikat pembicara atau peserta dari seluruh dosen tetap dalam seminar/workshop yang tidak hanya melibatkan dosen PT sendiri.', '', '', NOW(), NOW(), ".$id."),
('4.5.4', 'Prestasi dalam mendapatkan penghargaan hibah, pendanaan program dan kegiatan akademik dari tingkat nasional dan internasional; besaran dan proporsi dana penelitian dari sumber institusi sendiri dan luar institusi. ', 'Kontrak (pengajaran atau penelitian atau abdimas) antara perguruan tinggi dengan institusi luar pemberi hibah yang di dalamnya tercantum besaran dana hibahnya.', '', '', NOW(), NOW(), ".$id."),
('4.5.5', 'Reputasi dan keluasan jejaring dosen dalam bidang akademik dan profesi.', 'semua kartu anggota dosen tetap dari asosiasi profesi.', '', '', NOW(), NOW(), ".$id."),
('4.6.1.a', 'Pustakawan: jumlah dan kualifikasinya.', 'ijazah seluruh pustakawan', '', '', NOW(), NOW(), ".$id."),
('4.6.1.a', 'Pustakawan: jumlah dan kualifikasinya.', 'SK pengangkatan sebagai pustakawan', '', '', NOW(), NOW(), ".$id."),
('4.6.1.b', 'Laboran, analis, teknisi, operator: jumlah, kualifikasi, dan mutu kerjanya.', 'SK laboran', '', '', NOW(), NOW(), ".$id."),
('4.6.1.b', 'Laboran, analis, teknisi, operator: jumlah, kualifikasi, dan mutu kerjanya.', 'ijazah laboran', '', '', NOW(), NOW(), ".$id."),
('4.6.1.b', 'Laboran, analis, teknisi, operator: jumlah, kualifikasi, dan mutu kerjanya.', 'log-book', '', '', NOW(), NOW(), ".$id."),
('4.6.1.b', 'Laboran, analis, teknisi, operator: jumlah, kualifikasi, dan mutu kerjanya.', 'daftar inventaris laboran', '', '', NOW(), NOW(), ".$id."),
('4.6.1.b', 'Laboran, analis, teknisi, operator: jumlah, kualifikasi, dan mutu kerjanya.', 'jurnal kegiatan laboran dalam memeliharan laboratorium', '', '', NOW(), NOW(), ".$id."),
('4.6.1.c', 'Tenaga administrasi: jumlah dan kualifikasinya.', 'Ijazah', '', '', NOW(), NOW(), ".$id."),
('4.6.1.c', 'Tenaga administrasi: jumlah dan kualifikasinya.', 'SK pengangkatan sebagai tenaga adminisitrasi.', '', '', NOW(), NOW(), ".$id."),
('4.6.2', 'Upaya PS dalam meningkatkan kualifikasi dan kompetensi tenaga kependidikan.', 'Bukti-bukti terkait dengan pelatihan yang diadakan oleh PS terhadap tenaga kependidikan', '', '', NOW(), NOW(), ".$id."),
('4.6.2', 'Upaya PS dalam meningkatkan kualifikasi dan kompetensi tenaga kependidikan.', 'Bukti-bukti terkait dengan bukti bahwa ada pos dana di RKA terkait dengan peningkatan kompetensi dosen', '', '', NOW(), NOW(), ".$id."),
('4.6.2', 'Upaya PS dalam meningkatkan kualifikasi dan kompetensi tenaga kependidikan.', 'Bukti-bukti terkait dengan Jenjang karier dan pembinaan terhadap jenjang karier tenaga kependidikan.', '', '', NOW(), NOW(), ".$id."),
('5.1.1.a', 'Struktur kurikulum (harus memuat standar kompetensi lulusan yang terstruktur dalam kompetensi utama, pendukung dan lainnya ).', '', '', '', NOW(), NOW(), ".$id."),
('5.1.1.b', 'Orientasi dan kesesuaian kurikulum dengan visi dan misi PS.', '', '', '', NOW(), NOW(), ".$id."),
('5.1.2.a', 'Kesesuaian mata kuliah dengan standar kompetensi.', '', '', '', NOW(), NOW(), ".$id."),
('5.1.2.b', 'Persentase mata kuliah  yang dalam penentuan nilai akhirnya memberikan bobot pada tugas-tugas (PR atau makalah) ≥ 20%. ', '', '', '', NOW(), NOW(), ".$id."),
('5.1.2.c', 'Matakuliah dilengkapi dengan deskripsi matakuliah, silabus dan SAP.', '', '', '', NOW(), NOW(), ".$id."),
('5.1.3', 'Fleksibilitas mata kuliah pilihan.', '', '', '', NOW(), NOW(), ".$id."),
('5.1.4', 'Substansi praktikum dan pelaksanaan praktikum.', '', '', '', NOW(), NOW(), ".$id."),
('5.2.a', 'Pelaksanaan peninjauan kurikulum selama 5 tahun terakhir.', '', '', '', NOW(), NOW(), ".$id."),
('5.2.b', 'Penyesuaian kurikulum dengan perkembangan Ipteks dan kebutuhan.', '', '', '', NOW(), NOW(), ".$id."),
('5.3.1.a', 'Pelaksanaan pembelajaran memiliki mekanisme untuk memonitor, mengkaji, dan memperbaiki secara periodik kegiatan perkuliahan (kehadiran dosen dan mahasiswa), penyusunan materi perkuliahan, serta penilaian hasil belajar.', '', '', '', NOW(), NOW(), ".$id."),
('5.3.1.b', 'Mekanisme penyusunan materi perkuliahan.', '', '', '', NOW(), NOW(), ".$id."),
('5.3.2', 'Mutu soal ujian.', '', '', '', NOW(), NOW(), ".$id."),
('5.4.1.a', 'Rata-rata banyaknya mahasiswa per dosen Pembimbing Akademik per semester.', '', '', '', NOW(), NOW(), ".$id."),
('5.4.1.b', 'Pelaksanaan kegiatan pembimbingan akademik.', '', '', '', NOW(), NOW(), ".$id."),
('5.4.1.c', 'Jumlah rata-rata pertemuan pembimbingan akademik per mahasiswa per semester.', '', '', '', NOW(), NOW(), ".$id."),
('5.4.2', 'Efektivitas kegiatan pembimbingan akademik.', '', '', '', NOW(), NOW(), ".$id."),
('5.5.1.a', 'Ketersediaan panduan, sosialisasi,  dan penggunaan.', '', '', '', NOW(), NOW(), ".$id."),
('5.5.1.b', 'Rata-rata mahasiswa per dosen pembimbing tugas akhir.', '', '', '', NOW(), NOW(), ".$id."),
('5.5.1.c', 'Rata-rata jumlah pertemuan/ pembimbingan selama penyelesaian TA.', '', '', '', NOW(), NOW(), ".$id."),
('5.5.1.d', 'Kualifikasi akademik dosen pembimbing tugas akhir.', '', '', '', NOW(), NOW(), ".$id."),
('5.5.2', 'Rata-rata waktu penyelesaian penulisan tugas akhir.', '', '', '', NOW(), NOW(), ".$id."),
('5.6', 'Upaya perbaikan sistem pembelajaran yang telah dilakukan selama tiga tahun terakhir. ', '', '', '', NOW(), NOW(), ".$id."),
('5.7.1', 'Kebijakan tentang suasana akademik (otonomi keilmuan, kebebasan akademik, kebebasan mimbar akademik).', '', '', '', NOW(), NOW(), ".$id."),
('5.7.2', 'Ketersediaan dan jenis prasarana, sarana dan dana yang memungkinkan terciptanya interaksi akademik antara sivitas akademika.', '', '', '', NOW(), NOW(), ".$id."),
('5.7.3', 'Program dan kegiatan akademik untuk menciptakan suasana akademik (seminar, simposium, lokakarya, bedah buku, penelitian bersama dll).', '', '', '', NOW(), NOW(), ".$id."),
('5.7.4', 'Interaksi akademik antara dosen-mahasiswa.', '', '', '', NOW(), NOW(), ".$id."),
('5.7.5', 'Pengembangan perilaku kecendekiawanan.', '', '', '', NOW(), NOW(), ".$id."),
('6.1', 'Keterlibatan program studi dalam perencanaan target kinerja, perencanaan kegiatan/ kerja dan perencanaan/alokasi dan pengelolaan dana. ', '', '', '', NOW(), NOW(), ".$id."),
('6.2.1', 'Besarnya dana (termasuk hibah) yang dikelola dalam tiga tahun terakhir.', '', '', '', NOW(), NOW(), ".$id."),
('6.2.2', 'Dana penelitian dalam tiga tahun terakhir.', '', '', '', NOW(), NOW(), ".$id."),
('6.2.3', 'Dana yang diperoleh dalam rangka pengabdian kepada masyarakat dalam tiga  tahun terakhir.', '', '', '', NOW(), NOW(), ".$id."),
('6.3.1', 'Luas ruang kerja dosen', '', '', '', NOW(), NOW(), ".$id."),
('6.3.2', 'Prasarana (kantor, ruang kelas, ruang laboratorium, studio, ruang perpustakaan, kebun percobaan, dsb. kecuali  ruang dosen) yang dipergunakan PS dalam proses pembelajaran.', '', '', '', NOW(), NOW(), ".$id."),
('6.3.3', 'Prasarana lain yang menunjang (misalnya tempat olah raga, ruang bersama, ruang himpunan mahasiswa, poliklinik).', '', '', '', NOW(), NOW(), ".$id."),
('6.4.1.a', 'Bahan pustaka yang berupa buku teks.', '', '', '', NOW(), NOW(), ".$id."),
('6.4.1.b', 'Bahan pustaka yang berupa disertasi/tesis/ skripsi/ tugas akhir.', '', '', '', NOW(), NOW(), ".$id."),
('6.4.1.c', 'Bahan pustaka yang berupa jurnal ilmiah terakreditasi Dikti.', '', '', '', NOW(), NOW(), ".$id."),
('6.4.1.d', 'Bahan pustaka yang berupa jurnal ilmiah internasional .', '', '', '', NOW(), NOW(), ".$id."),
('6.4.1.e', 'Bahan pustaka yang berupa prosiding seminar dalam tiga tahun terakhir.', '', '', '', NOW(), NOW(), ".$id."),
('6.4.2', 'Akses ke perpustakaan di luar PT atau sumber pustaka lainnya.', '', '', '', NOW(), NOW(), ".$id."),
('6.4.3', 'Ketersediaan, akses dan pendayagunaan sarana utama di lab (tempat praktikum, bengkel, studio, ruang simulasi, rumah sakit, puskesmas/balai kesehatan, green house, lahan untuk pertanian, dan sejenisnya).', '', '', '', NOW(), NOW(), ".$id."),
('6.5.1', 'Sistem informasi dan fasilitas yang digunakan PS dalam proses pembelajaran (hardware, software, e-learning, dan perpustakaan).', '', '', '', NOW(), NOW(), ".$id."),
('6.5.2', 'Aksesibilitas data dalam sistem informasi.', '', '', '', NOW(), NOW(), ".$id."),
('7.1.1', 'Jumlah penelitian yang dilakukan oleh dosen tetap yang bidang keahliannya sesuai dengan PS per tahun, selama 3 tahun.', '', '', '', NOW(), NOW(), ".$id."),
('7.1.2', 'Keterlibatan mahasiswa yang melakukan tugas akhir dalam penelitian dosen.', '', '', '', NOW(), NOW(), ".$id."),
('7.1.3', 'Jumlah artikel ilmiah yang dihasilkan oleh dosen tetap yang bidang keahliannya sesuai dengan PS per tahun, selama tiga tahun.', '', '', '', NOW(), NOW(), ".$id."),
('7.1.4', 'Karya-karya PS/institusi yang telah memperoleh perlindungan Hak atas Kekayaan Intelektual (HaKI) dalam tiga tahun terakhir.', '', '', '', NOW(), NOW(), ".$id."),
('7.2.1', 'Jumlah kegiatan Pengabdian kepada Masyarakat (PkM) yang dilakukan oleh dosen tetap yang bidang keahliannya sesuai dengan PS.', '', '', '', NOW(), NOW(), ".$id."),
('7.2.2', 'Keterlibatan mahasiswa dalam kegiatan pengabdian kepada masyarakat.', '', '', '', NOW(), NOW(), ".$id."),
('7.3.1', 'Kegiatan kerjasama dengan instansi di dalam negeri dalam tiga tahun terakhir.', '', '', '', NOW(), NOW(), ".$id."),
('7.3.2', 'Kegiatan kerjasama dengan instansi di luar negeri dalam tiga tahun terakhir.', '', '', '', NOW(), NOW(), ".$id.")");

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Berhasil Membuat Butir Borang Baru dan List Dokumen Pendukung dengan ID = ".$id,
                        'created_at'=> date('Y-m-d H:i:s')
                );
                $this->db->insert('log', $data);
                return $this->db->affected_rows();
        }

        public function update_entry()
        {
                $data = array(
                        'butir' => $this->input->post('butir'),
                        'bakumutu' => $this->input->post('bakumutu'),
                        // 'penjelasan' => $this->input->post('penjelasan'),
                        'keterangan' => $this->input->post('keterangan'),
                        'updated_at'=> date('Y-m-d H:i:s'),
                );
                $this->db->update('butir', $data, array('id' => $_POST['idButir']));

                $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "Mengubah Butir : ".$this->input->post('butir')." dengan ID : ".$this->input->post('idButir'),
                        'created_at'=> date('Y-m-d H:i:s')
                );
                $this->db->insert('log', $data);
        }

        public function find($column,$id){
            return $this->db->select("*")
              ->from('butir')
              ->where($column, $id)
              ->order_by('id', 'DESC')
              ->get()
              ->result_array();

        }

        public function findresume($column,$id){
            return $this->db->select("*")
              ->from('butir')
              ->where($column, $id)
              ->order_by('id', 'ASC')
              ->get()
              ->result_array();

        }

        public function findButir($column,$id){
            return $this->db->select("*")
              ->from('butir')
              ->where($column, $id)
              ->where($column, "column LIKE '%$keyword%'")
              ->order_by('id', 'DESC')
              ->get()
              ->result_array();

        }

        public function join3tabel($id){
            return $this->db->select("fakultas.id as idfakultas, fakultas.nama as namafakultas, prodi.id as idprodi, prodi.id_fakultas as idfakpro, prodi.nama as namaprodi, borang.id as idborang")
              ->from('fakultas')
              ->join('prodi','prodi.id_fakultas=fakultas.id')
              ->join('borang','borang.id_prodi=prodi.id')
              ->where('borang.id', $id)
              ->get()
              ->result_array();
        }

        public function delete($column,$id){

            $this->db->delete('butir', array($column => $id));
            $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "menghapus Butir dengan ID ".$id,
                        'created_at'=> date('Y-m-d H:i:s')
                    );
            $this->db->insert('log', $data);
            return $this->db->affected_rows();
        }

        public function deleteallbutir($column,$id){

            $this->db->delete('butir', array($column => $id));
            $this->db->delete('dokumenpendukung', array($column => $id));
            $data = array(
                        'user'=> $_SESSION['name'],
                        'action' => "menghapus Semua Butir dengan ID Borang = ".$id,
                        'created_at'=> date('Y-m-d H:i:s')
                    );
            $this->db->insert('log', $data);
            $this->db->query('ALTER TABLE butir AUTO_INCREMENT 0');
            $this->db->query('ALTER TABLE dokumenpendukung AUTO_INCREMENT 0');
            return $this->db->affected_rows();
        }

}
?>
