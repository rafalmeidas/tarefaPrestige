@extends('templates.welcome')
@include('includes.alerts')

@section('content')
    <div class="container-sm">
        <div class="row">
            <div class="col-sm-12">
                <h1>Entre em contato conosco através do formulário abaixo!</h1>
                <form class="formulario" action="{{route('enviar')}}">
                    <input type="hidden" name="redirect" value="http://seudominio"> 
                    <input type="hidden" name="subject" value="teste de assunto">  
                    <input type="hidden" name="email" value="email@doseudominio">   
                    <div class="form-group">
                        <label for="idnome">Nome:</label> <br /> 
                        <input type="text" size="30" id="idnome" name="nome" value="{{old('nome')}}"> 
                    </div>

                    <div class="form-group">
                        <label for="idemail">E-mail:</label> <br /> 
                        <input type="email" size="30" id="idemail" name="email" value="{{old('email')}}"> 
                    </div>
                    
                    <div class="form-group">
                        <label for="idmensagem">Mensagem:</label>
                        <textarea class="form-control" id="idmensagem" name="mensagem" rows="3" value="{{old('mensagem')}}"></textarea>
                    </div>
                      
                    <button class="btn btn-success" type="submit">Enviar</button>

                </form>
            </div>
        </div>
    </div>
@endsection