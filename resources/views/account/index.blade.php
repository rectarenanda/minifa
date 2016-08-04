<div class="row">
  <div class="col-lg-12">
        <h2>Account</h2>
        <hr>
        @if ($count > 0)
            @foreach ($accounts as $account)
                <div class="well">
          <!-- $article->user->name adalah kolom name dari table user -->
                <h3>{{ $account->acc_name }} By <a href="#">{{ $account->group->coa_name }}</a></h3>
                <!-- {{ $article->content }} -->
                </div> 
            @endforeach
        @else
        <br><br>
        <div class="alert alert-danger"><center>NO ACCOUNT FOUND</center></div>
        @endif
  </div>
</div>