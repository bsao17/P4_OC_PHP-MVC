<?php
require_once("./views/TEMPLATES/accountBaseTemplate.php");
?>
<h3 class="m-2 text-light text-center border border-dark p-1 pl-4 bg-danger rounded-pill"><i class="fas fa-book"></i> : <?= $_GET['ID'];?> </h3>
<section class="card ml-2 mr-2 mt-2 p-2 border border-danger">
        <?php
            foreach($post as $value){
                echo $value['title'];
                echo $value['content'];
            }
        ?>
</section>
<section class="m-2 border border-light rounded" id="commentForm">
    <form action="#" method="POST">
        <div class="form-group">

            <div class="m-2">
                <label for="login" class="text-light">Login</label>
                <input type="text" name="login" class="form-control">
            </div>

            <div class="m-2">
                <label for="ID" class="text-light">ID</label>
                <input type="text" name="ID" class="form-control" value="<?= $_GET["ID"] ?>">
            </div>

            <div class="m-2">
                <label for="comment" class="text-light">Comment</label>
                <textarea name="comment" id="comment" cols="30" rows="5" class="form-control"></textarea>
            </div>

            <input type="submit" value="Send Comment" class="btn btn-outline-light m-2">
        </div>
    </form>
    <hr class="border border-light w-50 mb-4">

</section>
<h3 class="text-light text-center border border-dark bg-danger load ml-2 mr-2 p-1 rounded-pill"><i class="fas fa-comment-dots"></i></h3>
<section class="border border-danger m-2 bg-light p-3 rounded-lg">
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit illo vel laboriosam, animi,
        numquam explicabo ipsam adipisci in omnis unde voluptates ut exercitationem nam! Obcaecati eveniet cumque et ad nam.
    </p>
</section><br><br><br>

<footer id="footer" class="w-100">
    <ul class="d-flex flex-wrap align-items-center m-auto m-1 justify-content-center w-50">
        <a href="https://www.facebook.com/brunoDevOps">
            <li class="text-light"><i class="fab fa-facebook-square"></i> Facebook</li>
        </a>
        <a href="">
            <li class="text-light"><i class="fab fa-twitter-square"></i> Twitter</li>
        </a>
        <a href="">
            <li class="text-light"><i class="fab fa-instagram"></i> Instagram</li>
        </a>
        <a href="?action=admin_connect">
            <li>
                <p class="text-light"><span class="text-danger"><i class="fas fa-user-cog"></i> Admin</span></p>
            </li>
        </a>
    </ul>
</footer>