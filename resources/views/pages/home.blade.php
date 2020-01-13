@extends('templates.welcome')

@section('content')
  <div class="container-sm">
      <div class="row">  
        <div class="col-sm-6">
          <div class="card margin" style="width: 30rem;">
            <img class="card-img-top" src="https://s2.glbimg.com/kBqPy85aD3jNgYHxqVZib5gwBrw=/0x0:5748x3410/1600x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_59edd422c0c84a879bd37670ae4f538a/internal_photos/bs/2020/b/b/jA8ql7ReuMAjq4weO4sQ/2020-01-09t172221z-687738106-rc2hce9n1ln1-rtrmadp-3-usa-trump.jpg" style="height: 300px">
            <div class="card-body">
              <h5 class="card-title">Trump tuíta em persa e diz que acompanha protestos no Irã</h5>
              <a href="{{route('noticia1')}}" class="btn btn-primary">Leia mais</a>
            </div>
          </div> 
        </div>
        <div class="col-sm-6">
          <div class="card margin" style="width: 30rem;">
            <img class="card-img-top" src="https://s2.glbimg.com/g2DopRAOcWhmyjsU-40Rlezs5sg=/0x0:1600x1067/1000x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_59edd422c0c84a879bd37670ae4f538a/internal_photos/bs/2019/H/i/BjMFSLTd68zGX2TBtUag/volantes-loterias-q98a7776-credito-marcelo-brandt-g1.jpg" style="height: 300px">
            <div class="card-body">
              <h5 class="card-title">Mega-Sena, concurso 2.223: ninguém acerta as seis dezenas e prêmio vai a R$ 14 milhões</h5>
              <a href="{{route('noticia3')}}" class="btn btn-primary">Leia mais</a>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-4">
          <div class="card margin" style="width: 18rem;">
            <img class="card-img-top" src="https://mindxmaster.s3.amazonaws.com/wp-content/uploads/2019/08/1_python-1-750x422.jpg" style="height: 170px">
            <div class="card-body">
              <h5 class="card-title">Saiba mais como o python surgiu e qual o seu cenário atual</h5>
              <a href="{{route('noticia2')}}" class="btn btn-primary">Leia mais</a>
            </div>
          </div> 
        </div>
        <div class="col-sm-4">
          <div class="card margin" style="width: 18rem;">
            <img class="card-img-top" src="https://s2.glbimg.com/q2F3fqouIQ08xV1L8suEOT2IN5k=/0x0:1024x675/1600x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_59edd422c0c84a879bd37670ae4f538a/internal_photos/bs/2020/m/q/AHA73YQeKuq9S6x85Xjw/rainha-elizaeth-ii.jpg" style="height: 170px">
            <div class="card-body">
              <h5 class="card-title">Elizabeth II convoca Harry para reunião com Charles e William</h5>
              <a href="{{route('noticia4')}}" class="btn btn-primary">Leia mais</a>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card margin" style="width: 18rem;">
            <img class="card-img-top" src="https://s2.glbimg.com/YHbjbkiC4EblDTfdHYZQ5b6PD_s=/0x0:1024x767/1600x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_59edd422c0c84a879bd37670ae4f538a/internal_photos/bs/2020/n/G/ujs85LSsSV1Fv5J2AUWw/manila.jpg" style="height: 170px">
            <div class="card-body">
              <h5 class="card-title">Vulcão entra em atividade nas Filipinas e 2 mil pessoas são retiradas</h5>
              <a href="{{route('noticia5')}}" class="btn btn-primary">Leia mais</a>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-4">
          <div class="card margin" style="width: 18rem;">
            <img class="card-img-top" src="https://s2.glbimg.com/OxpSTbuasuJR-J2yLyb36bLkWKc=/0x126:1900x1196/540x304/smart/http://s2.glbimg.com/22VxOOoRVuFCG4zUSCABKRRjBEE=/0x0:1900x1267/1900x1267/s.glbimg.com/jo/g1/f/original/2019/03/03/gavioes_da_fiel_q98a6269_marcelo_brandt_g1.jpg" style="height: 170px">
            <div class="card-body">
              <h5 class="card-title">Campeão 4 vezes no Rio, Paulo Barros vai estrear em SP na Gaviões com Sabrina</h5>
              <a href="{{route('noticia6')}}" class="btn btn-primary">Leia mais</a>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card margin" style="width: 18rem;">
            <img class="card-img-top" src="https://s2.glbimg.com/K9CqSfV76KgiLA80V2cpRvmlHBg=/0x0:1600x900/1000x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_59edd422c0c84a879bd37670ae4f538a/internal_photos/bs/2020/n/6/VFiiqiR1evxjrz6zj7Gw/pirarucu.jpg" style="height: 170px">
            <div class="card-body">
              <h5 class="card-title">Peixe de mais de 100 quilos é fisgado em rio no interior de SP</h5>
              <a href="{{route('noticia7')}}" class="btn btn-primary">Leia mais</a>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card margin" style="width: 18rem;">
            <img class="card-img-top" src="https://s2.glbimg.com/-RHymzKdDpXqx_5dHFUUB_zx8CY=/0x0:1280x960/1600x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_59edd422c0c84a879bd37670ae4f538a/internal_photos/bs/2020/V/R/YJC3f2Q9GAdi6RUsXaGA/praia.jpeg" style="height: 170px">
            <div class="card-body">
              <h5 class="card-title">Rio registra 54,8°C de sensação térmica neste sábado na Zona Oeste<br></h5>
              <a href="{{route('noticia8')}}" class="btn btn-primary">Leia mais</a>
            </div>
            </div>
        </div> 
      </div>  
  </div>
@endsection