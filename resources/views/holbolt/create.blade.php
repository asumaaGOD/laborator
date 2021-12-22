@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Мэдээлэл бүртгэх</div>
                <form action="{{ route('holbolt.store') }}" method="POST">
                    @csrf
                    <div class="card-group">
                        <div class="form-group">
                            <label>Овог</label>
                            <input type="text" name="ovog" class="form-control">
                            @if (count($errors)>0)
                            <div class="alert alert-danger">{{ $message="Та овог талбарыг бичээгүй байна."}}
                                @foreach ($errors->ovog as $error)
                                <p>{{ $error }}</p>
                                @endforeach
                            </div>  
                            @endif
                            <label>Нэр</label>
                            <input type="text" name="ner" class="form-control">
                            @if (count($errors)>0)
                            <div class="alert alert-danger">{{ $message="Та нэр талбарыг бичээгүй байна."}}
                                @foreach ($errors->ner as $error)
                                <p>{{ $error }}</p>
                                @endforeach
                            </div>  
                            @endif
                            <label>Хүйс</label>
                            <input type="text" name="huis" class="form-control">
                            @if (count($errors)>0)
                            <div class="alert alert-danger">{{ $message="Та хүйс талбарыг бичээгүй байна."}}
                                @foreach ($errors->ner as $error)
                                <p>{{ $error }}</p>
                                @endforeach
                            </div>  
                            @endif
                            <label>Оюутны код</label>
                            <input type="text" name="kod" class="form-control">
                            @if (count($errors)>0)
                            <div class="alert alert-danger">{{ $message="Та koд талбарыг бичээгүй байна."}}
                                @foreach ($errors->kod as $error)
                                <p>{{ $error }}</p>
                                @endforeach
                            </div>  
                            @endif
                            <label>Оюутны мэргэжил</label>
                            <input type="text" name="mergejil" class="form-control">
                            @if (count($errors)>0)
                            <div class="alert alert-danger">{{ $message="Та мэргэжил талбарыг бичээгүй байна."}}
                                @foreach ($errors->mergejil as $error)
                                <p>{{ $error }}</p>
                                @endforeach
                            </div>  
                            @endif
                            <label>Элссэн он</label>
                            <input type="text" name="elssen_on" class="form-control">
                            @if (count($errors)>0)
                            <div class="alert alert-danger">{{ $message="Та элссэн он талбарыг бичээгүй байна."}}
                                @foreach ($errors->ellsen_on as $error)
                                <p>{{ $error }}</p>
                                @endforeach
                            </div>  
                            @endif


                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Хадгалах</button>
                        </div>

                    </div>
                </form>
            </div>
            </div>
        </div>
    </div>
@endsection
