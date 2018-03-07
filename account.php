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
<!--                <h4 class="text-center text-bold title text-main">YOUR BIO DATA</h4>-->
                <div class="row">
                    <!--   PERSONAL & WORK -->
                    <div class="col-md-6">
                        <div class="card">
                            <h6 class="text-center text-bold title text-main">Personal Information</h6>
                            <div class="row">
                                <!--NAMES-->
                                <div class="col-sm-6 col-md-4">
                                    <div class="form-group has-input">
                                        <input type="text" value="" class="form-control form-control-success" placeholder="First Name"required/>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="form-group has-input">
                                        <input type="text" value="" class="form-control form-control-success" placeholder="Middle Name"required/>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="form-group has-input">
                                        <input type="text" value="" class="form-control form-control-success" placeholder="Last Name"required/>
                                    </div>
                                </div>
                                <!--./NAMES-->

                                <!--./D.O.B, ID NO. & AGE-->
                                <div class="col-sm-6 col-md-4">
                                    <div class="form-group has-input">
                                        <input type="text" value="" class="form-control form-control-success" placeholder="ID NUMBER" required/>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="form-group has-input">
                                        <input type="text" value="" class="form-control form-control-success" placeholder="Phone No. +254.." required/>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="form-group has-input">
                                        <input type="text" value="" class="form-control form-control-success" placeholder="Address" required/>
                                    </div>
                                </div>
                                <!--./D.O.B, ID NO. & AGE-->

                                <!--GENDER, MARITAL STATUS & RELIGION-->
                                <div class="col-sm-6 col-md-4">
                                    <select class="selectpicker" data-size="7" data-style="btn btn-primary btn-round" title="Your Gender" required>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                </div>

                                <div class="col-sm-6 col-md-4">
                                    <select class="selectpicker" data-size="7" data-style="btn btn-primary btn-round" title="Marital Status" required>
                                        <option value="male">Not Married</option>
                                        <option value="female">married</option>
                                        <option value="female">divorced</option>
                                    </select>
                                </div>

                                <div class="col-sm-6 col-md-4">
                                    <select class="selectpicker" data-size="7" data-style="btn btn-primary btn-round" title="Religion" required>
                                        <option value="male">Christian</option>
                                        <option value="female">Islam</option>
                                        <option value="female">Hinduism</option>
                                    </select>
                                </div>
                                <!--./GENDER, MARITAL STATUS & RELIGION-->
                                </div>
<br>
                            <!--NEXT OF KIN Information-->
                            <h6 class="text-center text-bold title text-main">NEXT OF KIN Information</h6>
                            <div class="row">
                                <!--CONTACT-->
                                <div class="col-sm-6 col-md-4">
                                    <div class="form-group has-input">
                                        <input type="text" value="" class="form-control form-control-success" placeholder="First Name"/>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="form-group has-input">
                                        <input type="text" value="" class="form-control form-control-success" placeholder="Middle Name"/>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="form-group has-input">
                                        <input type="text" value="" class="form-control form-control-success" placeholder="Last Name"/>
                                    </div>
                                </div>
                                <!--./CONTACT-->

                                <!--NEXT OF KIN-->
                                <div class="col-sm-6 col-md-4">
                                    <div class="form-group has-input">
                                        <input type="text" value="" class="form-control form-control-success" placeholder="Phone No. +254.."/>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="form-group has-input">
                                        <input type="text" value="" class="form-control form-control-success" placeholder="Address"/>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="form-group has-input">
                                        <input type="text" value="" class="form-control form-control-success" placeholder="Email"/>
                                    </div>
                                </div>
                                <!--./NEXT OF KIN-->


                            </div>
                            <!--./NEXT OF KIN Information-->

                            <br>
                            <!--WORK INFORMATION-->
                            <h6 class="text-center text-bold title text-main">WORK INFORMATION</h6>
                            <div class="row">
                                <!--CONTACT-->
                                <div class="col-sm-6 col-md-4">
                                    <div class="form-group has-input">
                                        <input type="text" value="" class="form-control form-control-success" placeholder="Your Title" required/>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="form-group has-input">
                                        <input type="text" value="" class="form-control form-control-success" placeholder="Supervisor" required/>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="form-group has-input">
                                        <input type="text" value="" class="form-control form-control-success" placeholder="Reporting To" required/>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="form-group has-input">
                                        <input type="text" value="" class="form-control form-control-success" placeholder="Office Extension" required/>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="form-group has-input">
                                        <input type="text" value="" class="form-control form-control-success" placeholder="Office Location" required/>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="form-group has-input">
                                        <input type="text" value="" class="form-control form-control-success" placeholder="Start Date" required/>
                                    </div>
                                </div>
                                <!--./CONTACT-->
                            </div>
                            <div class="card-footer">
                                <center>
                                    <button class="btn btn-sm btn-danger btn-round "> CLEAR</button>
                                    <button class="btn btn-sm btn-success btn-round "> SUBMIT</button>
                                </center>
                            </div>
                            </div>
                        </div>
                    <!--   ./PERSONAL & WORK -->

                    <!--   EDUCATION & WORK -->
                    <div class="col-md-6">
                        <div class="card">
                            <h6 class="text-center text-bold title text-main">EDUCATION Information</h6>
                            <p class="text-main account-p text-left text-bold text-center"> Primary School</p>
                            <div class="row">
                                <!--NAMES-->
                                <div class="col-sm-6 col-md-8">
                                    <div class="form-group has-input">
                                        <input type="text" value="" class="form-control form-control-success" placeholder="School Name" required/>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="form-group has-input">
                                        <input type="text" value="" class="form-control form-control-success" placeholder="Grade Achieved" required/>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group has-input">
                                        <input type="text" value="" class="form-control form-control-success" placeholder="From" required/>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group has-input">
                                        <input type="text" value="" class="form-control form-control-success" placeholder="To" required/>
                                    </div>
                                </div>
                                <!--./NAMES-->
                            </div>
                            <p class="text-main account-p text-bold text-center"> Secondary/High School</p>
                            <div class="row">
                                <!--NAMES-->
                                <div class="col-sm-6 col-md-8">
                                    <div class="form-group has-input">
                                        <input type="text" value="" class="form-control form-control-success" placeholder="School Name" required/>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="form-group has-input">
                                        <input type="text" value="" class="form-control form-control-success" placeholder="Grade Achieved" required/>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group has-input">
                                        <input type="text" value="" class="form-control form-control-success" placeholder="From" required/>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group has-input">
                                        <input type="text" value="" class="form-control form-control-success" placeholder="To" required/>
                                    </div>
                                </div>

                                <!--./NAMES-->
                            </div>

                            <p class="text-main account-p text-bold text-center">University/College/Other Training Institutions</p>
                            <div class="row text-center">


                                <!--NAMES-->
                                <div class="col-sm-6 col-md-8">
                                    <div class="form-group has-input">
                                        <input type="text" value="" class="form-control form-control-success" placeholder="School Name" required/>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <select class="selectpicker" data-size="7" data-style="btn btn-primary btn-round" title="Institution Type" required>
                                        <option value="male">University</option>
                                        <option value="female">College</option>
                                        <option value="female">Others</option>
                                    </select>
                                </div>
                                <div class="col-sm-6 col-md-8">
                                    <div class="form-group has-input">
                                        <input type="text" value="" class="form-control form-control-success" placeholder="Course Title" required/>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="form-group has-input">
                                        <input type="text" value="" class="form-control form-control-success" placeholder="Grade Achieved" required/>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group has-input">
                                        <input type="text" value="" class="form-control form-control-success" placeholder="From" required/>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group has-input">
                                        <input type="text" value="" class="form-control form-control-success" placeholder="To" required/>
                                    </div>
                                </div>
                            </div>
                            <center>
                                <button class="btn btn-sm btn-primary btn-round" style="margin-bottom: 10px"><i class="now-ui-icons ui-1_simple-add"></i> Add Another Course</button>
                            </center>
<!--                            <hr>-->
                            <div class="card-footer">
                                <center>
                                    <button class="btn btn-sm btn-danger btn-round "> CLEAR</button>
                                    <button class="btn btn-sm btn-success btn-round "> SUBMIT</button>
                                </center>
                            </div>

                                </div>
<br>


                            </div>
                    <!-- ./EDUCATION & WORK -->
                        </div>


                    </div>
                    <div class="col-md-6"></div>
                </div>


</body>
<!--   Core JS Files   -->
<?php include 'includes/scripts.php';?>


