<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('bootstrap/bootstrap-5.3.3-dist/css/bootstrap.min.css') }}">
    <style>
        .banner-img {
            width: 100%;
            height: 500px;
        }
    </style>
    <title>Home</title>
</head>

<body>
    <x-navbar></x-navbar>
    <div class="mb-5">
        <img src="img/banner.jpg" alt="" class="banner-img object-fit-cover">
    </div>

    <div class="container mt-5">
        <div class=" text-center">
            <div class="row">
                <div class="col-4">
                    <img src="img/gibran.jpg" alt="" class="img-thumbnail img-fluid rounded">
                </div>
                <div class="col text-start">
                    <h1>GIBRAN NI BOSSSS!! FUFUFAFA</h1>
                    <p class="text-start align-middle">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia, placeat temporibus. Fugiat
                        neque, commodi provident quaerat assumenda illum doloremque possimus! Molestiae vel officiis veritatis pariatur? Hic, dolore!
                        Soluta animi, sunt ipsa in sint temporibus numquam, autem, nesciunt at nobis debitis consequuntur eos totam. Nesciunt, numquam
                        animi? Tempora excepturi numquam qui.</p>
                    <div class="d-flex justify-content-end">
                        <button class="btn btn-primary">Read More</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="d-flex justify-content-center align-middle p-5 mt-5 text-light" style="background-color: #2F4F4F">
        <p>EduFun 2024 | Web Programming | Alwi Erdi Musthafa | 2602205742</p>
    </footer>

    <script src="{{ asset('bootstrap/bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js') }}" defer></script>
</body>

</html>
