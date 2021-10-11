/*function validaFormVenda() {
    //name, cpf, fone, email, marca, modelo, km, ano
    //valores do formulário

    var name =  document.getElementById("name").value;
    var cpf =  document.getElementById("cpf").value;
    var fone =  document.getElementById("fone").value;
    var email =  document.getElementById("email").value;
    var marca =  document.getElementById("marca").value;
    var modelo =  document.getElementById("modelo").value;
    var km =  document.getElementById("km").value;
    var ano =  document.getElementById("ano").value;

    var verifica = 0;
    var caracteres = ['1','2','3','4','5','6','7','8','9','0','!','@','#','$','%','&','*','(',')','-','_','+','=','§',']','[','{','}','?','/','.',';',':'];
    var numeros = ['0','1','2','3','4','5','6','7','8','9'];
    var emailRestricoes = ['!','#','$','%','&','*','(',')','-','_','+','=','§',']','[','{','}','?','/',';',':'];
    var arrobaCont = 0;
    var pontoCont = 0;

    //VERFICAR TAMANHO
    //VERIFICA NOME
    if(name.length < 10){
        alert("Digite seu nome completo!");
        return;
    }

    for(var i = 0; i < name.length ; i++){
        for(var j = 0; j < caracteres.length; j++){
            if(name[i] == caracteres[j]){
                verifica++;
            }
        }
    }

    if(verifica != 0){
        alert("Seu nome só pode conter caracteres do alfabeto, NÃO são permitidos: numeros e caracteres especiais!");
        return;
    }

    verifica = 0;

    //==============================================================================================================================================
    //VERIFICA CPF

    if(cpf.length != 11){
        alert("Informe um CPF CORRETO!");
        return;
    }

    for(var i = 0; i < cpf.length ; i++){
        for(var j = 0; j < numeros.length; j++){
            if(cpf[i] == numeros[j]){
                verifica++;
            }
        }
    }

    if(verifica != 11){
        alert("CPF INVÁLIDO!");
        return;
    }

    verifica = 0;

    //===============================================================================================================================================
    //VERIFICA FONE

    if(fone.length > 13 || fone.length < 11){
        alert("O numero do telefone está INCORRETO!");
        return;
    }
    
    for(var i = 0; i < fone.length ; i++){
        for(var j = 0; j < numeros.length; j++){
            if(fone[i] != ' '){
                if(fone[i] == numeros[j]){
                    verifica++;
                }
            }
            
        }
    }

    if(verifica != 11){
        alert("Telefone INVÁLIDO");
        return;
    }

    verifica = 0;

    //=================================================================================================================================================
    //VERIFICA EMAIL

    for(var i = 0; i < email.length ; i++){//verifica espaços
        if(email[i] == ' '){
            alert("Não pode conter ESPAÇOS no email!");
            return;
        }
    }

    for(var i = 0; i < email.length ; i++){//verifica espaços
        for(var j = 0; j < emailRestricoes.length; j++){
            if(email[i] == emailRestricoes[j]){
                alert("Contém caracteres INVÁLIDOS no email!");
                return;
            }
            if(email[i] == '@'){
                arrobaCont++;
            }
            if(email[i] == '.'){
                pontoCont++;
            }
        }
    }

    if((arrobaCont != 1 || pontoCont == 0) || email.length < 2){
        alert("Emailaaa INVÁLIDO!! <br> arroba:", +arrobaCont);
        alert("ponto: ", +pontoCont);
        alert("tamanho: ",+email.length);
        return;
    }

    arrobaCont = 0;
    pontoCont = 0;

    //==========================================================================
    //VERIFICA MARCA MODELO

    if(marca.length < 1){
        alert("Informe a MARCA do veículo corretamente!");
        return;
    }

    if(modelo.length < 1){
        alert("Informe o MODELO do veículo corretamente!");
        return;
    }

    //==============================================================================
    //VERIFICA KM
    for(var i = 0; i < km.length; i++){
        for(var j = 0; j < numeros.length; j++){
            if(km[i] == numeros[j]){
                verifica++;
            }
        }
    }

    if(km.length != verifica){
        alert("Quilometragem INVÁLIDA! Digite apenas números inteiros; ex: 23451");
        return;
    }

    verifica = 0;

    //====================================================================================================================================================
    //verificaANO
    if(ano.length != 4){
        alert("Ano INVÁLIDO!");
        return;
    }

    if(ano[0] > 2 || ano[1] > 0 || ano[2] > 2){
        alert("Ano INVÁLIDO!");
        return 0;
    }

    for(var i = 0; i < 4; i++){
        for(var j = 0; j < numeros.length; j++){
            if(ano[i] == numeros[j]){
                verifica++;
            }
        }
    }

    if(verifica != 4){
        alert("Ano INVÁLIDO!");
        return 0;
    }

    verifica = 0;

    //=================================================================================================
    //VERIFICA SE A OPÇCAO DE MARCAR ESTA MARCADA
    if (!document.getElementById('condicao').checked) {
        alert("É necessário estar ciente e de acordo com os TERMOS E CONDIÇÕES DE USO e POLÍTICA DE PRIVACIDADE.");
        return;
    }else{
        //window.open("perfildelete.html","_self");
        //window.open("perfildelete.html","_blank");
    }
}


function validaConta(){
    //name, email, senha1, senha2, fone, cpf
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var senha1 = document.getElementById("senha1").value;
    var senha2 = document.getElementById("senha2").value;
    var fone = document.getElementById("fone").value;
    var cpf = document.getElementById("cpf").value;

    var verifica = 0;
    var caracteres = ['1','2','3','4','5','6','7','8','9','0','!','@','#','$','%','&','*','(',')','-','_','+','=','§',']','[','{','}','?','/','.',';',':'];
    var numeros = ['0','1','2','3','4','5','6','7','8','9'];
    var emailRestricoes = ['!','#','$','%','&','*','(',')','-','_','+','=','§',']','[','{','}','?','/',';',':'];
    var arrobaCont = 0;
    var pontoCont = 0;

    //===================================================================================================
    //VALIDA NAME

    if(name.length < 10){
        alert("Digite seu nome completo!");
        return;
    }

    for(var i = 0; i < name.length ; i++){
        for(var j = 0; j < caracteres.length; j++){
            if(name[i] == caracteres[j]){
                verifica++;
            }
        }
    }

    if(verifica != 0){
        alert("Seu nome só pode conter caracteres do alfabeto, NÃO são permitidos: numeros e caracteres especiais!");
        return;
    }

    verifica = 0;

    //===================================================================================================
    //VALIDA EMAIL
    for(var i = 0; i < email.length ; i++){//verifica espaços
        if(email[i] == ' '){
            alert("Não pode conter ESPAÇOS no email!");
            return;
        }
    }

    for(var i = 0; i < email.length ; i++){//verifica espaços
        for(var j = 0; j < emailRestricoes.length; j++){
            if(email[i] == emailRestricoes[j]){
                alert("Contém caracteres INVÁLIDOS no email!");
                return;
            }
            if(email[i] == '@'){
                arrobaCont++;
            }
            if(email[i] == '.'){
                pontoCont++;
            }
        }
    }

    if((arrobaCont != 1 || pontoCont == 0) || email.length < 13){
        alert("Email INVÁLIDO!!");
        return;
    }

    arrobaCont = 0; 
    pontoCont = 0;

    //===================================================================================================
    //VALIDA SENHA

    if(senha1.length < 8 || senha2.length < 8){
        alert("Sua senha DEVE possuir ao menos 8 caracteres!");
        return;
    }

    if(senha1.length != senha2.length){
        alert("As senhas digitas CONTEM tamanhos diferentes!");
        return;
    }
    
    for(var i = 0; i< senha1.length; i++){
        if(senha1[i] != senha2[i]){
            alert("As senhas digitas SÃO diferentes!");
            return;
        }
    }
    

    //===================================================================================================
    //VALIDA FONE

    if(fone.length > 13 || fone.length < 11){
        alert("O numero do telefone está INCORRETO!");
        return;
    }
    
    for(var i = 0; i < fone.length ; i++){
        for(var j = 0; j < numeros.length; j++){
            if(fone[i] != ' '){
                if(fone[i] == numeros[j]){
                    verifica++;
                }
            }
            
        }
    }

    if(verifica != 11){
        alert("Telefone INVÁLIDO");
        return;
    }

    verifica = 0;

    //===================================================================================================
    //VALIDA CPF
    if(cpf.length != 11){
        alert("Informe um CPF CORRETO!");
        return;
    }

    for(var i = 0; i < cpf.length ; i++){
        for(var j = 0; j < numeros.length; j++){
            if(cpf[i] == numeros[j]){
                verifica++;
            }
        }
    }

    if(verifica != 11){
        alert("CPF INVÁLIDO!");
        return;
    }

    verifica = 0;

    //=================================================================================================
    //VERIFICA SE A OPÇCAO DE MARCAR ESTA MARCADA

    if (!document.getElementById('condicao').checked) {
        alert("É necessário estar ciente e de acordo com os TERMOS E CONDIÇÕES DE USO e POLÍTICA DE PRIVACIDADE.");
        return;
    }else{
        //window.open("perfildelete.html","_self");
        //window.open("perfildelete.html","_blank");
    }
}*/