<div class="row">
  <div class="col-lg-12">
        <h2>Account</h2>
        <hr>
        <?php if($count > 0): ?>
            <?php foreach($accounts as $account): ?>
                <div class="well">
          <!-- $article->user->name adalah kolom name dari table user -->
                <h3><?php echo e($account->acc_name); ?> By <a href="#"><?php echo e($account->group->coa_name); ?></a></h3>
                <!-- <?php echo e($article->content); ?> -->
                </div> 
            <?php endforeach; ?>
        <?php else: ?>
        <br><br>
        <div class="alert alert-danger"><center>NO ACCOUNT FOUND</center></div>
        <?php endif; ?>
  </div>
</div>