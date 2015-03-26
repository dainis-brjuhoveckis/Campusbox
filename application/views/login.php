<div class="jumbotron">

    <div class="container text-center">

        <h1 class="page-header text-center">Log in</h1>

        <?php echo form_open('login/verify') ?>
            
            <div class="form-group col-md-4 col-md-offset-2">
                <label class="sr-only control-label" for="email">E-mail</label>
                <input class="form-control input-lg" type="email" id="email" name="email" placeholder="E-mail" value="<?php echo set_value('email'); ?>">
            </div>

            <div class="form-group col-md-4">
                <label class="sr-only control-label" for="password">Password</label>
                <input class="form-control input-lg" type="password" id="password" name="password" placeholder="Password">
            </div>

            <div class="form-group col-md-4 col-md-offset-4">
                <?php echo validation_errors(); ?>
            </div>
            
            <div class="form-group col-md-4 col-md-offset-4">
                <button type="submit" name="submit" class="btn btn-lg btn-primary btn-block">
                    <span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>
                    Log in
                </button>
            </div>

            <div class="form-group col-md-4 col-md-offset-4">
                <p><small>Not a user yet? <a href="<?php echo site_url('signup'); ?>" title="Sign up">Sign up today!</a></small></p>
            </div>
    
        <?php echo form_close(); ?>  

    </div>

</div>

