@extends('layouts.admin')




@section('content')
<h2 class="text-center">গাড়ির রিপোর্ট</h2>

<div class="row">
<form class="form-inline mb-2 ml-3 input-daterange">
    <div class="form-group mb-2">
    <input type="text" name="start_date" id="start_date" class="form-control" />
    </div>
    <div class="form-group mx-sm-3 mb-2">
    <input type="text" name="end_date" id="end_date" class="form-control" />
    </div>
    <input type="button" name="search" id="search" value="Search" class="btn btn-primary mb-2" />
</form>
  
</div>

<table id="example" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr>
            <th>ক্রমিক</th>
            <th>তারিখ</th>
            <th>নিট পরিমান</th>
            <th>পরিশোধনযোগ্য</th>
            <th>অপরিশোধনযোগ্য</th>
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
        <tr>
            <td>Zorita Serrano</td>
            <td>Software Engineer</td>
            <td>San Francisco</td>
            <td>56</td>
            <td>2012/06/01</td>
        </tr>
        <tr>
            <td>Zorita Serrano</td>
            <td>Software Engineer</td>
            <td>San Francisco</td>
            <td>56</td>
            <td>2012/06/01</td>
        </tr>
        <tr>
            <td>Zorita Serrano</td>
            <td>Software Engineer</td>
            <td>San Francisco</td>
            <td>56</td>
            <td>2012/06/01</td>
        </tr>
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
            <th>তারিখ</th>
            <th>নিট পরিমান</th>
            <th>পরিশোধনযোগ্য</th>
            <th>অপরিশোধনযোগ্য</th>
        </tr> 
    </tfoot>
</table>

@endsection













@section('scripts')
    <script>
        //print button
        $(document).ready(function() {

            $('#example').DataTable( {
                dom: 'Bfrtip',
                buttons: [
                    'excelHtml5',
                    'csvHtml5',
                    'print'
                ]
            } );
        //print button end
        
        var table = $('#example').DataTable();
        // Event listener to the two range filtering inputs to redraw on input
        $('#min, #max').keyup( function() {
            table.draw();
        } );


        });
    </script>

@endsection

