
function formataCnpj(){
  var cnpjl = $("#cnpj").val().length;
  VMasker(document.querySelector("#cnpj")).maskPattern("99.999.999/9999-99");

  if(cnpjl == 18){
    buscaCnpj();
  }
}

function buscaCnpj(){
  var cnpj = VMasker.toNumber($("#cnpj").val());
  $.get("App/APIS/cnpj/consulta.php?cnpj="+cnpj, function(data, status){
    var obj = jQuery.parseJSON(data);

    if(obj.status == "OK"){
      document.getElementById("nomeEmpresarial").value = obj.nome;
      document.getElementById("nomeFantasia").value = obj.fantasia;
      document.getElementById("telefone").value = obj.telefone;
      document.getElementById("cnae").value = obj.atividade_principal[0].code+" - "+obj.atividade_principal[0].text;
      document.getElementById("logradouro").value = obj.logradouro;
      document.getElementById("numero").value = obj.numero;
      document.getElementById("bairro").value = obj.bairro;
      document.getElementById("cep").value = obj.cep;
      document.getElementById("cidade").value = obj.municipio;
      document.getElementById("estado").value = obj.uf;

      document.getElementById("mensagem").innerHTML = "";
    }else{
      document.getElementById("mensagem").innerHTML = "Dados não encontrados!";
      document.getElementById("cnpj").value = "";
    }
  });
}

function addObs(){

  if(!document.getElementById("obsTexto")){
    document.getElementById("obsDiv").innerHTML = '<textarea name="obsTexto" id="obsTexto" rows="8" cols="80"></textarea>';
  }else{
    document.getElementById("obsDiv").innerHTML = '';
  }



}
