<?php
    if (!$user->isLoggedin()) {
        // user is already logged in, so they don't need to be here
        //$session->redirect($config->pages->login);
    } else {
        $user->of(true);
    }

?>
<?php include('./_head.php'); // include header markup ?>
    <div class="container page no-title">
        <div>

            <!-- Nav tabs -->
            <div class="row">
                <div class="col-sm-3">
                    <ul class="nav nav-tabs nav-stacked" role="tablist">
                        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Home</a></li>
                        <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Profile</a></li>
                        <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Messages</a></li>
                        <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Settings</a></li>
                    </ul>
                </div>
                <div class="col-sm-9">
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="home">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <edit field="profileimage" page="<?= $user->id; ?>"><img src="<?= $user->profileimage->height(200)->url; ?>" alt="..." class="img-thumbnail"></edit>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Username</label>
                                        <input type="text" class="form-control input-sm" name="username" value="<?= $user->name; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="">First Name</label>
                                        <input type="text" class="form-control input-sm" name="firstname" value="<?= $user->firstname; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Last Name</label>
                                        <input type="text" class="form-control input-sm" name="lastname" value="<?= $user->lastname; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Email</label>
                                        <input type="text" class="form-control input-sm" name="email" value="<?= $user->email; ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="profile">...</div>
                        <div role="tabpanel" class="tab-pane" id="messages">...</div>
                        <div role="tabpanel" class="tab-pane" id="settings">...</div>
                    </div>

                    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
                </div>
            </div>


        </div>
    </div>
<?php include('./_foot.php'); // include footer markup ?>
