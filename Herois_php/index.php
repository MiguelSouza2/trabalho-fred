<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <form action="submit.php" method="POST" class="form-group container mt-5 border p-3">
        <label for="universe" class="form-label">Universo do herói</label>
        <input type="text" name="universe" class="form-control" placeholder="Insira um universo...">
        <label for="name">Nome do herói</label>
        <input type="text" name="name" class="form-control" placeholder="Nome do herói...">
        <label for="cont">Digite a quantidade de vezes que irá se repetir</label>
        <input type="number" name="cont" class="form-control">
        <button class="btn btn-primary m-auto d-block w-50 mt-4">submit</button>
    </form>

    <section class="result">

    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>