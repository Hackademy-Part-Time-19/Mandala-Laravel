<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

    <div class="d-grid gap-2">
        <button class="btn btn-primary" id="button" type="button"
            style="position: absolute; z-index: 1; width: 100%">Torna agli articoli</button>
    </div>

    <div class="card text-bg-dark" style="height: 100vh; width: 100vw;">
        <img src="https://previews.123rf.com/images/margolana/margolana1511/margolana151100161/48450899-abbigliamento-e-accessori-moda-sfondo-seamless-semplicit%C3%A0.jpg"
            class="card-img" alt="Sfondo" style="height: 100%; width: 100%;">
        <div class="card-img-overlay"
            style="display: flex;flex-direction:column; align-items: center; justify-content: center; ">
            <h5 class="card-title"
                style="align-items: center; justify-content: center; color: black; font-size: 100px;">
                {{$articolo["titolo"]}}</h5>
            <p class="card-text" style="align-items: center; justify-content: center; color: black; font-size: 50px; ">
                {{$articolo["descrizione"]}}</p>
            <p class="card-text" style="align-items: center; justify-content: center; color: black; font-size: 35px; ">
                <small>{{$articolo["categoria"]}}</small></p>
        </div>
    </div>


    <script>
        function TornaIndietro() {
            window.location.href = "http://127.0.0.1:8000/articoli";
        }
        document.getElementById(`button`).addEventListener(`click`, TornaIndietro)</script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>