function openNav(){

    var x = document.getElementById("botoes");

    if(x.className === ("botoes")){
        x.className += ("-menujs")
    }else{
        x.className = ("botoes")
    }
}