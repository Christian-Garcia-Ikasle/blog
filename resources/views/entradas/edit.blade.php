{{-- resources/views/entradas/edit.blade.php --}}

@extends('layouts.app')

@section('content')

    <h1>Editar entrada</h1>

    <div class="container mx-auto my-8">

        <form action="{{ route('entradas.update', $entrada->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="container grid grid-cols-2 w-1/2 gap-4">
                <label class="text-xl font-bold">Título</label>
                <div>
                    <input class="rounded w-full" type="text" name="titulo" value="{{ $entrada->titulo }}"/>
                    <span class="font-bold text-sm text-red-500">{{ $errors->first('titulo') }}</span>
                </div>
                <label class="text-xl font-bold">Texto</label>
                <textarea class="rounded h-72" name="texto">{{ $entrada->texto }}</textarea>
                <label class="text-xl font-bold">Fecha</label>
                <input type="datetime-local" name="fecha" value="{{ $entrada->fecha ?: now() }}"/>
                <label class="text-xl font-bold">Visible</label>
                <input type="checkbox" name="visible" {{ $entrada->visible ? 'checked' : '' }} />
            </div>
            <div class="pt-8">
                <input class="btn-primary" type="submit" name="guardar" value="Guardar"/>
                <a class="text-gray-500 ml-4" href="{{ route('entradas.index') }}">Cancelar</a>
            </div>
        </form>
    </div>
@endsection

