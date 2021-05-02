@extends('tasks.layouts.master')

@section('title')
Danh Sách Công Việc
@endsection

@section('CSS')
    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 1px;
        }

        .task-table tbody tr td:nth-child(2) {
            width: 120px;
        }

        .task-table tbody tr td:nth-child(3) {
            width: 100px;
        }
        
    </style>
@endsection

@section('brand')
Danh Sách Công Việc
@endsection

@section('content')
<div class="container">
    <div class="col-sm-offset-2 col-sm-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                <a href="{{ route('task.create') }}" type="submit" class="btn btn-primary">
                    <i class="fa fa-btn fa-plus"></i>  Thêm mới công việc
                </a>
            </div> 
        </div>

        <!-- Current Tasks -->
        <div class="panel panel-default">
            <div class="panel-heading">
                Danh sách công việc hiện tại
            </div>

            <div class="panel-body">
                <table class="table table-striped task-table">
                    <thead>
                        <th>Tên công việc</th>
                        <th>Trạng thái</th>
                        <!-- <th>Hành động</th> -->
                        <th>&nbsp;</th>
                        <th>&nbsp;</th>
                    </thead>
                    <tbody>
                        @foreach ($tasks as $task)
                        <tr>
                            <td class="table-text">
                                <div>
                                    <a href="{{ route('task.show', $task->id)}}" target="_blank" rel="">{{$task->new_name}} </a>
                                    
                                </div>
                            </td>
                            <td>{{ $task->status_text }}</td>
                            <!-- Task Complete Button -->
                            <td>
                                @if ($task->status == 1)
                                    <a href="{{ route('todo.task.complete', $task->id) }}" type="submit"
                                    class="btn btn-success">
                                    <i class="fa fa-btn fa-check"></i>  Hoàn thành
                                    </a>
                                @else
                                    <a href="{{ route('todo.task.reset', $task->id) }}" type="submit"
                                    class="btn btn-success">
                                    <i class="fa fa-btn fa-refresh"></i>  Làm lại
                                    </a>
                                @endif
                            </td>
                            <!-- Task update button -->
                            <!-- <td>
                                <a href="{{ route('task.edit', $task->id) }}" type="submit" class="btn btn-warning">
                                    <i class="fa fa-btn fa-wrench"></i>  Cập nhật
                                </a>
                            </td> -->
                            <!-- Task Delete Button -->
                            <td>
                                <form action="{{ route('task.destroy', $task->id) }}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}

                                    <button type="submit" class="btn btn-danger">
                                        <i class="fa fa-btn fa-trash"></i>Xoá
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
{{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
@endsection