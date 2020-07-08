<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- Font Awesome Icons CSS-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous">
    <!-- Animate css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="<?= base_url(); ?>/public/owl-carousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/public/owl-carousel/dist/assets/owl.theme.default.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>/public/css/style.css">
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?= base_url(); ?>/public/img/corp-logo/favicon-primary.ico">
    <title><?= !$title ? '' : $title; ?>Politeknik Elektronika Negeri Surabaya</title>
    <!-- Hotjar Tracking Code for pens.yosyafat.my.id -->
    <script>
        (function(h, o, t, j, a, r) {
            h.hj = h.hj || function() {
                (h.hj.q = h.hj.q || []).push(arguments)
            };
            h._hjSettings = {
                hjid: 1892714,
                hjsv: 6
            };
            a = o.getElementsByTagName('head')[0];
            r = o.createElement('script');
            r.async = 1;
            r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
            a.appendChild(r);
        })(window, document, 'https://static.hotjar.com/c/hotjar-', '.js?sv=');
    </script>
</head>

<body>
    <?= $this->include('partials/_navbar'); ?>


    <?= $this->renderSection('content'); ?>

    <!-- FOOTER -->
    <footer class="footer pt-5 pb-5" id="footer">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="media">
                        <img src="<?= base_url(); ?>/public/img/corp-logo/primary-logo-white.svg" height="150" class="align-self-center mr-3" alt="">
                        <div class="media-body">
                            <p class="text-white"><span>Politeknik Elektronika Negeri Surabaya</span></p>
                            <p>Jalan Raya ITS, Kampus PENS</p>
                            <p>Sukolilo Surabaya 60111</p>
                            <p><a href="" class="text-decoration-none">humas@pens.ac.id</a></p>
                            <p><a href="" class="text-decoration-none">info@pens.ac.id</a></p>
                            <p><i class="fas fa-phone-alt mr-2"></i>+62 31 594 7280</p>
                            <p><i class="fas fa-fax mr-2"></i>+62 31 594 6114</p>
                            <p><i class="fab fa-whatsapp mr-2"></i>+62 811 3330 5005</p>
                        </div>
                    </div>
                </div>
                <div class="col text-right">
                    <h5 class="heading text-white">#StayConnected</h5>
                    <div class="stayconnected">
                        <a href="" class="btn text-white"><i class="fab fa-youtube"></i></a>
                        <a href="" class="btn text-white"><i class="fab fa-twitter"></i></a>
                        <a href="" class="btn text-white"><i class="fab fa-facebook-square"></i></a>
                        <a href="" class="btn text-white"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <!-- Owl Carousel JS -->
    <script src="<?= base_url(); ?>/public/owl-carousel/dist/owl.carousel.min.js"></script>
    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <script>
        feather.replace()
    </script>
    <!-- Custom script -->
    <script src="<?= base_url(); ?>/public/js/script.js"></script>
</body>

</html>