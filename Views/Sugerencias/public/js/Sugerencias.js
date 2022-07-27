import Confi from "../../../../public/js/cofi.js";

const $form=document.querySelector(".form-sugerencias");

$form.addEventListener("submit",(e)=>{
  e.preventDefault();
  let data=Object.fromEntries(new FormData(e.target));
  console.log(data);
  const body=new FormData();
  body.append("nombre",data.nombre);
  body.append("apellido",data.apellido);
  body.append("correo",data.correo);
  body.append("telefono",data.telefono);
  body.append("empresa",data.select);
  body.append("mensaje",data.mensaje);
  body.append("query","sugerencia/mensaje");
  const options = {
    method: "POST",
    body
  };
  console.log(Object.fromEntries(body));

  fetch(Confi.url+"/Sugerencias.php",options)
  .then(response => response.text())
  .then(data => {
    console.log(data);
    const json = JSON.parse(data);
    console.log(typeof json);
    if(json.data['state']==200){
        e.target.nombre.value='';
        e.target.apellido.value='';
        e.target.correo.value='';
        e.target.telefono.value='';
        e.target.mensaje.value='';
        e.target.select.value='';
      //window.location.reload();
    }
    //console.log(json);
  })
  
})