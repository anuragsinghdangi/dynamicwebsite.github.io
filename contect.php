<?Php include("includes/navbar.php") ?>
<?php 

if(isset($_SESSION['status']) && $_SESSION['status'] !=''){
    echo '<h4 class="alert">'.$_SESSION['status'].'</h4>';
    unset($_SESSION['status']);
     }

?>
     
<section class="my-5">
        <div class="py-1">
            <h2 class="text-center">Contect </h2>
            <p class="text-center font">.........</p>
        </div>
        <div class="container w-50 m-auto">
            <form action="database/form.php" method="POST">
                <div class="form-group">
                    <label>Name..</label>
                    <input type="text" class="form-control" id="email" placeholder="Enter name" name="name">
                </div>
                <div class="form-group">
                    <label>Email Id</label>
                    <input type="email" class="form-control"placeholder="Enter Email" name="email">
                </div>
                <div class="form-group">
                    <label>Mobile</label>
                    <input type="number" class="form-control" placeholder="Enter mobile" name="mobile">
                </div>
                <div class="form-group">
                    <label>Comments</label>
                    <textarea  type="comment" name="comm" cols="10" rows="5" class="form-control"></textarea>
                </div>

                <button type="submit" name="save_btn" class="btn btn-primary ml-1">Submit</button>
            </form>
        </div>
    </section>
    <script>
  $(document).ready(function() {
    // show the alert
    
    setTimeout(function() {
    	 
        $(".alert").alert('close');
    }, 3000);
});
</script>
    <?php include("includes/footer.php") ?>
   