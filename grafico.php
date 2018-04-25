<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Grafico de Barras com CSS</title>
<link href="estilo.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
</head>
<style>
#principal{
  width:500px;
  height:60px;
  margin-left:10px;
  margin-top: 50px;
  font-family:Verdana, Helvetica, sans-serif;
  font-size:14px;
}
#principal2{
  width:500px;
  margin-left:10px;
  font-family:Verdana, Helvetica, sans-serif;
  font-size:14px;
  border: solid 1px black;
}

.barra1, .barra2, .barra3{ 	
  color:#FFF;
  height:30px;
  line-height:30px;
  text-align: center;
  
}
.barra1{ background-color: #b3f28a; }
.barra2{ background-color: #f9a9f4; }
.barra3{ background-color: #a4bbf9; }
.nomesStatus{
    margin-right: 10px;
    padding: 1%;
    border: solid 1px black;
}
</style>
<body>

<div id="principal">
    <p>
        <b  class="nomesStatus" style="background-color: #b3f28a;">Trabalhando</b>
        <b class="nomesStatus" style="background-color: #f9a9f4;">Parado</b>
        <b class="nomesStatus" style="background-color: #a4bbf9;">Desligado</b>
    </p>

    <div class="container" style="border: solid 1px black">
        <div class="row">
            <div title="70%" style="width:70%" class="barra1"></div> 
            <div title="20%" style="width:20%" class="barra2"></div>
            <div title="10%" style="width:10%" class="barra3"></div>
        </div>
    </div>  

</body>
</html>