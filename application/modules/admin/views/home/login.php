<style>
    body {
    
        /*background-image: url(http://tmadevelopment.org/projects/nycgames/assets/assets/second/adminbg.jpg);*/
        background-image: linear-gradient(122deg, #1a0f0f, #ff0e1f);
        background-position: bottom  right;
        background-repeat: no-repeat;
        background-color:linear-gradient(122deg, #1a0f0f, #ff0e1f);
        background-size: cover;
    }
    .avatar1 img {
    width: 100%;
        max-width: 160px;
    margin-bottom: 25px;
}
</style>
<div class="container">
    <div class="login-container">
        <div id="output">       
            <?php
            if ($this->session->flashdata('err_login')) {
                ?>
                <div class="alert alert-danger"><?= $this->session->flashdata('err_login') ?></div>
                <?php
            }
            ?></div>
        <div class="avatar1">
            <img src="http://tmadevelopment.org/projects/nycgames/assets/assets/logo/logo-admin.png" alt="">
        </div>
        <div class="form-box">
            <form action="" method="POST">
                <input type="text" name="username" placeholder="username">
                <input type="password" name="password" placeholder="password">
                <button class="btn btn-info btn-block login lgbt" type="submit">Login</button>
            </form>
        </div>
    </div>
</div>