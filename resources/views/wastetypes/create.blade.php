@extends('layouts.admin')




@section('content')
    <h2 class="text-center mb-5">আবর্জনার ধরন যুক্ত করুন</h2>

    <form action="">
        @csrf
        <div class="row">
            <div class="col-lg-12 col-sm-12">
                {{Form::label('waste_date', 'আবর্জনার ধরন')}}

                <div class="input-group mb-3">
                    {{Form::text('waste_date', null,array('class' => 'form-control','placeholder' => 'আবর্জনার ধরন',  'required'  ))}}
                    

                    @error('waste_date')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-sm-12">
                {{Form::label('waste_bye-date', 'নোট/বিবরন')}}&nbsp;

                <div class="input-group mb-3">
                    {{Form::textarea('waste_bye-date', null, array('class' => 'form-control','placeholder' => 'নোট',  'required' ))}}

                    @error('waste_bye-date')
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

