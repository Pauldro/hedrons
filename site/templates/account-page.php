<?php
    if (!$user->isLoggedin()) {
        // user is already logged in, so they don't need to be here
        $session->redirect($config->pages->login);
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
                    <div role="tabpanel" class="tab-pane active" id="home">...</div>
                    <div role="tabpanel" class="tab-pane" id="profile">...</div>
                    <div role="tabpanel" class="tab-pane" id="messages">...</div>
                    <div role="tabpanel" class="tab-pane" id="settings">...</div>
                </div>
            </div>
        </div>




        </div>
    </div>
<?php include('./_foot.php'); // include footer markup ?>
