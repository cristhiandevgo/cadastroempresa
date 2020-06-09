function buscaCnpj(){
  var cnpj = document.getElementById("cnpj").value;
  $.get("App/APIS/cnpj/consulta.php?cnpj="+cnpj, function(data, status){
    var data2 = data;
    var obj = jQuery.parseJSON(data);

    if(obj.status == "OK"){
      document.getElementById("nomeEmpresarial").value = obj.nome;
      document.getElementById("nomeFantasia").value = obj.fantasia;
      document.getElementById("telefone").value = obj.telefone;
      document.getElementById("cnae").value = obj.text;
      document.getElementById("logradouro").value = obj.logradouro;
      document.getElementById("numero").value = obj.numero;
      document.getElementById("bairro").value = obj.bairro;
      document.getElementById("cep").value = obj.cep;
      document.getElementById("cidade").value = obj.municipio;
      document.getElementById("estado").value = obj.uf;
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
