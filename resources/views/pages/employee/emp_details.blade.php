@extends('layouts.app') 

@section('content')
    <div class="container-jos white">
        <h5 class="h5-header">Employee's Information</h5>
        <div class="emp_details">
           
            <div class="row myrow">
                <div class="col-sm-2">
                    <img class="responsive-img emp_photo" src="https://thecrucible.org/wp-content/uploads/default_bio_600x600.jpg">
                </div>
                <div class="col-sm-5">
                    <table class="emp_details_table">
                        <tr>
                            <td>Emp No</td>
                            <td>2018-3042</td>
                        </tr>
                        <tr>
                            <td>Full Name</td>
                            <td>Mark Joseph R Castelo</td>
                        </tr>
                        <tr>
                            <td>Position</td>
                            <td>Programmer</td>
                        </tr>
                    </table>
                </div>
                <div class="col-sm-5" style="padding-top:10px;">
                    <a class="waves-effect waves btn modal-trigger btn-jos right" href="#" style="margin-left:10px;">
                        <i class="material-icons left">description</i>Generate Report
                    </a>
                    <a class="waves-effect waves btn modal-trigger btn-jos right" href="#">
                        <i class="material-icons left">edit</i>Update
                    </a>
                </div>
            </div>
            <div class="divider">

            </div>
        </div>
    </div>
@endsection