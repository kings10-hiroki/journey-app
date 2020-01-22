<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Journey App</title>
    <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
    <header>
        <nav class="my-navbar">
            <a class="my-navbar-brand" href="/">Journey App</a>
        </nav>
    </header>
    <main>
        <div class="container">
            <div class="row">
                <div class="col col-md-4">
                    <nav class="panel panel-default">
                        <div class="panel-heading">行きたい場所</div>
                        <div class="panel-body">
                            <a href="#" class="btn btn-default btn-block">
                                行きたい場所を追加する
                            </a>
                        </div>
                        <div class="list-group">
                            @foreach($places as $place)
                                <a 
                                    href="{{ route('informations.index', ['id' => $place->id]) }}"
                                    class="list-group-item"
                                    >
                                    {{ $place->place_name }}
                                </a>
                            @endforeach
                        </div>
                    </nav>
                </div>
                <div class="column col-md-8">
                    {{-- ここにマップとメモが表示 --}}
                </div>
            </div>
        </div>
    </main>
</body>
</html>