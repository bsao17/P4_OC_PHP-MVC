<?php  require("./views/TEMPLATES/baseTemplate.php"); ?>

<div id="login_form" class="d-flex flex-column align-items-center border border-light p-2 ml-2 mr-2 rounded">
    
    <form action="?action=signin" method="POST" class="border border-light rounded p-2" id="form">
        <table>
            <tr>
                <td class="text-light">Login :</td>
                <td><input type="text" name="login" id="login" class="rounded"></td>
            </tr>
            <tr> 
                <td class="text-light">Password :</td>
                <td><input type="password" name="password" id="password" class="rounded"></td>
            </tr>
            <tr>
                <td class="text-light">Repeat Password :</td>
                <td><input type="password" name="repeat_password" id="repeat_password" class="rounded"></td>
            </tr>
        </table>
        
        <table>
            <tr>
                <td><button type="submit" class='btn btn-light text-dark'>Connect</button><br></td>
            </tr><br>
        </table><hr class="border border-light">
        
    </form>
    
    <form class="bg-light rounded m-3 pt-1 pb-1 pr-5 pl-5">
        <table class="border border-light">
            <tr>
                <td>Create User Account :</td>
                <td><a href="<?= '?action=signup'; ?>" class="btn btn-warning border border-secondary">Create</a></td>
            </tr>
        </table>

    </form>
</div>
<?php  
    if($signin_status == true){
        echo $error;
    }
?>