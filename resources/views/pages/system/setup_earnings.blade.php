@extends('layouts.app') 

@section('content')
    <div class="container-jos">
    <div class="row myrow">
        <div class="file-field input-field col-sm-5">
            <a class="waves-effect waves btn btn-jos right" href="" style="margin-left:5px;">
                <i class="material-icons left">search</i>Search</a>

            <div class="file-path-wrapper">
                <input placeholder="Search Code or Description" class="file-path validate myinput" type="text">
            </div>
        </div>
        <div class="input-field col-sm-2">
            <select>
                <option value="" disabled selected>Schedule</option>
                <option value="1">Pay 1</option>
                <option value="2">Pay 2</option>
                <option value="2">Pay 3</option>
            </select>
        </div>
        <div class="input-field col-sm-5">
            <a class="waves-effect waves btn modal-trigger btn-jos right" href="#modal1" style="padding-left:15px;padding-right:20px; margin-bottom:10px;">
            <i class="material-icons left">add</i>Add Earnings</a>
        </div>  
    </div>
    <div class="table-wrapper">
        <table class="highlight white z-depth-1">
            <thead>
                <tr>
                    <td style="width:25%">Code</td>
                    <td style="width:45%">Description</td>
                    <td style="width:15%">Schedule</td>
                    <td style="text-align:center; width:15%;">Action</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Allow</td>
                    <td>Allowance</td>
                    <td>PAY-3</td>
                    <td class="text-sm-center">
                        <a class="waves-effect waves btn modal-trigger btn-abi emp_details_btn tooltipped" href="#modal1" data-tooltip="Update Earnings">
                            <i class="material-icons left">edit</i>
                        </a>
                        <a class="waves-effect waves btn btn-abi emp_details_btn tooltipped" href="#" data-tooltip="Remove Earnings">
                            <i class="material-icons left">delete</i>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>Sample 1</td>
                    <td>Sample Description</td>
                    <td>PAY-3</td>
                    <td class="text-sm-center">
                        <a class="waves-effect waves btn modal-trigger btn-abi emp_details_btn tooltipped" href="#modal1" data-tooltip="Update Earnings">
                            <i class="material-icons left">edit</i>
                        </a>
                        <a class="waves-effect waves btn btn-abi emp_details_btn tooltipped" href="#" data-tooltip="Remove Earnings">
                            <i class="material-icons left">delete</i>
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
                <div class="col-sm-3">
                    <div class="input-field t1">
                        Code<input id="code" type="text" class="validate">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="input-field t1">
                        Description<input id="description" type="text" class="validate">
                    </div>
                </div>
                <div class="col-sm-3">
                    Schedule
                    <select>
                        <option value="1" selected>PAY-1</option>
                        <option value="2">PAY-2</option>
                        <option value="3">PAY-3</option>
                    </select>
                </div>
            </div>

            <div class="modal-footer">
                <a href="#!" class="modal-action modal-close waves-effect waves-green btn btn-jos">Cancel</a>
                <a href="#!" class="modal-action modal-close waves-effect waves-green btn btn-jos" style="margin-left:10px;margin-right:30px;">Save</a>
            </div>
        </div>
    </div>
@endsection