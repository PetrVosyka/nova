<?php include_once 'header.php'  


?>



<div class="h-50 d-inline-block w-75 p-3 container mt-5 bg-light rounded ">
    <h1>Přihlásit se</h1>
    <form action="includes/login.include.php"  method="POST" class="row g-3" id="login">

        <div class="col-md-6">
            <label for="username" class="form-label">uživatelské jméno:</label>
            <input placeholder="uživatelske jmeno" type="text" name="username" class="form-control" id="username" required >
        </div>

<div class="col-md-6">
            <label for="password" class="form-label">Heslo:</label>
            <input type="password" name="password" placeholder="heslo"  class="form-control" id="password" required >


        </div>

        <div class="col-md-12">
           <button class="btn btn-primary" type="submit" name="submit">odeslat</button>


        </div>


         
    </form>
</div>

    <script type="text/javascript" src="validate.js"></script>

<?php
 include_once 'footer.php'  ;


?>