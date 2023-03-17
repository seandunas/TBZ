
<div id="container" align="center">
        <header class="tabs-nav">
          <ul>
            <li><a href="<?=base_url()?>index.php/login">Log In</a></li>
            <li class="active"><a href="">Sign Up</a></li>
          </ul>
        </header>

        <section class="tabs-content">
          <!--

          test BAKIT AYAW LUMABAS NUNG COMMENT

         -->
                <form id="form2" action="<?=base_url()?>index.php/login/registerUser" method="post" enctype="multipart/form-data">
                    <p>Please fill up this form to create an account!</p>
                    <hr>
                    <input type="text" id="fname" name="u_fname" placeholder="First Name" value="<?=set_value('u_fname')?>"/>
                    <span style="font-size:12px;color:red;"><?php echo form_error('u_fname');?></span>

                    <input type="text" id="lname" name="u_lname" placeholder="Last Name" value="<?=set_value('u_lname')?>"/>
                    <span style="font-size:12px;color:red;"><?php echo form_error('u_lname');?></span>

                    <input type="date" id="birthday" name="u_bday" value="<?=set_value('u_bday')?>"/>
                    <span style="font-size:12px;color:red;"><?php echo form_error('u_bday');?></span>

                    <input type="text" id="contactno" name="u_contactno" placeholder="Contact Number" value="<?=set_value('u_contactno')?>"/>
                    <span style="font-size:12px;color:red;"><?php echo form_error('u_contactno');?></span>

                    <input type="text" id="email" name="u_email" placeholder="Email Address" value="<?=set_value('u_email')?>"/>
                    <span style="font-size:12px;color:red;"><?php echo form_error('u_email');?></span>

                    <input type="text" id="username" name="u_username" placeholder="Username" value="<?=set_value('u_username')?>"/>
                    <span style="font-size:12px;color:red;"><?php echo form_error('u_username');?></span>

                    <input type="password" id="psw" placeholder="Password" name="u_password" value="<?=set_value('u_password')?>"/>
                    <span style="font-size:12px;color:red;"><?php echo form_error('u_password');?></span>

                    <input type="password" id="cpsw" placeholder="Confirm Password" name="cpsw" value="<?=set_value('cpsw')?>"/>
                    <span style="font-size:12px;color:red;"><?php echo form_error('cpsw');?></span>

                    <input type="file" id="file-upload" name="u_avatar" class="custom-file-upload"/>
                    <span style="font-size:12px;color:red;"><?php echo form_error('u_avatar');?></span><br>

                    <input type="checkbox" id="myCheck" value="myValue" unchecked required/>

                    <label><p3> I accept the <a class="style">Terms of Use</a> & <a class="style">Privacy Policy</a></p3></label>
                    <span id="warning"></span><br><br>

                    <button type="submit" id="sign-up">Sign up</button><br>
                </form>
            </div>

        </section>
        <br><br><br>
    </div>

    <!-- <script>
        $(function() {
            $('.tabs-nav a').click(function() {

            // Check for active
            $('.tabs-nav li').removeClass('active');
            $(this).parent().addClass('active');

            // Display active tab
            let currentTab = $(this).attr('href');
            $('.tabs-content div').hide();
            $(currentTab).show();

            return false;
            });
        });
    </script> -->

    <!-- <script>
        (function() {

            $('#form2 > #fname,#lname,#birthday,#contactno,#email,#username,#psw,#cpsw').keyup(function() {
                var empty = false;
                $('#form2 > #fname,#lname,#birthday,#contactno,#email,#username,#psw,#cpsw').each(function() {
                    if ($(this).val() == '') {
                        empty = true;
                    }
                });

                if (empty) {
                    $('#sign-up').attr('disabled', 'disabled');
                } else {
                    $('#sign-up').removeAttr('disabled');
                }
            });
        });
    </script> -->
