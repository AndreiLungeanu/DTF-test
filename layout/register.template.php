<div class="container">
<div class="row">
<div class="col-md-8 col-md-offset-2 register">
    <form role="form" method="POST" action="register.php">
        <legend class="text-center">Register</legend>
        <fieldset>
            <div class="form-group col-md-12">
                <label for="">Email</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
            </div>
            <div class="form-group col-md-6">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
            </div>
            <div class="form-group col-md-6">
                <label for="confirm_password">Confirm Password</label>
                <input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="Confirm Password" required>
            </div>

        <div class="form-group">
            <div class="col-md-12">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="1" id="" name="confirmed_minimum_age" required>
                        I'm over 18 years old.
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-12">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="1" id="" name="accepted_tc" required>
                        I accept the <a href="#">terms and conditions</a>.
                    </label>
                </div>
            </div>
        </div>        
        <div class="form-group">
            <div class="col-md-12">
                <button type="submit" name="register"  class="btn btn-primary">
                    Create account
                </button>
            </div>
        </div>
        </fieldset>            
    </form>
</div>
</div>
