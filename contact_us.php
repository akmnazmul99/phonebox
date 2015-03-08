<?php require_once('header.php'); ?>
    <script language="javascript">
        function contactform() {
            if(document.contact_form.name.value == ''){

                alert("Name is Mandatory.");
                document.contact_form.name.focus();
                return false;
            }else if(document.contact_form.email.value == ''){

                alert("Email is Mandatory.");
                document.contact_form.email.focus();
                return false;
            }else if(document.contact_form.message.value == ''){

                alert("Message is Mandatory.");
                document.contact_form.message.focus();
                return false;
            }
        }
    </script>
<!-- Page Content -->
<div id="page-content">
    <div class="container">
        <div class="row">
            <!--MAIN Content-->
            <div class="col-md-8">
                <div id="page-main">
                    <section id="contact">
                        <header><h1>Contact Us</h1></header>
                        <div class="row">
                            <div class="map-wrapper">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3988.7477409622365!2d103.89092!3d1.327334!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da178ab5c8705b%3A0x124e5a83c18c5c4e!2sAZ+%40+Paya+Lebar!5e0!3m2!1sen!2sbd!4v1408947324195" width="100%" height="300" frameborder="0" style="border:0"></iframe>
                            </div>
                        </div>
                    </section>
                    <section style="margin-bottom: 20px;" id="contact-form" class="clearfix">
                        <header><h2>Send Us a Message</h2></header>
                        <form action="contact_us_post.php" class="contact-form" name="contact_form" id="contact_form" method="post" onSubmit="return contactform();">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <div class="controls">
                                            <label for="name">Your Name</label>
                                            <input type="text" placeholder="Name" name="name" id="name" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <div class="controls">
                                            <label for="email">Your Email</label>
                                            <input type="email" placeholder="Email" name="email" id="email" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <div class="controls">
                                            <label for="message">Your Message</label>
                                            <textarea name="message" placeholder="Message" id="message" required></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pull-right">
                                <input type="submit" class="btn btn-color-primary" id="submit" value="Send a Message">
                            </div>
                            <div id="form-status"></div>
                        </form>
                    </section>
                </div>
            </div>

            <!--SIDEBAR Content-->
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-offset-2 col-md-10">
                        
                <div id="page-sidebar" class="sidebar">
                    <aside class="news-small" id="news-small" style="margin-top: 35px;">
                        <header>
                            <h2>Address</h2>
                        </header>
                        <div class="section-content">
                            <address>
                                <strong>FoneBox USA Pte. Ltd.</strong>
                                <br>
                                <span>140, Paya Lebar Road</span>
                                <br>
                                <span>AZ @ Paya Lebar  #06-11,</span>
                                <br>
                                <span>Singapore – 409015.</span>
                                <br><br>
                                <abbr title="Telephone" style="color: black;">Telephone:</abbr> +65 6702 4466
                                <br>
                                <abbr title="Email">Email:</abbr> <a href="#">ask@fonebox.com.sg</a>
                            </address>
                        </div>
                    </aside>
                </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end Page Content -->
<?php require_once('footer.php'); ?>