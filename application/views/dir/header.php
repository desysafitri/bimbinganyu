<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">
    <link rel="stylesheet" href="https://fonts.cdnfonts.com/css/public-sans">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            setTimeout(function() {
                $(".preloader").fadeOut();
            }, 1000);
        });
    </script>
    <title><?= $title; ?></title>
    <link rel="shortcut icon" href="<?= base_url('favicon.png'); ?>" />
    <meta name="google-site-verification" content="vVRtlhFCo9U9skBryeUyeLYLtbF-EMH0cur4TIkOT5I" />
</head>

<body>
    <div class="preloader">
        <div class="loading">
            <img class="mb-3" src="<?= base_url('images/logo/logo1-name.png'); ?>" width="250" alt="">
        </div>
    </div>
    

    <nav class="navbar navbar-expand-lg navbar-light bg-white nav-shadow" data-toggle="affix">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url(); ?>">
                <img src="<?= base_url('images/logo/logo1.png'); ?>" width="40" alt="Logo">
            </a>
            <a class="navbar-brand bold text-uppercase" href="<?= base_url(); ?>">
                AL - HIKAM
            </a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navcica" aria-controls="navcica" aria-expanded="false" aria-label="Toggle navigation">
                <div class="hamburger" onclick="btnbar(this)">
                    <div class="bar1"></div>
                    <div class="bar2"></div>
                    <div class="bar3"></div>
                </div>
            </button>
            <div class="collapse navbar-collapse" id="navcica">
                <div class="d-lg-none d-md-block">
                    <div class="pt-2"></div>
                </div>

                <ul class="navbar-nav mr-auto">
                    <li class="nav-item nav-h">
                        <a class="nav-link" href="<?= base_url(''); ?>">Home</a>
                    </li>
                    <li class="nav-item nav-h">
                        <a class="nav-link" href="<?= base_url(''); ?>">Tentang Kami</a>
                    </li>
                    <li class="nav-item nav-h">
                        <a class="nav-link" href="<?= base_url(''); ?>">Program</a>
                    </li>
                    <li class="nav-item nav-h">
                        <a class="nav-link" href="<?= base_url(''); ?>">Hafalan</a>
                    </li>
                    <li class="nav-item nav-h">
                        <a class="nav-link" href="<?= base_url(''); ?>">Testimonial</a>
                    </li>
                    <li class="nav-item nav-h">
                        <a class="nav-link" href="<?= base_url(''); ?>">Struktur Organisasi</a>
                    </li>
                    <li class="nav-item nav-h">
                        <a class="nav-link" href="<?= base_url(''); ?>">Kontak</a>
                    </li>
                </ul>
                <?php
                if (!empty($this->session->userdata('siswalog'))) {
                    echo '<a href="' . base_url('siswa/portal') . '" class="text-muted no-deco">Portal Siswa</a>';
                } elseif (!empty($this->session->userdata('gurulog'))) {
                    echo '<a href="' . base_url('guru/dashboard') . '" class="text-muted no-deco">Dashboard</a>';
                } else { ?>
                    <!-- d-lg-none d-md-block (hidden desktop) -->
                    <ul class="navbar-nav ml-md-auto pt-2 d-lg-none d-md-block">
                        <div class="form-row">
                            <div class="col">
                                <li class="nav-item">
                                    <a class="btn btn-outline-primary btn-block" href="<?= base_url('guru/login'); ?>">
                                        Login Guru
                                    </a>
                                </li>
                            </div>
                            <div class="col">
                                <li class="nav-item">
                                    <a class="btn btn-primary btn-block" href="<?= base_url('siswa/login'); ?>">
                                        Login Siswa
                                    </a>
                                </li>
                            </div>
                        </div>
                        <div class="pt-2"></div>
                    </ul>
                    <!-- d-none d-lg-block (hidden mobile) -->
                    <div class="d-none d-lg-block">
                        <ul class="navbar-nav ml-md-auto">
                            <li class="nav-item">
                                <a class="btn btn-outline-primary mr-md-2" href="<?= base_url('guru/login'); ?>">
                                    Login Guru
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="btn btn-primary" href="<?= base_url('siswa/login'); ?>">
                                    Login Siswa
                                </a>
                            </li>
                        </ul>
                    </div>
                <?php } ?>
            </div>
        </div>
    </nav>