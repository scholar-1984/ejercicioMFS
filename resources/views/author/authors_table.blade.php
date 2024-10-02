<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Autores</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        .btn-create {
            position: fixed;
            bottom: 20px;
            right: 20px;
        }

        .btn-create:hover {
            background-color: #0056b3;
            color: white;
        }

        table {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        th {
            color: dark-gray;
        }

        tr:hover {
            background-color: #f1f1f1;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center">Autores</h1>
        <x-common.table :$headers :$records/>

        <a href="author_create.html" class="btn btn-primary btn-create">
            <i class="fas fa-plus"></i> Crear Autor
        </a>
    </div>
</body>

</html>
