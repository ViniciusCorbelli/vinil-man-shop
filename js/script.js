var toggled = false

function toggleButton() {
    var btn = document.getElementById('sidenav');
    var navbar = document.getElementById("navbar");
    var main = document.getElementById('main');
    var singOut = document.getElementById('sign-out');
    var secondLine = document.getElementById('second-line');
    //console.log('click');

    if(toggled == false)
    {
        toggled = true;
        //console.log("ENTROU")
        btn.style.width = "250px";
        navbar.style.marginLeft = "250px";
        main.style.marginLeft = "250px";
        if (!window.matchMedia("(min-width: 760px)").matches) {
            singOut.style.display = 'none';
            secondLine.style.display = 'none';
        }
    }
    else if(toggled == true) {
        toggled = false;
        //console.log("SAIU")
        btn.style.width = "0";
        navbar.style.marginLeft = "0";
        main.style.marginLeft = "0";
        singOut.style.display = 'block';
        secondLine.style.display = 'flex';
   
    }
}