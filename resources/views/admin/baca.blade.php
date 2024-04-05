@extends('admin.layout.app')
@section( 'content')

@foreach ($posts as $item)
<div class="container mt-3 bg-white" style="min-height: 10vh"> <!-- Container baru untuk setiap item -->
    <tr>
        <td>
            <figure>
                <div>
                    <blockquote class="blockquote mt-3">
                        <p>{{$item['title']}}</p>
                    </blockquote>
                    <figcaption class="blockquote-footer">
                        {{$item['content']}}
                    </figcaption>
                </div>
            </figure>
        </td>
</div>
@endforeach

@endsection
