<section class="dashboard-counts no-padding-bottom">
    <div class="container-fluid">
        <div class="row bg-white has-shadow">
            <!-- Item -->
            <div class="col-xl-3 col-sm-6">
                <div class="item d-flex align-items-center">
                    <div class="icon bg-violet"><i class="icon-user"></i></div>
                    <div class="title"><span>New<br>Clients</span>
                        <div class="progress">
                            <div role="progressbar" style="width: 25%; height: 4px;" aria-valuenow="25" aria-valuemin="0"
                                aria-valuemax="100" class="progress-bar bg-violet"></div>
                        </div>
                    </div>
                    <div class="number"><strong>25</strong></div>
                </div>
            </div>
            <!-- Item -->
            <div class="col-xl-3 col-sm-6">
                <div class="item d-flex align-items-center">
                    <div class="icon bg-red"><i class="icon-padnote"></i></div>
                    <div class="title"><span>Work<br>Orders</span>
                        <div class="progress">
                            <div role="progressbar" style="width: 70%; height: 4px;" aria-valuenow="70" aria-valuemin="0"
                                aria-valuemax="100" class="progress-bar bg-red"></div>
                        </div>
                    </div>
                    <div class="number"><strong>70</strong></div>
                </div>
            </div>
            <!-- Item -->
            <div class="col-xl-3 col-sm-6">
                <div class="item d-flex align-items-center">
                    <div class="icon bg-green"><i class="icon-bill"></i></div>
                    <div class="title"><span>New<br>Invoices</span>
                        <div class="progress">
                            <div role="progressbar" style="width: 40%; height: 4px;" aria-valuenow="40" aria-valuemin="0"
                                aria-valuemax="100" class="progress-bar bg-green"></div>
                        </div>
                    </div>
                    <div class="number"><strong>40</strong></div>
                </div>
            </div>
            <!-- Item -->
            <div class="col-xl-3 col-sm-6">
                <div class="item d-flex align-items-center">
                    <div class="icon bg-orange"><i class="icon-check"></i></div>
                    <div class="title"><span>Open<br>Jobs</span>
                        <div class="progress">
                            <div role="progressbar" style="width: 50%; height: 4px;" aria-valuenow="50" aria-valuemin="0"
                                aria-valuemax="100" class="progress-bar bg-orange"></div>
                        </div>
                    </div>
                    <div class="number"><strong>50</strong></div>
                </div>
            </div>
        </div>
        <div class="row bg-white has-shadow">
            <!-- Item -->
            <div class="col-xl-3 col-sm-6">
                <div class="item d-flex align-items-center">
                    <div class="icon bg-violet"><i class="icon-user"></i></div>
                    <div class="title"><span>New<br>Clients</span>
                        <div class="progress">
                            <div role="progressbar" style="width: 25%; height: 4px;" aria-valuenow="25" aria-valuemin="0"
                                aria-valuemax="100" class="progress-bar bg-violet"></div>
                        </div>
                    </div>
                    <div class="number"><strong>25</strong></div>
                </div>
            </div>
            <!-- Item -->
            <div class="col-xl-3 col-sm-6">
                <div class="item d-flex align-items-center">
                    <div class="icon bg-red"><i class="icon-padnote"></i></div>
                    <div class="title"><span>Work<br>Orders</span>
                        <div class="progress">
                            <div role="progressbar" style="width: 70%; height: 4px;" aria-valuenow="70" aria-valuemin="0"
                                aria-valuemax="100" class="progress-bar bg-red"></div>
                        </div>
                    </div>
                    <div class="number"><strong>70</strong></div>
                </div>
            </div>
            <!-- Item -->
            <div class="col-xl-3 col-sm-6">
                <div class="item d-flex align-items-center">
                    <div class="icon bg-green"><i class="icon-bill"></i></div>
                    <div class="title"><span>New<br>Invoices</span>
                        <div class="progress">
                            <div role="progressbar" style="width: 40%; height: 4px;" aria-valuenow="40" aria-valuemin="0"
                                aria-valuemax="100" class="progress-bar bg-green"></div>
                        </div>
                    </div>
                    <div class="number"><strong>40</strong></div>
                </div>
            </div>
            <!-- Item -->
            <div class="col-xl-3 col-sm-6">
                <div class="item d-flex align-items-center">
                    <div class="icon bg-orange"><i class="icon-check"></i></div>
                    <div class="title"><span>Open<br>Cases</span>
                        <div class="progress">
                            <div role="progressbar" style="width: 50%; height: 4px;" aria-valuenow="50" aria-valuemin="0"
                                aria-valuemax="100" class="progress-bar bg-orange"></div>
                        </div>
                    </div>
                    <div class="number"><strong>50</strong></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Dashboard Header Section    -->
<section class="dashboard-header">
    <div class="container-fluid">
        <div class="row">
            <!-- Statistics -->
            <div class="statistics col-lg-3 col-12">
                <div class="statistic d-flex align-items-center bg-white has-shadow">
                    <div class="icon bg-red"><i class="fa fa-tasks"></i></div>
                    <div class="text"><strong>234</strong><br><small>Applications</small></div>
                </div>
                <div class="statistic d-flex align-items-center bg-white has-shadow">
                    <div class="icon bg-green"><i class="fa fa-calendar-o"></i></div>
                    <div class="text"><strong>152</strong><br><small>Interviews</small></div>
                </div>
                <div class="statistic d-flex align-items-center bg-white has-shadow">
                    <div class="icon bg-orange"><i class="fa fa-paper-plane-o"></i></div>
                    <div class="text"><strong>147</strong><br><small>Forwards</small></div>
                </div>
            </div>
            <!-- Line Chart            -->
            <div class="chart col-lg-6 col-12">
                <div class="line-chart bg-white d-flex align-items-center justify-content-center has-shadow">
                    <canvas id="lineCahrt"></canvas>
                </div>
            </div>
            <div class="chart col-lg-3 col-12">
                <!-- Bar Chart   -->
                <div class="bar-chart has-shadow bg-white">
                    <div class="title"><strong class="text-violet">95%</strong><br><small>Current Server Uptime</small></div>
                    <canvas id="barChartHome"></canvas>
                </div>
                <!-- Numbers-->
                <div class="statistic d-flex align-items-center bg-white has-shadow">
                    <div class="icon bg-green"><i class="fa fa-line-chart"></i></div>
                    <div class="text"><strong>99.9%</strong><br><small>Success Rate</small></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Projects Section-->
<section class="projects no-padding-top">
    <div class="container-fluid">
        <!-- Project-->
        <div class="project">
            <div class="row bg-white has-shadow">
                <div class="left-col col-lg-6 d-flex align-items-center justify-content-between">
                    <div class="project-title d-flex align-items-center">
                        <div class="image has-shadow"><img src="https://d19m59y37dris4.cloudfront.net/admin-premium/1-4-4/img/project-1.jpg"
                                alt="..." class="img-fluid"></div>
                        <div class="text">
                            <h3 class="h4">Project Title</h3><small>Lorem Ipsum Dolor</small>
                        </div>
                    </div>
                    <div class="project-date"><span class="hidden-sm-down">Today at 4:24 AM</span></div>
                </div>
                <div class="right-col col-lg-6 d-flex align-items-center">
                    <div class="time"><i class="fa fa-clock-o"></i>12:00 PM </div>
                    <div class="comments"><i class="fa fa-comment-o"></i>20</div>
                    <div class="project-progress">
                        <div class="progress">
                            <div role="progressbar" style="width: 45%; height: 6px;" aria-valuenow="25" aria-valuemin="0"
                                aria-valuemax="100" class="progress-bar bg-red"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Project-->
        <div class="project">
            <div class="row bg-white has-shadow">
                <div class="left-col col-lg-6 d-flex align-items-center justify-content-between">
                    <div class="project-title d-flex align-items-center">
                        <div class="image has-shadow"><img src="https://d19m59y37dris4.cloudfront.net/admin-premium/1-4-4/img/project-2.jpg"
                                alt="..." class="img-fluid"></div>
                        <div class="text">
                            <h3 class="h4">Project Title</h3><small>Lorem Ipsum Dolor</small>
                        </div>
                    </div>
                    <div class="project-date"><span class="hidden-sm-down">Today at 4:24 AM</span></div>
                </div>
                <div class="right-col col-lg-6 d-flex align-items-center">
                    <div class="time"><i class="fa fa-clock-o"></i>12:00 PM </div>
                    <div class="comments"><i class="fa fa-comment-o"></i>20</div>
                    <div class="project-progress">
                        <div class="progress">
                            <div role="progressbar" style="width: 60%; height: 6px;" aria-valuenow="25" aria-valuemin="0"
                                aria-valuemax="100" class="progress-bar bg-green"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Project-->
        <div class="project">
            <div class="row bg-white has-shadow">
                <div class="left-col col-lg-6 d-flex align-items-center justify-content-between">
                    <div class="project-title d-flex align-items-center">
                        <div class="image has-shadow"><img src="https://d19m59y37dris4.cloudfront.net/admin-premium/1-4-4/img/project-3.jpg"
                                alt="..." class="img-fluid"></div>
                        <div class="text">
                            <h3 class="h4">Project Title</h3><small>Lorem Ipsum Dolor</small>
                        </div>
                    </div>
                    <div class="project-date"><span class="hidden-sm-down">Today at 4:24 AM</span></div>
                </div>
                <div class="right-col col-lg-6 d-flex align-items-center">
                    <div class="time"><i class="fa fa-clock-o"></i>12:00 PM </div>
                    <div class="comments"><i class="fa fa-comment-o"></i>20</div>
                    <div class="project-progress">
                        <div class="progress">
                            <div role="progressbar" style="width: 50%; height: 6px;" aria-valuenow="25" aria-valuemin="0"
                                aria-valuemax="100" class="progress-bar bg-violet"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Project-->
        <div class="project">
            <div class="row bg-white has-shadow">
                <div class="left-col col-lg-6 d-flex align-items-center justify-content-between">
                    <div class="project-title d-flex align-items-center">
                        <div class="image has-shadow"><img src="https://d19m59y37dris4.cloudfront.net/admin-premium/1-4-4/img/project-4.jpg"
                                alt="..." class="img-fluid"></div>
                        <div class="text">
                            <h3 class="h4">Project Title</h3><small>Lorem Ipsum Dolor</small>
                        </div>
                    </div>
                    <div class="project-date"><span class="hidden-sm-down">Today at 4:24 AM</span></div>
                </div>
                <div class="right-col col-lg-6 d-flex align-items-center">
                    <div class="time"><i class="fa fa-clock-o"></i>12:00 PM </div>
                    <div class="comments"><i class="fa fa-comment-o"></i>20</div>
                    <div class="project-progress">
                        <div class="progress">
                            <div role="progressbar" style="width: 50%; height: 6px;" aria-valuenow="25" aria-valuemin="0"
                                aria-valuemax="100" class="progress-bar bg-orange"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Client Section-->
<section class="client no-padding-top">
    <div class="container-fluid">
        <div class="row">
            <!-- Work Amount  -->
            <div class="col-lg-4">
                <div class="work-amount card">
                    <div class="card-close">
                        <div class="dropdown">
                            <button type="button" id="closeCard1" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                            <div aria-labelledby="closeCard1" class="dropdown-menu dropdown-menu-right has-shadow"><a
                                    href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#"
                                    class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h3>Work Hours</h3><small>Lorem ipsum dolor sit amet.</small>
                        <div class="chart text-center">
                            <div class="text"><strong>90</strong><br><span>Hours</span></div>
                            <canvas id="pieChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Client Profile -->
            <div class="col-lg-4">
                <div class="client card">
                    <div class="card-close">
                        <div class="dropdown">
                            <button type="button" id="closeCard2" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                            <div aria-labelledby="closeCard2" class="dropdown-menu dropdown-menu-right has-shadow"><a
                                    href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#"
                                    class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                        </div>
                    </div>
                    <div class="card-body text-center">
                        <div class="client-avatar"><img src="https://d19m59y37dris4.cloudfront.net/admin-premium/1-4-4/img/avatar-2.jpg"
                                alt="..." class="img-fluid rounded-circle">
                            <div class="status bg-green"></div>
                        </div>
                        <div class="client-title">
                            <h3>Jason Doe</h3><span>Web Developer</span><a href="#">Follow</a>
                        </div>
                        <div class="client-info">
                            <div class="row">
                                <div class="col-4"><strong>20</strong><br><small>Photos</small></div>
                                <div class="col-4"><strong>54</strong><br><small>Videos</small></div>
                                <div class="col-4"><strong>235</strong><br><small>Tasks</small></div>
                            </div>
                        </div>
                        <div class="client-social d-flex justify-content-between"><a href="#" target="_blank"><i class="fa fa-facebook"></i></a><a
                                href="#" target="_blank"><i class="fa fa-twitter"></i></a><a href="#" target="_blank"><i
                                    class="fa fa-google-plus"></i></a><a href="#" target="_blank"><i class="fa fa-instagram"></i></a><a
                                href="#" target="_blank"><i class="fa fa-linkedin"></i></a></div>
                    </div>
                </div>
            </div>
            <!-- Total Overdue             -->
            <div class="col-lg-4">
                <div class="overdue card">
                    <div class="card-close">
                        <div class="dropdown">
                            <button type="button" id="closeCard3" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                            <div aria-labelledby="closeCard3" class="dropdown-menu dropdown-menu-right has-shadow"><a
                                    href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#"
                                    class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h3>Total Overdue</h3><small>Lorem ipsum dolor sit amet.</small>
                        <div class="number text-center">$20,000</div>
                        <div class="chart">
                            <canvas id="lineChart1"> </canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
