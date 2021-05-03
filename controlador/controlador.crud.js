//FUNCIONALIDAD PARA MOSTRAR LOS REGISTROS
const open = document.addEventListener('DOMContentLoaded', ()=>{
    fetch('controlador/controlador.read.php')
    .then((res=>res.json()))
    .then(data=>{
        let tableBody =document.getElementById('people');
        
        if (data!==null) {
            let tabla ='';
            for(i in data){
                tabla += '<tr>';
                tabla +=    '<td>'+data[i].id_per+'</td>';
                tabla +=    '<td>'+data[i].per_name+'</td>';
                tabla +=    '<td>'+data[i].per_email+'</td>';
                tabla +=    '<td><button class="btnEdit" data-id="'+data[i].id_per+'">EDIT</button></td>';
                tabla +=    '<td><button class="btnDelete">DELETE</button></td>';
                tabla += '</tr>';
            }
            tableBody.innerHTML=tabla ;
        }else{
            console.log("mal");
        }
    })
    .catch(function(error) {
        console.log(error);
    })
   
    
});


//FUNCIONALIDAD PARA EDITAR REGISTRO
//Funcion que imita el evento onclick
const edit = (elemento, evento, selector, handler) => {
    elemento.addEventListener(evento, e => {
        if (e.target.closest(selector)) {
            handler(e)
        }
    });
};

edit(document, 'click', '.btnEdit', e=>{
    //Ocultar y mostrar botones para el procedimiento de edicion
    var btnSave =document.getElementById('btnSave');
    var btnSend =document.getElementById('btnSend');
    var btnCancel =document.getElementById('btnCancel');
    btnSend.hidden=true;
    btnSave.hidden=false;
    btnCancel.hidden=false;

    //Recuperamos los datos del registro a modificar

    var fila = e.target.parentNode.parentNode;
    var dataUp =
    {
        id: fila.firstElementChild.innerHTML,
        name: fila.children[1].innerHTML,
        email: fila.children[2].innerHTML
    };

    //Cargamos el formulario con los datos listos para ser modificados
    document.getElementById('numID').value =dataUp.id;
    document.getElementById('txtName').value =dataUp.name;
    document.getElementById('txtEmail').value =dataUp.email;

});

var save = document.getElementById('btnSave');
save.addEventListener('click', update);

function update() {

    var formulario = document.getElementById('frmDatos');
    var datos = new FormData(formulario);
    fetch("controlador/controlador.update.php",
    {
        method: 'post',
        body: formulario
        
    })
    .then(res => res.text())
    .then(data => {
            console.log(data);
    })
    .catch(error=>{console.log(error)})
}