<?php
$nomePage = $titulo;
require('app/views/partials/head.php');
?>

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
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="copiaEmail" value="on" id="enviarCopia">
                    <label class="form-check-label" for="enviarCopia">Envie-me uma cópia</label>
                </div>

                <center><button type="submit" class="btn btn-primary">Enviar</button></center>
            </form>

        </div>


        <script src="https://cdn.tiny.cloud/1/amcj75jc93ophbe34wfi6y9q7jnrom6tv0wtsh2du10fuo0l/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
        <script>
            tinymce.init({
                selector: "#editor",
                language: "pt_BR",
                plugins: [
                    'advlist autolink link image preview hr anchor pagebreak',
                    'searchreplace wordcount insertdatetime media nonbreaking',
                    'emoticons'
                ],
                menubar: 'favs file edit view insert format tools table help',
                toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons',
                height: "300",
                mobile: {
                    theme: 'mobile'
                }
            });
        </script>
    </div>
</div>
<?php require('app/views/partials/footer.php') ?>