
@extends('layouts.admin')

@section('content')
@if(DB::connection()->getDatabaseName())
<h5>{{"conncted sucessfully to database ".DB::connection()->getDatabaseName()}}</h5>
@endif



@endsection




@section('scripts')
    <script>

    </script>

@endsection

