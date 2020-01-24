
@extends('layouts.admin')

@section('content')

<div class="container">
    <div class="row mb-5">
        <div class="col-lg-3">
            <a href="trips/create">
                <div class="card mb-2 card-button" style="">
                    <span class="mx-auto" style="font-size:5rem;">
                        <i class="fas fa-truck card-img-top"></i>
                    </span>
                    {{-- <img class="card-img-top" src=".../100px180/?text=Image cap" alt="Card image cap"> --}}
                    <h5 class="card-title text-center">ট্রিপ যুক্ত করুন</h5>
                </div>
            </a>
        </div>
        <div class="col-lg-3">
            <a href="trips/index">
                <div class="card mb-2 card-button" style="">
                    <span class="mx-auto" style="font-size:5rem;">
                        <i class="fas fa-truck-moving"></i>
                    </span>
                    {{-- <img class="card-img-top" src=".../100px180/?text=Image cap" alt="Card image cap"> --}}
                    <h5 class="card-title text-center">ট্রিপের তালিকা</h5>
                </div>
            </a>
        </div>
        <div class="col-lg-3">
            <a href="drivers/create">
                <div class="card mb-2 card-button" style="">
                    <span class="mx-auto" style="font-size:5rem;">
                        <i class="fas fa-user-friends"></i>
                    </span>
                    {{-- <img class="card-img-top" src=".../100px180/?text=Image cap" alt="Card image cap"> --}}
                    <h5 class="card-title text-center">চালক যুক্ত করুন</h5>
                </div>
            </a>
        </div>
        <div class="col-lg-3">
            <a href="wastes/create">
                <div class="card mb-2 card-button" style="">
                    <span class="mx-auto" style="font-size:5rem;">
                        <i class="fas fa-archive"></i>
                    </span>
                    {{-- <img class="card-img-top" src=".../100px180/?text=Image cap" alt="Card image cap"> --}}
                    <h5 class="card-title text-center">বর্জ্য যুক্ত করুন</h5>
                </div>
            </a>
        </div>
    </div>


    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>ট্রিপ নাম্বার</th>
                <th>চালকের নাম</th>
                <th>ওজন</th>
                <th>তারিখ</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Software Engineer</td>
                <td>San Francisco</td>
                <td>56</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Software Engineer</td>
                <td>San Francisco</td>
                <td>56</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Software Engineer</td>
                <td>San Francisco</td>
                <td>56</td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <th>ট্রিপ নাম্বার</th>
                <th>চালকের নাম</th>
                <th>ওজন</th>
                <th>তারিখ</th>
            </tr>
        </tfoot>
    </table>

</div>









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

