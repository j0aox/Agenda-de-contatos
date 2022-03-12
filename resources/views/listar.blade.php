<!DOCTYPE html>
<html lang="pt-br" class="h-100">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/layout.css" />

    <title> Agenda </title>
</head>

<body class="d-flex flex-column h-100">

    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">Agenda</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/listar">Contatos</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <br>
    <br>
    <br>

    <main class="flex-shrink-0">

        <div class="container">
            <a href="/create" class="btn btn-primary mb-3">Novo Contato</a>
            <ul class="list-group">
                @foreach($dados as $dado)
                <li class="list-group-item d-flex justify-content-between">
                    Nome: <td scope="row">{{ $dado['nome'] }}</th>
                        Telefone:
                    <td scope="row">{{ $dado['telefone'] }}</th>
                        E-mail:
                    <td scope="row">{{ $dado['email'] }}</th>
                        Endereço:
                    <td scope="row">{{ $dado['endereco'] }}</th>
                        <span>
                            <a href="{{ url('/edit/'. $dado->id) }}" class="btn btn-warning btn-sm">Atualizar</a>
                            <form action="{{ url('/deletar/' . $dado->id) }}" accept-charset="UTF-8" style="display:inline" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-danger btn-sm" title="Delete">Delete</button>
                        </span>
                </li>
                @endforeach
            </ul>
        </div>

    </main>

    <footer class="footer mt-auto py-3 bg-light">
        <div class="container">
            <span class="text-muted">Produzido por João Amador</span>
        </div>
    </footer>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>

</html>