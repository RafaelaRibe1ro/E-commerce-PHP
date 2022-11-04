@extends('layouts.site.site')

@section('titulo')
    <div id="titulo">
    </div>
    <section class="titulo">
        <div class="titulo-container">
            <p>Aqui você encontra as melhores opções para seu setup gamer.</p>
    </section>
@endsection

@section('sobrenos')
    <section class="titulo2">
        <div id="sobrenos">
            <h3>Sobre Nós</h3>
            <p>A Red Gamer nasceu em 2022 com o objetivo de atender às
                necessidade de seus mais diversos clientes,
                priorizando a qualidade e diversidade dos produtos, o prazo de entrega, e assim, a satisfação destes.
                Somos uma empresa de tecnologia que oferta produtos direcionados ao público gamer, garantindo que
                seus clientes possam viver experiências incríveis de uma forma mais segura, confortável e inovadora.</p>
        </div>
    </section>
@endsection

@section('produtos-cadeiras')
    <div id="cadeiras">
        <h3>Cadeira Gamer<h3>
    </div>
    <section id="index-card-section-cadeiras">
        @if (isset($produtos))
            @foreach ($produtos as $produto)
                @if ($produto->categoria_id == 3)
                    <!-- mostrando os produtos -->
                    <div class="index-produto" key="{{ $produto['nome'] }}">
                        <p id="nome-produto">{{ $produto['nome'] }}</p>
                        <img src="/storage/{{ $produto->imagem }}" alt="portfolio image">
                        <p>{{ $produto['descricao'] }}</p>
                        <p id="preco">{{ $produto['preco'] }}</p>
                        <!-- verificando o estoque -->
                        @if ($produto->quantidade > 0)
                            <button type="button" data-toggle="modal" data-target="#modal-detalhes"
                                data-id="{{ $produto->id }}" class="btn-danger">
                                <i class="material-icons">Ver detalhes</i>
                            </button>
                        @else
                            <div class="estoque-esgotado">
                                <p>Esgotado</p>
                            </div>
                        @endif
                    </div>
                @endif
            @endforeach
        @endif
    </section>

    <div id="modal-detalhes" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title col-12 text-dark" id="serviceModalLabel">Visualização do Produto</h5>
                </div>

                <div class="modal-body">
                    <div class="row">

                        <div class="form-group col-md-12 col-sm-12">
                            <h5 class="modal-title col-12 text-dark" id="serviceModalLabel">Nome do Produto</h5>
                            <input type="text" id="detalhes-nome" name="detalhes-nome" class="form-control" readonly>
                        </div>

                        <div class="form-group col-md-12 col-sm-12">
                            <h5 class="modal-title col-12 text-dark" id="serviceModalLabel">Preço</h5>
                            <input type="text" id="detalhes-preço" name="detalhes-preço" class="form-control" readonly>
                        </div>

                        <div class="form-group col-md-12 col-sm-12">
                            <h5 class="modal-title col-12 text-dark" id="serviceModalLabel">Descrição do Produto</h5>
                            <input type="text" id="detalhes-descricao" name="detalhes-descricao" class="form-control"
                                readonly>
                        </div>

                        <div class="form-group col-md-12 col-sm-12">
                            <h5 class="modal-title col-12 text-dark" id="serviceModalLabel">Quantidade disponível</h5>
                            <input type="text" id="detalhes-quantidade" name="detalhes-quantidade" class="form-control"
                                readonly>
                        </div>

                        <div class="form-group col-md-12 col-sm-12">
                            <h5 class="modal-title col-12 text-dark" id="serviceModalLabel">Categoria do Produto</h5>
                            <input type="text" id="detalhes-categoria" name="detalhes-categoria" class="form-control"
                                readonly>
                        </div>

                        <img id="detalhes-imagem" class="form-group col-md-6 col-sm-12" />

                    </div>
                </div>
                <button type="button" class="btn btn-dark" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
@endsection

@section('produtos-teclado')
    <div id="teclado">
        <h3>Teclado Gamer<h3>
    </div>
    <section id="index-card-section-teclado">
        @if (isset($produtos))
            @foreach ($produtos as $produto)
                @if ($produto->categoria_id == 2)
                    <!-- mostrando os produtos -->
                    <div class="index-produto" key="{{ $produto['nome'] }}">
                        <p id="nome-produto">{{ $produto['nome'] }}</p>
                        <img src="/storage/{{ $produto->imagem }}" alt="portfolio image">
                        <p>{{ $produto['descricao'] }}</p>
                        <p id="preco3">{{ $produto['preco'] }}</p>
                        <!-- verificando o estoque -->
                        @if ($produto->quantidade > 0)
                            <button type="button" data-toggle="modal" data-target="#modal-detalhes"
                                data-id="{{ $produto->id }}" class="btn-danger">
                                <i class="material-icons">Ver detalhes</i>
                            </button>
                        @else
                            <div class="estoque-esgotado">
                                <p>Esgotado</p>
                            </div>
                        @endif
                    </div>
                @endif
            @endforeach
        @endif
    </section>

    <div id="modal-detalhes" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title col-12 text-dark" id="serviceModalLabel">Visualização do Produto</h5>
                </div>

                <div class="modal-body">
                    <div class="row">

                        <div class="form-group col-md-12 col-sm-12">
                            <h5 class="modal-title col-12 text-dark" id="serviceModalLabel">Nome do Produto</h5>
                            <input type="text" id="detalhes-nome" name="detalhes-nome" class="form-control" readonly>
                        </div>

                        <div class="form-group col-md-12 col-sm-12">
                            <h5 class="modal-title col-12 text-dark" id="serviceModalLabel">Preço</h5>
                            <input type="text" id="detalhes-preço" name="detalhes-preço" class="form-control"
                                readonly>
                        </div>

                        <div class="form-group col-md-12 col-sm-12">
                            <h5 class="modal-title col-12 text-dark" id="serviceModalLabel">Descrição do Produto</h5>
                            <input type="text" id="detalhes-descricao" name="detalhes-descricao" class="form-control"
                                readonly>
                        </div>

                        <div class="form-group col-md-12 col-sm-12">
                            <h5 class="modal-title col-12 text-dark" id="serviceModalLabel">Quantidade disponível</h5>
                            <input type="text" id="detalhes-quantidade" name="detalhes-quantidade"
                                class="form-control" readonly>
                        </div>

                        <div class="form-group col-md-12 col-sm-12">
                            <h5 class="modal-title col-12 text-dark" id="serviceModalLabel">Categoria do Produto</h5>
                            <input type="text" id="detalhes-categoria" name="detalhes-categoria" class="form-control"
                                readonly>
                        </div>

                        <img id="detalhes-imagem" class="form-group col-md-6 col-sm-12" />

                    </div>
                </div>
                <button type="button" class="btn btn-dark" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
@endsection

@section('produtos-mouse')
    <div id="mouse">
        <h3>Mouse Gamer<h3>
    </div>
    <section id="index-card-section-mouse">
        @if (isset($produtos))
            @foreach ($produtos as $produto)
                @if ($produto->categoria_id == 1)
                    <!-- mostrando os produtos -->
                    <div class="index-produto" key="{{ $produto['nome'] }}">
                        <p id="nome-produto">{{ $produto['nome'] }}</p>
                        <img src="/storage/{{ $produto->imagem }}" alt="portfolio image">
                        <p>{{ $produto['descricao'] }}</p>
                        <p id="preco2">{{ $produto['preco'] }}</p>
                        <!-- verificando o estoque -->
                        @if ($produto->quantidade > 0)
                            <button type="button" data-toggle="modal" data-target="#modal-detalhes"
                                data-id="{{ $produto->id }}" class="btn-danger">
                                <i class="material-icons">Ver detalhes</i>
                            </button>
                        @else
                            <div class="estoque-esgotado">
                                <p>Esgotado</p>
                            </div>
                        @endif
                    </div>
                @endif
            @endforeach
        @endif
    </section>

    <div id="modal-detalhes" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title col-12 text-dark" id="serviceModalLabel">Visualização do Produto</h5>
                </div>

                <div class="modal-body">
                    <div class="row">

                        <div class="form-group col-md-12 col-sm-12">
                            <h5 class="modal-title col-12 text-dark" id="serviceModalLabel">Nome do Produto</h5>
                            <input type="text" id="detalhes-nome" name="detalhes-nome" class="form-control" readonly>
                        </div>

                        <div class="form-group col-md-12 col-sm-12">
                            <h5 class="modal-title col-12 text-dark" id="serviceModalLabel">Preço</h5>
                            <input type="text" id="detalhes-preço" name="detalhes-preço" class="form-control"
                                readonly>
                        </div>

                        <div class="form-group col-md-12 col-sm-12">
                            <h5 class="modal-title col-12 text-dark" id="serviceModalLabel">Descrição do Produto</h5>
                            <input type="text" id="detalhes-descricao" name="detalhes-descricao" class="form-control"
                                readonly>
                        </div>

                        <div class="form-group col-md-12 col-sm-12">
                            <h5 class="modal-title col-12 text-dark" id="serviceModalLabel">Quantidade disponível</h5>
                            <input type="text" id="detalhes-quantidade" name="detalhes-quantidade"
                                class="form-control" readonly>
                        </div>

                        <div class="form-group col-md-12 col-sm-12">
                            <h5 class="modal-title col-12 text-dark" id="serviceModalLabel">Categoria do Produto</h5>
                            <input type="text" id="detalhes-categoria" name="detalhes-categoria" class="form-control"
                                readonly>
                        </div>

                        <img id="detalhes-imagem" class="form-group col-md-6 col-sm-12" />

                    </div>
                </div>
                <button type="button" class="btn btn-dark" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
@endsection


@section('produtos')
    @if ($produto->quantidade >= 1)
        <div id="produtos">
            <h3>Headset Gamer<h3>
        </div>
    @else
        <div id="produtos">
            <h3>Headset Gamer<h3>
                    <p>SEM ESTOQUE</p>
        </div>
    @endif

    <section id="index-card-section-produtos">
        @if (isset($produtos))
            @foreach ($produtos as $produto)
                @if ($produto->categoria_id > 3)
                    <!-- mostrando os produtos -->
                    <div class="index-produto" key="{{ $produto['nome'] }}">
                        <p id="nome-produto">{{ $produto['nome'] }}</p>
                        <img src="/storage/{{ $produto->imagem }}" alt="portfolio image">
                        <p>{{ $produto['descricao'] }}</p>
                        <p id="preco2">{{ $produto['preco'] }}</p>
                        <!-- verificando o estoque -->
                        @if ($produto->quantidade > 0)
                            <button type="button" data-toggle="modal" data-target="#modal-detalhes"
                                data-id="{{ $produto->id }}" class="btn-danger">
                                <i class="material-icons">Ver detalhes</i>
                            </button>
                        @else
                            <div class="estoque-esgotado">
                                <p>Esgotado</p>
                            </div>
                        @endif
                    </div>
                @endif
            @endforeach
        @endif
    </section>

    <div id="modal-detalhes" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title col-12 text-dark" id="serviceModalLabel">Visualização do Produto</h5>
                </div>

                <div class="modal-body">
                    <div class="row">

                        <div class="form-group col-md-12 col-sm-12">
                            <h5 class="modal-title col-12 text-dark" id="serviceModalLabel">Nome do Produto</h5>
                            <input type="text" id="detalhes-nome" name="detalhes-nome" class="form-control" readonly>
                        </div>

                        <div class="form-group col-md-12 col-sm-12">
                            <h5 class="modal-title col-12 text-dark" id="serviceModalLabel">Preço</h5>
                            <input type="text" id="detalhes-preço" name="detalhes-preço" class="form-control"
                                readonly>
                        </div>

                        <div class="form-group col-md-12 col-sm-12">
                            <h5 class="modal-title col-12 text-dark" id="serviceModalLabel">Descrição do Produto</h5>
                            <input type="text" id="detalhes-descricao" name="detalhes-descricao" class="form-control"
                                readonly>
                        </div>

                        <div class="form-group col-md-12 col-sm-12">
                            <h5 class="modal-title col-12 text-dark" id="serviceModalLabel">Quantidade disponível</h5>
                            <input type="text" id="detalhes-quantidade" name="detalhes-quantidade"
                                class="form-control" readonly>
                        </div>

                        <div class="form-group col-md-12 col-sm-12">
                            <h5 class="modal-title col-12 text-dark" id="serviceModalLabel">Categoria do Produto</h5>
                            <input type="text" id="detalhes-categoria" name="detalhes-categoria" class="form-control"
                                readonly>
                        </div>

                        <img id="detalhes-imagem" class="form-group col-md-6 col-sm-12" />

                    </div>
                </div>
                <button type="button" class="btn btn-dark" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
@endsection
