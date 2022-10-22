function validate(){
    if(!(document.getElementById("tamanho_monitor").value)){
        alert("Você deve preencher o campo que pergunta sobre o monitor!")
        return false;
    }
    if(!(document.getElementById("ssd_gigas").value)){
        alert("Você deve preencher o campo que pergunta sobre o ssd!")
        return false;
    }
    if(!(document.getElementById("quantidade_mem_ram").value)){
        alert("Você deve preencher o campo que pergunta sobre a quantidade de memoria ram!")
        return false;
    }
    if(!(document.getElementById("teclado").value)){
        alert("Você deve preencher o campo que pergunta sobre o teclado!")
        return false;
    }
}