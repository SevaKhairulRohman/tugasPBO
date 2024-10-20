<!DOCTYPE html>
<html>

    <head>
        <title>Pemrograman Berorientasi Objek</title>
        <style>
            h1 {
                color: aqua
            }

            table {
                width: 25%;
                border-collapse: collapse;
                margin: 15px 0;
            }

            table,
            th,
            td {
                border: 1px solid black;
            }

            th {
                padding: 5px;
                text-align: center;
            }

            th {
                background-color: #f2f2f2;
            }
        </style>
    </head>

    <body>
        <!-- Pertemuan 1 -->
        <img src="profile.jpeg" width="20%" height="20%"/>
        <h3>Seva Khairul Rohman : 42423033</h3>
        <h1 align="center">Pemrograman Berorientasi Objek</h1>
        <h2 align="left">Pengertian</h2>
        <p>Pemrograman berorientasi objek (Inggris: object-oriented programming disingkat OOP) merupakan paradigma
            pemrograman berdasarkan konsep "objek", yang dapat berisi data, dalam bentuk field atau dikenal juga sebagai
            atribut; serta kode, dalam bentuk fungsi/prosedur atau dikenal juga sebagai method. Semua data dan fungsi di
            dalam paradigma ini dibungkus dalam kelas-kelas atau objek-objek. Bandingkan dengan logika pemrograman
            terstruktur. Setiap objek dapat menerima pesan, memproses data, dan mengirim pesan ke objek lainnya.
        </p>
        <p>Model data berorientasi objek dikatakan dapat memberi fleksibilitas yang lebih, kemudahan mengubah program, dan
            digunakan luas dalam teknik peranti lunak skala besar. Lebih jauh lagi, pendukung OOP mengklaim bahwa OOP lebih
            mudah dipelajari bagi pemula dibanding dengan pendekatan sebelumnya, dan pendekatan OOP lebih mudah dikembangkan
            dan dirawat.</p>

        <h2 align="left">Bahasa Pemrograman yang Mendukung</h2>
        <p>Berikut ini adalah Bahasa pemrograman yang mendukung OOP antara lain seperti:</p>
        <ul>
            <li>Visual Foxpro</li>
            <li>Java</li>
            <li>C++</li>
            <li>Pascal (bahasa pemrograman)</li>
            <li>SIMULA</li>
            <li>Smalltalk</li>
            <li>Ruby</li>
            <li>Python</li>
            <li>PHP</li>
            <li>TypeScript</li>
            <li>C#</li>
            <li>Delphi</li>
            <li>Eiffel</li>
            <li>Perl</li>
            <li>Adobe Flash AS 3.0</li>
        </ul>

        <h2 align="left">Membuat Tabel Kategori Produk</h2>

        <table>
            <tr>
                <th>NO</th>
                <th>Kategori Produk</th>
                <th>Nama Produk</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Bumbu dapur</td>
                <td>Garam</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Bumbu dapur</td>
                <td>Cabe</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Bumbu dapur</td>
                <td>Lengkuas</td>
            </tr>
            <tr>
                <td>4</td>
                <td>Bumbu dapur</td>
                <td>Terasi</td>
            </tr>
            <tr>
                <td>5</td>
                <td>Sembako</td>
                <td>Beras</td>
            </tr>
            <tr>
                <td>6</td>
                <td>Sembako</td>
                <td>Minyak goreng</td>
            </tr>
            <tr>
                <td>7</td>
                <td>Sembako</td>
                <td>Gula pasir</td>
            </tr>
        </table>

        <h2 align="left">Membuat Tabel Produk</h2>

        <table>
            <tr>
                <th>NO</th>
                <th>Produk</th>
                <th>Stock</th>
                <th>Harga</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Garam</td>
                <td>10</td>
                <td>7000</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Cabe</td>
                <td>10</td>
                <td>25000</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Lengkuas</td>
                <td>10</td>
                <td>12000</td>
            </tr>
            <tr>
                <td>4</td>
                <td>Terasi</td>
                <td>10</td>
                <td>35000</td>
            </tr>
            <tr>
                <td>5</td>
                <td>Beras</td>
                <td>10</td>
                <td>13000</td>
            </tr>
            <tr>
                <td>6</td>
                <td>Minyak goreng</td>
                <td>10</td>
                <td>15000</td>
            </tr>
            <tr>
                <td>7</td>
                <td>Gula pasir</td>
                <td>10</td>
                <td>13000</td>
            </tr>
        </table>
        <!-- Pertemuan 1 Selesai -->

        <!-- Pertemuan 2 -->

        <!-- Pertemuan 2 Selesai-->

        <!-- Pertemuan 3 -->
        <?php
            class Buah {
                // Properties
                public $nama;
                public $warna;

                // Methods
                function set_name($nama) {
                    $this->nama = $nama;
                }

                function get_name() {
                    return $this->nama;
                }
            }

            // Membuat objek dari kelas Buah
            $apel = new Buah();
            $pisang = new Buah();

            // Mengatur nama buah
            $apel->set_name('Apel');
            $pisang->set_name('Pisang');

            // Menampilkan nama buah
            echo $apel->get_name();
            echo "<br>";
            echo $pisang->get_name();
            echo "<br>";
        ?>

        <?php
            class mobil {
                // Properties
                public $nama;
                public $warna;

                // Methods
                function set_name($nama) {
                    $this->nama = $nama;
                }

                function get_name() {
                    return $this->nama;
                }

                function set_warna($warna) {
                    $this->warna = $warna;
                }

                function get_warna() {
                    return $this->warna;
                }
            }

            // Membuat objek dari kelas mobil
            $toyota = new mobil();

            // Mengatur nama
            $toyota->set_name('toyota');
            $toyota->set_warna('Biru Metalik');

            // Menampilkan nama 
            echo "Nama : " . $toyota->get_name();
            echo "<br>";
            echo "Warna : " . $toyota->get_warna();
        ?>
        <!-- Pertemuan 3 Selesai -->

        <!-- Pertemuan 4 -->
        <br/>
        <?php
            class profil {
                public $nama;
                public $tb;
                public $warna;

                function __construct($nama, $tb, $warna) {
                    $this->nama = $nama;
                    $this->tb = $tb;
                    $this->warna = $warna;
                }
                function __destruct() {
                    echo "Mahasiswa tersebut bernama {$this->nama}, Tinggi Badan {$this->tb} cm, dan Warna Kulit {$this->warna}.";
                    echo "<br>";
                }
            }

            $imron = new profil("Imron Sulistio", ("161"), ("Sawo Matang"));
            $arya = new profil("Aryaguna Bintang Restiawan", ("168"), ("Sawo Matang"));
            $seva = new profil("Seva Khairul Rohman", ("165"), ("Sawo Matang"))
        ?>
        <!-- Pertemuan 4 Selesai-->

        <!-- Pertemuan 5 -->
         
        <!-- Pertemuan 5 Selesai -->
    </body>

</html>