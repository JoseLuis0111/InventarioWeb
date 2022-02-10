const btnmenu = document.getElementById('icono-menu'), menu = document.getElementById('menu'), contenido = document.getElementById('contenido');


btnmenu.addEventListener('click', function(){
    menu.classList.toggle('ocultar-menu');
});

contenido.addEventListener('click', function(){   //Ocultar menu al pulsar fuera
    menu.classList.add('ocultar-menu');
});




