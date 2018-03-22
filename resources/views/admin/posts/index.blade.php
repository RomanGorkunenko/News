@extends('admin.layout') @section('content')
<!-- Content Wrapper. Contains page content -->
<style>
        ul {
            list-style: none;
            float: left;
            width: 100%;
    }

        .pagination li {
            float: left;
            padding: 0 10px;
            line-height: 34px;
    }
</style>    
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Новости
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{route('welcome')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Листинг новостей</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="form-group">
                    <a href="{{route('create')}}" class="btn btn-success">Добавить</a>
                </div>
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Название</th>
                            <th>Категория</th>
                            <th>Описание</th>
                            <th>Действия</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($all as $news)
                        <tr>
                            <td>{{$news->id}}</td>
                            <td>{{$news->title}}</td>
                            <td>{{$news->category}}</td>
                            <td>{{$news->description}}</td>
                            <td>
                                <a href="{{route('edit',$news->id)}}" class="fa fa-pencil"></a>
                                <a href="{{route('del',$news->id)}}" class="fa fa-remove"></a>
                            </td>
                        </tr>
                        @endforeach
                        </tfoot>
                </table>
                {{$all->links()}}
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
