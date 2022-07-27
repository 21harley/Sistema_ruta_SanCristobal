import Confi from "./../../../../public/js/index.js";

const $form=document.querySelector(".form-login");

$form.addEventListener("submit",(e)=>{
  e.preventDefault();
  let data=Object.fromEntries(new FormData(e.target));
  console.log(data);
  const body=new FormData();
  body.append("nombre",data.nombre);
  body.append("clave",data.clave);
  body.append("consulta","1");
  const options = {
    method: "POST",
    body
  };
  console.log(Object.fromEntries(body));

  fetch(Confi.url+"/Users.php",options)
  .then(response => response.text())
  .then(data => {
    const json = JSON.parse(data);
    console.log(json);
  })
})