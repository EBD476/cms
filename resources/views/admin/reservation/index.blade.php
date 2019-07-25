@extends('layouts.app')

@section('title','Reservation')

@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">
@endpush

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">All Reservation</h4>
                            <p class="card-category"> Here is a subtitle for this table</p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="table" class="table" cellspacing="0" width="100%">
                                    <thead class=" text-primary">
                                    <th>
                                        ID
                                    </th>
                                    <th>
                                        Name
                                    </th>
                                    <th>
                                        Phone
                                    </th>
                                    <th>
                                        Email
                                    </th>
                                    <th>
                                        Message
                                    </th>
                                    <th>
                                        Date and Time
                                    </th>
                                    <th>
                                        Status
                                    </th>
                                    <th>
                                        Create At
                                    </th>

                                    <th>
                                        action
                                    </th>
                                    </thead>
                                    <tbody>

                                    @foreach($reservations as $key => $reservation)
                                        <tr>
                                            <td>
                                                {{$key + 1}}
                                            </td>
                                            <td>
                                                {{$reservation -> name}}
                                            </td>
                                            <td>
                                                {{$reservation -> phone}}
                                            </td>
                                            <td>
                                                {{$reservation -> email}}
                                            </td>
                                            <td>
                                                {{$reservation ->message}}
                                            </td>
                                            <td>
                                                {{$reservation -> date_time}}
                                            </td>
                                            <td>
                                               @if( $reservation -> status == true )
                                                 <span class="label label-info">Confirmed</span>
                                                @else
                                                <span class="label label-danger">Not Confirmed</span>
                                            </td>
                                            <td>
                                                {{$reservation -> created_at}}
                                            </td>

                                            <td>
                                               <a href="{{route($reservation->id)}}" class="btn btn-info btn-sm"><i class="material-icons">mode_edit</i></a>
                                                <form id ="-form-delete{{$reservation->id}}" style="display: none;" method="POST" action="{{route('slider.destroy',$reservation->id)}}">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                                <button type="button" class="btn btn-danger btn-sm"  onclick="if(confirm('Are You Sure Delete This?')){
                                                    event.preventDefault();
                                                    document.getElementById('-form-delete{{$reservation->id}}').submit();
                                                }else {
                                                    event.preventDefault();
                                                        }"><i class="material-icons">delete</i></button>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        @endsection

        @push('scripts')
            <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
            <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
            <script>
                $(document).ready(function() {
                    $('#table').DataTable();
                } );
            </script>
    @endpush