function send_form(){
    if(document.forms["contact-form"].checkValidity()){
        alert("Enviado correctamente, espere nuestro mensaje")
    }
}
/*document.forms["contact-form"].addEventListener('change', (e)=>{
    //e.preventDefault()
    //let {email,name,subject} = document.forms["contact-form"].elements
   //if(email.checkValidity()){
    //alert("el email es valido")
   //}
   document.forms["contact-form"].reportValidity()
   if(document.forms["contact-form"].checkValidity()){
       document.querySelector("#contactBtn").disabled = false
   }
   else {
    document.querySelector("#contactBtn").disabled = true
   }
})
*/