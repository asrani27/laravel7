@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Role : {{ Auth::user()->roles->first()->name }}
                        <h3>
                        <span class="badge badge-primary" id="notifmember">0</span>   
                    </h3>
                    
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if(Auth::user()->roles->first()->name == 'admin')
                    <div class="table-responsive">
                        <table class="table table-sm" width="100%">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Send Notif</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $no = 1;
                                @endphp
                                @foreach ($user as $u)
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$u->name}}</td>
                                    <td><a href="/notif/{{$u->id}}" class="btn btn-sm btn-primary">Send</a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    @else
                    <h2>My Profile : {{Auth::user()->name}}</h2>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
