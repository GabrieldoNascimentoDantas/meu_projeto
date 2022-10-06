@extends('site.layouts.basico')
@section('titulo', $titulo)
@section('conteudo')

        <div class="conteudo-pagina">
            <div class="titulo-pagina">
                <h1>Refri Rio</h1>
            </div>

            <div class="informacao-pagina">
                <p>Precisa de manutenção ou limpeza nas suas maquinas de refrigeração? O Refri Rio é aquele que pode te ajudar nisso! <br>Profissionais especialistas que com certeza vão cuidar na limpeza e manutenção da sua maquina!</p>
                <p>Caso precise de uma visita marque com um de nossos Profissionais!</p>
            </div>  
        </div>

        <div class="rodape">
            <div class="redes-sociais">
                <h2>Redes sociais</h2>
                <img src="{{ asset('img/facebook.png') }}">
                <img src="{{ asset('img/linkedin.png') }}">
                <img src="{{ asset('img/youtube.png') }}">
            </div>
            <div class="area-contato">
                <h2>Contato</h2>
                <span>+55 (21) 98132-4878</span>
                <br>
                <span>supergestao@dominio.com.br</span>
            </div>
            <div class="localizacao">
                <h2>Localização</h2>
                <img src="{{ asset('img/mapa.png') }}">
            </div>
        </div>
   @endsection