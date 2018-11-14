
<?php include 'inc/header.php' ?>

        <form method="POST" action="process.php" class="container">
            <h2>Get In Touch</h2>
            <div class="form-group">
                <label for="exampleInputName1">Name</label>
                <input type="text" class="form-control" id="exampleInputName1" placeholder="Full Name" name="name">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>

            <div class="form-group">
                <label for="exampleTextarea">Message</label>
                <textarea class="form-control" id="exampleTextarea" rows="3" name="message"></textarea>
            </div>
            <input type="submit" value="Send" class="btn btn-success"> 
        </form>

