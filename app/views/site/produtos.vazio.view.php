<?php
$nomePage = $titulo;
require('app/views/partials/head.php');
?>

<html>

<body>

    <div class="container">
        <div class="row produtos-vazio">
            <div class="col col-sm-4">
                <center><i class="far fa-times-circle"></i></center>
            </div>
            <div class="col col-sm-8">
                <h1>Não há anúncios que correspondem à sua busca.</h1>
                <ul>
                    <li>Revise a ortografia da palavra.</li>
                    <li>Utilize palavras mais genéricas ou menos palavras.</li>
                </ul>
                <a class="dropdown-item" href="/produtos">Voltar</a>
            </div>
        </div>
    </div>
</body>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="/public/js/bootstrap.min.js"></script>

</html>