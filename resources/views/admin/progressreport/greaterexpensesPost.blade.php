<link href="{{ asset('public/admin/css/proStyleAdmin.css') }}" rel="stylesheet" type="text/css">
<div class="container-fluid" data-appear-animation="fadeInLeft" data-appear-delay="400">
        <div class="row">
            <div class="col-md-12">
                <div class="text-center">
                    <h2>लागत भन्दा खर्च नाघेका आयोजनाहरु</h2>
                    @if(isset($implementing_office_name))
                        <h3>
                            {{ $implementing_office_name }}
                        </h3>
                    @endif
                </div>

                <div class="pro_content" data-appear-animation="fadeInUp" data-appear-delay="1000">
                    <table class="table table-striped table-hover">
                        <tr>
                            <th class="text-center">
                                कोड
                            </th>
                            @if(!isset($implementing_office_name))
                                <th class="text-center">
                                    डिभिजन
                                </th>
                            @endif
                            <th class="text-center">
                                आयोजनाको नाम
                            </th>
                            <th class="text-center">
                                लागत
                            </th>
                            <th class="text-center">
                                खर्च
                            </th>
                        </tr>
                        @foreach($projects as $project)
                                <?php $totalExpenditure=0 ?>
                                @foreach($project->progresses()->where('fy_id','>=',$project->start_fy_id)->get() as $index=>$progress)
                                    <?php $totalExpenditure+= $progress->bill_exp?>
                                @endforeach
                                <?php
                                    $projectCost = $project->projectCost();
                                ?>

                                @if($totalExpenditure>$projectCost)
                                        <tr>
                                            <td>
                                                {{ $project->project_code }}
                                            </td>
                                            @if(!isset($implementing_office_name))
                                                <td>
                                                    {{ $project->implementing_office->name }}
                                                </td>
                                            @endif
                                            <td>
                                                {{ $project->name }}
                                            </td>
                                            <td align="right">
                                                {{ number_format($projectCost ,3)}}
                                            </td>
                                            <td align="right">
                                                {{ number_format($totalExpenditure ,3)}}
                                            </td>
                                        </tr>
                                @endif
                        @endforeach
                    </table>
                    <div class="clearfix"></div>
                </div>

            </div>
        </div>
    </div>
    <style>
        table{
            font-size: 13px;
        }
        table, th, td,tr {
            border: 2px solid black;
        }
    </style>
    <script src="{{ asset('/public/js/jquery-2.1.1.min.js') }}"></script>
    <script src="{{ asset('/public/js/bootstrap.min.js') }}"></script>
