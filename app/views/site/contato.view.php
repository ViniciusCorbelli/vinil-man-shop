<?php require('app/views/partials/head.php') ?>

<body>

    <div class="quem-somos-cabecalho">
        <img src="/public/img/background.jpg">
        <div class="quem-somos-titulo">
            <h1>Entre em contato preenchendo o formulário abaixo</h1>
        </div>
    </div>

    <div class="contato">

        <div class="fundo">
            <div class="container-sm">

                <form class="form-group" action="/contato/send-message" method="POST">
                    <label>Nome</label>
                    <input type="text" class="digitos col-lg form-control" name="name" placeholder="Insira o seu Nome"></input>
                    <label>Email</label>
                    <input type="email" class="digitos col-lg form-control" name="email" aria-describedby="emailHelp" placeholder="Seu email"></input>
                    <label>Assunto</label>
                    <input type="text" class="digitos col-lg form-control" name="subject" placeholder="Digite Aqui o Assunto"></input>
                    <label>Mensagem</label>
                    <textarea id="editor" name="body"></textarea>
                    <center><button type="submit" class="btn btn-primary">Enviar</button></center>
                </form>

            </div>

            <div class="contato1 ">

                <h1> Ligue para nós </h1>
                <i class="fas fa-phone fa-3x my-4"></i>
                <h2>(021)98765-4321</h2>
                <h1> Ou nos mande uma mensagem </h1>
                <i class="fab fa-instagram fa-4x my-4"></i>
                <h2>@vinilman<br>
                    <i class="far fa-envelope fa-2x my-4"></i><br>vinilman@gmail.com</h2>
            </div>

            <div class="mapa my-4">
                <h1> Visite A gente! </h1>
                <div class="mapa">
                    <iframe id="mapa_class" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14820.449024741118!2d-43.372468!3d-21.775916!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x989ba191fb377d%3A0xb200458b94cba93a!2sVia%20Local%2C%204569%20-%20S%C3%A3o%20Pedro%2C%20Juiz%20de%20Fora%20-%20MG%2C%2036036-900!5e0!3m2!1spt-BR!2sbr!4v1603489818966!5m2!1spt-BR!2sbr" frameborder="7" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex=""></iframe>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.tiny.cloud/1/amcj75jc93ophbe34wfi6y9q7jnrom6tv0wtsh2du10fuo0l/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: "#editor",
            language: "pt_BR",
            plugins: [
                'advlist autolink link image lists charmap print preview hr anchor pagebreak',
                'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
                'table emoticons template paste help'
            ],
            menu: {
                favs: {
                    title: 'Meus favoritos',
                    items: 'code visualaid | searchreplace | emoticons'
                }
            },
            menubar: 'favs file edit view insert format tools table help',
            toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons'
        });
    </script>
    <?php require('app/views/partials/footer.php') ?>