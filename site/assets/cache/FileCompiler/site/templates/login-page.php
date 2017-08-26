<?php
    if ($user->isLoggedin() && (!$config->debug)) {
        // user is already logged in, so they don't need to be here
        $session->redirect($config->pages->account);
    }

    // check for login before outputting markup
    if ($input->post->username && $input->post->password) {
        $user = $input->post->username('username');
        $pass = $input->post->text('password');

        if ($session->login($user, $pass)) {
            // login successful
            $session->redirect($config->pages->account);
        }
    }

?>
<?php include(\ProcessWire\wire('files')->compile(\ProcessWire\wire("config")->paths->root . 'site/templates/_head.php',array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true))); // include header markup ?>
    <div class="container page no-title">
        <div class="row">
            <div class="col-sm-6">
                <div class="well">
                    <div class="text-center">
                        <img src="<?php echo $config->urls->files; ?>images/hedrons-logo.png" height="100">
                        <span class="site-name h1">Hedrons</span>
                    </div>
                    <h1><?php echo $page->get('pagetitle|headline|title') ; ?></h1>
                    <form method="POST" action="<?= $config->pages->login; ?>" novalidate="novalidate">
                        <?php if ($input->post->username) : ?>
                            <div class="alert with-icon alert-danger alert-dismissible" role="alert">
                                <div class="row">
                                    <div class="col-xs-2">
                                        <div class="alert-icon padding15">
                                            <i class="fa fa-exclamation-triangle fa-2x" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-10 alert-message">
                                        <div>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <strong>Login Failed!</strong> Check your username &amp; password.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>

                        <div class="form-group">
                            <label for="username" class="control-label">Username</label>
                            <input type="text" class="form-control" name="username" title="Please enter you username" placeholder="example@gmail.com">
                            <span class="help-block"></span>
                        </div>
                        <div class="form-group">
                            <label for="password" class="control-label">Password</label>
                            <input type="password" class="form-control" name="password" title="Please enter your password">
                            <span class="help-block"></span>
                        </div>
                        <div class="row">
                            <div class="col-xs-6">
                                <button type="submit" class="btn btn-success btn-block">Login</button>
                            </div>
                            <div class="col-xs-6">
                                <a href="/forgot/" class="btn btn-default btn-block">Help to login</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-sm-6">
                <p class="lead">Register now for <span class="text-success">FREE</span></p>
                <ul class="list-unstyled" style="line-height: 2">
                    <li><span class="fa fa-check text-success"></span> See all your orders</li>
                    <li><span class="fa fa-check text-success"></span> Fast re-order</li>
                    <li><span class="fa fa-check text-success"></span> Save your favorites</li>
                    <li><span class="fa fa-check text-success"></span> Fast checkout</li>
                    <li><span class="fa fa-check text-success"></span> Get a gift <small>(only new customers)</small></li>
                    <li><a href="/read-more/"><u>Read more</u></a></li>
                </ul>
                <p><a href="/new-customer/" class="btn btn-info btn-block">Yes please, register now!</a></p>
            </div>
        </div>
    </div>
<?php include(\ProcessWire\wire('files')->compile(\ProcessWire\wire("config")->paths->root . 'site/templates/_foot.php',array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true))); // include footer markup ?>
