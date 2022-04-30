
logout = document.getElementById('logout')
nome = document.getElementById('nome')
sessionStorage.setItem('name', nome.innerHTML);

if(window.screen.width < 850){
    nome.innerHTML = ""
}

window.addEventListener('resize', function(event) {
    console.log(window.screen.width)
    if(window.screen.width < 850){
        nome.innerHTML = ""
    }
    else{
        nome.innerHTML = sessionStorage.getItem('name')
    }
}, true);

logout.addEventListener('click',function(){
    sessionStorage.clear()
})