function openSB(){

    var c = document.getElementById("container"); 
    var t = document.getElementById("topicos");
   
    if(c.className === "container"){
        c.className += "-fechado"
    }else{
        c.className = "container"
    }



    if(t.className === "topicos"){
        t.className += "-fechados"
    }else{
        t.className = "topicos"
    }

}