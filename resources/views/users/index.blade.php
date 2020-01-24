@extends('layouts.admin')

@section('content')
<div class="row mb-2">
    <div class="col-lg-12 col-sm-12 text-center">
        <h2 class="">ব্যাবহারকারীর তালিকা</h2>
    </div>
    <div class="col-lg-12 col-sm-12 d-flex justify-content-end">
        <a href="/users/create"><button class=" btn btn-primary form-control "><i class="fas fa-plus"></i> তৈরি করুন</button></a>
    </div>
</div>



<table id="example" class="table table-striped table-bordered " style="width:100%">
    <thead>
        <tr>
            <th>ক্রমিক</th>
            <th>নাম</th>
            <th>ইমেইল</th>
            <th>উপাধি</th>
            <th class="text-center">অ্যাকশন</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>Software Engineer</td>
            <td>San Francisco</td>
            <td>56</td>
            <td class="text-center">
                <a href="#" class="btn btn-primary btn-sm">Edit</a>
                <button type="button" class="btn btn-danger btn-sm">Delete</button>
            </td>
        </tr>
        
    </tbody>
    <tfoot>
        <tr>
            <th>ক্রমিক</th>
            <th>নাম</th>
            <th>ইমেইল</th>
            <th>উপাধি</th>
            <th class="text-center">অ্যাকশন</th>
        </tr>
    </tfoot>
</table>
@endsection




@section('scripts')
    <script>
        $(document).ready(function() {
    var table = $('#example').DataTable( {
        rowReorder: {
            selector: 'td:nth-child(2)'
        },
        responsive: true
    } );
} );

    </script>

@endsection

