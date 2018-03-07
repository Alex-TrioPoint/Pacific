<?php include 'includes/top.php';?>
<body class="index-page">
<!-- Navbar -->
<div class="">

    <!-- Sidebar Holder -->
    <?php include 'includes/sidenav.php';?>
    <!-- Page Content Holder -->

    <div id="content">
        <!--Main Navbar-->
        <?php include 'includes/mainnav.php';?>
        <!--../Main Navbar-->

        <!-- Main Content Holder -->
        <div class="main-content" style="box-sizing: inherit;">
            <div class="container">
                    <!--------------LEAVE STATS--------------->
                    <div class="col-md-12">
                        <div class="social-line social-line-big-icons social-line-white no-shadow leave-info card text-center no-border" >
                            <div class="row dash">
                                <div class="col-md-3">
                                    <i class="fa fa-calendar-check"></i><br>
                                    <p class="text-bold text-main">
                                        AVAILABLE DAYS
                                    </p>
                                    <h4>10<small class="text-main">days</small> 5<small class="text-main">hours</small> 36<small class="text-main">Minutes</small></h4>
                                </div>
                                <div class="col-md-3">
                                    <i class="fa fa-calendar-plus"></i><br>
                                    <p class="text-bold text-main">
                                        EARNED(2018)
                                    </p>
                                    <h4>4<small class="text-main">days</small> 5<small class="text-main">hours</small> 36<small class="text-main">Minutes</small></h4>
                                </div>
                                <div class="col-md-3">
                                    <i class="fa fa-calendar-minus"></i><br>
                                    <p class="text-bold text-main">
                                        TAKEN (2018)
                                    </p>
                                    <h4>4<small class="text-main">days</small> 5<small class="text-main">hours</small> 36<small class="text-main">Minutes</small></h4>
                                </div>
                                <div class="col-md-3" style="border-right: none!important;">
                                    <i class="fa fa-calendar-alt"></i><br>
                                    <p class="text-bold text-main">
                                        CARRIED FORWARD (2017)
                                    </p>
                                    <h4>10<small class="text-main">days</small> 5<small class="text-main">hours</small> 36<small class="text-main">Minutes</small></h4>
                                </div>
                            </div>
                        </div>
                        <center>
                            <button class="btn btn-success btn-sm btn-leave" data-toggle="modal" data-target="#leave-new" >APPLY FOR LEAVE</button>
                            <button class="btn btn-primary btn-sm btn-leave" data-toggle="modal" data-target="#preview">CHECK LEAVE STATUS</button>
                            <button class="btn btn-default btn-sm btn-leave" data-toggle="modal" data-target="#preview">GUIDELINES</button>
                        </center>
                    </div>

                    <!--------------./LEAVE STATS--------------->

                    <!--------------PROFILE & RULES------------->
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card card-user no-shadow no-border">
                                <div class="image">
                                    <center>
                                        <img src="assets/img/default-avatar.png" alt="Circle Image" class="rounded-circle account-pic text-center">
                                    </center>
                                </div>
                                <div class="card-body">
                                    <div class="author text-center">
                                            <h6 class="title text-main title-leave">Moses Mukembu</h6>
                                        <label class="text-bold label-leave btn-simple btn-round btn-sm btn-a">
                                            ICT Manager
                                        </label>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-6 p-leave">
                                            <p >Employee No: </p>
                                            <p >Supervisor: </p>
                                            <p >Reporting T0: </p>
                                            <p >Phone: </p>
                                            <p>Address:  </p>
                                            <p>ID NO: </p>
                                        </div>
                                        <div class="col-md-6 p-leave text-right text-bold">
                                            <p>PN-O273-00</p>
                                            <p>John Doe</p>
                                            <p>John Doe</p>
                                            <p>0704825380</p>
                                            <p>568892 - Nairobi </p>
                                            <p>31349289</p>
                                        </div>
                                    </div>

                                </div>
                                <hr>
                                <div class=" p-leave text-center">
<!--                                    <div class="col-md-3" style="padding-right: 0px;"><p><i class="fa fa-phone-volume text-main"></i> 217</p></div>-->
                                   <p class="text-center text-main">mmukembu@pacific-group.co.ke</p>
<!--                                    <div class="col-md-3"><p><i class="fa fa-map-marker"></i> 2<sup>ND</sup> Floor</p></div>-->
                                </div>
                            </div>
                        </div>

                        <!--------------HISTORY & RULES------------->
                        <div class="col-md-8 ">
                            <div class="card no-shadow border no-border">
                                <div class="card-header card-header-danger">
                                    LEAVE HISTORY
                                </div>
                                <div class="card-body">
                                    <div class="table-full-width table-responsive">
                                        <table class="table table-hover">
                                            <thead >
                                            <tr >
                                                <th class="text-center">#</th>
                                                <th >Type</th>
                                                <th >From</th>
                                                <th >To</th>
                                                <th >Approval</th>
                                            </tr>
                                            </thead>
                                            <tbody class="text-center history">
                                            <tr>
                                                <td class="text-center first-tr">
                                                   1
                                                </td>

                                                <td class="text-left">Emergency</td>
                                                <td class="text-left">2017-03-15 12:00:00</td>
                                                <td class="text-left">2017-03-15 12:00:00</td>
                                                <td class="text-left text-success text-bold">Approved</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center first-tr">
                                                   2
                                                </td>

                                                <td class="text-left">Annual</td>
                                                <td class="text-left">2017-03-15 12:00:00</td>
                                                <td class="text-left">2017-03-15 12:00:00</td>
                                                <td class="text-left text-success text-bold">Approved</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center first-tr">
                                                   3
                                                </td>

                                                <td class="text-left">Emergency</td>
                                                <td class="text-left">2017-03-15 12:00:00</td>
                                                <td class="text-left">2017-03-15 12:00:00</td>
                                                <td class="text-left text-success text-bold">Approved</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center first-tr">
                                                   4
                                                </td>

                                                <td class="text-left">Emergency</td>
                                                <td class="text-left">2017-03-15 12:00:00</td>
                                                <td class="text-left ">2017-03-15 12:00:00</td>
                                                <td class="text-left text-danger text-bold">Disapproved</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center first-tr">
                                                   5
                                                </td>

                                                <td class="text-left">Emergency</td>
                                                <td class="text-left">2017-03-15 12:00:00</td>
                                                <td class="text-left">2017-03-15 12:00:00</td>
                                                <td class="text-left text-success text-bold">Approved</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div></div>
                            </div>
                        </div>
                    </div>


                </div>

</body>
<?php include 'includes/modals.php';?>
<!--   Core JS Files   -->
<?php include 'includes/scripts.php';?>


