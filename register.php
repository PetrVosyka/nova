<?php include_once 'header.php'  ;


?>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<div class="h-50 d-inline-block w-75 p-3 container mt-5 bg-light rounded ">
    <h1>Registrovat se:</h1>
    <form  action="includes/register.include.php" method="POST" class="row g-3" id="registrace">

        <div class="col-md-6">
            <label for="username" class="form-label">uživatelské jméno:</label>
            <input type="text" name="username" placeholder="přezdívka" class="form-control" id="username" required >
        </div>

<div class="col-md-6">
            <label id="password" for="password" class="form-label">Heslo:</label>
            <input type="password" name="password" placeholder="heslo"  class="form-control" id="password" required >


        </div>

        <div class="col-md-6">
            <label for="password" class="form-label">opakujte heslo:</label>
            <input type="password" name="passwordrepeat" placeholder="heslo znovu"  class="form-control" id="password" required >


        </div>

        <div class="col-md-6">
            <label for="password" class="form-label">Email:</label>
            <input  type="text" name="email" placeholder="email"  class="form-control" id="password" required >


        </div>



        <div class="col-md-12">
           <button class="btn btn-primary" type="submit" name="submit">odeslat</button>


        </div>


         
    </form>
</div>
<div class="errorTxt"></div>
<p id="demo"></p>
 <script type="text/javascript" src="validate.js"></script>
<script type="text/javascript">
document.getElementById("demo").innerHTML = 5 + 6;
$(function() {

$("registrace").validate({
rules: {
    email:{
        required: true,
        email: true
    }


});

});
</script>
asdsadas