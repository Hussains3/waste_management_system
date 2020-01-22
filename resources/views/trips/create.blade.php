@extends('layouts.admin')




@section('content')
    <h2 class="text-center mb-5">ট্রিপ যুক্ত করুন</h2>

    <form action="">
        @csrf
        <div class="row">
            <div class="col-lg-6 col-sm-12">
                {{Form::label('date', 'তারিখ')}}
                <div class="input-group mb-3">
                    {{Form::date('date', null,array('class' => 'form-control',  'required'  ))}}

                    @error('date')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="col-lg-6 col-sm-12">
                {{Form::label('car_id', 'গাড়ির নম্বর')}}&nbsp;
                <div class="input-group mb-3">
                    {{Form::select('car_id', array( '1'=> '১', '2' => '২', '3'=>'৩'), '১',array('class' => 'form-control', 'required'  ))}}&nbsp;
                    <a href="/drivers/create" class="btn btn-primary"> +</a>
                    @error('car_id')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-sm-12">
                {{Form::label('driver_id', 'চালকের নাম')}}&nbsp;
                <div class="input-group mb-3">
                    {{Form::select('driver_id', array( '1'=> 'ট্রাক', '2' => 'ট্রলী', '3'=>'বক্স'), 'ট্রাক',array('class' => 'form-control', 'required'  ))}}&nbsp;
                    <a href="/drivers/create" class="btn btn-primary"> +</a>

                    @error('driver_id')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="col-lg-6 col-sm-12">
                {{Form::label('weight', 'ওজন')}}&nbsp;
                <div class="input-group mb-3">
                    {{Form::number('weight', null, array('class' => 'form-control','placeholder' => 'ওজন', 'step'=>'0.01','required' ))}}
                    @error('weight')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-sm-12">
                {{Form::label('', 'ট্রিপের ধরন')}}
                <div class="input-group mb-3 form-inline">
                    

                    {{Form::radio('type', '1', array('class' => 'form-control ml-2', 'required'  ))}}
                    {{Form::label('type', 'অন্তর্মুখী',array('class' => 'mx-2'))}}

                    
                    {{Form::radio('type', '0',array('class' => 'form-control mx-5', 'required'  ))}}
                    {{Form::label('type', 'বহির্মুখী',array('class' => 'ml-2'))}}


                    @error('joining_date')
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

