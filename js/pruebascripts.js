var boton = document.getElementById('boton-prueba');
var texto = document.getElementById('texto');

boton.addEventListener('click', function(){
    texto.classList.toggle('efectodetexto');
});

var boton2 = document.getElementById('boton-prueba2');
var body = document.getElementById('body');

boton2.addEventListener('click', function(){
    body.classList.toggle('Dark');
    boton2.classList.toggle('boton-prueba2on');
});

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////


var btn_desplegar = document.getElementById('btn-desplegar'), DivMetNum = document.getElementById('MetNum');

btn_desplegar.addEventListener('click', function(){
    DivMetNum.classList.toggle('mostrar-div');
});

function form_gen(){

    var a = parseFloat(document.getElementById('a').value);
    var b = parseFloat(document.getElementById('b').value);
    var c = parseFloat(document.getElementById('c').value);

    var x1=0,x2=0,disc=0,discImg=0,real=0,img=0;

    if(a!=0){

        disc=Math.pow(b,2)-(4*a*c);

        if(disc<0){
	        discImg=disc*-1;
	        real=(-b/(2*a));
	        img=Math.sqrt(discImg)/(2*a);
            //alert('Real = ' + real + '\nImaginaria = '+ img);
            document.getElementById('r').innerHTML = real;
            document.getElementById('i').innerHTML = img;
            var resp = document.getElementById('res_i');
            var resp2 = document.getElementById('res_r');
            
            resp.classList.remove('res1');
            resp2.classList.add('res2');

        }else{
	        x1=(-b+Math.sqrt(disc))/(2*a);
            x2=(-b-Math.sqrt(disc))/(2*a);
            //alert('X1 = ' + x1 + '\nX2 = ' + x2);
            document.getElementById('x1').innerHTML = x1;
            document.getElementById('x2').innerHTML = x2;
            var resp = document.getElementById('res_r');
            var resp2 = document.getElementById('res_i');
           
            resp.classList.remove('res2');
            resp2.classList.add('res1');
        }

    }else
         alert('El problema no puede ser resuelto con a=0, ingrese otro valor para a.');
}


///////////////////////////////////////////////////////////////////////////////////////////////////////////////////


var Figura1 = new Fig("Cuadrado",4)










