@extends('layouts.admin')

@section('admin_content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <form action="{{ route('form.delete') }}">
                <h2>Show All Image from public folder using Laravel</h2>

                <ul>
                @foreach ($images as $image)
                     <li style="width:80px;display:inline-block;margin:5px 0px">
                         <input type="checkbox" id="$image->{{$image->getFilename()}}" name="images[]" value="{{$image->getFilename()}}"/>
                         <label for="$image->{{$image->getFilename()}}"></label>
                         <img src="{{ asset('public/backend/images/blog/' . $image->getFilename()) }}" width="50" height="50">
                     </li>
                @endforeach
                </ul>
            </form>
        </div>
    </div>
</div>


@endsection