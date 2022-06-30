@include('layouts.dashboard_header')

<div class="wrapper">
    <div class="pcoded-content">
        <div class="pcoded-inner-content">
            <!-- Main-body start -->
            <div class="main-body">
                <div class="page-wrapper">
                    <!-- Page-header start -->
                    <div class="page-header">
                        <div class="row align-items-end">
                            <div class="col-lg-8">
                                <div class="page-header-title">
                                    <div class="d-inline">
                                        <h4>Job Application</h4>
                                        <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="page-header-breadcrumb">
                                    <ul class="breadcrumb-title">
                                        <li class="breadcrumb-item">
                                            <a href="index-1.htm"> <i class="feather icon-home"></i> </a>
                                        </li>
                                        <li class="breadcrumb-item"><a href="#">Ready To Us</a>
                                        </li>
                                        <li class="breadcrumb-item"><a href="#!">Job Application Form</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Page-header end -->

                    <!-- Page body start -->
                    <div class="page-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- Job application card start -->
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Job Application</h5>
                                        <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>

                                    </div>
                                    <div class="card-block">
                                        <div class="j-wrapper j-wrapper-640">
                                            <form action="j-pro/php/action.php" method="post" class="j-pro"
                                                id="j-pro" enctype="multipart/form-data" novalidate="">
                                                <!-- end /.header-->
                                                <div class="j-content">
                                                    <!-- start name -->
                                                    <div class="j-row">
                                                        <div class="j-span6 j-unit">
                                                            <div class="j-input">
                                                                <label class="j-icon-right" for="first_name">
                                                                    <i class="icofont icofont-ui-user"></i>
                                                                </label>
                                                                <input type="text" id="first_name" name="first_name"
                                                                    placeholder="First name">
                                                            </div>
                                                        </div>
                                                        <div class="j-span6 j-unit">
                                                            <div class="j-input">
                                                                <label class="j-icon-right" for="last_name">
                                                                    <i class="icofont icofont-ui-user"></i>
                                                                </label>
                                                                <input type="text" id="last_name" name="last_name"
                                                                    placeholder="Last name">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end name -->
                                                    <!-- start email phone -->
                                                    <div class="j-row">
                                                        <div class="j-span6 j-unit">
                                                            <div class="j-input">
                                                                <label class="j-icon-right" for="email">
                                                                    <i class="icofont icofont-envelope"></i>
                                                                </label>
                                                                <input type="email" placeholder="Email" id="email"
                                                                    name="email">
                                                            </div>
                                                        </div>
                                                        <div class="j-span6 j-unit">
                                                            <div class="j-input">
                                                                <label class="j-icon-right" for="phone">
                                                                    <i class="icofont icofont-phone"></i>
                                                                </label>
                                                                <input type="text" placeholder="Phone" id="phone"
                                                                    name="phone">
                                                                <span class="j-tooltip j-tooltip-right-top">Your contact
                                                                    phone number</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end email phone -->
                                                    <div class="divider gap-bottom-25"></div>
                                                    <!-- start country -->
                                                    <div class="j-unit">
                                                        <label class="j-input j-select">
                                                            <select name="country">
                                                                <option value="" selected="">Select country
                                                                </option>
                                                                <option value="Australia">Australia</option>
                                                                <option value="Austria">Austria</option>
                                                                <option value="Brazil">Brazil</option>
                                                                <option value="Canada">Canada</option>
                                                                <option value="Germany">Germany</option>
                                                                <option value="India">India</option>
                                                                <option value="Italy">Italy</option>
                                                                <option value="Japan">Japan</option>
                                                                <option value=">Netherlands">Netherlands</option>
                                                                <option value=">New Zealand">New Zealand</option>
                                                                <option value="Philippines">Philippines</option>
                                                                <option value="Portugal">Portugal</option>
                                                                <option value="South Africa">South Africa</option>
                                                                <option value="Spain">Spain</option>
                                                                <option value="Switzerland">Switzerland</option>
                                                                <option value="Sweden">Sweden</option>
                                                                <option value="Turkey">Turkey</option>
                                                                <option value="j-United Arab Emirates">j-United Arab
                                                                    Emirates</option>
                                                                <option value="j-United Kingdom">j-United Kingdom
                                                                </option>
                                                                <option value="USA">USA</option>
                                                            </select>
                                                            <i></i>
                                                        </label>
                                                    </div>
                                                    <!-- end country -->
                                                    <!-- start city post code -->
                                                    <div class="j-row">
                                                        <div class="j-span8 j-unit">
                                                            <div class="j-input">
                                                                <label class="j-icon-right" for="city">
                                                                    <i class="icofont icofont-building"></i>
                                                                </label>
                                                                <input type="text" id="city"
                                                                    placeholder="City" name="city">
                                                            </div>
                                                        </div>
                                                        <div class="j-span4 j-unit">
                                                            <div class="j-input">
                                                                <label class="j-icon-right" for="post">
                                                                    <i class="icofont icofont-file-code"></i>
                                                                </label>
                                                                <input type="text" id="post"
                                                                    placeholder="Post code" name="post_code">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end city post code -->
                                                    <!-- start address -->
                                                    <div class="j-unit">
                                                        <div class="j-input">
                                                            <label class="j-icon-right" for="address">
                                                                <i class="icofont icofont-building"></i>
                                                            </label>
                                                            <input type="text" id="address"
                                                                placeholder="Address" name="address">
                                                        </div>
                                                    </div>
                                                    <!-- end address -->
                                                    <div class="divider gap-bottom-25"></div>
                                                    <!-- start position -->
                                                    <div class="j-unit">
                                                        <label class="j-input j-select">
                                                            <select name="position">
                                                                <option value="" selected="">Choose desired
                                                                    position</option>
                                                                <option value="tech lead">Tech Lead</option>
                                                                <option value="product manager">Product Manager
                                                                </option>
                                                                <option value="senior developer">Senior Developer
                                                                </option>
                                                                <option value="middle developer">Middle Developer
                                                                </option>
                                                                <option value="junior developer">Junior Developer
                                                                </option>
                                                                <option value="QA specialist">QA Specialist</option>
                                                                <option value="system administrator">System
                                                                    Administrator</option>
                                                            </select>
                                                            <i></i>
                                                        </label>
                                                    </div>
                                                    <!-- end position -->
                                                    <!-- start message -->
                                                    <div class="j-unit">
                                                        <div class="j-input">
                                                            <textarea placeholder="Additional info" spellcheck="false" name="message"></textarea>
                                                            <span class="j-tooltip j-tooltip-right-top">Any useful
                                                                information about you</span>
                                                        </div>
                                                    </div>
                                                    <!-- end message -->
                                                    <!-- start files -->
                                                    <div class="j-row">
                                                        <div class="j-span6 j-unit">
                                                            <div class="j-input j-append-small-btn">
                                                                <div class="j-file-button">
                                                                    Browse
                                                                    <input type="file" name="file1"
                                                                        onchange="document.getElementById('file1_input').value = this.value;">
                                                                </div>
                                                                <input type="text" id="file1_input" readonly=""
                                                                    placeholder="add your CV">
                                                                <span class="j-hint">Only: doc / docx / xls /xlsx, less
                                                                    1Mb</span>
                                                            </div>
                                                        </div>
                                                        <div class="j-span6 j-unit">
                                                            <div class="j-input j-append-small-btn">
                                                                <div class="j-file-button">
                                                                    Browse
                                                                    <input type="file" id="file2"
                                                                        name="file2"
                                                                        onchange="document.getElementById('file2_input').value = this.value;">
                                                                </div>
                                                                <input type="text" id="file2_input" readonly=""
                                                                    placeholder="add your CV">
                                                                <span class="j-hint">Only: doc / docx / xls /xlsx, less
                                                                    1Mb</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end files -->
                                                    <!-- start response from server -->
                                                    <div class="j-response"></div>
                                                    <!-- end response from server -->
                                                </div>
                                                <!-- end /.content -->
                                                <div class="j-footer">
                                                    <button type="submit" class="btn btn-primary">Send</button>
                                                    <button type="reset"
                                                        class="btn btn-default m-r-20">Reset</button>
                                                </div>
                                                <!-- end /.footer -->
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- Job application card end -->
                            </div>
                        </div>
                    </div>
                    <!-- Page body end -->
                </div>
            </div>
            <!-- Main-body end -->

            <div id="styleSelector">

            </div>
        </div>
    </div>
</div>
@include('layouts.dashboard_footer')
