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
                var msg = document.createElement("div")
                msg.classList.add("p-3");
                msg.classList.add("w-100");
                msg.classList.add("mt-2");
                msg.classList.add("text-danger-emphasis");
                msg.classList.add("bg-danger-subtle");
                msg.classList.add("border");
                msg.classList.add("border-danger-subtle");
                msg.classList.add("rounded-3");
                msg.textContent = "Usuario não existe"
                var div_mensagens = document.querySelector("#invalido");
                div_mensagens.appendChild(msg);
            }
            else{
                window.location = "home.html";
            }
        })
})




