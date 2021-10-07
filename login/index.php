<?php require_once "../includes/header.php"; ?>

<div class="container">

    <div class="row">
        <div class="col s12 m12 l12">
            <div class="card">
                <div class="card-content">
                    <span class="card-title">Card Title</span>

                    <form id="inicioSesion"
                        autocomplete="off"
                        @submit.preven="login">
                        <input type="text"
                            placeholder="Usuario">
                    </form>

                </div>
                <div class="card-action">
                    <a href="#">This is a link</a>
                    <a href="#">This is a link</a>
                </div>
            </div>
        </div>
    </div>

</div>

<?php require_once "../includes/footer.php" ?>