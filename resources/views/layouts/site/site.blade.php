<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>RED GAMER</title>

    {{-- <link href="{{ asset('material') }}/css/site.css" rel="stylesheet" /> --}}
    <link href="{{ asset('material') }}/css/material-dashboard.css" rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('site/css/site.css') }}">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/980c3ce44b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet">

</head>

<body>
    @include('layouts.site.header')

    @yield('titulo')

    @yield('produtos-cadeiras')

    @yield('produtos-mouse')

    @yield('produtos-teclado')

    @yield('produtos')

    @yield('sobrenos')

    <script src="{{ asset('site/js/siteScripts.js') }}"></script>

    @include('layouts.site.footer')
    <script src="{{ asset('material') }}/js/core/jquery.min.js"></script>
    <script src="{{ asset('material') }}/js/core/popper.min.js"></script>
    <script src="{{ asset('material') }}/js/core/bootstrap-material-design.min.js"></script>
    <script src="{{ asset('material') }}/js/plugins/perfect-scrollbar.jquery.min.js"></script>

    <script>
        $('#modal-detalhes').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget)
            let modal = $(this)
            const id = button.data('id')
            const url = 'produto/' + id
            $.getJSON(url, (resposta) => {
                console.log(resposta);
                $("#detalhes-nome").val(resposta.nome);
                $("#detalhes-preço").val(resposta.preco);
                $("#detalhes-descricao").val(resposta.descricao);
                $("#detalhes-quantidade").val(resposta.quantidade);
                $("#detalhes-categoria").val(resposta.categoria.categoria);
                $("#detalhes-imagem").attr('src', '/storage/' + resposta.imagem);
            });
        })
    </script>

</html>
