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
    .catch(err => console.log("error: "+err));
   
    
});

//FUNCIONALIDAD PARA EDITAR REGISTRO
const edit = (elemento, evento, selector, handler) => {
    elemento.addEventListener(evento, e => {
        if (e.target.closest(selector)) {
            handler(e)
        }
    });
}

edit(document, 'click', '.btnEdit', e=>{
    let fila = e.target.parentNode.parentNode;
    let id = fila.firstElementChild.innerHTML;
    let name = fila.children[1].innerHTML;
    let email = fila.children[2].innerHTML;
    
    document.getElementById('numID').value =id;
    document.getElementById('txtName').value =name;
    document.getElementById('txtEmail').value =email;
    document.getElementById('btnSend').innerHTML ='Update';

    
});