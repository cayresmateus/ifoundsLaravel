<x-layout titulo="Admin" textoLadoImagem="Administração">
  
    <!--<div class="d-flex justify-content-between p-2 m-2"> 
      
    <button class="btn btn-primary p-2 m-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#staticBackdrop"
      aria-controls="staticBackdrop">
      Cadastrar
    </button>
      <a class="btn btn-danger p-2 m-2" href="/" role="button">Sair Pagina Admin</a> 
    </div> -->
    
    @foreach($itensPerdidos as $item)
    <a href="" class="card" >
    <div class="col">
      <div class="card_Box" name="{{$item['id']}}">
        <div class="card_Img"> 
          <img src="img/placeHolder.jpg" alt="Item Perdido Imagem">
        </div>
        <div class="card_Content">
            <p class="card_Title">{{$item['titulo']}}</p>
            <div class="card_Local">
              <img src="img/iconLocation.png" alt="Localização" class="iconLocation">
              <p> {{$item['localizacao']}}</p>
            </div> 
        </div>
      </div>
      </div>
    </a>
    @endforeach

</x-layout>