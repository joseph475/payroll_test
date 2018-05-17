@extends('layouts.app') 

@section('content')
    <div class="container-jos white">
        <h5 class="h5-header">Employee's Information</h5>
        <div class="emp_details">
           
            <div class="row myrow">
                <div class="col-sm-2" style="margin-bottom:5px;">
                    <img class="responsive-img emp_photo" src="https://thecrucible.org/wp-content/uploads/default_bio_600x600.jpg">
                </div>
                <div class="col-sm-5">
                    <table class="emp_details_table">
                        <tr>
                            <td class="label">Emp No</td>
                            <td>2018-3042</td>
                        </tr>
                        <tr>
                            <td class="label">Full Name</td>
                            <td>Mark Joseph R Castelo</td>
                        </tr>
                        <tr>
                            <td class="label">Position</td>
                            <td>Programmer</td>
                        </tr>
                        <tr>
                            <td class="label">Department</td>
                            <td>IT Department</td>
                        </tr>
                    </table>
                </div>
                <div class="col-sm-5" style="padding-top:10px;">
                    <div class="row">
                        <div class="col-sm-12">
                            
                            <a class="waves-effect waves btn modal-trigger btn-jos right emp_details_btn tooltipped" href="#" data-tooltip="Manage Attachments">
                                <i class="material-icons left">attach_file</i>
                            </a>                
                            <a class="waves-effect waves btn modal-trigger btn-jos right emp_details_btn tooltipped" href="#" data-tooltip="Generate Reports">
                                <i class="material-icons left">description</i>
                            </a>
                            <a class="waves-effect waves btn modal-trigger btn-jos right emp_details_btn tooltipped" href="#" data-tooltip="Update Record">
                                <i class="material-icons left">edit</i>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <h5 class="h5-header">Contact Information</h5>
        <div class="row myrow">
            <div class="col-sm-6">
                <table class="emp_details_table info">
                    <tr>
                        <td class="label">Present Address</td>
                        <td>182 Brgy Burgos Sta Rosa Nueva Ecija</td>
                    </tr>
                    <tr>
                        <td class="label">Provincial Address</td>
                        <td>Ugong Pasig City</td>
                    </tr>
                    <tr>
                        <td class="label">Zip Code</td>
                        <td>3101</td>
                    </tr>
                </table>
            </div>
            <div class="col-sm-6">
                <table class="emp_details_table info">
                    <tr>
                        <td class="label">Mobile No.</td>
                        <td>09752913232</td>
                    </tr>
                    <tr>
                        <td class="label">Telephone No.</td>
                        <td>1234-4123</td>
                    </tr>
                    <tr>
                        <td class="label">Email</td>
                        <td>markjoseph475@gmail.com</td>
                    </tr>
                </table>
            </div>
        </div>
        <h5 class="h5-header">Government ID's / ATM</h5>
        <div class="row myrow">
            <div class="col-sm-6">
                <table class="emp_details_table info">
                    <tr>
                        <td class="label">Tin #</td>
                        <td>1111111111</td>
                    </tr>
                    <tr>
                        <td class="label">SSS #</td>
                        <td>22222222</td>
                    </tr>
                    <tr>
                        <td class="label">PHIC #</td>
                        <td>33333333</td>
                    </tr>
                    <tr>
                        <td class="label">HDMF #</td>
                        <td>44444444</td>
                    </tr>
                </table>
            </div>
            <div class="col-sm-6">
                <table class="emp_details_table info">
                    <tr>
                        <td class="label">ATM No.</td>
                        <td>1234567890</td>
                    </tr>
                    <tr>
                        <td class="label">Bank Name</td>
                        <td>BDO</td>
                    </tr>
                </table>
            </div>
        </div>
        <h5 class="h5-header">Contract Info</h5>
        <div class="row myrow">
            <div class="col-sm-6">
                <table class="emp_details_table info">
                    <tr>
                        <td class="label">Contract #</td>
                        <td>33333333</td>
                    </tr>
                    <tr>
                        <td class="label">Hired Date</td>
                        <td>May 15, 2016</td>
                    </tr>
                    <tr>
                        <td class="label">Regularized</td>
                        <td>May 15, 2016</td>
                    </tr>
                </table>
            </div>
            <div class="col-sm-6">
                <table class="emp_details_table info">
                    <tr>
                        <td class="label">EOC</td>
                        <td>May 15, 2016</td>
                    </tr>
                    <tr>
                        <td class="label">Terminated</td>
                        <td>May 15, 2016</td>
                    </tr>
                    <tr>
                        <td class="label">Resigned</td>
                        <td>May 15, 2016</td>
                    </tr>
                </table>
            </div>
        </div>
        <h5 class="h5-header">Other Personal Info</h5>
        <div class="row myrow">
            <div class="col-sm-6">
                <table class="emp_details_table info">
                    <tr>
                        <td class="label">Birthday</td>
                        <td>May 15, 2016</td>
                    </tr>
                    <tr>
                        <td class="label">Gender</td>
                        <td>Male</td>
                    </tr>
                    <tr>
                        <td class="label">Marital Status</td>
                        <td>Single</td>
                    </tr>
                </table>
            </div>
            <div class="col-sm-6">
                <table class="emp_details_table info">
                    <tr>
                        <td class="label">Birthplace</td>
                        <td>Isabela</td>
                    </tr>
                    <tr>
                        <td class="label">Religion</td>
                        <td>Roman Catholic</td>
                    </tr>
                    <tr>
                        <td class="label">Nationality</td>
                        <td>Pilipino</td>
                    </tr>
                </table>
            </div>
        </div>
        <h5 class="h5-header">Emergency Contact</h5>
        <div class="row myrow">
            <div class="col-sm-6">
                <table class="emp_details_table info">
                    <tr>
                        <td class="label">Name</td>
                        <td>Johny Does</td>
                    </tr>
                    <tr>
                        <td class="label">Address</td>
                        <td>Somewhere down the Rainbow</td>
                    </tr>
                </table>
            </div>
            <div class="col-sm-6">
               <table class="emp_details_table info">
                    <tr>
                        <td class="label">Mobile No.</td>
                        <td>0987654321</td>
                    </tr>
                    <tr>
                        <td class="label">Telephone No.</td>
                        <td>4567-3212</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection