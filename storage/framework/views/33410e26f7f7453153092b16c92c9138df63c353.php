 <?php $__env->startSection('content'); ?>
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
            <li><a href="<?php echo e(route('welcome')); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
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
                    <a href="<?php echo e(route('create')); ?>" class="btn btn-success">Добавить</a>
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
                        <?php $__currentLoopData = $all; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $news): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($news->id); ?></td>
                            <td><?php echo e($news->title); ?></td>
                            <td><?php echo e($news->category); ?></td>
                            <td><?php echo e($news->description); ?></td>
                            <td>
                                <a href="<?php echo e(route('edit',$news->id)); ?>" class="fa fa-pencil"></a>
                                <a href="<?php echo e(route('del',$news->id)); ?>" class="fa fa-remove"></a>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tfoot>
                </table>
                <?php echo e($all->links()); ?>

            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>