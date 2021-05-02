@extends('tasks.layouts.master')

@section('title')
    Profile
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
    Profile
@endsection

@section('content') 
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <center>
                <table>
                    <tr>
                        <td>
                            <p>Họ và tên</p> 
                        </td>
                        <td>
                            {!! '<p><b>'.$name.'</b></p>' !!}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Năm sinh</p> 
                        </td>
                        <td>
                            <p>{{ $year }}</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Trường học</p> 
                        </td>
                        <td>
                            <p>{{ $edu }}</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Quê quán</p> 
                        </td>
                        <td>
                            <p>{{ $home }}</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Giới thiệu bản thân</p> 
                        </td>
                        <td>
                            {!! '<i>'.$inf.'</i>' !!}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Mục tiêu nghề nghiệp</p> 
                        </td>
                        <td>
                           <p> {{ $obj }}</p>
                        </td>
                    </tr>
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