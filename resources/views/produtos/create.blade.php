<!DOCTYPE html>
  <html lang="pt-BR">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap CDN</title>
   </head>
   <body>
      <h1>Cadastrar um novo produto!</h1>

<form action="{{route('registrar_produto')}}" method="POST">

@csrf
<label for="">Name</label> <br />
<input type="text" name="nome"> <br />

<label for="">Custo</label> <br />
<input type="text" name="custo"> <br />


<label for="">Preço</label> <br />
<input type="text" name="preco"> <br />


<label for="">Quantidade</label> <br />
<input type="text" name="quantidade"> <br />

<button>Salvar</button>
</form>

  
   </body>
  </html>