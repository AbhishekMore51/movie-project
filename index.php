<?php include 'header.php'; ?>

<style>
    .omga-01__image-card-2 {
        max-width: 250px !important;
        min-width: 250px !important;
    }

    .omga-01__hero-img-group .abs-img.img-2 {
        bottom: 1%;
    }

    @media (max-width: 575px) {
        .omga-01__hero-content {
            padding-top: 120px !important;
        }

        .omga-01__hero-img-group .abs-img.img-2 {
            bottom: -6%;
        }
    }
</style>

<!-- Hero Area -->
<div class="position-relative">
    <div class="background-image">
        <img src="./image/back/netflix.jpg" style="width: 100%;" alt="">
    </div>
</div>

<div class="netflix-movies-background pt--40">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="card">
                    <img class="card-img-top" src="..." alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card">
                    <img class="card-img-top" src="..." alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card">
                    <img class="card-img-top" src="..." alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card">
                    <img class="card-img-top" src="..." alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include 'footer.php'; ?>

<script>
    window.onscroll = function() {
        myFunction()
    };

    var navbar = document.getElementById("navbar");
    var sticky = navbar.offsetTop;

    function myFunction() {
        if (window.pageYOffset >= sticky) {
            navbar.classList.add("sticky")
        } else {
            navbar.classList.remove("sticky");
        }
    }
</script>
<!-- Movies API -->
<script>
    
</script>