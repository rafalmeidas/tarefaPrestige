@extends('templates.welcome')

@section('content')
<div class="container-sm">
    <div class="row">  
        <div class="col-sm-6">
          <div class="card margin" style="width: 30rem;">
            <img class="card-img-top" src="https://s2.glbimg.com/kBqPy85aD3jNgYHxqVZib5gwBrw=/0x0:5748x3410/1600x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_59edd422c0c84a879bd37670ae4f538a/internal_photos/bs/2020/b/b/jA8ql7ReuMAjq4weO4sQ/2020-01-09t172221z-687738106-rc2hce9n1ln1-rtrmadp-3-usa-trump.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Trump tuíta em persa e diz que acompanha protestos no Irã</h5>
              <p class="card-text">Presidente norte-americano chama iranianos de corajosos e inspiradores e manifesta apoio.</p>
              <a href="{{route('noticia1')}}" class="btn btn-primary">Leia mais</a>
            </div>
        </div> 
        </div>
        <div class="col-sm-6">
        <div class="card margin" style="width: 30rem;">
            <img class="card-img-top" src="https://s2.glbimg.com/g2DopRAOcWhmyjsU-40Rlezs5sg=/0x0:1600x1067/1000x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_59edd422c0c84a879bd37670ae4f538a/internal_photos/bs/2019/H/i/BjMFSLTd68zGX2TBtUag/volantes-loterias-q98a7776-credito-marcelo-brandt-g1.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Mega-Sena, concurso 2.223: ninguém acerta as seis dezenas e prêmio vai a R$ 14 milhões</h5>
              <p class="card-text">Veja as dezenas sorteadas do concurso 2.223.</p>
              <a href="" class="btn btn-primary">Leia mais</a>
            </div>
        </div> 
        </div>
    </div>
    <div class="row">
      <div class="col-sm-4">
          <div class="card margin" style="width: 16rem;">
              <img class="card-img-top" src="https://mindxmaster.s3.amazonaws.com/wp-content/uploads/2019/08/1_python-1-750x422.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title"></h5>
                <p class="card-text">Python foi criado no final dos anos oitenta(1989) por Guido van Rossum no Centro de Matemática e Tecnológia da Informação (CWI...</p>
                <a href="{{route('noticia2')}}" class="btn btn-primary">Leia mais</a>
              </div>
            </div> 
      </div>
      <div class="col-sm-4">
          <div class="card margin" style="width: 16rem;">
              <img class="card-img-top" src="https://mindxmaster.s3.amazonaws.com/wp-content/uploads/2019/08/1_python-1-750x422.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
      </div>
      <div class="col-sm-4">
          <div class="card margin" style="width: 16rem;">
              <img class="card-img-top" src="https://mindxmaster.s3.amazonaws.com/wp-content/uploads/2019/08/1_python-1-750x422.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
      </div>

    </div>
    <div class="row">
        <div class="col-sm-4">
            <div class="card margin" style="width: 16rem;">
                <img class="card-img-top" src="https://mindxmaster.s3.amazonaws.com/wp-content/uploads/2019/08/1_python-1-750x422.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
        </div>
        <div class="col-sm-4">
            <div class="card margin" style="width: 16rem;">
                <img class="card-img-top" src="https://mindxmaster.s3.amazonaws.com/wp-content/uploads/2019/08/1_python-1-750x422.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
        </div>
        <div class="col-sm-4">
            <div class="card margin" style="width: 16rem;">
                <img class="card-img-top" src="https://mindxmaster.s3.amazonaws.com/wp-content/uploads/2019/08/1_python-1-750x422.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
        </div> 
      </div>
    
</div>
@endsection