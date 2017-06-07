$(function (){
    const pass = document.getElementById('pass');
    const c_pass= document.getElementById('c-pass');
    const submit =document.getElementById('submit-button');
    pass.addEventListener('keyup',libera(pass,c_pass),false);
    c_pass.addEventListener('blur',valida(pass,c_pass,submit),false);
});

function valida(pass,c_pass,submit){
  if(pass.value === c_pass.value ){
    submit.removeAttribute('disabled');
  }else{
     submit.setAttribute('disabled','');
    alert('senhas nao conferem');
  }
}
function libera(pass , c_pass){
  if(pass.value.trim()!=""){
    c_pass.removeAttribute('disabled');
  }else{
      c_pass.setAttribute('disabled','true');
  }
}
