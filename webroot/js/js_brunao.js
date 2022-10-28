function validate(){
    if(!(document.getElementById("motor_model").value && document.getElementById("motor_marca").value  && document.getElementById("cilindradas").value)){
        alert("Todos os campos são obrigatórios!!")
        return false;
    }
}