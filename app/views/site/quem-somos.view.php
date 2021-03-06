<?php
$nomePage = $titulo;
require('app/views/partials/head.php');
?>
<main>
    <div class="quem-somos-cabecalho">
        <img src="/public/img/background.jpg">
        <div class="quem-somos-titulo">
            <h1>Tudo o que você precisa saber sobre o Vinil Man Shop</h1>
        </div>
    </div>

    <div class="quem-somos-main">

        <!-- historia -->
        <div class="row quem-somos-historia">
            <div class="col-sm">
                <h1>Conheça a vinil Man Shop</h1>
                <p>Somos uma empresa de vendas de vinil que tem como objetivo democratizar o comércio oferecendo a melhor plataforma e os serviços necessários para que pessoas e empresas possam comprar com a qualidade Vinil Man Shop.
                </p>
                <p>Nascemos em 2020, no Brasil, e atualmente fazemos entrega para os quatro cantos do Brasil. Nosso marketplace - vinilmanshop.com.br - foi desenolvido por Trainee do processo seletivo da empresa júnior da Faculdade Federal de Juiz de
                    Fora, CodeJR.</p>
                <p>Temos uma missão em fazer a compra no marketplace a melhor experiencia possível, com um design totalmente intuitivo e responsivo para que nossos clientes posam aproveitar o melhor que existe.</p>
                <p>Nossa empresa preza por valores como o crescimento junto, orgulho de ser vinil man e empatia.</p>
            </div>
            <div class="col-sm">
                <img src="/public/img/quem-somos-foto.png">
            </div>
        </div>

        <!-- icones -->
        <div class="row quem-somos-icones">
            <div class="col-sm">
                <i class="fas fa-code"></i>
                <h1>Missão</h1>
                <p>Trazer a melhor expêrencia para o úsuario com um site seguro, totalmente responsivo e dinamico</p>
            </div>
            <div class="col-sm">
                <i class="fas fa-rocket"></i>
                <h1>Visão</h1>
                <p>Ser referência no Brasil como a maior marketplace tendo um grande impacto.</p>
            </div>
            <div class="col-sm">
                <i class="fas fa-people-carry"></i>
                <h1>Valores</h1>
                <p>Crescimento junto, orgulho de ser vinil man e empatia.</p>
            </div>
        </div>

        <!-- card ganhos -->
        <div class="quem-somos-numeros py-4 mx-4">
            <h1>A empresa em números</h1>
            <h2>A Vinil Man Shop teve ótimos resuldos no último ano, duplicando seu tamanho, monstrando assim seu grande sucesso, seguindo seus padrões de qualidade sempre e buscando a melhor expêriencia ao úsuario com um site totalmente responsivo e
                intuitivo.
            </h2>
            <div class="row">
                <div class="col-sm">
                    <h3>781.597</h3>
                    <h4>Acessaram o site no último ano</h4>
                </div>
                <div class="col-sm">
                    <h3>R$142 milhões</h3>
                    <h4>Vendidos no último ano</h4>
                </div>
                <div class="col-sm">
                    <h3>13.949</h3>
                    <h4>Vendas realizadas no último ano</h4>
                </div>
            </div>
        </div>

        <!-- equipe -->
        <div class="row quem-somos-equipe">
            <div class="col-sm">
                <img src="/public/img/quem-somos-time.png">
            </div>
            <div class="col-sm">
                <h1>Equipe</h1>
                <p>Ao longo dos anos, investimos em uma equipe multidisciplinar com especialistas altamente qualificados (Administradores, Analistas de Sistemas e Negócios, Desenvolvedores, Programadores, Gerente de Projetos e Gestão Empresarial), formando
                    um núcleo com sólidos conhecimentos nas diversas áreas de atuação, necessário ao padrão de qualidade exigido pelo mercado.</p>
                <p>A busca incessante pelo aperfeiçoamento de nossos profissionais, mantém um nível elevado de conhecimento técnico, aliado ao uso de tecnologias de ponta, garantem a satisfação e a efetividade de nossos projetos.
                </p>
            </div>
        </div>

        <!-- time -->
        <div class="quem-somos-time">
            <h1>Nosso time</h1>
            <h2>Somos um time composto por 5 estudantes da UFJF e auxiliado por um Scrum Master também estudante da UFJF. Este é um projeto de trainee para a empresa CodeJR</h2>
            <div class="row quem-somos-linhas">
                <div class="col-sm quem-somos-integrates">
                    <img src="/public/img/quem-somos-perfil.jpg">
                    <h1>Gabriel Cabanez</h1>
                    <h3>Desenvolvedor</h3>
                </div>
                <div class="col-sm quem-somos-integrates">
                    <img src="/public/img/quem-somos-perfil.jpg">
                    <h1>Leonardo Neves</h1>
                    <h3>Desenvolvedor</h3>
                </div>
                <div class="col-sm quem-somos-integrates">
                    <img src="/public/img/quem-somos-perfil.jpg">
                    <h1>Pedro Alexandre</h1>
                    <h3>Desenvolvedor</h3>
                </div>
            </div>
            <div class="row quem-somos-linhas">
                <div class="col-sm quem-somos-integrates">
                    <img src="/public/img/quem-somos-perfil.jpg">
                    <h1>Renan Nunes</h1>
                    <h3>Desenvolvedor</h3>
                </div>
                <div class="col-sm quem-somos-integrates">
                    <img src="/public/img/quem-somos-perfil.jpg">
                    <h1>Vinicius Carlos</h1>
                    <h3>Scrum Master</h3>
                </div>
                <div class="col-sm quem-somos-integrates">
                    <img src="/public/img/quem-somos-perfil.jpg">
                    <h1>Vinícius Corbelli</h1>
                    <h3>Desenvolvedor</h3>
                </div>
            </div>
            <div class="row quem-somos-linhas">
                <div class="col-sm quem-somos-integrates quem-somos-curriculo">
                    <img src="/public/img/quem-somos-curriculo.jpg">
                    <h1>Você?</h1>
                    <h3>ENVIE SEU CURRÍCULO</h3>
                    <h4>Faça parte da nossa equipe, confira as vagas</h4>
                    <h4>disponíveis e venha crescer com a gente.</h4>
                    <a href="/contato" class="btn btn-primary btn-lg" role="button" aria-disabled="true">Envie seu cúrriculo</a>
                </div>
            </div>
        </div>
    </div>
</main>

<?php require('app/views/partials/footer.php') ?>