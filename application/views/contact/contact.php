<div class="container white-bg-padding">

    <h2 class="form-signin-heading">Contact Us</h2>
    <p class="help-block">All fields are required. You will receive a response via the email you supply us in a timely manner.</p>

    <div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2">
        <form action="<?php echo site_url('account/register') ?>" class="form-signin" method="post" role="form">
            <div class="form-group">
                <label for="name">Name</label>
                <input name="name" type="text" class="form-control" placeholder="Tyler Durden" required autofocus>
            </div>
            <div class="form-group">
                <label for="email">Email Address</label>
                <input name="email" type="text" class="form-control" placeholder="TDurden@firstchoicegarage.com" required autofocus>
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea name="message" class="form-control" required autofocus></textarea>
            </div>
            <button class="btn btn-lg btn-default" type="submit">Submit</button>
        </form>
    </div>
</div>