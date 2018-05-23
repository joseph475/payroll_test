@extends('layouts.app') 

@section('content')
     <div class="container-jos">
        <div class="row myrow">
            <div class="file-field input-field col-sm-5">
                <a class="waves-effect waves btn btn-jos right" href="" style="margin-left:5px;">
                <i class="material-icons left">search</i>Search</a>
                
                <div class="file-path-wrapper">
                    <input placeholder="Search Employee Number" class="file-path validate myinput" type="text">
                </div>
            </div>
        </div> 
        <div class="table-wrapper">
            <table class="responsive-table highlight white z-depth-1">
                <thead>
                    <tr>
                        <td>Emp No</td>
                        <td>Full Name</td>
                        <td>Branch</td>
                        <td>Effectivity Date</td>
                        <td>Rate Type</td>
                        <td>Rate</td>
                        <td>Pay Group</td>
                        <td>Remarks</td>
                        <td style="text-align:center;">Action</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>2018-2428</td>
                        <td>Mark Joseph Castelo </td>
                        <td>Main Office</td>
                        <td>May 19, 2018</td>
                        <td>Monthly</td>
                        <td>15000</td>
                        <td>Semi Monthly</td>
                        <td>Hiring Rate</td>
                        <td>
                            <a class="waves-effect waves btn modal-trigger btn-abi emp_details_btn tooltipped" href="{{url('/employee/details')}}" target="_blank" data-tooltip="Update Job Order">
                            <i class="material-icons left">edit</i></a>
                            <a class="waves-effect waves btn modal-trigger btn-abi emp_details_btn tooltipped" href="{{url('/employee/details')}}" target="_blank" data-tooltip="View History">
                            <i class="icon ion-eye"></i></a>
                        </td>
                    </tr>
                     <tr>
                        <td>2018-2428</td>
                        <td>Abigail Mariano</td>
                        <td>Main Office</td>
                        <td>May 19, 2018</td>
                        <td>Monthly</td>
                        <td>15000</td>
                        <td>Semi Monthly</td>
                        <td>Hiring Rate</td>
                        <td>
                            <a class="waves-effect waves btn modal-trigger btn-abi emp_details_btn tooltipped" href="{{url('/employee/details')}}" target="_blank" data-tooltip="Update Job Order">
                            <i class="material-icons left">edit</i></a>
                            <a class="waves-effect waves btn modal-trigger btn-abi emp_details_btn tooltipped" href="{{url('/employee/details')}}" target="_blank" data-tooltip="View History">
                            <i class="icon ion-eye"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
            
        </div>
    </div>   
@endsection