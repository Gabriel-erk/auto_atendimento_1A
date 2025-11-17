const btn_agendar = document.querySelector(".disponivel");
const btn_indisponivel = document.querySelector(".Indisponivel");
const btn_concluido = document.querySelector("#btn_concluido");
const modal_agendar = document.querySelector("#modal-agendar");
const modal_indisponivel = document.querySelector("#modal_indisponivel");
const btn_fechar = document.querySelector("#btn_fechar")

btn_agendar.addEventListener('click', () =>{
    modal_agendar.showModal();
});

btn_concluido.addEventListener('click', ()=>{
    modal_agendar.close();
});
btn_fechar.addEventListener('click', ()=>{
    modal_agendar.close();
});