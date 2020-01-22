@extends('layouts.admin')




@section('content')
    <h2 class="text-center mb-5">গাড়ির ধরন যুক্ত করুন</h2>

    <form action="">
        @csrf
        <div class="row">
            <div class="col-lg-12 col-sm-12">
                {{Form::label('name', 'গাড়ির ধরন')}}&nbsp;
                <div class="input-group mb-3">
                    {{Form::text('name', null,array('class' => 'form-control','placeholder' => 'গাড়ির ধরন', 'required'  ))}}

                    @error('name')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="col-lg-12 col-sm-12">
                {{Form::label('note', 'নোট')}}&nbsp;
                <div class="input-group mb-3">
                    {{Form::textarea('note', null, array('class' => 'form-control', 'required'  ))}}
                    @error('note')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>
        

    <hr>
    <div class="text-center">

        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    </div>
    {{ Form::close() }}

@endsection













@section('scripts')
    <script>

    </script>

@endsection

