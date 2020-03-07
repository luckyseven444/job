@section('circulars')

    <h1> Your Applicable jobs</h1>
    @foreach ($circulars as $circular)
        <h1>Job Title: {{ $circular->job_title }}</h1>
        <a class="btn btn-primary" href="{{route('apply', ['circularId'=>$circular->id])}}" >Link</a>
    @endforeach
@endsection