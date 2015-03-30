<div class="jumbotron">

    <div class="container">

        <h1 class="page-header">Sign up</h1>

        <?php echo form_open('signup/index') ?>

        <div class="form-group col-md-4 col-md-offset-2">
            <label class="sr-only control-label" for="email">E-mail</label>
            <input class="form-control input-lg" type="email" id="email" name="email" placeholder="Your e-mail"  value="<?php echo set_value('email'); ?>">
        </div>

        <div class="form-group col-md-4">
            <label class="sr-only control-label" for="password">Full name</label>
            <input class="form-control input-lg" type="text" id="name" name="name" placeholder="Your name"  value="<?php echo set_value('name'); ?>">
        </div>

        <div class="form-group col-md-4 col-md-offset-2">
            <label class="sr-only control-label" for="password">Password</label>
            <input class="form-control input-lg" type="password" id="password" name="password" placeholder="Enter password">
        </div>

        <div class="form-group col-md-4">
            <label class="sr-only control-label" for="confirmation">Confirm Password</label>
            <input class="form-control input-lg" type="password" id="confirmation" name="confirmation" placeholder="Confirm password">
        </div>

        <div class="form-group col-md-4 col-md-offset-4">
            <label class="sr-only control-label" for="campus_key">Campus key</label>
            <input class="form-control input-lg" type="password" id="campus_key" name="campus_key" placeholder="Campus key">
        </div>
        
        <div>
            <?php echo validation_errors(); ?>
        </div>

        <div class="form-group col-md-4 col-md-offset-4">
            <button type="submit" name="submit" class="btn btn-lg btn-success btn-block">
                <span class="glyphicon glyphicon-check" aria-hidden="true"></span>
                Sign up
            </button>
        </div>

        <div class="form-group col-md-4 col-md-offset-4">
            <p><small>Signed up already? <a href="<?php echo site_url('login'); ?>" title="Log in">Log in here!</a></small></p>
        </div>

        <?php echo form_close(); ?>  

    </div>

</div>

