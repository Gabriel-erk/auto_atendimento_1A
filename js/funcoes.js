export function MsgInvalido(id_div,mensagem){
    var msg = document.createElement("div")
    msg.classList.add("p-3");
    msg.classList.add("w-100");
    msg.classList.add("mt-2");
    msg.classList.add("text-danger-emphasis");
    msg.classList.add("bg-danger-subtle");
    msg.classList.add("border");
    msg.classList.add("border-danger-subtle");
    msg.classList.add("rounded-3");
    msg.textContent = mensagem
    
    var div_mensagens = document.querySelector(id_div);
    div_mensagens.appendChild(msg);
}
