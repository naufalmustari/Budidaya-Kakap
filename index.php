<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("location: login.php");
  die;
}

require 'db.php';

$produkBudidaya = query_select('produksi_budidaya');
$kordinat = query_select('titik_kordinat');

?>
<?php require 'header.php'; ?>
<?php require 'navbar.php'; ?>


<style>
  #map {
    height: 500px;
  }
</style>


<div class="container-fluid mt-5 ">
  <div id="map" class="shadow"></div>
</div>

<div class="container-fluid mt-5">
  <div class="text-center mb-4">
    <h4>Data Produksi Budidaya</h4>
  </div>

  <table class="table table-striped" id="data">
    <thead class="thead-dark">
      <tr>
        <th class="text-center">No</th>
        <th>Jenis Usaha</th>
        <th class="text-center">Provinsi</th>
        <th class="text-center">Jenis Ikan</th>
        <th class="text-center">Tahun</th>
        <th class="text-center">Volume Produksi</th>
        <th class="text-center">Nilai Produksi</th>
      </tr>
    </thead>
    <tbody>
      <?php $i = 1;  ?>
      <?php foreach ($produkBudidaya as $item) : ?>
        <tr>
          <td class="text-center"><?= $i ?><?php $i++ ?></td>
          <td><?= $item['jenis_usaha'] ?></td>
          <td class="text-center"><?= $item['provinsi'] ?></td>
          <td class="text-center"><?= $item['jenis_ikan'] ?></td>
          <td class="text-center"><?= $item['tahun'] ?></td>
          <td class="text-center"><?= $item['volume'] ?></td>
          <td class="text-center"><?= $item['nilai'] ?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>

<div class="container mt-5">
  <div class="card border-0 shadow">
    <div class="card-body">
      <div class="text-center mb-4 pt-4 pb-4">
        <h4 class="mb-4">Ikan Kakap Putih</h4>
        <img src="images/kakap.png" class="img-fluid text-center rounded shadow" alt="" style="width: 300px;">
      </div>


      <p>
        Ikan kakap putih atau Baramundi adalah suatu jenis Ikan berpindah dalam keluarga Latidae dari ordo Perciformes. Jenis ikan ini tersebar luas di wilayah Hindia-Pasifik Barat mulai dari Asia Tenggara sampai Papua New guninea dan Australia Utara. Ikan ini dikenal dengan nama Pla kapong di Thailand dan Barramundi di Australia. Oleh komunitas ilmiah internasional ikan ini disebut sebagai Asian sea bass (kakap laut Asia) atau Australian sea bass (kakap laut Australia). Ikan ini merupakan salah-satu komoditas budidaya laut unggulan di Indonesia.<br><br>
        Ikan ini memiliki bentuk tubuh memanjang dengan mulut yang besar namun sedikit mencong dan rahang atas yang memanjang sampai ke kebelakang mata. Tepi bawah dari tulang pipinya (preoperculum) memiliki gerigi dengan duri tajam di bagian sudut. Tutup insang (operculum) memiliki duri kecil dan penutup bergerigi di atas pangkal gurat sisi. Ikan ini memiliki sisik tipe sisir (ctenoid) yang berukuran besar dan berwarna perak gelap atau terang tergantung pada lingkungan tempat hidupnya. Jika dilihat secara melintang, ikan ini tampak gepeng dan raut kepalanya terlihat jelas cekung. Sirip tunggal di punggung dan perutnya berduri sementara sirip pasang di dada dan panggulnya tidak. Sirip ekornya pendek dan bulat. Berat maksimal ikan ini sekitar 60 kg (130 pon), sementara panjang tubuh rata-ratanya sekitar 06–12 m (20–39 ft).Tubuh mereka bisa mencapai panjang 18 m (59 ft) meski jumlah ikan yang ditangkap di ukuran tersebut bisa dibilang jarang.<br><br>
        Ikan Kakap putih merupakan ikan demersal (menghuni dasar sungai/laut) dimana ikan ini bisa ditemukan di perairan pesisir, muara sungai, laguna dan sungai, baik di perairan bersih maupun keruh, biasanya dalam rentang suhu 26−30 °C. Ikan ini tidak melakukan migrasi besar-besaran dalam suatu atau antar sistem sungai, yang kiranya mempengaruhi terbentuknya perbedaan genetis antara ikan ini di masing-masing sungai di Australia Utara.<br>
      </p>
    </div>
  </div>

</div>

<div class="container mt-5">
  <div class="card border-0 shadow">
    <div class="card-body">
      <div class="text-center mb-4 pt-4 pb-4">
        <h4 class="mb-4">Lokasi</h4>
        <img src="images/lokasi.png" class="img-fluid text-center rounded" alt="" style="width: 150px;">
      </div>


      <p>
        Budidaya kakap putih biasa berlokasi di tambak yang bebas dari banjir dan pencemaran limbah entah itu dari sampah rumah tangga hingga limbah pabrik yang dapat mengganggu pertumbuhan kakap putih. Ikan kakap putih sangat cocok berada di tambak yang memiliki dasar tanah liat.
      </p>
    </div>
  </div>

</div>

<div class="container mt-5">
  <div class="card border-0 shadow">
    <div class="card-body">
      <div class="text-center mb-4 pt-4 pb-4">
        <h4 class="mb-4">Benih</h4>
        <img src="images/benih.jpg" class="img-fluid text-center rounded shadow" alt="" style="width: 300px;">
      </div>


      <p>
        Pemilihan benih ikan kakap putih yang unggul sebelum ditebarkan dapat dilihat dari fisik dan memiliki respon yang cepat. Dari ciri-ciri di atas dapat menunjukkan bahwa benih ikan kakap dalam keadaan yang sehat.
      </p>
    </div>
  </div>

</div>

<div class="container mt-5">
  <div class="card border-0 shadow">
    <div class="card-body">
      <div class="text-center mb-4 pt-4 pb-4">
        <h4 class="mb-4">Pemeliharaan</h4>
        <img src="images/pemeliharaan.jpg" class="img-fluid text-center rounded shadow" alt="" style="width: 300px;">
      </div>


      <p>
        Pemeliharaan kakap putih harus selalu dipantau sesuai dengan kebutuhan. Pastikan air dalam keadaan segar dan ganti air 10 % dari total volume tambak setiap hari. Jangan sampai air pada tambak terlalu keruh atau sebaliknya, hal ini akan berpengaruh pada nafsu makan kakak putih.
      </p>
    </div>
  </div>

</div>

<div class="container mt-5">
  <div class="card border-0 shadow">
    <div class="card-body">
      <div class="text-center mb-4 pt-4 pb-4">
        <h4 class="mb-4">Pakan</h4>
        <img src="images/pakan.webp" class="img-fluid text-center rounded shadow" alt="" style="width: 300px;">
      </div>


      <p>
        Pemberian pakan kakap putih juga harus diperhatikan berdasarkan umur, memberikan pakan cukup pada satu titik tertentu dan diberikan sedikit demi sedikit. Memberikan pakan kakap putih harus teratur dan sehari 2 kali yaitu pagi dan sore.
      </p>
    </div>
  </div>

</div>


<script>
  var map = L.map('map').setView([-7.161367, 113.482498], 5);
  L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
  }).addTo(map);

  <?php
  $index = 1;
  foreach ($kordinat as $k) {
    echo "let marker{$index} = L.marker([{$k['lat']}, {$k['longi']}]).addTo(map);";
    $index++;
  }
  ?>
</script>

<?php require 'footer.php'; ?>