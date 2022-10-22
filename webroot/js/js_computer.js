function validate(){
    if(!(document.getElementById("tamanho_monitor").value && document.getElementById("quantidade_mem_ram").value  && document.getElementById("ssd_gigas").value)){
        alert("Você deve preencher todos os campos! ")
        return false;
    }
}