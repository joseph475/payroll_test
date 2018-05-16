@extends('layouts.app') 

@section('content')
<div class="container-jos">
    <div style="height:40px;">
        <a class="waves-effect waves btn modal-trigger btn-jos right" href="#modal1" style="padding-left:15px;padding-right:20px; margin-bottom:10px;">
        <i class="material-icons left">edit</i>Update</a>
    </div>
    <div class="table-wrapper">
        
        <table class="responsive-table highlight white z-depth-1">
            <tbody>
                <tr>
                    <td style="width:35%">Company Code:</td>
                    <td style="width:65%">MJRC</td>
                </tr>
                <tr>
                    <td>Company Name:</td>
                    <td>Mark Joseph R Castelo</td>
                </tr>
                <tr>
                    <td>Address:</td>
                    <td>Burgos Sta Rosa NE</td>
                </tr>
                <tr>
                    <td>Contact No:</td>
                    <td>09452675595</td>
                </tr>
                <tr>
                    <td>Tin No:</td>
                    <td>123456789</td>
                </tr>
                <tr>
                    <td>SSS No:</td>
                    <td>123456789</td>
                </tr>
                <tr>
                    <td>PHIC No:</td>
                    <td>123456789</td>
                </tr>
                <tr>
                    <td>HDMF No:</td>
                    <td>123456789</td>
                </tr>
                <tr>
                    <td>Email Address:</td>
                    <td>Markjoseph475@gmail.com</td>
                </tr>
                
            </tbody>
        </table>

        <!-- Modal Add Structure -->
        <div id="modal1" class="modal jos-modal">
            <a href=""><i class="material-icons right">clear</i></a>
            <div class="modal-content">
                <h4 class="center-align" style="margin-bottom:15px;">Update Company Info</h4>
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