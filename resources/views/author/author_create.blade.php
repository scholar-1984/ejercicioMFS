@extends('layouts.app', ['titulo' => 'Crear nuevo autor'])
@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            margin-top: 50px;
            max-width: 600px;
            background: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .form-group i {
            position: absolute;
            margin: 10px;
            color: #6c757d;
        }

        .form-control {
            padding-left: 30px;
        }
    </style>
    <div class="container">
        @session('status')
            <div class="p-4 bg-success text-center">
                {{ $value }}
            </div>
        @endsession
        <h2 class="text-center mb-4">Crear Nuevo Autor</h2>
        <x-common.form :$action :$method :$verb :$controls/>
    </div>
@endsection
