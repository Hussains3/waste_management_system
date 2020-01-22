@extends('layouts.admin')




@section('content')
    <h2 class="text-center mb-5">চালক যুক্ত করুন</h2>

    <form action="">
        @csrf
        <div class="row">
            <div class="col-lg-6 col-sm-12">
                {{Form::label('name', 'চালকের নাম')}}
                <div class="input-group mb-3">
                    {{Form::text('name', null,array('class' => 'form-control','placeholder' => 'চালকের নাম',  'required'  ))}}

                    @error('name')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="col-lg-6 col-sm-12">
                {{Form::label('phone', 'ফোন নাম্বার')}}&nbsp;
                <div class="input-group mb-3">
                    {{Form::text('phone', null, array('class' => 'form-control','placeholder' => 'ফোন নাম্বার',  'required'  ))}}
                    @error('phone')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-sm-12">
                {{Form::label('age', 'বয়স')}}&nbsp;
                <div class="input-group mb-3">
                    {{Form::text('age', null, array('class' => 'form-control','placeholder' => 'বয়স', 'required'  ))}}
                    @error('age')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="col-lg-6 col-sm-12">
                {{Form::label('nid', 'এন আই ডি')}}&nbsp;
                <div class="input-group mb-3">
                    {{Form::text('nid', null, array('class' => 'form-control','placeholder' => 'এন আই ডি', 'required'  ))}}
                    @error('nid')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-sm-12">
                {{Form::label('joining_date', 'যোগদানের তারিখ')}}&nbsp;
                <div class="input-group mb-3">
                    {{Form::date('joining_date', null, array('class' => 'form-control', 'required'  ))}}
                    @error('joining_date')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="col-lg-6 col-sm-12">
                {{Form::label('salary', 'বেতন')}}&nbsp;
                <div class="input-group mb-3">
                    {{Form::text('salary', null, array('class' => 'form-control','placeholder' => 'বেতন', 'required'  ))}}
                    @error('salary')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-sm-12">
                {{Form::label('address', 'ঠিকানা')}}&nbsp;
                <div class="input-group mb-3">
                    {{Form::text('address', null, array('class' => 'form-control','placeholder' => 'ঠিকানা', 'required'  ))}}
                    @error('address')
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

