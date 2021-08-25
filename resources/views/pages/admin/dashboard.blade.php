@extends('layouts.admin')
@section('content')

{{-- 
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Launch demo modal
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div> --}}





    <div class="container-fluid p-0">

        <h1 class="h3 mb-3"><strong>Analytics</strong> Dashboard</h1>

        <div class="row">
            <div class="col-xl-12 col-xxl-5 d-flex">
                <div class="w-100">
                    <div class="row">

                        <?php $analytics = [
                            ["Students","truck",$analytics['students']],
                            ["Topics","truck",$analytics['topics']],
                            ["Lessons","truck",$analytics['lessons']],
                            ["Batches","truck", $analytics['batches']]
                        ];
                        ?>

                        @forelse ($analytics as $analytic)
                            
                            <div class="p-1 col-md-3 col-sm-6">
                                <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col mt-0">
                                            <h5 class="card-title">{{$analytic[0]}}</h5>
                                        </div>

                                        <div class="col-auto">
                                            <div class="stat text-primary">
                                                <i class="align-middle" data-feather="{{$analytic[1]}}"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <h1 class="mt-1 mb-3 display-4 text-muted" style="font-weight:bold">{{$analytic[2]}}</h1>
                                    {{-- <div class="mb-0">
                                        <span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i> -3.65% </span>
                                        <span class="text-muted">Since last week</span>
                                    </div> --}}
                                </div>
                                </div>
                            </div>


                        @empty @endforelse

                    </div>
                </div>
            </div>

            {{-- <div class="col-xl-6 col-xxl-7">
                <div class="card flex-fill w-100">
                    <div class="card-header">

                        <h5 class="card-title mb-0">Recent Movement</h5>
                    </div>
                    <div class="card-body py-3">
                        <div class="chart chart-sm">
                            <canvas id="chartjs-dashboard-line"></canvas>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>

        {{-- <div class="row">
            <div class="col-12 col-md-6 col-xxl-3 d-flex order-2 order-xxl-3">
                <div class="card flex-fill w-100">
                    <div class="card-header">

                        <h5 class="card-title mb-0">Browser Usage</h5>
                    </div>
                    <div class="card-body d-flex">
                        <div class="align-self-center w-100">
                            <div class="py-3">
                                <div class="chart chart-xs">
                                    <canvas id="chartjs-dashboard-pie"></canvas>
                                </div>
                            </div>

                            <table class="table mb-0">
                                <tbody>
                                    <tr>
                                        <td>Chrome</td>
                                        <td class="text-end">4306</td>
                                    </tr>
                                    <tr>
                                        <td>Firefox</td>
                                        <td class="text-end">3801</td>
                                    </tr>
                                    <tr>
                                        <td>IE</td>
                                        <td class="text-end">1689</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-12 col-xxl-6 d-flex order-3 order-xxl-2">
                <div class="card flex-fill w-100">
                    <div class="card-header">

                        <h5 class="card-title mb-0">Real-Time</h5>
                    </div>
                    <div class="card-body px-4">
                        <div id="world_map" style="height:350px;"></div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-xxl-3 d-flex order-1 order-xxl-1">
                <div class="card flex-fill">
                    <div class="card-header">

                        <h5 class="card-title mb-0">Calendar</h5>
                    </div>
                    <div class="card-body d-flex">
                        <div class="align-self-center w-100">
                            <div class="chart">
                                <div id="datetimepicker-dashboard"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}



        
        <div class="row">
            <div class="col-12  d-flex">
                <div class="card flex-fill">
                    <div class="card-header">

                        <a href="/demostudents" class="card-title h5 mb-0">Demo Students</a>
                    </div>
                    <table class="table table-hover my-0">
                        <thead>
                            <tr>

                                <th>#</th>
                                <th>Name</th>
                                <th>Age</th>
                                <th>Class</th>
                                <th>Parent</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>

@forelse($demostudents as $student)
                            <tr>
                                
                                <td>{{$loop->iteration}}</td>
                                <td>{{$student->name}}</td>
                                <td>{{$student->kidclass}}</td>
                                <td>{{$student->kidage}}</td>
                                <td>{{$student->parentname}}</td>
                                <td><a href="tel:{{$student->parentphone}}">{{$student->parentphone}}</a></td>
                                <td><a href="mailto:{{$student->parentemail}}">{{$student->parentemail}}</a></td>
                                
                                <td>
                                    @if($student->status)
                                    <span class="badge bg-secondary">Registered</span>
                                    @else
                                    <a href="/registerstudent/{{$student->id}}" class="badge btn btn-sm bg-success">Register</a>
                                    @endif
                                </td>
                            </tr>
                            @empty @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
            {{-- <a href="/demostudents" class="btn btn-primary" style="width:max-content">View All</a> --}}
            
        </div>

    </div>

    
@endsection
