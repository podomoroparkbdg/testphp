<?php

require_once("Mobile_Detect.php");

$detect = new Mobile_Detect();

// Any mobile device (phones or tablets)
if ($detect->isMobile()){
header('Location: /mobile');
exit;
}
?>

<!DOCTYPE html>
<html lang="en">
  <title>RSVP Podomoro Park</title>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
<!--CCS RANDY-->

<link rel="stylesheet" href="style.css"



  </head>
  <body>
    <div class="cover" style="background-image:url(./background-rsvp.jpg);
    background-size: cover;
    height: 100vh;">
  

  <!--coba-->
    <div class="login">

           <h2>PLEASE FILL THE BLANK FOR RSVP
             
      </h2>
      <div class="alert alert-warning d-none alertrandy" role="alert">
        <strong>Terimakasih</strong> sudah melakukan reservasi.
      </div>
<form name="rsvp">
      <div class="box-login">
        <i class="fas fa-envelope-open-text"></i>
        <input type="text" name="nama" placeholder="Nama :">
      </div>

      <div class="box-login">
        <i class="fas fa-lock"></i>
        <input type="number" name="nomor" placeholder="Nomor Telpon :">
      </div>

      <div class="box-login">
        <i class="fas fa-lock"></i>
        <input type="number" name="tamu" placeholder="Jumlah Orang :">
      </div>

   

      <button type="submit" name="submit" class="btn-login btn-kirim">RSVP</button>
      <div class="bottom">
        <div class="btn-loading text-warning d-none" style="width: 3rem; height: 3rem;" role="status">
          <span class="visually-hidden">Loading...</span>
        </div>
      </form>
      </div>
  </div>
<!--akhir coba-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>
      const scriptURL = 'https://script.google.com/macros/s/AKfycbzXWPi01OMN9PYa10qLGNVd_-I27hK8Y5ayOP2s560OZmi2nY26gEsUu87pJ-u1whq2/exec'
      const form = document.forms['rsvp']
      const btnKirim = document.querySelector('.btn-kirim');
      const btnLoading = document.querySelector('.btn-loading');
      const alertRandy = document.querySelector('.alertrandy');
    
      form.addEventListener('submit', e => {
        e.preventDefault()

        btnLoading.classList.toggle('d-none');
        btnKirim.classList.toggle('d-none');


        fetch(scriptURL, { method: 'POST', body: new FormData(form)})
          .then(response => {
            btnLoading.classList.toggle('d-none');
        btnKirim.classList.toggle('d-none');
            alertRandy.classList.toggle('d-none');
            form.reset();
            console.log('Success!', response)
          })
          .catch(error => console.error('Error!', error.message))
      })
    </script>
  </body>
</html>
