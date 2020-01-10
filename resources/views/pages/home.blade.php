@extends('templates.welcome')

@section('content')
<div class="container-sm">
    <div class="row">  
        <div class="col-sm-8">
          <a href="{{route('principal')}}"><img class="noticia-principal" src="https://static.portaldacidade.com/unsafe/560x374/https://s3.amazonaws.com/umuarama.portaldacidade.com/img/news/2020-01/expo-umuarama-tera-seis-dias-de-rodeio-dois-deles-com-entrada-gratuita-5e188eea6a698.jpg" alt="Card image cap"></a>
          <a href="{{route('principal')}}"><h1 class="texto-noticia"><span>Texto aqui!</span></h1></a>
        </div>
        <div class="col-sm-4">
        <div class="card margin" style="width: 16rem;">
            <img class="card-img-top" src="https://mindxmaster.s3.amazonaws.com/wp-content/uploads/2019/08/1_python-1-750x422.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Python foi criado no final dos anos oitenta(1989) por Guido van Rossum no Centro de Matemática e Tecnológia da Informação (CWI...</h5>
              <p class="card-text"></p>
              <a href="#" class="btn btn-primary">Leia mais</a>
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