<!DOCTYPE html>
<html>
<head>
  <title>Jasa Top Up Wise</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">  
  <script>
    function toggleFields() {
      var service = document.getElementById("service").value;
      var jumlahField = document.getElementById("jumlah-field");
      var saldoField = document.getElementById("saldo-field");
      var regionField = document.getElementById("region-field");
      var emailHastagField = document.getElementById("email-hastag-field");
      var emailPaypalField = document.getElementById("email-paypal-field"); 

      jumlahField.style.display = "none";
      saldoField.style.display = "none";
      regionField.style.display = "none";
      emailHastagField.style.display = "none";
      emailPaypalField.style.display = "none";

      if (service == "beli_akun") {
        jumlahField.style.display = "block";
        saldoField.style.display = "block";
        regionField.style.display = "block";
      } else if (service == "topup_saldo") {
        saldoField.style.display = "block";
        emailHastagField.style.display = "block";
      } else if (service == "beli_vcc") {
        jumlahField.style.display = "block";
        saldoField.style.display = "block";
        regionField.style.display = "block";
      } else if (service == "topup_paypal") { 
        saldoField.style.display = "block";
        emailPaypalField.style.display = "block"; 
      }
    }
  </script>
</head>
<body>

  <header>
    <div class="container">
      <h1><a href="#">Top Up wise</a></h1>
      <nav>
        <ul>
          <li><a href="#">Layanan</a></li>
          <li><a href="#">FAQ</a></li>
          <li><a href="#">Kontak</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <main>
    <section class="hero">
      <div class="container">
        <h2>Jasa Top Up wise Mudah, Cepat, dan Terpercaya</h2>
        <p>Dapatkan layanan convert dan top up berbagai produk digital dengan harga terbaik dan proses instan.</p>
        <button onclick="window.location.href='#form'">Mulai Sekarang</button>
      </div>
    </section>

    <section class="services">
      <div class="container">
        <h2>Layanan Kami</h2>
        <div class="service-grid">
          <div class="service">
            <img src="images/icon1.png" alt="Icon 1">
            <h3>Top Up Saldo Wise</h3>
            <p>Top up saldo Wise Anda dengan mudah dan cepat.</p>
          </div>
          <div class="service">
            <img src="images/icon2.png" alt="Icon 2">
            <h3>Beli Akun Wise</h3>
            <p>Dapatkan akun Wise verified dengan harga terjangkau.</p>
          </div>
          <div class="service">
            <img src="images/icon3.png" alt="Icon 3">
            <h3>Beli VCC Wise</h3>
            <p>Dapatkan VCC Wise untuk transaksi online Anda.</p>
          </div>
          <div class="service"> 
            <img src="images/icon4.png" alt="Icon 4"> 
            <h3>Top Up Saldo PayPal</h3> 
            <p>Top up saldo PayPal Anda dengan mudah dan aman.</p> 
          </div> 
        </div>
      </div>
    </section>

    <section class="pricing">
      <div class="container">
        <h2>Daftar Harga</h2>
        <div class="pricing-table">
          <table>
            <thead>
              <tr>
                <th>Layanan</th>
                <th>Harga</th>
                <th>Keterangan</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Top Up Saldo Wise</td>
                <td>Rp 10.000 / $1</td>
                <td>Minimal $10</td>
              </tr>
              <tr>
                <td>Beli Akun Wise</td>
                <td>Rp 500.000</td>
                <td>Akun verified</td>
              </tr>
              <tr>
                <td>Beli VCC Wise</td>
                <td>Rp 200.000</td>
                <td>Region US/UK/EU</td>
              </tr>
              <tr>
                <td>Top Up Saldo PayPal</td>
                <td>Rp 12.000 / $1</td>
                <td>Minimal $5</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </section>

    <section class="form" id="form">
      <div class="container">
        <h2>Formulir Convert/Top Up</h2>
        <form action="proses.php" method="post"> 
          <div>
            <label for="service">Pilih Layanan:</label>
            <select id="service" name="service" onchange="toggleFields()">
              <option value="topup_saldo">Top Up Saldo Wise</option>
              <option value="beli_akun">Beli Akun Wise</option>
              <option value="beli_vcc">Beli VCC Wise</option>
              <option value="topup_paypal">Top Up Saldo PayPal</option> 
            </select>
          </div>
          <div id="jumlah-field" style="display: none;">
            <label for="jumlah">Jumlah:</label>
            <input type="number" id="jumlah" name="jumlah" min="0">
          </div>
          <div id="saldo-field" style="display: none;">
            <label for="saldo">Isi Saldo:</label>
            <input type="number" id="saldo" name="saldo" min="0">
          </div>
          <div id="region-field" style="display: none;"> 
            <label for="region">Region:</label>
            <select id="region" name="region">
              <option value="US">US</option>
              <option value="UK">UK</option>
              <option value="EU">EU</option>
            </select>
          </div>
          <div id="email-hastag-field" style="display: none;">
            <label for="email_hastag">Email/Hastag:</label>
            <input type="text" id="email_hastag" name="email_hastag">
          </div>
          <div id="email-paypal-field" style="display: none;"> 
            <label for="email_paypal">Email PayPal:</label> 
            <input type="email" id="email_paypal" name="email_paypal"> 
          </div>
          <button type="submit">Kirim</button>
        </form>
      </div>
    </section>

    <section class="whatsapp-button">
      <div class="container">
        <a href="https://wa.me/YOUR_WHATSAPP_NUMBER" target="_blank"> 
          <button>Hubungi Kami via WhatsApp</button>
        </a>
      </div>
    </section>

  </main>

  <footer>
    <div class="container">
      <p>&copy; 2024 Jasa Top Up Wise</p>
    </div>
  </footer>

  <script>
    // Anti-inspect element (klik kanan)
    document.addEventListener('contextmenu', event => event.preventDefault());

    // Anti-inspect element (shortcut keyboard)
    document.onkeydown = function(e) {
      if(event.keyCode == 123) { // F12
        return false;
      }
      if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)){ // Ctrl+Shift+I
        return false;
      }
      if(e.ctrlKey && e.shiftKey && e.keyCode == 'C'.charCodeAt(0)){ // Ctrl+Shift+C
        return false;
      }
      if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)){ // Ctrl+Shift+J
        return false;
      }
      if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)){ // Ctrl+U
        return false;
      }
    }
  </script>
</body>
</html>