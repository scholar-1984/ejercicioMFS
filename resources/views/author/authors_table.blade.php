@extends('layouts.app')
@section('content')
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
    <div class="container mt-5">
        <h1 class="text-center">Autores</h1>
        <x-common.table :$headers :$records/>

        <a href="author_create.html" class="btn btn-primary btn-create">
            <i class="fas fa-plus"></i> Crear Autor
        </a>
    </div>
@endsection
