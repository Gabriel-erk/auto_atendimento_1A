import { MsgInvalido } from "./funcoes.js";

const cpf = document.getElementById("cpf");
const senha = document.getElementById("password");
const form = document.querySelector("form");


form.addEventListener("submit",(evento)=> {
    let enviar_form = true;
    if(cpf.value !== "123" || senha.value !== "123")
    {
        MsgInvalido("CPF ou Senha errados")
        enviar_form =false
    }
    else
    {
        console.log("valido")
    }

    if(!enviar_form){
        evento.preventDefault();
     }
    })




