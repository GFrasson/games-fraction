function mostrarSenha(){
    const aberto = document.getElementById('aberto');
    const fechado = document.getElementById('fechado');
    const campoSenha= document.getElementById('senha');


    if(aberto.classList.contains("hidden")){
        aberto.classList.remove("hidden");
        fechado.classList.add("hidden");
        campoSenha.type = 'text';
    } else {
        aberto.classList.add("hidden");
        fechado.classList.remove("hidden");
        campoSenha.type = 'password';
    }
};