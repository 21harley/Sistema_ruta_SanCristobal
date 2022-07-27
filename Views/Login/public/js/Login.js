import Confi from "../../../../public/js/cofi.js";

const $form=document.querySelector(".form-login");

$form.addEventListener("submit",(e)=>{
  e.preventDefault();
  let data=Object.fromEntries(new FormData(e.target));
  console.log(data);
  const body=new FormData();
  body.append("email",data.email);
  body.append("clave",data.clave);
  body.append("query","login/user");
  const options = {
    method: "POST",
    body
  };
  console.log(Object.fromEntries(body));

  fetch(Confi.url+"/Users.php",options)
  .then(response => response.text())
  .then(data => {
    console.log(data);
    const json = JSON.parse(data);
    console.log(typeof json);
    if(json.data['state']==200){
      window.location.reload();
    }
    //console.log(json);
  })
})