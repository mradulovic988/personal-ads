<?php include realpath('src/templates/headers/be-header.php'); ?>
    <div id="layoutSidenav">
        <?php include realpath('src/templates/sidebars/be-sidebar.php'); ?>
        <div id="layoutSidenav_content">
            <main>
                <div class="page-header pb-10 page-header-dark bg-gradient-primary-to-secondary">
                    <div class="container-fluid">
                        <div class="page-header-content">
                            <h1 class="page-header-title">
                                <div class="page-header-icon"><i data-feather="activity"></i></div>
                                <span>Dashboard</span>
                            </h1>
                            <div class="page-header-subtitle">Example dashboard overview and content summary</div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid mt-n10">
                    <div class="card mb-4">
                        <div class="card-header">
                            <ul class="nav nav-pills card-header-pills" id="cardPill" role="tablist">
                                <li class="nav-item"><a class="nav-link active" id="overview-pill" href="#overviewPill" data-toggle="tab" role="tab" aria-controls="overview" aria-selected="true">Overview</a></li>
                                <li class="nav-item"><a class="nav-link" id="activities-pill" href="#activitiesPill" data-toggle="tab" role="tab" aria-controls="activities" aria-selected="false">Activities</a></li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content" id="cardPillContent">
                                <div class="tab-pane fade show active" id="overviewPill" role="tabpanel" aria-labelledby="overview-pill">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="chart-area mb-4 mb-lg-0" style="height: 20rem;"><canvas id="myAreaChart" width="100%" height="30"></canvas></div>
                                        </div>
                                        <div class="col-lg-4">
                                            <h6>Projects</h6>
                                            <hr class="mt-1" />
                                            <div class="d-flex align-items-cetner justify-content-between small mb-1">
                                                <div class="font-weight-bold">Server Setup</div>
                                                <div class="small">25%</div>
                                            </div>
                                            <div class="progress mb-3"><div class="progress-bar bg-danger" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div></div>
                                            <div class="d-flex align-items-cetner justify-content-between small mb-1">
                                                <div class="font-weight-bold">Database Migration</div>
                                                <div class="small">50%</div>
                                            </div>
                                            <div class="progress mb-3"><div class="progress-bar bg-warning" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div></div>
                                            <div class="d-flex align-items-cetner justify-content-between small mb-1">
                                                <div class="font-weight-bold">Version Release</div>
                                                <div class="small">75%</div>
                                            </div>
                                            <div class="progress mb-3"><div class="progress-bar bg-primary" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div></div>
                                            <div class="d-flex align-items-cetner justify-content-between small mb-1">
                                                <div class="font-weight-bold">Product Listings</div>
                                                <div class="small">100%</div>
                                            </div>
                                            <div class="progress mb-4"><div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div></div>
                                            <div class="text-right">
                                                <a class="btn btn-primary btn-sm" href="javascript:void(0);">Visit Task Center<i class="ml-1" data-feather="arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="activitiesPill" role="tabpanel" aria-labelledby="activities-pill">
                                    <div class="datatable table-responsive">
                                        <table class="table table-bordered table-hover" id="dataTableActivity" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>Date</th>
                                                    <th>Event</th>
                                                    <th>Time</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>Date</th>
                                                    <th>Event</th>
                                                    <th>Time</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                <tr>
                                                    <td>01/13/20</td>
                                                    <td><i class="mr-2 text-green" data-feather="zap"></i>Server online</td>
                                                    <td>1:21 AM</td>
                                                </tr>
                                                <tr>
                                                    <td>01/13/20</td>
                                                    <td><i class="mr-2 text-red" data-feather="zap-off"></i>Server restarted</td>
                                                    <td>1:00 AM</td>
                                                </tr>
                                                <tr>
                                                    <td>01/12/20</td>
                                                    <td><i class="mr-2 text-purple" data-feather="shopping-cart"></i>New order placed! Order #<a href="javascript:void(0);">1126550</a></td>
                                                    <td>5:45 AM</td>
                                                </tr>
                                                <tr>
                                                    <td>01/12/20</td>
                                                    <td><i class="mr-2 text-blue" data-feather="user"></i>Valerie Luna submitted <a href="javascript:void(0);">quarter four report</a></td>
                                                    <td>4:23 PM</td>
                                                </tr>
                                                <tr>
                                                    <td>01/12/20</td>
                                                    <td><i class="mr-2 text-yellow" data-feather="database"></i>Database backup created</td>
                                                    <td>3:51 AM</td>
                                                </tr>
                                                <tr>
                                                    <td>01/12/20</td>
                                                    <td><i class="mr-2 text-purple" data-feather="shopping-cart"></i>New order placed! Order #<a href="javascript:void(0);">1126549</a></td>
                                                    <td>1:22 AM</td>
                                                </tr>
                                                <tr>
                                                    <td>01/11/20</td>
                                                    <td><i class="mr-2 text-blue" data-feather="user-plus"></i>New user created: <a href="javascript:void(0);">Sam Malone</a></td>
                                                    <td>4:18 PM</td>
                                                </tr>
                                                <tr>
                                                    <td>01/11/20</td>
                                                    <td><i class="mr-2 text-purple" data-feather="shopping-cart"></i>New order placed! Order #<a href="javascript:void(0);">1126548</a></td>
                                                    <td>4:02 PM</td>
                                                </tr>
                                                <tr>
                                                    <td>01/11/20</td>
                                                    <td><i class="mr-2 text-purple" data-feather="shopping-cart"></i>New order placed! Order #<a href="javascript:void(0);">1126547</a></td>
                                                    <td>3:47 PM</td>
                                                </tr>
                                                <tr>
                                                    <td>01/11/20</td>
                                                    <td><i class="mr-2 text-green" data-feather="zap"></i>Server online</td>
                                                    <td>1:19 AM</td>
                                                </tr>
                                                <tr>
                                                    <td>01/11/20</td>
                                                    <td><i class="mr-2 text-red" data-feather="zap-off"></i>Server restarted</td>
                                                    <td>1:00 AM</td>
                                                </tr>
                                                <tr>
                                                    <td>01/10/20</td>
                                                    <td><i class="mr-2 text-purple" data-feather="shopping-cart"></i>New order placed! Order #<a href="javascript:void(0);">1126547</a></td>
                                                    <td>5:31 PM</td>
                                                </tr>
                                                <tr>
                                                    <td>01/10/20</td>
                                                    <td><i class="mr-2 text-purple" data-feather="shopping-cart"></i>New order placed! Order #<a href="javascript:void(0);">1126546</a></td>
                                                    <td>12:13 PM</td>
                                                </tr>
                                                <tr>
                                                    <td>01/10/20</td>
                                                    <td><i class="mr-2 text-blue" data-feather="user"></i>Diane Chambers submitted <a href="javascript:void(0);">quarter four report</a></td>
                                                    <td>10:56 AM</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-deck">
                        <div class="card mb-4">
                            <img class="card-img-top" src="assets/img/drawkit/color/drawkit-charts-and-graphs.svg" alt="..." />
                            <div class="card-body">
                                <h5 class="card-title text-primary">Interactive Charts</h5>
                                <p class="card-text">The interactive charts in this theme are powered by Chart.js, a simple, yet flexible, JavaScript charting library for designers &amp; developers.</p>
                            </div>
                            <a class="card-footer d-flex align-items-center justify-content-between" href="https://themes.startbootstrap.com/charts.php">View charts<i data-feather="arrow-right"></i></a>
                        </div>
                        <div class="card mb-4">
                            <img class="card-img-top" src="assets/img/drawkit/color/drawkit-developer-woman.svg" alt="..." />
                            <div class="card-body">
                                <h5 class="card-title text-primary">Documentation</h5>
                                <p class="card-text">This theme includes code samples for each component, along with detailed documentation and usage instructions!</p>
                            </div>
                            <a class="card-footer d-flex align-items-center justify-content-between" href="https://docs.startbootstrap.com/sb-admin-pro/">View documentation<i data-feather="arrow-right"></i></a>
                        </div>
                        <div class="card mb-4">
                            <img class="card-img-top" src="assets/img/drawkit/color/drawkit-folder-man.svg" alt="..." />
                            <div class="card-body">
                                <h5 class="card-title text-primary">Pre-Built Pages</h5>
                                <p class="card-text">A number of pre-built page examples and page layouts are included with this theme to make prototyping your next web application fast and efficient!</p>
                            </div>
                            <a class="card-footer d-flex align-items-center justify-content-between" href="#!">Explore pages<i data-feather="arrow-right"></i></a>
                        </div>
                        <div class="card mb-4">
                            <img class="card-img-top" src="assets/img/drawkit/color/drawkit-content-man.svg" alt="..." />
                            <div class="card-body">
                                <h5 class="card-title text-primary">Deep Customization</h5>
                                <p class="card-text">Overried and extend the SCSS variables included with this project to deeply customize the theme to make it pefrectly fit your brand!</p>
                            </div>
                            <a class="card-footer d-flex align-items-center justify-content-between" href="#!">Learn more<i data-feather="arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </main>
<?php include realpath('src/templates/footers/be-footer.php'); ?>