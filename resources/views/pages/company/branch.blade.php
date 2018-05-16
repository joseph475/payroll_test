@extends('layouts.app') 

@section('content')
<div class="container-jos">
    <div class="row myrow">
        <div class="file-field input-field col-sm-5">
            <a class="waves-effect waves btn btn-jos right" href="" style="margin-left:5px;">
            <i class="material-icons left">search</i>Search</a>
            <div class="file-path-wrapper">
                <input placeholder="Search Branch" class="file-path validate myinput" type="text">
            </div>
        </div>
        <div class="input-field col-sm-2">
            <select>
                <option value="" disabled selected>Sort By</option>
                <option value="1">Branch Code</option>
                <option value="2">Branch Name</option>
            </select>
        </div>
        <div class="col-sm-2">

        </div>
        <div class="input-field col-sm-3">
            <a class="waves-effect waves btn modal-trigger btn-jos right" href="#modal1" style="padding-left:15px;padding-right:20px; margin-bottom:10px;">
            <i class="material-icons left">add</i>Add New Branch</a>
        </div>  
    </div> 

    <div class="table-wrapper">
        <table class="responsive-table highlight white z-depth-1">
            <thead>
                <tr>
                    <td>Branch Code</td>
                    <td>Branch Name</td>
                    <td>Address</td>
                    <td>Contact No</td>
                    <td>Email</td>
                    <td>Total Days</td>
                    <td>Daily Rate</td>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>HO-001</td>
                    <td>Mark Joseph</td>
                    <td>Sta Rosa Nueva Ecija</td>
                    <td>09452675595</td>
                    <td>test@test.com</td>
                    <td>314</td>
                    <td>502</td>
                    <td>
                        <a class="waves-effect waves btn modal-trigger btn-abi" href="#">
                        <i class="material-icons left">edit</i>Edit</a>
                    </td>
                </tr>
                <tr>
                    <td>HO-001</td>
                    <td>Mark Joseph</td>
                    <td>Sta Rosa Nueva Ecija</td>
                    <td>09452675595</td>
                    <td>test@test.com</td>
                    <td>314</td>
                    <td>502</td>
                     <td>
                        <a class="waves-effect waves btn modal-trigger btn-abi" href="#" >
                        <i class="material-icons left">edit</i></i>Edit</a>
                    </td>
                </tr>
                <tr>
                    <td>HO-001</td>
                    <td>Mark Joseph</td>
                    <td>Sta Rosa Nueva Ecija</td>
                    <td>09452675595</td>
                    <td>test@test.com</td>
                    <td>314</td>
                    <td>502</td>
                     <td>
                        <a class="waves-effect waves btn modal-trigger btn-abi" href="#" >
                        <i class="material-icons left">edit</i></i>Edit</a>
                    </td>
                </tr>
            </tbody>
        </table>

        <!-- Modal Add Structure -->
        <div id="modal1" class="modal jos-modal">
            <a href=""><i class="material-icons right">clear</i></a>
            <div class="modal-content">
                <h4 class="center-align" style="margin-bottom:15px;">Add New Branch</h4>
                <div class="row modal-row">
                <!-- Company Code -->
                    <div class="col-sm-6">
                        <label for="companyCode">Company Code</label>
                        <input id="companyCode" type="text" class="validate myinput">
                    </div>
                </div>
                <div class="row modal-row">
                    <div class="col-sm-12">
                        <label for="companyName">Company Name</label>
                        <input id="companyName" type="text" class="validate myinput">
                    </div>
                </div>  
                <div class="row modal-row">
                    <div class="col-sm-12">
                        <label for="address">Address</label>
                        <input id="address" type="text" class="validate myinput">
                    </div>
                </div>
                <div class="row modal-row">
                    <div class="col-sm-12">
                        <label for="email">Email Address</label>
                        <input id="email" type="email" class="validate myinput">
                    </div>
                </div>
                <div class="row modal-row">
                    <div class="col-sm-6">
                        <label for="contact">Contact No.</label>
                        <input id="contact" type="text" class="validate myinput">
                    </div>
                </div>
                <div class="row modal-row">
                    <div class="col-sm-6">
                        <label for="tinno">Tin No.</label>
                        <input id="tinno" type="text" class="validate myinput">
                    </div>
                </div>
                <div class="row modal-row">
                    <div class="col-sm-6">
                        <label for="sssno">SSS No.</label>
                        <input id="sssno" type="text" class="validate myinput">
                    </div>
                </div>
                <div class="row modal-row">
                    <div class="col-sm-6">
                        <label for="phicno">PHIC No.</label>
                        <input id="phicno" type="text" class="validate myinput">
                    </div>
                </div>
                <div class="row modal-row">
                    <div class="col-sm-6">
                        <label for="hdmfno">HDMF No.</label>
                        <input id="hdmfno" type="text" class="validate myinput">
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <a href="#!" class="modal-action modal-close waves-effect waves-green btn btn-jos">Cancel</a>
                <a href="#!" class="modal-action modal-close waves-effect waves-green btn btn-jos" style="margin-left:10px;margin-right:30px;">Save</a>
            </div>
        </div>
        
    </div>
</div>   
@endsection