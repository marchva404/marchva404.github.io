<div class="bodysite">
   <body>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <h2>Cara menginstall Driver Printer MP C2003</h2>

   <h3>Tipe printer yang digunakan:</h3>
      <ul>
         <li>Jenis printer       : MP C2003</li>
         <li>Warm up time        : 19 detik</li>
         <li>Print/copy pertama  : full color: 7,6 detik ; B/W: 5,4 detik </li>
         <li>kecepatan kontinu   : full color: 7,6 detik ; B/W: 20PPM</li>
         <li>Memori: standard    : 1,5 GB MAX</li>
         <li>dimensi: (WxDxH)    : 587x685x788m</li>
      </ul>

<h3>Cara menginstall driver:</h3>
   <ol> 
    <li>Langkah pertama bukalah terminal yang ada di linux ubuntu</li>
    <li>Ketik command <code>sudo apt install mc</code></li>
    <img class="image" src="/image/img1.png">
    <li>Setelah itu ketik command <code>sudo apt search ricoh</code></li>
    <img class="image" src="/image/img2.png">
    <li>Lalu ketik command <code>sudo apt install printer-driver-sag-gdi</code></li>
    <img class="image" src="/image/img3.png">
    <li>Setelah itu ketik command <code>sudo apt install cups</code></li>
    <img class="image" src="/image/img4.png">
    <li>Lalu ketik <code>sudo systemctl status cups</code></li>
    <img class="image" src="/image/img5.png">
    <li>Jika hasil command sudah menandakan active/running maka lantut ketahap berikutnya</li> 
    <li>Tahap berikutnya buka web di search engine kalian dengan keyword “localhost:631”</li>
    <img class="image" src="/image/img6.png">
    <li>Lalu klik pada opsi printers yaitu “add printer”</li>
    <li>Jika sudah cari nama printer yang akan kalian sambungkan di area "discovered network printer"</li>
    <img class="image" src="/image/img7.png">
    <li>Pilih model printer yang akan kalian samungkan ke komputer anda</li>
    <img class="image" src="/image/img8.png">
    <li>Lalu klik add printer</li>
    <img class="image" src="/image/img9.png">
    <li>Printer siap digunakan</li>
   </ol>

   </body>

   <!---ini style nya--->

   <style>
   h2{
      text-align: center;
   }   

   body{
      font-family: Georgia, 'Times New Roman', Times, serif;
      background: linear-gradient(to left, #33ccff 0%, #ff99cc 100%)
   }
   
  .image{
   max-width: 85%;
   height: auto;
   }
   </style>

