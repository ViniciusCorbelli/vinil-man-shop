/* === Variaveis Globais ==== */
toggled = true; //Booleano para controle da sidebar
var btn = document.getElementById('sidenav'); //Botão Toggle que se localiza na navbar
var navbar = document.getElementById("navbar"); //Navbar 
var main = document.getElementById('main'); //O corpo da página
var singOut = document.getElementById('sign-out'); //Elemento para realziar logout
var secondLine = document.getElementById('second-line'); //Elemento para esconder a barra de pesquisa e de número de elementos em exibição

/* === Funções ==== */

function toggleButton() {

    /* === Primeiro verificamos o tamanho da tela ===*/
    if (window.matchMedia("(min-width: 1000px)").matches) {
        //A sidebar estará aberta

        if (toggled == true) {
            toggled = false;
            btn.style.width = "0";
            navbar.style.marginLeft = "0";
            main.style.marginLeft = "0";
        } else if (toggled == false) {
            toggled = true;
            btn.style.width = "250px";
            btn.style.maxWidth = "250px";
            navbar.style.marginLeft = "250px";
            main.style.marginLeft = "250px";
        }

    } else if (window.matchMedia("(min-width: 415px)").matches) { //Ipad, Ipad X
        // A sidebar inicialmente está fechada

        if (toggled == false) {
            toggled = true;
            btn.style.width = "250px";
            btn.style.maxWidth = "250px";
            navbar.style.marginLeft = "250px";
            main.style.marginLeft = "250px";
            /*Se está fechado e tem largura menor que 760px, esconderemos o campo de pesquisa e o botão de logout */
            if (!window.matchMedia("(min-width: 768px)").matches) {
                singOut.style.display = 'none';
                secondLine.style.display = 'none';
            }
        } else if (toggled == true) {
            toggled = false;
            btn.style.width = "0";
            navbar.style.marginLeft = "0";
            main.style.marginLeft = "0";
            singOut.style.display = 'block';
            secondLine.style.display = 'flex';
        }
    } else if (window.matchMedia("(max-width: 414px)").matches) {
        /*A partir daqui a sidebar deverá cobrir toda a tela ao ser aberta */
        if (toggled == true) {
            toggled = false;
            btn.style.width = "100%";
            btn.style.maxWidth = "736px";
            navbar.style.marginLeft = "0";
            main.style.marginLeft = "0";
        }
    }
};

/*
 * Função para fechar a sidenav em dispositivos menores que 414px
 */
function closeBtn() {
    toggled = true;
    btn.style.width = "0";
    navbar.style.marginLeft = "0";
    main.style.marginLeft = "0";
};