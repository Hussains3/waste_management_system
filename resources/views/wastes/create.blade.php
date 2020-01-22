@extends('layouts.admin')




@section('content')
    <h2 class="text-center mb-5">আবর্জনা</h2>

    <form action="">
        @csrf
        <div class="row">
            <div class="col-lg-6 col-sm-12">
                {{Form::label('date', 'তারিখ')}}

                <div class="input-group mb-3">
                    {{Form::date('date', null,array('class' => 'form-control', 'required'  ))}}
                    

                    @error('date')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="col-lg-6 col-sm-12">
                {{Form::label('waste_type_id', 'আবর্জনার ধরন')}}

                <div class="input-group mb-3">
                    {{Form::select('waste_type_id', array( '1'=> 'পরিশোধনযোগ্য', '2' => 'অপরিশোধনযোগ্য '), 'পরিশোধনযোগ্য',array('class' => 'form-control', 'required'  ))}}&nbsp;
                    <a href="#" class="btn btn-primary"> +</a>
                    

                    @error('waste_type_id')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-sm-12">
                {{Form::label('net_waste', 'নীট বর্জ্য')}}&nbsp;

                <div class="input-group mb-3">
                    {{Form::text('net_waste', null, array('class' => 'form-control','placeholder' => 'নীট বর্জ্য', 'required'  ))}}
                    @error('net_waste')
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

