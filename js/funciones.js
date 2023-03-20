
const btnEliminar = document.getElementById('btn-eliminar'),
divConfirm = document.getElementById('divConfirmEliminar'),
btnNo = document.getElementById('btn-no');

btnEliminar.addEventListener('click', function(){
    divConfirm.classList.toggle('mostrar-confirmacion');
});

btnNo.addEventListener('click', function(){
    divConfirm.classList.toggle('mostrar-confirmacion');
});
