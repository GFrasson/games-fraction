function mostrarSenha(){
    const aberto = document.getElementById('aberto');
    const fechado = document.getElementById('fechado');
    const campoSenha= document.getElementById('senha');


    if(aberto.style.display === 'none'){
        aberto.style.display = 'block';
        fechado.style.display = 'none';
        campoSenha.type = 'text';
    } else {
        aberto.style.display = 'none';
        fechado.style.display = 'block';
        campoSenha.type = 'password';
    }
};