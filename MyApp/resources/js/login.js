var showing = false;
window.onload=function(){
    var icon = document.getElementById("visibility-icon");

    icon.addEventListener("click",function(){
        let psw = document.getElementById("user_psw");
        icon.classList.toggle("no-visibility");
        icon.classList.toggle("visibility");
        if(showing === false){
            psw.type = 'text'
            psw.placeholder = "Digite sua Senha (Visível)"
            showing = true
        }
        else{
            psw.type = 'password'
            psw.placeholder = "Digite sua Senha"
            showing = false
        }
    })
}


