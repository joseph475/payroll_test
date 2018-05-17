@section('sidenav')
    <ul id="slide-out" class="sidenav sidenav-fixed z-depth-2">
        <li class="user-test">
            <div class="user-view">

                <!-- <a href="#user"><i class="medium material-icons" style="color:black;">account_circle</i></a> -->
                <div class="row">
                    <div class="col-sm-4">
                        <a href="#user"><img class="circle" id="user" src="https://cdn4.iconfinder.com/data/icons/people-std-pack/512/boss-512.png"></a>
                    </div>
                     <div class="col-sm-8">
                        <a href="#" class="dropdown-trigger" data-target='dropdown1'>
                            <span class="white-text name"><i class="material-icons right">arrow_drop_down</i>Joseph</span>
                        </a>
                        <a href="#name"><span class="white-text role">Administrator</span></a>
                    </div>
                    <ul id='dropdown1' class='dropdown-content'>
                        <li><a href="#!">Log Out</a></li>
                        <li><a href="#!">Profile</a></li>
                    </ul>
                </div>
            </div>
        </li>
        <ul class="collapsible collapsible-accordion">
            <!-- Company -->
            <li>
                <a class="collapsible-header"><i class="material-icons">business</i>Company<i class="material-icons right">arrow_drop_down</i></a>
                <div class="collapsible-body">
                    <ul>
                        <li><a href="{{ url('/company') }}"><i class="material-icons">info</i>Company Info</a></li>
                        <li><a href="{{ url('/branch') }}"><i class="material-icons">store</i>Setup Branch</a></li>
                        <li><a href="#!"><i class="material-icons">toys</i>Payroll Rates</a></li>
                    </ul>
                </div>
            </li>
            <!-- System -->
            <li>
                <a class="collapsible-header"><i class="material-icons">settings</i>System<i class="material-icons right   ">arrow_drop_down</i></a>
                <div class="collapsible-body">
                    <ul>
                        <li><a href="#!"><i class="material-icons">security</i>Security</a></li>
                        <li><a href="#!"><i class="icon ion-asterisk"></i>Variables</a></li>
                        <li><a href="#!"><i class="icon ion-plus"></i>Earnings</a></li>
                        <li><a href="#!"><i class="icon ion-minus"></i>Deductions</a></li>
                    </ul>
                </div>
            </li>
            <!-- Employee -->
            <li>
                <a class="collapsible-header"><i class="material-icons">people</i>Employee<i class="material-icons right   ">arrow_drop_down</i></a>
                <div class="collapsible-body">
                    <ul>
                        <li><a href="{{ url('/employee') }}"><i class="material-icons">collections</i>Masterfile</a></li>
                        <li><a href="#!"><i class="material-icons">work</i>Job Order</a></li>
                        <li><a href="#!"><i class="icon ion-plus"></i>Earnings</a></li>
                        <li><a href="#!"><i class="icon ion-minus"></i>Deductions</a></li>
                    </ul>
                </div>
            </li>
             <!-- governtment tables -->
            <li>
                <a class="collapsible-header"><i class="material-icons">location_city</i>Government<i class="material-icons right">arrow_drop_down</i></a>
                <div class="collapsible-body">
                    <ul>
                        <li><a href="#!"><i class="icon ion-document-text"></i>Tax Table</a></li>
                        <li><a href="#!"><i class="icon ion-document-text"></i>SSS Table</a></li>
                        <li><a href="#!"><i class="icon ion-document-text"></i>PHIC Table</a></li>
                        <li><a href="#!"><i class="icon ion-document-text"></i>HDMF Table</a></li>
                    </ul>
                </div>
            </li>
            <!-- process -->
            <li>
                <a class="collapsible-header"><i class="material-icons">send</i>Payroll<i class="material-icons right   ">arrow_drop_down</i></a>
                <div class="collapsible-body">
                    <ul>
                        <li><a href="#!"><i class="material-icons">insert_drive_file</i>Time Sheet</a></li>
                        <li><a href="#!"><i class="material-icons">attach_money</i>Process Payroll</a></li>
                        <li><a href="#!"><i class="material-icons">adjust</i>Adjustments</a></li>
                    </ul>
                </div>
            </li>
            <!-- Report -->
            <li>
                <a class="collapsible-header"><i class="material-icons">insert_chart</i>Report<i class="material-icons right">arrow_drop_down</i></a>
                <div class="collapsible-body">
                    <ul>
                        <li><a href="#!"><i class="material-icons">chevron_right</i>HRIS Reports</a></li>
                        <li><a href="#!"><i class="material-icons">chevron_right</i>Payroll Reports</a></li>
                    </ul>
                </div>
            </li>
        </ul>
    </ul>
