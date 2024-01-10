<!DOCTYPE html>
<html>
<head>
<title>GUSTAVO MELO</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4 {font-family:"Lato", sans-serif}
.mySlides {display:none}
.w3-tag, .fa {cursor:pointer}
.w3-tag {height:15px;width:15px;padding:0;margin-top:6px}
</style>
</head>
<body>


  

  <div class="w3-center w3-padding-64" id="inserir">
    <span class="w3-xlarge w3-bottombar w3-border-dark-grey w3-padding-16">Inserir Produto</span>
  </div>

  <form class="w3-container" action="/enviar" target="_blank" method="POST">
  @csrf <!-- {{ csrf_field() }} -->
    <div class="w3-section">
      <label>Nome do produto</label>
      <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" type="text" name="nome"  required>
    </div>
    <div class="w3-section">
      <label>Categoria</label>
      <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" type="text" name="categoria"  required>
    </div>
    <div class="w3-section">
      <label>Preço Unitário</label>
      <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" type="number" name="preco" required>
    </div>
    <div class="w3-section">
      <label>Descrição</label>
      <input class="w3-input w3-border w3-hover-border-black" style="width:100%;"  type="text" name="descricao"  required>
    </div>
    
    <button id="enviar" type="submit" class="w3-button w3-block w3-black">Inserir</button>
  </form>

</div>



<footer class="w3-container w3-padding-32 w3-light-grey w3-center">
 
  <p><a href="https://www.escola-apel.com/web/" title="W3.CSS" target="_blank" class="w3-hover-text-green">APEL</a></p>
</footer>



</body>
</html>
 
 </body>
</html>
