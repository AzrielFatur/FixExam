<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/css?family=Heebo:100,300,400,700,800|Poppins:200,300,400,700" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="lightbox.css">
  <link rel="stylesheet" href="responsive.css">
  <link rel="shortcut icon" href="image/fav_icon.png">
  <title>PT Anugrah Insan Madani</title>
</head>
<body>
<div class="header">
    <a href="index.php"><img src="image/logo.png" alt="PT Anugrah Insan Madani"></a>
    <nav class="clearfix">
      <a href="#" id="pull">&nbsp;</a>
      <div class="geser">
    <ul class="clearfix">
      <li><a href="index.php">Home</a></li>
      <li><a href="myabout">About</a></li>
    </ul>
  </div>
    </nav>
  </div>

  <!-- PAGE ONE --> 
    <div class="container-one">
        <div class="row page-one">
            <div class="col-s-8 one-left">
              <h3>Jasa pemasangan installasi listrik <br> untuk</h3>
              <h2>PERUSAHAAN ATAU PERUMAHAN</h2>
            </div>
          
            <div class="col-s-4 one-right">
              <h3>Hubungi Kami</h3>
              <form name="form-email" action="mailto:azriel.fatur1@gmail.com" enctype="text/plain" method="post">
                <input type="text" name="nama" placeholder="Nama" required oninvalid="this.setCustomValidity('Data tidak boleh kosong!')" oninput="setCustomValidity('')"> <br>
                <input type="text" name="email" placeholder="Email" required oninvalid="this.setCustomValidity('Data tidak boleh kosong!')" oninput="setCustomValidity('')"><br>
                <input type="text" name="telp" placeholder="Telp" required oninvalid="this.setCustomValidity('Data tidak boleh kosong!')" oninput="setCustomValidity('')"><br>
                <input type="text" name="pesan" placeholder="Pesan" required oninvalid="this.setCustomValidity('Data tidak boleh kosong!')" oninput="setCustomValidity('')">
                <button type="submit" class="hubungikami">Submit</button>
              </form>
            </div>
        </div>
      </div>


  <!-- PAGE TWO -->
    <div class="container-two">
        <div class="row page-two">
            <div class="col-s-6 two-left">
            @foreach ($about as $p)
                <img src="image/logo.png" alt="PT Anugrah Insan Madani">
                <p>{{ $p->text }}</p>
                <a href="myabout"><button class="hubungikami">Selengkapnya</button></a>
            @endforeach
            </div>

            <div class="col-s-6 two-right">
              <img src="image/img-about.png" alt="PT Anugrah Insan Madani">
            </div>
        </div>
    </div>

  
    <div class="container-three">
        <div class="row page-three">
            <h1>Apa yang kami kerjakan?</h1>
            <hr>
              @foreach ($service as $p)
                <div class="col-s-6 three-left">
                    <img src="{{$p->gambar}}" alt="">
                    
                    <h3>{{ $p->judul }}</h3>

                    <p>{{ $p->keterangan }}</p>

                    <button class="hubungikami">Read More</button>
                  </div>
                  @endforeach
        </div>
    </div>

    <div class="container-four">
      <div class="row page-four">
        <h1>Our Gallery</h1>
        <hr>
        @foreach ($gallery as $p)
        <div class="col-s-4 four-left">
        <a href="{{$p->gallery}}" data-lightbox="image-2"><img src="{{$p->gallery}}"></a>
        </div>


        @endforeach
      </div>
    </div>

    <!-- CONTACT -->
    <div class="container-contact">
      <div class="row contact">
        <h1>Our Contact</h1>
        
        <hr>
        <div class="col-s-6 concontact">
        @foreach ($datapt as $p)
          <img src="image/location.png">
          <p>{{ $p->location }}</p> <br>
          <img src="image/phone.png">
          <p>{{ $p->telp }}</p>  <br>
          <img src="image/fax.png">
          <p>{{ $p->fax }}</p> <br>
          <img src="image/mail.png">
          <p>{{ $p->mail }}</p>
        @endforeach
        </div>

        <div class="col-s-6">
          <div class="responsive-iframe">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4750.438399642624!2d107.04688992755531!3d-6.278428127551244!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698fbef2af3f83%3A0x3d665e662e32f06f!2sGrand+Wisata+Bekasi!5e0!3m2!1sid!2sid!4v1557132365050!5m2!1sid!2sid" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        </div>
      </div>
    </div>
    <!-- FOOTER -->
    <div class="container footer">
      <div class="page-two">
        <footer>Copyright PT Anugrah Insan Madani</footer>
      </div>
    </div>

</body>
    <script src="jquery-3.4.1.min.js" ></script>
    <script src="lightbox.js" ></script>
    <script>
    lightbox.option({
      'resizeDuration': 200,
      'wrapAround': true
    })
    $(function() {
			var pull 		= $('#pull'); // Variabel tombol navigasi (akan muncul hanya pada perangkat mobile)
				menu 		= $('nav ul'); // Variabel menu

			$(pull).on('click', function(e) {
				e.preventDefault();
				menu.slideToggle();
			});
			$(window).resize(function(){
        		var w = $(window).width();
        		if(w > 600 && menu.is(':hidden')) {
        			menu.removeAttr('style');
        		}
    		});
		});
</script>
</html>