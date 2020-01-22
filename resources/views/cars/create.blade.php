@extends('layouts.admin')




@section('content')
    <h2 class="text-center mb-5">গাড়ি যুক্ত করুন</h2>

    <form action="">
        @csrf
        <div class="row">
            <div class="col-lg-6 col-sm-12">
                {{Form::label('car_type_id', 'গাড়ির ধরন')}}&nbsp;
                <div class="input-group mb-3">
                    {{Form::select('car_type_id', array( '1'=> 'ট্রাক', '2' => 'ট্রলী', '3'=>'বক্স'), 'ট্রাক',array('class' => 'form-control', 'required'  ))}}&nbsp;
                    <a href="#" class="btn btn-primary"> +</a>

                    @error('car_type_id')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="col-lg-6 col-sm-12">
                {{Form::label('date', 'ক্রয়ের তারিখ')}}&nbsp;
                <div class="input-group mb-3">
                    {{Form::date('date', null, array('class' => 'form-control', 'required'  ))}}
                    @error('date')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-sm-12">
                {{Form::label('price', 'ক্রয় মূল্য')}}&nbsp;
                <div class="input-group mb-3">
                    {{Form::text('price', null, array('class' => 'form-control','placeholder' => 'ক্রয় মূল্য', 'required'  ))}}
                    @error('price')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="col-lg-6 col-sm-12">
                {{Form::label('number', 'গাড়ির নম্বর')}}&nbsp;
                <div class="input-group mb-3">
                    {{Form::text('number', null, array('class' => 'form-control','placeholder' => 'গাড়ির নম্বর', 'required'  ))}}
                    @error('number')
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

