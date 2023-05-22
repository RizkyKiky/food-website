<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warung Putu Pandita | Termurah</title>

    <<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- jQUery-->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>



</head>

<body>
    <!-- header section starts      -->

    <header>

        <a href="#index.php" class="logo"><i class=" "></i>Putu Pandita</a>

        <nav class="navbar">
            <a class="active" href="#home">home</a>
            <a href="#dishes">recomended</a>
            <a href="#about">about</a>
            <a href="#menu">menu</a>
            <a href="#review">review</a>
            <a href="#order">pemesanan</a>
        </nav>

        <div class="icons">
            <i class="fas fa-bars" id="menu-bars"></i>
            <i class="fa-solid fa-user-plus" id="search-icon"></i>
            <i class="fa-solid fa-right-to-bracket"></i>
            <a href="#order" class="fas fa-shopping-cart"></a>
        </div>

    </header>

    <!-- header section ends-->

    <!-- Datatable -->
    <section>
        <div class="container">
            <h2 class="text-center mt-5">Riwayat</h2>
            <div id="example_wrapper" class="dataTables_wrapper">
                <div class="dataTables_length" id="example_length">
                    <table class="table table-striped">
                        <thead>
                        </thead>
                        <tbody>
                            <tr class="odd">
                                <th scope="col">#</th>
                                <th scope="col">Nama</th>
                                <th scope="col">No.Handphone</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Pesanan</th>
                                <th scope="col">Jumlah</th>
                                <th scope="col">Note</th>
                            </tr>
                            </thead>
                        <tbody>
                            <!-- <tr>
                    <th scope="row">1</th>
                    <td>Asep</td>
                    <td>0211212121211</td>
                    <td>GN</td>
                    <td>nasi omlete 1, jus apel 2</td>
                    <td>3</td>
                    <td>jus apelnya gausa pake apel</td>
                </tr> -->
                            <?php 
                $no = $this->uri->segment('3') + 1;
                foreach ($data as $val) {
                ?>
                            <tr>
                                <th scope="row"><?= $val->No?></th>
                                <td><?= $val->nama_lengkap ?></td>
                                <td><?= $val->no_handphone ?></td>
                                <td><?= $val->Alamat ?></td>
                                <td><?= $val->Pesanan ?></td>
                                <td><?= $val->banyak_pesanan ?></td>
                                <td><?= $val->Note ?></td>
                            </tr>
                            <?php }?>
                        </tbody>

                    </table>
                    <?= $this->pagination->create_links() ?>


    </section>


    <!-- footer section ends -->

    <!-- loader part  -->
    <!-- <div class="loader-container">
    <img src="assets/images/loader.gif" alt="">
</div> -->

    <!-- Jquery -->
    <script>
    $("#pass").click(function() {
        if ($("#pass").prop("checked")) {
            $(".idbox").attr("type", "text")
        } else {
            $(".idbox").attr("type", "password")
        }
    })
    </script>




    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- custom js file link  -->
    <script src="<?= base_url() ?>assets/js/script.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js">

    </script>
</body>

</html>