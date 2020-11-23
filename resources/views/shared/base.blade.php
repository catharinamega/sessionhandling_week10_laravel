<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('judul') - Week 09</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

    <div class="jumbotron text-center"
        style="margin-bottom:0; background-image: linear-gradient( 135deg, #FFD3A5 10%, #FD6585 100%);">

        <h1>Web Development @uc_sisteminformasi</h1>
        <p>Ubah ukuran window dari browser Anda untuk melihat tampilan yang responsif!</p>


    </div>

    @yield('navigasi')

    <div class="container" style="margin-top:30px">
        @yield('isi_konten')
    </div>

    <div class="jumbotron text-center" style="margin-bottom:0; background: #948E99;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #2E1437, #948E99);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #2E1437, #948E99); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
">

        <p style="color:white;">&copy;2020. Web Development</p>
    </div>

    <!--styles-->
    <style>
        .fakeimg {
            height: 200px;
            background: #aaa;
        }
    </style>
    <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.min.css">
    <link rel='stylesheet' href='../../assets/css/fontawesome.min.css'>
    <link rel="stylesheet" href="../../assets/css/style.css">

    <!--scripts-->
    <script src="../../assets/js/jquery3.5.1.js"></script>
    <script src="../../assets/popper/js/popper.min.js"></script>
    <script src="../../assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- <script>
        $(function () {
            $('[data-toggle="tooltip"]').tooltip();
        })
    </script> -->
    @yield('additional_script')
</body>

</html>
