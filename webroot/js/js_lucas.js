function validate(){
    if(!(document.getElementById("model_bike").value && document.getElementById("marca_bike").value  && document.getElementById("aro").value)){
        alert("Todos os campos são obrigatórios!!")
        return false;
    }
}