@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Мэдээлэл харах</div>
                
                    <div class="card-group">
                        <table class="table table-striped">
                            <thead> 
                                <th>Овог</th>
                                <th>Нэр</th>
                                <th>Хүйс</th>
                                <th>Код</th>
                                <th>Мэргэжил</th>
                                <th>Элссэн он</th>
                                <th>Харах</th>
                                <th>Засах</th>
                                <th>Устгах</th>
                            </thead>
                            <tbody>
                                @foreach ($holbolthiih as $holbolt)
                                <tr>
                                    <td>{{ $holbolt->ovog }}</td>
                                    <td>{{ $holbolt->ner }}</td>
                                    <td>{{ $holbolt->huis }}</td>
                                    <td>{{ $holbolt->kod }}</td>
                                    <td>{{ $holbolt->mergejil }}</td>
                                    <td>{{ $holbolt->elssen_on }}</td>
                                   <td>
                                        <a href="{{ route('holbolt.show', [$holbolt->id]) }}">
                                        <button class="btn btn-success">Харах</button>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="{{ route('holbolt.edit', [$holbolt->id]) }}">
                                            <button class="btn btn-success">Засах</button>
                                        </a> 
                                    </td>
                                     <td>
                                        <form action="{{ route('holbolt.destroy', [$holbolt->id]) }}" method="post">
                                            @csrf
                                            <button class="btn btn-danger">Устгах</button>
                                        </form>
                                    </td>   
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection