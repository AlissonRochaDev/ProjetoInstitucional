function ValidarCampos(){
    if(document.form.nomeInput.value == ''){
        alert("Por favor, preencher o campo Nome!");
        document.form.nomeInput.focus();
        return false;
    }

    if(document.form.emailInput.value == ''){
        alert("Por favor, preencher o campo E-mail!");
        document.form.emailInput.focus();
        return false;
    }

    if(document.form.teleInput.value == ''){
        alert("Por favor, preencher o campo Telefone!");
        document.form.teleInput.focus();
        return false;
    }

    if(document.form.msgTxt.value == ''){
        alert("Por favor, preencher o campo Mensagem!");
        document.form.msgTxt.focus();
        return false;
    }
}