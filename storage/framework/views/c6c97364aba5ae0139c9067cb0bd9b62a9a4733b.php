

<div class="navbar-custom-menu">
  <ul class="nav navbar-nav">
    <!-- User Account: style can be found in dropdown.less -->
    <li class="dropdown user user-menu">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <span class="hidden-xs"><?php echo $__env->yieldContent('namauser'); ?></span>
      </a>
      <ul class="dropdown-menu">
        <!-- User image -->
        <li class="user-header">
          <?php echo $__env->yieldContent('profiluser'); ?>
        </li>
        <!-- Menu Body -->
        <!-- Menu Footer-->
        <li class="user-footer">
          <div class="pull-left">
            <a href="#" class="btn btn-default btn-flat">Ganti Password</a>
          </div>
          <div class="pull-right">
            <a href="#" class="btn btn-default btn-flat">Keluar</a>
          </div>
        </li>
      </ul>
    </li>
  </ul>
</div>