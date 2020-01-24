@extends('layouts.admin')




@section('content')
    <h2 class="text-center mb-5">ব্যাবহারকারী যুক্ত করুন</h2>

    <form action="">
        @csrf
        <div class="row">
            <div class="col-lg-6 col-sm-12">
                {{Form::label('name', 'ব্যাবহারকারীর নাম')}}&nbsp;
                <div class="input-group mb-3">
                    {{Form::text('name',null,array('class' => 'form-control','placeholder' => 'ব্যাবহারকারীর নাম', 'required'  ))}}

                    @error('name')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="col-lg-6 col-sm-12">
                {{Form::label('email', 'ইমেইল')}}&nbsp;
                <div class="input-group mb-3">
                    {{Form::email('email', null, array('class' => 'form-control','placeholder' => 'ইমেইল',  'required'  ))}}
                    @error('email')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>


            <div class="col-lg-6 col-sm-12">
                {{Form::label('pass', 'পাসওয়ার্ড')}}&nbsp;
                <div class="input-group mb-3">
                    {{Form::password('pass', null, array('class' => 'form-control','placeholder' => 'পাসওয়ার্ড', 'required'  ))}}
                    @error('pass')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>


            <div class="col-lg-6 col-sm-12">
                {{Form::label('', 'রোল/উপাধি')}}
                <div class="input-group mb-3 form-inline">
                    

                    {{Form::radio('role', '1', array('class' => 'form-control ml-2', 'required'  ))}}
                    {{Form::label('role', 'অ্যাডমিন',array('class' => 'mx-2'))}}

                    
                    {{Form::radio('role', '0',array('class' => 'form-control mx-5', 'required'  ))}}
                    {{Form::label('role', 'তথ্য অনুপ্রবেশকারী',array('class' => 'ml-2'))}}


                    @error('role')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>

    <hr>
    <div class="text-right">

        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    </div>
    {{ Form::close() }}

@endsection













@section('scripts')
    <script>

    </script>

@endsection

