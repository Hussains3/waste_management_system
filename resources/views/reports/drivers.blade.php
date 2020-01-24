@extends('layouts.admin')




@section('content')
<h2 class="text-center">চালকের রিপোর্ট</h2>

<div class="row">
    <form action="" class="form-inline mb-2 ml-3 input-daterange">
        @csrf
        <div class="form-group mb-2">
        {{Form::text('start_date', null, array('class' => 'form-control','id' =>'start_date','required'  ))}}
        </div>
        <div class="form-group mx-sm-3 mb-2">
        {{Form::text('end_date', null, array('class' => 'form-control','id' =>'end_date','required'  ))}}
        </div>
        {{Form::submit('Search',['class' => 'btn btn-primary mb-2','id' =>'search'])}}
    {{ Form::close() }}
      
    </div>

<table id="example" class="table table-striped table-bordered " style="width:100%">
    <thead>
        <tr>
            <th>ক্রমিক</th>
            <th>নাম</th>
            <th>ফোন নাম্বার</th>
            <th>ঠিকানা</th>
            <th>এন আই ডি</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Zorita Serrano</td>
            <td>Software Engineer</td>
            <td>San Francisco</td>
            <td>56</td>
            <td>2012/06/01</td>
        </tr>
    </tbody>
    <tfoot>
        <tr>
            <th>ক্রমিক</th>
            <th>নাম</th>
            <th>ফোন নাম্বার</th>
            <th>ঠিকানা</th>
            <th>এন আই ডি</th>
        </tr>
    </tfoot>
</table>

@endsection














@section('scripts')
    <script>
        $(document).ready(function() {
            var table = $('#example').DataTable( {
                dom: 'Bfrtip',
                buttons: [
                    'excelHtml5',
                    'csvHtml5',
                    'print'
                ],
                rowReorder: {
                    selector: 'td:nth-child(2)'
                },
                responsive: true
            } );
        } );
    </script>

@endsection

