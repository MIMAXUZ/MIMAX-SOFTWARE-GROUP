@extends('admin.layout.app')

@section('content')

    <div class="card" id="card-title-1">
        <div class="card-header border-0 pb-0 ">
            <h5 class="card-title">Team Member</h5>
            <a href="{{route('team-member-create')}}"><button type="button" class="btn btn-success">Add Member</button></a>
        </div>
        <div class="card-body">
            <div class="table-responsive ">
                <table class="table-responsive-lg table display mb-4 dataTablesCard order-table card-table text-black dataTable no-footer student-tbl" id="example5">
                    <thead>
                        <tr>
                            <th>Full Name</th>
                            <th>Job</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($team_members as $team)
                            <tr>
                                <td>{{$team->full_name}}</td>
                                <td>{{$team->job}}</td>
                                <td>
                                    <span class=" me-3">
                                        <img src="{{asset('/admin/images/profile/small/pic11.jpg')}}" alt="" width="50" class="rounded-3 img-history">
                                    </span>
                                </td>
                                <td><span class="btn btn-outline-success btn-sm">Pending</span></td>
                                <td>
                                    <div class="dropdown">
                                        <a href="javascript:void(0);" class="btn-link btn sharp tp-btn-light btn-primary pill" data-bs-toggle="dropdown" aria-expanded="false">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8.33319 9.99985C8.33319 10.9203 9.07938 11.6665 9.99986 11.6665C10.9203 11.6665 11.6665 10.9203 11.6665 9.99986C11.6665 9.07938 10.9203 8.33319 9.99986 8.33319C9.07938 8.33319 8.33319 9.07938 8.33319 9.99985Z" fill="#ffffff"/>
                                            <path d="M8.33319 3.33329C8.33319 4.25376 9.07938 4.99995 9.99986 4.99995C10.9203 4.99995 11.6665 4.25376 11.6665 3.33329C11.6665 2.41282 10.9203 1.66663 9.99986 1.66663C9.07938 1.66663 8.33319 2.41282 8.33319 3.33329Z" fill="#ffffff"/>
                                            <path d="M8.33319 16.6667C8.33319 17.5871 9.07938 18.3333 9.99986 18.3333C10.9203 18.3333 11.6665 17.5871 11.6665 16.6667C11.6665 15.7462 10.9203 15 9.99986 15C9.07938 15 8.33319 15.7462 8.33319 16.6667Z" fill="#ffffff"/>
                                            </svg>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                        </div>
                                    </div>
                                </td> 
                            </tr>	
                        @endforeach
                        					
                    </tbody>
                </table>
            </div>
        </div>
    </div>

 
@endsection