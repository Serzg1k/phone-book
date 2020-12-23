@extends('layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Phones Book</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('books.create') }}"> Create New Book</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>Name</th>
            <th>Surname</th>
            <th>Numbers</th>
            <th width="280px">Action</th>
        </tr>
{{--        @php dump($books) @endphp--}}
{{--        @foreach ($beers as $beer)--}}
{{--            <tr>--}}
{{--                <td>{{ $beer->name }}</td>--}}
{{--                @if($beer->type !== null)--}}
{{--                    <td>{{ $beer->type->name }}--}}
{{--                @else--}}
{{--                    <td>empty</td>--}}
{{--                @endif--}}
{{--                @if($beer->make !== null)--}}
{{--                    <td>{{ $beer->make->name }}</td>--}}
{{--                @else--}}
{{--                    <td>empty</td>--}}
{{--                @endif--}}
{{--                <td>{{ $beer->description }}</td>--}}
{{--                <td>--}}
{{--                    <form action="{{ route('beers.destroy',$beer->id) }}" method="POST">--}}

{{--                        <a class="btn btn-primary" href="{{ route('beers.edit',$beer->id) }}">Edit</a>--}}

{{--                        @csrf--}}
{{--                        @method('DELETE')--}}

{{--                        <button type="submit" class="btn btn-danger">Delete</button>--}}
{{--                    </form>--}}
{{--                </td>--}}
{{--            </tr>--}}
{{--        @endforeach--}}
    </table>


@endsection
