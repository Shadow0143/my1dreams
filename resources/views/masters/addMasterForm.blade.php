@include('layouts.dashboard_header')

<div class="wrapper">
    <div class="card">
        <div class="card-header">
            <h5>Zero Configuration</h5>
            <div class="card-header-right">
                <i class="icofont icofont-spinner-alt-5"></i>
            </div>
        </div>
        <div class="card-block">
            <div class="table-responsive">
                <table id="issue-list-table" class="table dt-responsive width-100">
                    <thead class="text-left">
                        <tr>
                            <th>Type</th>
                            <th>#ID</th>
                            <th>Description</th>
                            <th>Start date</th>
                            <th>Priority</th>
                            <th>Assigned</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody class="text-left">
                        <tr>
                            <td class="txt-primary">Bug</td>
                            <td>PI:198756541080</td>
                            <td>Software Run Failure</td>
                            <td>2015/01/10</td>
                            <td><span class="label label-danger">Highest</span></td>
                            <td><a href="#">Katerina larson</a></td>
                            <td><span class="label label-primary">Open</span></td>
                        </tr>
                        <tr>
                            <td class="txt-primary">Bug</td>
                            <td>PI:198756897280</td>
                            <td>Server Randering</td>
                            <td>2015/04/22</td>
                            <td><span class="label label-success">Normal</span></td>
                            <td><a href="#">Mitchell Jones</a></td>
                            <td><span class="label label-danger">Close</span></td>
                        </tr>
                        <tr>
                            <td class="txt-primary">Bug</td>
                            <td>PI:198773249750</td>
                            <td>Cluster Load Balancing</td>
                            <td>2015/01/10</td>
                            <td><span class="label label-info">Slow</span></td>
                            <td><a href="#">Michal Marshell</a></td>
                            <td><span class="label label-warning">Pending</span></td>
                        </tr>
                        <tr>
                            <td class="txt-primary">Bug</td>
                            <td>PI:197016541230</td>
                            <td>Data Mirroring Error</td>
                            <td>2015/01/10</td>
                            <td><span class="label label-warning">High</span></td>
                            <td><a href="#">Tiger Nixon</a></td>
                            <td><span class="label label-danger">Close</span></td>
                        </tr>
                        <tr>
                            <td class="txt-primary">Bug</td>
                            <td>PI:282256541230</td>
                            <td>Software Run Failure</td>
                            <td>2015/01/10</td>
                            <td><span class="label label-success">Normal</span></td>
                            <td><a href="#">Raghuvinder Singh</a></td>
                            <td><span class="label label-primary">Open</span></td>
                        </tr>
                        <tr>
                            <td class="txt-primary">Bug</td>
                            <td>PI:382906541279</td>
                            <td>Package Fatal Error</td>
                            <td>2015/01/10</td>
                            <td><span class="label label-warning">High</span></td>
                            <td><a href="#">Alex standoman</a></td>
                            <td><span class="label label-warning">Pending</span></td>
                        </tr>
                        <tr>
                            <td class="txt-primary">Bug</td>
                            <td>PI:497056541220</td>
                            <td>Server Authontication Error</td>
                            <td>2015/01/10</td>
                            <td><span class="label label-warning">High</span></td>
                            <td><a href="#">Roya Hamad</a></td>
                            <td><span class="label label-warning">Pending</span></td>
                        </tr>
                        <tr>
                            <td class="txt-primary">Bug</td>
                            <td>PI:198756541230</td>
                            <td>Software Run Failure</td>
                            <td>2015/01/10</td>
                            <td><span class="label label-danger">Highest</span></td>
                            <td><a href="#">Carry Mathison</a></td>
                            <td><span class="label label-primary">Open</span></td>
                        </tr>
                        <tr>
                            <td class="txt-primary">Bug</td>
                            <td>PI:198756541230</td>
                            <td>Software Run Failure</td>
                            <td>2015/01/10</td>
                            <td><span class="label label-danger">Highest</span></td>
                            <td><a href="#">Dugless hole</a></td>
                            <td><span class="label label-info">On Hold</span></td>
                        </tr>
                        <tr>
                            <td class="txt-primary">Bug</td>
                            <td>PI:198756541230</td>
                            <td>Package Security Failure</td>
                            <td>2015/01/10</td>
                            <td><span class="label label-info">slow</span></td>
                            <td><a href="#">Tiger Nixon</a></td>
                            <td><span class="label label-danger">Close</span></td>
                        </tr>
                        <tr>
                            <td class="txt-primary">Bug</td>
                            <td>PI:198756541230</td>
                            <td>Software Run Failure</td>
                            <td>2015/01/10</td>
                            <td><span class="label label-warning">High</span></td>
                            <td><a href="#">Tiger Nixon</a></td>
                            <td><span class="label label-info">On hold</span></td>
                        </tr>
                        <tr>
                            <td class="txt-primary">Bug</td>
                            <td>PI:198756541230</td>
                            <td>Software Run Failure</td>
                            <td>2015/01/10</td>
                            <td><span class="label label-info">slow</span></td>
                            <td><a href="#">Tiger Nixon</a></td>
                            <td><span class="label label-warning">Pending</span></td>
                        </tr>
                        <tr>
                            <td class="txt-primary">Bug</td>
                            <td>PI:198756541230</td>
                            <td>Software Run Failure</td>
                            <td>2015/01/10</td>
                            <td><span class="label label-success">Normal</span></td>
                            <td><a href="#">Tiger Nixon</a></td>
                            <td><span class="label label-danger">Close</span></td>
                        </tr>
                        <tr>
                            <td class="txt-primary">Bug</td>
                            <td>PI:198756541230</td>
                            <td>Software Run Failure</td>
                            <td>2015/01/10</td>
                            <td><span class="label label-info">slow</span></td>
                            <td><a href="#">Tiger Nixon</a></td>
                            <td><span class="label label-info">On Hold</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- end of table -->
        </div>
    </div>
  </div>
 @include('layouts.dashboard_footer')