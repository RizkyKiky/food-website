<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warung Putu Pandita | Termurah</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

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

        <a href="#" class="logo"><i class=" "></i>Putu Pandita</a>

        <nav class="navbar">
            <a class="active" href="<?= base_url(); ?>">Home</a>
            <a href="<?= base_url() ?>">Login</a>
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
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <?php if ($this->session->flashdata('message')) : ?>
                    <div class="alert alert-primary" role="alert">
                        <?= $this->session->flashdata('message') ?>
                    </div>
                    <?php endif; ?>
                    <?php if ($this->session->flashdata('error')) : ?>
                    <div class="alert alert-danger" role="alert">
                        <?= $this->session->flashdata('error') ?>
                    </div>
                    <?php endif; ?>
                    <h2 class="text-center mt-5">Register</h2>
                    <form action="<?= base_url() ?>register/add" method="POST">
                        <div class="mb-3">
                            <label for="exampleInputtext1" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" name="nama_lengkap" id="exampleInputtext1"
                                aria-describedby="textHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputtext1" class="form-label">No Handphone</label>
                            <input type="text" class="form-control" name="no_hp" id="exampleInputtext1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputtext1" class="form-label">User</label>
                            <input type="text" class="form-control" name="user" id="exampleInputtext1"
                                aria-describedby="textHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" id="exampleInputPassword1">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>



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