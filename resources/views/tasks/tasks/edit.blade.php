@extends('tasks.layouts.master')

@section('title')
    Cập Nhật Công Việc
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
    Cập Nhật Công Việc   
@endsection

@section('content')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Thêm công việc mới
                </div>
                <div class="panel-body">
                    <!-- New Task Form -->
                    <form action="{{ Route('task.update', $task->id)}}" method="post" class="form-horizontal">
                    {{ csrf_field() }}

                    <!-- Task Name -->
                    <div class="form-group">
                        <label for="task-name" class="col-sm-3 control-label">Tên công việc</label>

                        <div class="col-sm-6">
                            <input type="text" name="name" id="task-name" class="form-control" require="Không được bỏ trống!" placeholder="Nhập tên công việc"
                                value="{{ $task->name }}">
                        </div>
                    </div>
                    <!-- Task Content -->
                    <div class="form-group">
                        <label for="task-content" class="col-sm-3 control-label">Mô tả công việc</label>

                        <div class="col-sm-6">
                            <textarea class="form-control" name="content" id="task-content" cols="30" rows="10">{{ $task->content }}</textarea>
                        </div>
                    </div>
                    <!-- Task priority  -->
                    <div class="form-group">
                        <label for="priority" class="col-sm-3 control-label">Độ ưu tiên của công việc</label>
                        <div class="col-sm-6">
                            <select id="priority" name="priority" class="form-control">
                                <option value="0">Bình thường</option>
                                <option value="1">Quan trọng</option>
                                <option value="2">Khẩn cấp</option>
                            </select>
                        </div>
                    </div>
                    <!-- Task Deadline -->
                    <div class="form-group">
                        <label for="task-deadline" class="col-sm-3 control-label">Thời hạn hoàn thành</label>

                        <div class="col-sm-6">
                            <input type="text" name="deadline" id="task-deadline" class="form-control"
                                value="{{ $task->deadline }}">
                        </div>
                    </div>

                    <!-- Add Task Button -->
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-6">
                            <button type="submit" class="btn btn-default">
                                <i class="fa fa-btn fa-plus"></i>  Cập nhật 
                            </button>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
@endsection