@extends('layouts.app') @section('content')
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
                    <td>Rate Type</td>
                    <td>Rate</td>
                    <td>Effectivity Date</td>
                    <td>Remarks</td>
                    <td style="text-align:center;">Action</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>2018-2428</td>
                    <td>Mark Joseph Castelo </td>
                    <td>Main Office</td>
                    <td>Monthly</td>
                    <td>15000</td>
                    <td>May 19, 2018</td>
                    <td>Hiring Rate</td>
                    <td>
                        <a class="waves-effect waves btn modal-trigger btn-abi emp_details_btn tooltipped" href="#modal1" data-tooltip="Add New Job Order">
                            <i class="material-icons left">add</i>
                        </a>
                        <a class="waves-effect waves btn btn-abi emp_details_btn tooltipped" href="#" data-tooltip="Remove Job Order">
                            <i class="material-icons left">delete</i>
                        </a>
                        <a class="waves-effect waves btn  btn-abi emp_details_btn tooltipped" href="{{url('/employee/details')}}" target="_blank"
                            data-tooltip="View History">
                            <i class="icon ion-eye"></i>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>2018-2428</td>
                    <td>Abigail Mariano</td>
                    <td>Main Office</td>
                    <td>Monthly</td>
                    <td>15000</td>
                    <td>May 19, 2018</td>
                    <td>Hiring Rate</td>
                    <td>
                        <a class="waves-effect waves btn modal-trigger btn-abi emp_details_btn tooltipped" href="#modal1" data-tooltip="Add New Job Order">
                            <i class="material-icons left">add</i>
                        </a>
                        <a class="waves-effect waves btn btn-abi emp_details_btn tooltipped" href="#" data-tooltip="Remove Job Order">
                            <i class="material-icons left">delete</i>
                        </a>
                        <a class="waves-effect waves btn modal-trigger btn-abi emp_details_btn tooltipped" href="{{url('/employee/details')}}" target="_blank"
                            data-tooltip="View History">
                            <i class="icon ion-eye"></i>
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <div id="modal1" class="modal jos-modal">
        <a href="">
            <i class="material-icons right">clear</i>
        </a>
        <div class="modal-content">
            <h4 class="left-align" style="margin-bottom:40px;">Add New Job Order</h4>
            <div class="row wrap">
                <div class="col-sm-4">
                    <div class="input-field t1">
                        Employee Number<input id="empno" type="text" class="validate" disabled>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="input-field t1">
                        Full Name<input id="fullname" type="text" class="validate" disabled>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="input-field t1">
                        Branch
                        <select>
                            <option value="1" selected>Main Office</option>
                            <option value="2">Option 2</option>
                            <option value="3">Option 3</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="input-field t1">
                        Rate Type
                        <select>
                            <option value="1" selected>Monthly</option>
                            <option value="2">Daily</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="input-field t1">
                        Rate <input id="rate" type="text" class="validate">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="input-field t1">
                        Effectivity Date
                        <input type="text" class="datepicker">
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="input-field t1">
                        Remarks <input id="remarks" type="text" class="validate">
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <a href="#!" class="modal-action modal-close waves-effect waves-green btn btn-jos">Cancel</a>
                <a href="#!" class="modal-action modal-close waves-effect waves-green btn btn-jos" style="margin-left:10px;margin-right:30px;">Save</a>
            </div>
        </div>
    </div>
    @endsection