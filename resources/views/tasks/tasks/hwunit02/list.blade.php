@extends('tasks.layouts.master')

@section('title')
    List Task
@endsection

@section('CSS')
    table{
        width: 100%;
        margin: 50px auto;
    }
    td{
       
    }
@endsection

@section('brand')
    List Task
@endsection

@section('content') 
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <center> 
                <table>
                    {{--<thead>
                        <tr>
                            <th>
                                <p>Tên công việc</p>
                            </th>
                            <th>
                                <p>Trạng thái</p>
                            </th>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <hr>
                            </td>
                        </tr>
                    </thead>--}}
                    <tbody>
                        @forelse ($list as $li)
                        <tr>
                            <td>
                                {!! '<p>'.$li['name'].'</p>' !!}
                            </td>
                            <td> 
                                <p><i>
                                    @if ($li['status'] == 0)
                                        Chưa làm
                                    @elseif ($li['status'] == 1)
                                        Đã hoàn thành
                                    @elseif ($li['status'] == -1)
                                        Không thực hiện
                                    @endif
                                </i></p>
                            
                        </td> 
                        </tr>
                        @empty 
                            No task        
                        @endforelse
                        <tbody>
                </table>
        </center>
         </div>
    </div>
@endsection  

@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
@endsection