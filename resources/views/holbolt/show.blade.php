@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Мэдээлэл харах</div>
                    
                    <div class="card-body">
                                <p>Овог:{{ $holbolt->ovog }}</p>
                                <p>Нэр:{{ $holbolt->ner }}</p>
                                <p>Хүйс:{{ $holbolt->huis }}</p>
                                <p>Оюутны код:{{ $holbolt->kod}}</p>
                                <p>Мэргэжил:{{ $holbolt->mergejil}}</p>
                                <p>Элссэн он:{{ $holbolt->elssen_on }}</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection