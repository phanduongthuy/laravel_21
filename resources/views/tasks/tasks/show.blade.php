@extends('tasks.layouts.master')

@section('title')
    Xem Chi Tiết Công Việc
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
    Chi Tiết Công Việc   
@endsection

@section('content')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Chi tiết công việc
                </div>
                <div class="panel-body">
                    <h4>Tên công việc: {{ $task->name }}</h4>
                    <h4>Nội dung:</h4>{{ $task->content }}
                    <h4>Mức độ ưu tiên công việc: {{ $task->priority_text }}</h4>
                    <h4>Thời hạn:</h4>{{ $task->deadline }}
                    <h4>Trạng thái công việc: {{ $task->status_text }}</h4>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    Hành động
                </div>
                <div class="panel-body">
                    <a href="{{ route('task.edit', $task->id) }}" type="submit" class="btn btn-warning">
                        <i class="fa fa-btn fa-wrench"></i>  Cập nhật
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection