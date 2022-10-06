@extends('site.layouts.basico')

@section('titulo', $titulo)

@section('conteudo')

        <div class="conteudo-destaque">
        
            <div class="esquerda">
                <div class="informacoes">
                    <h1>Refri Rio</h1>
                    <p>Limpeza e manutenção ideal para sua casa!<p>
                    <div class="chamada">
                        <img src="{{ asset('img/check.png') }}">
                        <span class="texto-branco">Limpeza e manutenção completa</span>
                    </div>
                    <div class="chamada">
                        <img src="{{ asset('img/check.png') }}">
                        <span class="texto-branco">Sua casa refrigerada</span>
                    </div>
                </div>

                <div class="video">
                    <img src="{{ asset('img/imagem.jpg') }}">
                </div>
            </div>

            <div class="direita">
                <div class="contato">
                    <h1>Contato</h1>
                    <p>Caso tenha qualquer dúvida por favor entre em contato com nossa equipe pelo formulário abaixo.<p>
                   @component('site.layouts._components.form_contato', ['classe' => 'borda-branca'])
                   @endcomponent    
                </div>
            </div>
        </div>
    @endsection