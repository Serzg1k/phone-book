@extends('layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add New Beer</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('beers.index') }}"> Back</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('beers.update', $beer->id) }}" method="POST">
        @method('PUT')
        @csrf

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" class="form-control" value="{{ $beer->name }}" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="type_id"><strong>Type:</strong></label>
                    <select name="type_id" class="form-control" id="type_id">
                        @foreach ($types as $type)
                            @if($type->id === $beerType)
                                <option selected value="{{$type->id}}">{{$type->name}}</option>
                            @else
                                <option value="{{$type->id}}">{{$type->name}}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="make_id"><strong>Maker:</strong></label>
                    <select name="make_id" class="form-control" id="make_id">
                        @foreach ($makes as $make)
                            @if($make->id === $beerMake)
                                <option selected value="{{$make->id}}">{{$make->name}}</option>
                            @else
                                <option value="{{$make->id}}">{{$make->name}}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Description:</strong>
                    <textarea class="form-control" style="height:150px" name="description" placeholder="Detail">{{ $beer->description }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
@endsection
@section('toHome')
@endsection
