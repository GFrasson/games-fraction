function openSB(){

    var c = document.getElementById("caixa"); 
    var t = document.getElementById("topicos");
   
    if(c.className === "caixa"){
        c.className += "-fechada"
    }else{
        c.className = "caixa"
    }



    if(t.className === "topicos"){
        t.className += "-fechados"
    }else{
        t.className = "topicos"
    }

}