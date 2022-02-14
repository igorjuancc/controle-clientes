function validarCampos(){
    var cpf = ($("#cpf").val()).replace(/\.|\-/g, '');
    var email = $("#email").val();
    var nome = $("#nome").val();
    var data = $("#data").val();
    var fone = $("#fone").val().replace(/\.|\-/g, '');
    fone = fone.replace(/[\])}[{(]/g, '');
    var rua = $("#rua").val();
    var num = $("#numero").val();
    var cep = ($("#cep").val()).replace(/\.|\-/g, '');
    var comp = $("#complemento").val();
    var bairro = $("#bairro").val();
    var cidade = $("#cidade").val();

    if(cpf.length < 11){
        alert("CPF Inválido");
        $("#cpf").addClass("inputErro");
        return false;
    }
    if((email.length > 30) || (email === "") || (email === null)){
        alert("Email Inválido");
        $("#email").addClass("inputErro");
        return false;
    }
    if((nome.length > 100) || (nome === "") || (nome === null)){
        alert("Nome Inválido");
        $("#nome").addClass("inputErro");
        return false;
    }
    if((data === "") || (data === null)){
        alert("Data de nascimento Inválida");
        $("#data").addClass("inputErro");
        return false;
    }
    if((fone.length !== 10) || (fone === "") || (rua === null)){
        alert("Telefone inválido");
        $("#fone").addClass("inputErro");
        return false;
    }
    if((cep.length < 8)){
        alert("Cep inválido");
        $("#cep").addClass("inputErro");
        return false;
    }
    if((bairro === "") || (bairro === null)){
        alert("Bairro Inválido");
        $("#comp").addClass("inputErro");
        return false;
    }
    if((rua.length > 100) || (rua === "") || (rua === null)){
        alert("Nome rua inválido");
        $("#rua").addClass("inputErro");
        return false;
    }
    if((num === null) || (num < 0) || (num === "undefined") || (num === "")){
        alert("Numero inválido");
        $("#numero").addClass("inputErro");
        return false;
    }
    if((comp === "") || (comp === null)){
        alert("Complemento Inválido");
        $("#complemento").addClass("inputErro");
        return false;
    }

    $("#cpf").val(cpf);
    $("#fone").val(fone);
    $("#cep").val(cep);
    $('#nome').val(nome.toUpperCase());
    $('#bairro').val(bairro.toUpperCase());
    $('#cidade').val(cidade.toUpperCase());
    $('#rua').val(rua.toUpperCase());
    $('#complemento').val(comp.toUpperCase());

    return true;
};

function mascaras(){
    $("#cpf").mask("000.000.000-00");
    $("#cep").mask("00000-000");
    $("#fone").mask("(00)0000-0000");
}

function remover(id){
  conf = confirm("Deseja excluir cliente?");
  if (conf == true) {
    window.location.href = "remover.php?id=" + id;
  }    
}

$(document).ready(function(){
    mascaras();
});
