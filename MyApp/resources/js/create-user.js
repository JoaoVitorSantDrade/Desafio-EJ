var showing = false;
var showing2 = false;

window.onload=function(){
    var icon = document.getElementById("visibility-icon");
    var icon2 = document.getElementById("visibility-icon2");
    var cargo_sel = document.getElementById("user-cargo");

    icon.addEventListener("click",function(){
        let psw = document.getElementById("user_psw");
        icon.classList.toggle("no-visibility");
        icon.classList.toggle("visibility");
        if(showing === false){
            psw.type = 'text'
            psw.placeholder = "Digite a senha (Visível)"
            showing = true
        }
        else{
            psw.type = 'password'
            psw.placeholder = "Digite a senha"
            showing = false
        }
    })
    
    icon2.addEventListener("click",function(){
        let psw = document.getElementById("user_psw2");
        icon2.classList.toggle("no-visibility");
        icon2.classList.toggle("visibility");
        if(showing2 === false){
            psw.type = 'text'
            psw.placeholder = "Digite a senha novamente (Visível)"
            showing2 = true
        }
        else{
            psw.type = 'password'
            psw.placeholder = "Digite a senha novamente"
            showing2 = false
        }
    })
    
    cargo_sel.addEventListener("click",function(){
        console.log(cargo_sel.value);
        if(cargo_sel.value == ""){
            cargo_sel.classList.add("placeholder-font");
        }
        else{
            cargo_sel.classList.remove("placeholder-font");
        }
    })
    
}


