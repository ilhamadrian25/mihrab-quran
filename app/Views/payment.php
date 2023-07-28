<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Halaman Pembayaran</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="SB-Mid-client-aQj_GW5m4hahONyA"></script>
</head>
<body class="bg-light">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card sticky-top border-start-0 border-end-0 border-top-0">
          <div class="card-body">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
            </svg>
            <a href="<?= base_url('campaign') ?>" class="btn btn-primary">Kembali</a>
            <?php if(session()->get('snap_token')) : ?>
              <button id="payButton" class="btn btn-warning">Belum dibayar!!</button>
            <?php endif ?>
          </div>
        </div>
        <div class="card border-start-0 border-end-0">
          <div class="card-body">
              <div class="text-center">
              <img src="<?= base_url('uploads/') . $data['image'] ?>" alt="" class="img-fluid" srcset="">
            </div>

            <div class="progress mt-5">
              <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-label="Animated striped example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
            </div>

            <div class="fw-bold mt-2 text-center">
              <h1><?= $data['title'] ?></h1>
            </div>
            <div class="">
              <div>
                <p id="text" style="height: 3em; overflow: hidden;">
                  <?= $data['description'] ?>
                  <a href="#" class="btn btn-primary" onclick="loadMore(); return false;" id="loadMoreBtn">Load More</a>
                </p>
              </div>
            </div>
            <form id="payment-form" method="POST" action="<?= base_url('pembayaran/process_payment') ?>">
              <div class="row">
                <div class="mb-2">
                  <h1 class="mt-5 text-center">Formulir Pembayaran</h1>
                </div>
                  <div class="mb-3">
                    <label for="donation-amount" class="form-label">Nominal Donasi</label>
                    <div class="input-group">
                      <input type="text" class="form-control" id="donation-amount" name="donation-amount" required>
                    </div>
                    <label for="nominal-buttons" class="form-label">Pilih Nominal</label>
                    <div class="container">
                      <div class="row gap-3">
                        <button type="button" class="btn btn-success col" onclick="setDonationAmount(50000)">50.000</button>
                        <button type="button" class="btn btn-success col" onclick="setDonationAmount(100000)">100.000</button>
                      <button type="button" class="btn btn-success col" onclick="setDonationAmount(500000)">500.000</button>
                      <button type="button" class="btn btn-success col" onclick="setDonationAmount(1000000)">1.000.000</button>
                      </div>
                    </div>
                  <div class="mb-3">
                    <label for="full-name" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" id="full-name" name="full-name" required>
                  </div>
                  <input type="text" class="form-control" id="id-program" name="id-program" value="<?= $data['id_program'] ?>" hidden>
                  <div class="mb-3">
                    <label for="phone-number" class="form-label">Nomor Telepon</label>
                    <input type="tel" class="form-control" id="phone-number" name="phone-number" required>
                  </div>
                  <div class="mb-3">
                    <label for="support-message" class="form-label">Dukungan atau Doa</label>
                    <textarea class="form-control" id="support-message" name="support-message" rows="3" placeholder="Opsional"></textarea>
                  </div>
                  <div class="text-center mb-5">
                    <button type="button" id="submit-button" class="btn btn-success">Bayar</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script>
    function setDonationAmount(amount) {
      const donationInput = document.getElementById('donation-amount');
      donationInput.value = addThousandSeparator(amount);
    }

    function addThousandSeparator(number) {
      return number.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
    }

    var rp = document.getElementById('donation-amount');
    rp.addEventListener('keyup', function(e)
    {
        rp.value = formatRupiah(this.value, 'Rp. ');
    });
    
    function formatRupiah(angka, prefix)
    {
        var number_string = angka.replace(/[^,\d]/g, '').toString(),
            split    = number_string.split(','),
            sisa     = split[0].length % 3,
            rupiah     = split[0].substr(0, sisa),
            ribuan     = split[0].substr(sisa).match(/\d{3}/gi);
            
        if (ribuan) {
            separator = sisa ? '.' : '';
            rupiah += separator + ribuan.join('.');
        }
        
        rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
        return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
    }



// setInterval(function() {
//     $.ajax({
//         url: '<?= base_url('session') ?>',
//         method: 'GET',
//         success: function(response) {
//             var snapToken = response.snap_token;
//             // Lakukan tindakan dengan snapToken di sini
//             console.log(snapToken);
//         },
//         error: function() {
//             // Tangani kesalahan jika ada
//             console.error('Gagal mengambil snap_token.');
//         }
//     });
// }, 10000); 

      $(document).ready(function() {
      $('#payButton').click(function() {
        snap.pay('<?= session()->get('snap_token') ?>', {
          onSuccess: function(result){
            console.log('success');
            console.log(result);
          },
          onPending: function(result){
            console.log('pending');
            console.log(result);
          },
          onError: function(result){
            console.log('error');
            console.log(result);
          },
          onClose: function(){
            console.log('customer closed the popup without finishing the payment');
          }
        });
      });
    });

    $(document).ready(function() {
    $('#submit-button').click(function(e) {
      e.preventDefault();
      var idProgram = $('#id-program').val();
      var donationAmount = $('#donation-amount').val();
      var fullName = $('#full-name').val();
      var phoneNumber = $('#phone-number').val();
      var supportMessage = $('#support-message').val();

      if ('<?= session()->get('snap_token') ?>' || response.snap_token) {
          snap.pay('<?= session()->get('snap_token') ?>', {
          onSuccess: function(result){
            console.log('success');
            console.log(result);
          },
          onPending: function(result){
            console.log('pending');
            console.log(result);
          },
          onError: function(result){
            console.log('error');
            console.log(result);
            window.reload();
          },
          onClose: function(){
            console.log('customer closed the popup without finishing the payment');
          }
        });
      } else {
        $.ajax({
          url: '<?= base_url('pembayaran/process_payment') ?>',
          type: 'POST',
          data: {
            'donation-amount': donationAmount,
            'full-name': fullName,
            'phone-number': phoneNumber,
            'support-message': supportMessage,
            'idProgram' : idProgram
          },
          beforeSend: function() {
            Swal.fire({
              title: 'Mohon tunggu',
              html: 'Sedang memproses pembayaran...',
              allowOutsideClick: false,
              onBeforeOpen: () => {
                Swal.showLoading();
              },
            }).then(()=> {
                  $.ajax({
                  url: '<?= base_url('session') ?>',
                  method: 'GET',
                  success: function(response) {
                      var snapToken = response.snap_token;
                      console.log(snapToken);
                  },
                  error: function() {
                      console.error('Gagal mengambil snap_token.');
                  }
              });
            });
          },
          success: function(response) {
  
            Swal.close();
            if (response.success) {
              snap.pay(response.token, {
                onSuccess: function(result) {
                  Swal.fire('Pembayaran Berhasil', 'Terima kasih atas donasi Anda!', 'success').then(function() {
                  }).then(() => {
                    location.reload()
                  });
                },
                onPending: function(result) {
                  Swal.fire('Pembayaran Diproses', 'Pembayaran sedang dalam proses.', 'info');
                          $.ajax({
                        url: '<?= base_url('remove-snap-token') ?>',
                        type: 'POST',
                        success: function(response) {
                            location.reload();
                        },
                        error: function() {
                            console.error('Terjadi kesalahan saat menghapus snap_token.');
                            location.reload();
                        }
                    });
                },
                onError: function(result) {
                  Swal.fire('Pembayaran Gagal', 'Terjadi kesalahan saat melakukan pembayaran.', 'error');
                  location.reload(); 
                }
              });
            } else {
              Swal.fire('Error', response.message, 'error');
            }
          },
          error: function() {
            Swal.close();
  
            Swal.fire('Error', 'Terjadi kesalahan saat mengirim data pembayaran.', 'error');
          }
        });
      }

    });
  });
  </script>
</body>
</html>