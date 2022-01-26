<?php include_once(ROOT . '\views\layouts\header.php'); ?>
<div class="col-sm-4">
</div>
<div class="col-sm-4">
    <form id="main-contact-form" class="contact-form row" name="contact-form" method="post">
        <div class="form-group col-md-6">
            <input type="text" name="name" class="form-control" required="required" placeholder="Name">
        </div>
        <div class="form-group col-md-6">
            <input type="email" name="email" class="form-control" required="required" placeholder="Email">
        </div>
        <div class="form-group col-md-12">
            <input type="text" name="subject" class="form-control" required="required" placeholder="Subject">
        </div>
        <div class="form-group col-md-12">
            <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Your Message Here"></textarea>
        </div>
        <div class="form-group col-md-12">
            <input type="submit" name="submit" class="btn btn-primary pull-right" value="Submit">
        </div>
    </form>
</div>
<div class="col-sm-4">
</div>
<?php include_once(ROOT . '\views\layouts\footer.php'); ?>