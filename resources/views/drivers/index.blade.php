@extends('layouts.admin')

@section('content')
<div class="row mb-2">
    <div class="col-lg-9 col-sm-12 text-center">
        <h2 class="">চালকগন</h2>
    </div>
    <div class="col-lg-3 col-sm-12 d-flex justify-content-end">
        <a href="/drivers/create"><button class=" btn btn-primary form-control "><i class="fas fa-plus"></i> Add New</button></a>
    </div>
</div>


<table id="example" class="table table-striped table-bordered " style="width:100%">
    <thead>
        <tr>
            <th>ক্রমিক</th>
            <th>নাম</th>
            <th>ফোন নাম্বার</th>
            <th>ঠিকানা</th>
            <th>এন আই ডি</th>
            <th class="text-center">অ্যাকশন</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Zorita Serrano</td>
            <td>Software Engineer</td>
            <td>San Francisco</td>
            <td>56</td>
            <td>2012/06/01</td>
            <td class="text-center">
                <button type="button" class="btn btn-primary btn-sm">Edit</button>
                <button type="button" class="btn btn-danger btn-sm">Delete</button>
            </td>
        </tr>
        <tr>
            <td>Zorita Serrano</td>
            <td>Software Engineer</td>
            <td>San Francisco</td>
            <td>56</td>
            <td>2012/06/01</td>
            <td class="text-center">
                <button type="button" class="btn btn-primary btn-sm">Edit</button>
                <button type="button" class="btn btn-danger btn-sm">Delete</button>
            </td>
        </tr>
        <tr>
            <td>Zorita Serrano</td>
            <td>Software Engineer</td>
            <td>San Francisco</td>
            <td>56</td>
            <td>2012/06/01</td>
            <td class="text-center">
                <button type="button" class="btn btn-primary btn-sm">Edit</button>
                <button type="button" class="btn btn-danger btn-sm">Delete</button>
            </td>
        </tr>
        <tr>
            <td>Zorita Serrano</td>
            <td>Software Engineer</td>
            <td>San Francisco</td>
            <td>56</td>
            <td>2012/06/01</td>
            <td class="text-center">
                <button type="button" class="btn btn-primary btn-sm">Edit</button>
                <button type="button" class="btn btn-danger btn-sm">Delete</button>
            </td>
        </tr>
        <tr>
            <td>Zorita Serrano</td>
            <td>Software Engineer</td>
            <td>San Francisco</td>
            <td>56</td>
            <td>2012/06/01</td>
            <td class="text-center">
                <button type="button" class="btn btn-primary btn-sm">Edit</button>
                <button type="button" class="btn btn-danger btn-sm">Delete</button>
            </td>
        </tr>
    </tbody>
    <tfoot>
        <tr>
            <th>ক্রমিক</th>
            <th>নাম</th>
            <th>ফোন নাম্বার</th>
            <th>ঠিকানা</th>
            <th>এন আই ডি</th>
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

