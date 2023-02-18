@extends('layouts.frontend.master')
@section('content')

    <!--====== PAGE BANNER PART START ======-->

    <section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="8" style="background-image: url({{ asset('assets/frontend/images/page-banner-2.jpg')}})">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2>Our Services</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Services</li>
                            </ol>
                        </nav>
                    </div>  <!-- page banner cont -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== PAGE BANNER PART ENDS ======-->

    <!--====== SERVICE PART START ======-->
    <!-- service 1 -->
    <section id="about-page" class="pt-70 pb-110">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="section-title mt-50">
                        <h5>Our Service</h5>
                        <h2>Strategic Management and Organizational</h2>
                    </div> <!-- section title -->
                    <div class="about-cont">
                        <p>A4 Consultants help organizations to conduct organizational assessment through different management tools in order to appraise effectiveness and efficacy of different organizational functions. Based on the assessment A4 Consultants provide recommendations for improvement.</p>
                    </div>
                </div> <!-- about cont -->
                <div class="col-lg-7">
                    <div class="about-image mt-50">
                        <img src="{{ asset('assets/frontend/images/about/about-2.jpg')}}" alt="About">
                    </div>  <!-- about imag -->
                </div>
            </div> <!-- row -->
            <div class="about-items pt-60">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="about-singel-items mt-30">
                            <h4>Long Term Strategic Planning</h4>
                            <p>A4 Consultants provide assistance to organization in developing their Long Term Strategic planning after conducting extensive review of the organization. A4 Consultants help organizations set direction by articulating Vision/Mission followed by formulating strategy and finally developing long-term plan to achieve their vision.</p>
                        </div> <!-- about singel -->
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="about-singel-items mt-30">
                            <h4>Organizational Structure Design</h4>
                            <p>A4 Consultants assist in designing Organizational Structure based on the current and future business plan with emphasis on optimal utilization of human resources against  three to five year relevant  business plan.</p>
                        </div> <!-- about singel -->
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="about-singel-items mt-30">
                            <h4>Policy Development</h4>
                            <p>Based on the organizational needs vis-à-vis employees’ need A4 Consultants develop Policy & Procedures for organizations to ensure efficiency and transparency in operations and enhance motivation and productivity. A4 Consultants develop policies in different areas such as Administration, Procurement, Finance and Accounts, Human Resource Management, Training & Development, Internal Control System, Gender Policy, Marketing Policy, Communication Policy, Resource Management Policy.</p>
                        </div> <!-- about singel -->
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="about-singel-items mt-30">
                            <h4>Change Management</h4>
                            <p>Our management experts have long years of experience in managing changes in different types of dynamic organization. They have wide experience in dealing with different phases of change management process. Our approaches and advice in dealing with such changes involve modern ideas and methods.</p>
                        </div> <!-- about singel -->
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="about-singel-items mt-30">
                            <h4>Organizational Communication</h4>
                            <p>A4 Consultants help develop organizational communications strategy based on the business plan. The communication strategy which supplements design and implementation of internal and external communication of an organization. </p>
                        </div> <!-- about singel -->
                    </div>
                </div> <!-- row -->
            </div> <!-- about items -->
        </div> <!-- container -->
    </section>
    <!-- service 2 -->
    <section id="about-page" class="pt-70 pb-110">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="about-image mt-50">
                        <img src="{{ asset('assets/frontend/images/about/about-2.jpg')}}" alt="About">
                    </div>  <!-- about imag -->
                </div>
                <div class="col-lg-5">
                    <div class="section-title mt-50">
                        <h5>Our Service</h5>
                        <h2>Human Resource Management and Develpment</h2>
                    </div> <!-- section title -->
                    <div class="about-cont">
                        <p>Based on the organizational plan A4 Consultants help set up Human Resources Department starting from recruitment of the Human Resources Professional, providing necessary training, developing different essential policies and formats and commencement of HR Department.  </p>
                    </div>
                </div> <!-- about cont -->

            </div> <!-- row -->
            <div class="about-items pt-60">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="about-singel-items mt-30">
                            <h4>Long Term Strategic Planning</h4>
                            <p>A4 Consultants provide assistance to organization in developing their Long Term Strategic planning after conducting extensive review of the organization. A4 Consultants help organizations set direction by articulating Vision/Mission followed by formulating strategy and finally developing long-term plan to achieve their vision.</p>
                        </div> <!-- about singel -->
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="about-singel-items mt-30">
                            <h4>Strategic Human Resources Planning</h4>
                            <p>A4 Consultants develop Strategic Human Resources Planning for the organization based on its Long Term Plan, with an emphasis on succession planning, training and career planning.</p>
                        </div> <!-- about singel -->
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="about-singel-items mt-30">
                            <h4>Recruitment Policy & System Development</h4>
                            <p>A4 Consultants develop ideas and systems to identify, attract, acquire and retain best match of skill mix for the organization.</p>
                        </div> <!-- about singel -->
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="about-singel-items mt-30">
                            <h4>Leave Policy Development</h4>
                            <p>A4 Consultants facilitate development of leave policy in line with the business need and within the legal requirement, including computerized leave management system to monitor leave status and absenteeism.</p>
                        </div> <!-- about singel -->
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="about-singel-items mt-30">
                            <h4>Job Evaluation</h4>
                            <p>A4 Consultants designs and conducts customized  job evaluation exercise for organization. </p>
                        </div> <!-- about singel -->
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="about-singel-items mt-30">
                            <h4>Compensation & Benefit </h4>
                            <p>A4 Consultants provides services to develop a competitive Compensation & Benefit Policy to help retain good employees of the organization.</p>
                        </div> <!-- about singel -->
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="about-singel-items mt-30">
                            <h4>Salary Survey</h4>
                            <p>A4 Consultants conducts salary survey for different organization with a focus to design and develop a Compensation Package which is competitive in the respective industry.</p>
                        </div> <!-- about singel -->
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="about-singel-items mt-30">
                            <h4>Human Resources Information System</h4>
                            <p>A4 Consultants assist in developing and implementing comprehensive Human Resources Information System which helps in total HR planning, management and accurate documentation of all aspects of human resources functions such as personal records.  HRIS works as the prime tool to analyze all the aspects of HR Metrics.</p>
                        </div> <!-- about singel -->
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="about-singel-items mt-30">
                            <h4>Job Description</h4>
                            <p>An incumbent must know what s/he is supposed to do. A4 Consultants provide assistance in developing appropriate job descriptions in line with the different functions of the organization and which can be implemented practically.</p>
                        </div> <!-- about singel -->
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="about-singel-items mt-30">
                            <h4>Job Evaluation</h4>
                            <p>A4 Consultants designs and conducts customized  job evaluation exercise for organization. </p>
                        </div> <!-- about singel -->
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="about-singel-items mt-30">
                            <h4>Performance Management</h4>
                            <p>A4 Consultants develops and implements customized performance management system for different businesses to ensure optimum and fare utilization of human resources. A4 Consultants also utilize the performance management system for extensive training need assessment of individual.</p>
                        </div> <!-- about singel -->
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="about-singel-items mt-30">
                            <h4>Career Management</h4>
                            <p>A4 Consultants assist in developing career management programme with emphasis in succession plan based on the Strategic Human Resources Planning along with individual career aspirations.</p>
                        </div> <!-- about singel -->
                    </div>
                </div> <!-- row -->
            </div> <!-- about items -->
        </div> <!-- container -->
    </section>
    <!-- service 3 -->
    <section id="about-page" class="pt-70 pb-110">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="section-title mt-50">
                        <h5>Our Service</h5>
                        <h2>Gender and Development</h2>
                    </div> <!-- section title -->
                    <div class="about-cont">
                        <p>A4 Consultants develops Gender Policy of organizations with a focus towards gender mainstreaming.</p>
                    </div>
                </div> <!-- about cont -->
                <div class="col-lg-7">
                    <div class="about-image mt-50">
                        <img src="{{ asset('assets/frontend/images/about/about-2.jpg')}}" alt="About">
                    </div>  <!-- about imag -->
                </div>
            </div> <!-- row -->
            <div class="about-items pt-60">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="about-singel-items mt-30">
                            <h4>Design & Conduct Gender Audit</h4>
                            <p>A4 Consultants utilizes evaluation methodology specifically designed to assess the implementation of gender policies, strategies, programmes and projects.  This has been of particular importance to the broad range of institutions that have implemented initiatives to achieve the international and national treaties.</p>
                        </div> <!-- about singel -->
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="about-singel-items mt-30">
                            <h4> Design & conduct Gender Sensitivity Training</h4>
                            <p>A4 Consultants design, develop and conduct gender-sensitivity training. </p>
                        </div> <!-- about singel -->
                    </div>
                </div> <!-- row -->
            </div> <!-- about items -->
        </div> <!-- container -->
    </section>
    <!-- service 4 -->
    <section id="about-page" class="pt-70 pb-110">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="about-image mt-50">
                        <img src="{{ asset('assets/frontend/images/about/about-2.jpg')}}" alt="About">
                    </div>  <!-- about imag -->
                </div>
                <div class="col-lg-5">
                    <div class="section-title mt-50">
                        <h5>Our Service</h5>
                        <h2>Media Research</h2>
                    </div> <!-- section title -->
                    <div class="about-cont">
                        <p>A4 Consultants do media research based on the assessment .</p>
                    </div>
                </div> <!-- about cont -->

            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    <!-- service 5 -->
    <section id="about-page" class="pt-70 pb-110">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="section-title mt-50">
                        <h5>Our Service</h5>
                        <h2>Business Encubation</h2>
                    </div> <!-- section title -->
                    <div class="about-cont">
                        <p>A4 Consultants provide management and arrange financial linkages and expertise to different wilted business enterprise in order to help them survive and perform efficiently and effectively.</p>
                    </div>
                </div> <!-- about cont -->
                <div class="col-lg-7">
                    <div class="about-image mt-50">
                        <img src="{{ asset('assets/frontend/images/about/about-2.jpg')}}" alt="About">
                    </div>  <!-- about imag -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    <!-- service 6 -->
    <section id="about-page" class="pt-70 pb-110">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="about-image mt-50">
                        <img src="{{ asset('assets/frontend/images/about/about-2.jpg')}}" alt="About">
                    </div>  <!-- about imag -->
                </div>
                <div class="col-lg-5">
                    <div class="section-title mt-50">
                        <h5>Our Service</h5>
                        <h2>Public Health</h2>
                    </div> <!-- section title -->
                    <div class="about-cont">
                        <p>A4 Consultants offers adequate training, research and monitoring and evaluation in different public health issues.</p>
                    </div>
                </div> <!-- about cont -->

            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== SERVICE PART ENDS ======-->
@endsection

