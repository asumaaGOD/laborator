@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Мэдээлэл засах</div>
                <form action="{{ route('holbolt.update', [$holbolt->id]) }}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label>Овог</label>
                            <input type="text" name="ovog" class="form-control" value="{{ $holbolt->ovog }}">
                            <label>Нэр</label>
                            <input type="text" name="ner" class="form-control" value="{{ $holbolt->ner }}">
                            <label>Хүйс</label>
                            <input type="text" name="huis" class="form-control" value="{{ $holbolt->ner }}">
                            <label>Оюутны код</label>
                            <input type="text" name="kod" class="form-control" value="{{ $holbolt->kod }}">
                            <label>Оюутны мэргэжил</label>'
                            <input type="text" name="mergejil" class="form-control" value="{{ $holbolt->mergejil }}">
                            <label>Элссэн он</label>
                            <input type="text" name="elssen_on" class="form-control" value="{{ $holbolt->elssen_on }}">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Засварлах</button>
                        </div>
                    </div>
                </form>
            </div>
            </div>
        </div>
    </div>
@endsection