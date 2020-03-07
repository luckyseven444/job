@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form method="POST" action="{{url('circulars/store')}}">
                @csrf
                <input name="job_title" type="text" placeholder="Title">
                <input name="job_description" type="text" placeholder="Description">
                <input name="salary" placeholder="Salary">
                <input name="location" placeholder="Location">
                <input name="country" placeholder="Country">
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
