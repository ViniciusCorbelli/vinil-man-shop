<?php require('app/views/partials/head.php') ?>

<div class="quem-somos-cabecalho">
    <img src="/public/img/background.jpg">
    <div class="quem-somos-titulo">
        <h1>Entre em contato preenchendo o formulário abaixo</h1>
    </div>
</div>

<div class="contato">
    <form>

        <div class="fundo">
            <div class="form-group">
                <label for="exampleInputName1">Nome</label>
                <input type="name" class="digitos col-lg-6" id="exampleInputName1" placeholder="Insira o seu Nome"></input>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" class="digitos col-lg-6" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu email"></input>
            </div>
            <div class="form-group">
                <label for="exampleInputphonenumber1">Telefone</label>
                <input type="number" class="digitos col-lg-6" id="exampleInputphonenumber1" placeholder="(ddd) 9xxxx-xxxx"></input>
            </div>
            <div class="form-group">
                <label for="exampleInputTopic1">Assunto</label>
                <input type="assunto" class="digitos col-lg-6" id="exampleInputTopic1" placeholder="Digite Aqui o Assunto"></input>
            </div>
            <div class="form-group">
                <label for="comment">Mensagem</label>
                <textarea class="digitos col-lg-6" rows="5" id="exampleInputComment" placeholder="Digite Aqui a Mensagem"></textarea>

                <center><button type="submit" class="btn btn-primary">Enviar</button></center>

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
    </form>
</div>

<?php require('app/views/partials/footer.php') ?>