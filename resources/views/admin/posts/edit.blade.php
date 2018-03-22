@extends('admin.layout') @section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <form method="POST" action="{{route('edit',$id)}}"  enctype="multipart/form-data">
        {{ csrf_field() }}
        <section class="content-header">
            <h1>
                Изменить статью
                <small>{{$title}}</small>
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Изменяем статью</h3>

                </div>
                <div class="box-body">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Название</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="title1" value="{{$title}}">
                        </div>
                        <div class="form-group">
                            <label for="InputFile">Лицевая картинка</label>
                            <input type="file" id="InputFile" name="images">
                        </div>

                        <div class="form-group">
                            <label>Категория</label>
                            <div>
                                <select name="category1">
		                            <option <?php if($category=="Экономика") echo 'Selected'; ?> value="Экономика">Экономика</option>
		                            <option <?php if($category=="Спорт") echo 'Selected'; ?> value="Спорт">Спорт</option>
		                            <option <?php if($category=="Бизнес") echo 'Selected'; ?> value="Бизнес">Бизнес</option>
		                            <option <?php if($category=="Здоровье") echo 'Selected'; ?> value="Здоровье">Здоровье</option>
		                            <option <?php if($category=="Политика") echo 'Selected'; ?> value="Политика">Политика</option>
		                            <option <?php if($category=="Путешествия") echo 'Selected'; ?> value="Путешествия">Путешествия</option>
                                </select>
                            </div>
                        </div>
                        <!-- /.input group -->
                    </div>

                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Описание</label>
                        <textarea name="description1" id="" cols="30" rows="10" class="form-control">{{$description}}</textarea>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Полный текст</label>
                        <textarea name="content1" cols="30" rows="10" class="form-control">{{$content}}</textarea>
                    </div>
                </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                <input type="submit" name='edit' value='Изменить' id='btlAuth' class="btn btn-success pull-right">
            </div>
            <!-- /.box-footer-->
            <!-- /.box -->
        </section>
        <!-- /.content -->
    </form>
</div>
<!-- /.content-wrapper -->
@endsection
