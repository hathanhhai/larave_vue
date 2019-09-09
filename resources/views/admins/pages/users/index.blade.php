@extends("admins.layouts.index")
@section("content")

<div class="row">
                    <div class="col-sm-12">
                        <div class="card-box">


                            <div class="table-rep-plugin">
                                <div class="table-responsive" data-pattern="priority-columns">
                                    <table id="tech-companies-1" class="table  table-striped">
                                        <thead>
                                            <tr>
                                                <th>Company</th>
                                                <th data-priority="1">Last Trade</th>
                                                <th data-priority="3">Trade Time</th>
                                                <th data-priority="1">Change</th>
                                                <th data-priority="3">Prev Close</th>
                                                <th data-priority="3">Open</th>
                                                <th data-priority="6">Bid</th>
                                                <th data-priority="6">Ask</th>
                                                <th data-priority="6">1y Target Est</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th>GOOG <span class="co-name">Google Inc.</span></th>
                                                <td>597.74</td>
                                                <td>12:12PM</td>
                                                <td>14.81 (2.54%)</td>
                                                <td>582.93</td>
                                                <td>597.95</td>
                                                <td>597.73 x 100</td>
                                                <td>597.91 x 300</td>
                                                <td>731.10</td>
                                            </tr>
                                         
                                        </tbody>
                                    </table>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
                <!-- End row -->
@stop


