@extends('layouts.site.site')

@section('titulo')
    Index
@endsection

@section('conteudo')
    <div id="sobrenos">
        <p style="color: var(--text-color);">Sobre nós</p>
    </div>

    <section id="index-card-section">
        @if (isset($produtos))
            @foreach ($produtos as $produto)
                <div class="index-produto" key="{{ $produto['nome'] }}">
                    <p id="nome-produto">{{ $produto['nome'] }}</p>
                    <img src="/storage/{{ $produto->imagem }}" alt="portfolio image">
                    <p>{{ $produto['descricao'] }}</p>
                    <p>{{ $produto['preco'] }}</p>
                </div>
            @endforeach
        @endif
    </section>
@endsection

{{-- <div class="contraste" style="width: 100%; height: 50vh; background-color: var(--background-header);"></div>
        // <div class="contraste" style="width: 100%; height: 50vh; background-color: var(--background-header);"></div>
        // <div class="contraste" style="width: 100%; height: 50vh; background-color: var(--background-header);"></div> --}}
