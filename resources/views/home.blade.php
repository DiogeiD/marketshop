<x-layout_base>
<x-menu>




</x-menu>

<div class="carousel w-full">
  <div id="slide1" class="carousel-item relative w-full">
    <img src="https://http2.mlstatic.com/D_NQ_945326-MLA75548553029_042024-OO.webp" class="w-full" />
    <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
      <a href="#slide4" class="btn btn-circle">❮</a> 
      <a href="#slide2" class="btn btn-circle">❯</a>
    </div>
  </div> 
  <div id="slide2" class="carousel-item relative w-full">
    <img src="https://http2.mlstatic.com/D_NQ_755668-MLA75432560149_032024-OO.webp" class="w-full" />
    <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
      <a href="#slide1" class="btn btn-circle">❮</a> 
      <a href="#slide3" class="btn btn-circle">❯</a>
    </div>
  </div> 
  <div id="slide3" class="carousel-item relative w-full">
    <img src="https://http2.mlstatic.com/D_NQ_667836-MLA74349586053_022024-OO.webp" class="w-full" />
    <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
      <a href="#slide2" class="btn btn-circle">❮</a> 
      <a href="#slide4" class="btn btn-circle">❯</a>
    </div>
  </div> 
  <div id="slide4" class="carousel-item relative w-full">
    <img src="https://http2.mlstatic.com/D_NQ_806000-MLA75393863908_042024-OO.webp" class="w-full" />
    <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
      <a href="#slide3" class="btn btn-circle">❮</a> 
      <a href="#slide1" class="btn btn-circle">❯</a>
    </div>
  </div>
</div>
<div class="bg-white rounded-md shadow-md m-6 p-6">
<div class="font-bolt text-lg">Ofertas do Dia</div>

<div class="grid grid-cols-4 gap-3">
    @foreach($listaProdutos as $produto) 
    <div class="card p-1 bg-base-100 shadow-xl">
  <figure><img class="aspect-square
   w-full object-cover" src="{{
    strpos($produto->foto, 'produtos') ===0 ?
      asset('fotos/'.$produto->foto) : $produto->foto
    }}" alt="Shoes" /></figure>
  <div class="card-body">
    <h2 class="card-title">{{$produto->nome}}</h2>

    <p>{{$produto->descricao}}</p>
    <div class="card-actions justify-between">
      <div>R${{number_format($produto->valor, 2,',','.')}}</div>
      <button class="btn btn-primary">Comprar</button>
    </div>
  </div>
</div>


   @endforeach

</div>

</div>



</div>



</x-layout_base>