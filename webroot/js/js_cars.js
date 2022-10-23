document.querySelector('#formulario')
.onsubmit = (event)=>{
    event.preventDefault()
    alert('Dados enviados com sucesso')
}

let entrada = document.querySelectorAll('.entrada')

entrada.forEach((n,i)=>{
    entrada[i].onmouseenter = ()=>{
        entrada[i].style.background = "rgb(238, 238, 242)"
        if(n.name == 'marca'){
            n.placeholder = "ex: VW, Ford, BMW..."
        }
        else if(n.name == 'nome'){
            n.placeholder = "Ex: Gol, Focus, Fusca..."
        }
    }

    entrada[i].onmouseout = ()=>{
        entrada[i].style.background = '#ffffff'
        if(n.name == 'marca'){
            n.placeholder = "marca do veículo"
        }
        else if(n.name == 'nome'){
            n.placeholder = "nome do veículo"
        }
    }
})

let nomeAutor = document.querySelector('.nome-autor')
nomeAutor.style.cursor = "pointer"

nomeAutor.addEventListener('click',abrirLink)

function abrirLink(){
    window.open("https://github.com/MarcosPauloMacedo")
}