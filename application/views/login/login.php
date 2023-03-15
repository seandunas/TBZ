
    <div id="container" align="center">
        <header class="tabs-nav">
          <ul>
            <li class="active"><a href="">Log In</a></li>
            <li><a href="<?=base_url()?>index.php/login/register">Sign Up</a></li>
          </ul>
        </header>

        <section class="tabs-content">

            <!-- <div id="tab1"> -->
                <img src="<?=base_url()?>images\TBZLOGO.png" alt="tbz-logo" width="300"/>
                <form id="form1" action="<?=base_url()?>index.php/login/authenticate" method="post">
                    <input type="text" id="uname" name="username" placeholder="Username" required/><br><br>
                    <input type="password" name="userpass" placeholder="Password" required/><br>

            <!--Displaying login error message-->
                    <?php
                        if($this->session->flashdata('is_logged_error')):
                    ?>
                        <span style="font-size:12px;color:red;"><h3>Incorrect Username/Password.</h3></span>
                    <?php endif?>

                    <button type="submit">Login</button><br>
                    <p><a href="" class="style">Forgotten Password</a></p>
                </form>
            </div>
        </section>
        <br><br><br>
    </div>
