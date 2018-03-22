<?php $__env->startSection('content'); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Привет! Это админка
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Главная страница</h3>
        </div>
        <div class="box-body">
            <p>Админка новостей содержит:</p>
            <p>- страницу на которой выводятся краткая информация по  всем новостям,</p>
            <p>- страницу добавления новости</p>
            <p>- страницу редактирования новости</p>
            <p>- удаление новости</p>
            <p>- на главной странице выводятся 5 последних новостей</p>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>