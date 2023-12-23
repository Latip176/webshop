<?php
$data = file_get_contents('src/admin/database/data_cart.json');
$data = json_decode($data, true);
$no = 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Toko HakikiXD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/style.css">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    
    <meta name="description" content="Merupakan sebuah panel untuk spam result scam dengan metode SMTP, dengan sangat cepat. Banyak fitur yang terdapat pada panel. Ayo Beli sekarang!! Kalian bisa mendapatkannya dengan harga terjangkau.">
    <script src="https://kit.fontawesome.com/23b0acc186.js" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-light fixed-top">
      <div class="container-fluid">
          <a class="navbar-brand" href="index.html" style="font-weight: bold; color: #025464;">
              HakikiXD
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link active" href="#list-card">List Script</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link active" href="#info">Fitur Script</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link active" href="#Contact">Hubungi Admin</a>
                  </li>
              </ul>
              <ul class="navbar-nav mb-2 mb-lg-0">
                  <li class="nav-item">
                      <a class="nav-link active" href="#Cart">
                          <span class="text-dark"><i class="fas fa-shopping-cart"></i> Keranjang (<span id="jumlah-keranjang"></span>)</span>
                      </a>
                  </li>
              </ul>
          </div>
      </div>
    </nav>
    
    <div class="payment">
      <div class="pay">
        <div style="width: 100%">
          <p>Pilih Payment</p>
          <select style="width: 80%; padding: 10px; font-size: 16px; border: 1px solid #ddd; border-radius: 5px;" id="metodePayment">
            <option value="dana">Dana</option>
            <option value="ovo">Ovo</option>
            <option value="qris">Qris</option>
          </select> <br><br>
          <span>Total Rp. <span id="total"></span></span> <br>
          <input type="submit" class="cancel" value="cancel">
          <input type="submit" class="lanjut" value="kirim">
        </div>
      </div>
    </div>
    
    <div class="content container-fluid text-center">
      <div class="data">
        <span>Get your Panel</span>
        <p class="text-muted">Merupakan sebuah panel untuk spam result scam dengan metode SMTP, dengan sangat cepat. Banyak fitur yang terdapat pada panel. Ayo Beli sekarang!! Kalian bisa mendapatkannya dengan harga terjangkau.</p>
        <a href="#list-card">Get Started</a>
      </div>
    </div>
    
    <div class="list-card" id="list-card">
      <div class="all-script">
        <h2 class="text-center">Serba Serbi Jasteb</h2>
        <?php foreach($data['data'] as $dat): ?>
          <div class="card">
            <?php $no++ ?>
            <div class="label"><span class="head">PRODUK TERLARIS</span></div>
            <span align="center" class="title"><?= $dat['nama'] ?></span>
            <p class="text-muted">Adalah sebuah Script untuk spam result Scam</p>
            <div class="price">
              <p><del class="text-muted">Rp. <?= $dat['hargaDiskon'] ?></del> <span>DISKON <?= $dat['diskon'] ?>%</span></p>
              <p id="harga-<?=$no?>" data-info='<?= $dat["harga"] ?>'>Rp. <?= $dat['harga'] ?></p>
            </div>
            <p class="cart cart-<?= $no ?>" data-info="<?= $dat['nama'] ?>" id="<?= $no ?>"><i class="fas fa-cart-plus"></i> Tambah ke Cart</p>
          </div>
        <?php endforeach ?>
      </div>
    </div>
    
    <div class="close" id="info">
      <div class="fitur text-center" style="padding-top: 50px;">
        <h2 style="font-weight: bold; padding-bottom: 30px;">Fitur Script Jasteb</h2>
        <p class="text-light">√ Atur Jumlah Spam</p>
        <p class="text-light">√ Cek Status Spam</p>
        <p class="text-light">√ Target Email Spam</p>
        <p class="text-light">- Panel jasteb dengan menggunakan SMTP super cepat sebagai Spam Scam. -</p>
      </div>
      <div class="galeri text-center" style="padding-top: 50px;">
        <h2 style="font-weight: bold; padding-bottom: 30px;">Galeri</h2>
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                    <img src="/assets/img/1.jpg" class="d-block" alt="">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="/assets/img/2.jpg" class="d-block" alt="">
                </div>
                <div class="carousel-item">
                    <img src="/assets/img/3.jpg" class="d-block" alt="">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true" style="background-color: #3498db;"></span>
                <span class="visually-hidden" style="color: #3498db;">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true" style="background-color: #3498db;"></span>
                <span class="visually-hidden" style="color: #3498db;">Next</span>
            </button>
        </div>
      </div>
    </div>
    
    <footer>
      <p>&copy; Copyright 2023 - 2024 | Latip176 & HakikiXD</p>
    </footer>
    
    <div class="checkout fixed-bottom bg-dark" style="visibility: hidden;">
      <div class="data">
        <p>You have <span id="carts-count"></span> Carts. <a id="checkout" href="#">Checkout Now <i class="fas fa-share"></i></a></p>
      </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    
    <script type="text/javascript">
      let dataTotal;
      function promptName() {
        const storedName = localStorage.getItem("nama");
        if (!storedName) {
          swal("Masukkan nama Anda:", { content: "input" })
            .then((value) => {
              localStorage.setItem("nama", value);
            });
        }
      }
      
      function addToCart(cart) {
        const idItem = cart.getAttribute('id');
        const namaItem = cart.getAttribute('data-info');
        cart.addEventListener("click", () => {
          swal("Ingin menambahkan ke keranjang?", {
            buttons: {
              cancel: "Cancel",
              catch: {
                text: "Ya",
                value: "benar"
              }
            },
          })
          .then((choice) => {
            if (choice === "benar") {
              const harga = document.querySelector(`#harga-${idItem}`).getAttribute("data-info");
              dataTotal += Number(harga);
              localStorage.setItem('total', dataTotal);
              localStorage.setItem(`data-${idItem}`, namaItem);
              swal({
                title: "Berhasil!",
                text: "Berhasil ditambahkan ke dalam Keranjang!",
                icon: "success",
                button: "OK",
              });
            } else {
              swal({ title: "Dibatalkan", icon: "error" });
            }
          })
        });
      }
      
      function updateCartCount() {
        const count = document.querySelector("#carts-count");
        const chk = document.querySelector("#checkout");
        
        chk.addEventListener("click", () => {
          const payment = document.querySelector(".payment");
          const totalD = document.querySelector("#total");
          const metodePayment = document.querySelector("#metodePayment");
          totalD.innerHTML = localStorage.getItem('total');;
          payment.style.visibility = "visible";
          
          const selectProduk = [];
          for(let i = 1; i < localStorage.length-1; i++) {
            selectProduk.push(localStorage.getItem(`data-${i}`));
          }
          
          document.querySelector(".cancel").addEventListener("click", () => {
            payment.style.visibility = "hidden";
          })
          document.querySelector(".lanjut").addEventListener("click", () => {
            window.location.href = `https://wa.me/6285946352369?text=Assalamualaikum%20Bang%20Mau%20Checkout%20Pesanan%0AProduk: ${selectProduk.join(", ")}%0AHarga: ${dataTotal}%0APembayaran: ${metodePayment.options[metodePayment.selectedIndex].value}`;
            localStorage.clear();
          });
        })
        let cartCount = Math.max(localStorage.length - 2, 0);
        count.innerHTML = cartCount;
        document.querySelector("#jumlah-keranjang").innerHTML = cartCount;
      }
      
      function initCarts() {
        const carts = document.querySelectorAll(".cart");
        carts.forEach(cart => {
          addToCart(cart);
        });
      }
      
      setInterval(() => {
        if(localStorage.getItem('total') == null) {
          localStorage.setItem('total', 0);
        }
        dataTotal = Number(localStorage.getItem('total'));
        
        updateCartCount();
        
        if(localStorage.length > 2) {
          const checkout = document.querySelector(".checkout");
          checkout.style.visibility = "visible";
        }
        
      }, 1000);
      
      promptName();
      initCarts();
    </script>
</body>
</html>
