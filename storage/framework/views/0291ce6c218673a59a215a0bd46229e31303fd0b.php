 <?php $__env->startSection('content'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <form method="POST" action="<?php echo e(route('create')); ?>" enctype="multipart/form-data">
        <?php echo e(csrf_field()); ?>

        <section class="content-header">
            <h1>
                Добавить статью
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Добавляем статью</h3>

                </div>
                <div class="box-body">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Название</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="title" value="">
                        </div>
                <div class="form-group">
                    <label for="exampleInputFile">Лицевая картинка</label>
                    <input type="file" id="exampleInputFile" name="image">
                </div>

                        <div class="form-group">
                            <label>Категория</label>
                            <div>
                                <select name="category">
		                            <option value="Экономика">Экономика</option>
		                            <option value="Спорт">Спорт</option>
		                            <option value="Бизнес">Бизнес</option>
		                            <option value="Здоровье">Здоровье</option>
		                            <option value="Политика">Политика</option>
		                            <option value="Путешествия">Путешествия</option>
                                </select>
                            </div>
                        </div>
                        <!-- /.input group -->
                    </div>

                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Описание</label>
                        <textarea name="description" id="" cols="30" rows="10" class="form-control"><?php echo e(old('description')); ?></textarea>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Полный текст</label>
                        <textarea name="content" id="" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                <input type="submit" name='enter' value='Добавить' id='btlAuth' class="btn btn-success pull-right">
            </div>
            <!-- /.box-footer-->
</div>
<!-- /.box -->
</section>
<!-- /.content -->
</form>
</div>
<!-- /.content-wrapper -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>