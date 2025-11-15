const form = document.getElementById("formlogin");
const cpf = document.getElementById("cpf");
const senha = document.getElementById("senha");

form.addEventListener("submit",(evento)=>{
    evento.preventDefault();

    const dados = {
        cpf:cpf.value,
        senha:senha.value
    };

    fetch("app/controller/form_login.php",{
        method: "POST",
        headers:{"Content-Type": "application/json"},
        body: JSON.stringify(dados)
    })
        .then(status_login => status_login.json())
        .then(aviso => {

            if(aviso.success == false){
                console.log("Não existe o usuario");
            }
            else{
                console.log("existe usuario");
            }
        })
})



