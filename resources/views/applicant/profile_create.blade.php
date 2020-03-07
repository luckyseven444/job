@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="flash-message">
                @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                    @if(Session::has('alert-' . $msg))
                        <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }}
                        </p>
                    @endif
                @endforeach
            </div>
            <div class="col-md-8">
                <form method="POST" action="{{url('profiles/store')}}" enctype="multipart/form-data">
                    @csrf
                    <input name="myfile[]" type="file" multiple="multiple" placeholder="Profile Pic">
                    <input name="myfile[]" type="file" multiple="multiple" placeholder="Profile Pic">
                    <input name="skill" type="text" placeholder="Skill">
                    <input type="submit" placeholder="Send">
                </form>
            </div>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </div>
@endsection
