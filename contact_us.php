<?php require_once('header.php'); ?>

<script language="javascript">

    function contactform() {

        if (document.contact_form.fname.value == '') {

            alert("First name is Mandatory.");

            document.contact_form.fname.focus();

            return false;

        }

        else if (document.contact_form.lname.value == '') {

            alert("Last name is Mandatory.");

            document.contact_form.lname.focus();

            return false;

        }

        else if (document.contact_form.email.value == '') {

            alert("Email is Mandatory.");

            document.contact_form.email.focus();

            return false;

        } else if (document.contact_form.message.value == '') {



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

            <div class="col-md-12">

                <section id="contact">

                    <header><h1>Contact Us</h1></header>

                </section>

            </div>

        </div>

        <div class="row">

            <!--MAIN Content-->

            <div class="col-md-8">

                <div id="page-main">

                    <div class="map-wrapper">

                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3988.7477409622365!2d103.89092!3d1.327334!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da178ab5c8705b%3A0x124e5a83c18c5c4e!2sAZ+%40+Paya+Lebar!5e0!3m2!1sen!2sbd!4v1408947324195" width="100%" height="300" frameborder="0" style="border:0"></iframe>

                    </div>

                    <section style="margin-bottom: 20px;" id="contact-form" class="clearfix">

                        <header><h2>Send Us a Message</h2></header>

                        <form action="contact_us_post.php" class="contact-form" name="contact_form" id="contact_form" method="post" onSubmit="return contactform();">

                            <div class="row form_style">

                                <div class="col-md-6">

                                    <div class="input-group">

                                        <div class="controls">

                                            <label for="email">Email/Login <span class="text_color_red">(required)</span></label>

                                            <input type="email" placeholder="Email" name="email" id="email" required>

                                        </div>

                                    </div>



                                </div>

                                <div class="col-md-6">

                                    <div class="input-group">

                                        <div class="controls">

                                            <label for="password">Password <span class="text_color_red"></span></label>

                                            <input type="password" placeholder="Password " name="password" id="password">

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <div class="row pagelet_gap">

                                <div class="col-md-4">

                                    <div class="input-group">

                                        <div class="controls">

                                            <label for="company">Company Name <span class="text_color_red"></span></label>

                                            <input type="text" placeholder="Company Name" name="company" id="company">

                                        </div>

                                    </div>

                                </div>

                                <div class="col-md-4">

                                    <div class="input-group">

                                        <div class="controls">

                                            <label for="fname">First Name <span class="text_color_red">(required)</span></label>

                                            <input type="text" placeholder="First Name" name="fname" id="fname" required>

                                        </div>

                                    </div>

                                </div>

                                <div class="col-md-4">

                                    <div class="input-group">

                                        <div class="controls">

                                            <label for="lname">Last Name <span class="text_color_red">(required)</span></label>

                                            <input type="text" placeholder="Last Name" name="lname" id="lname" required>

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <div class="row pagelet_gap">

                                <div class="col-md-4">

                                    <div class="input-group">

                                        <div class="controls">

                                            <label for="country">Country <span class="text_color_red"></span></label>

                                            <input type="text" placeholder="Country" name="country" id="country">

                                        </div>

                                    </div>

                                </div>

                                <div class="col-md-4">

                                    <div class="input-group">

                                        <div class="controls">

                                            <label for="phone">Phone <span class="text_color_red"></span></label>

                                            <div class="row">

                                                <div class="col-md-3 col-xs-3">

                                                    <input id="country_code" type="text" placeholder="+1" style="width:50px;text-align:center;" name="country_code">

                                                </div>

                                                <div class="col-md-9 col-xs-9">

                                                    <input type="text" placeholder="Phone" name="phone" id="phone">

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="col-md-4">

                                    <div class="input-group">

                                        <div class="controls">

                                            <label for="website">Website</label>

                                            <input type="text" placeholder="Website" name="website" id="website">

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <div class="row pagelet_gap">

                                <div class="col-md-12">

                                    <div class="pagelet_divider"></div>

                                </div>

                            </div>

                            <div class="row">

                                <div class="col-md-3">

                                    <div class="input-group">

                                        <div class="controls">

                                            <label for="company_type">Company Type <span class="text_color_red"></span></label>

                                        </div>

                                    </div>

                                    <ul class="li_dot_remote">

                                        <li>

                                            <input id="company_type1" type="checkbox" value="1" name="company_type[]">

                                            Termination Provider

                                        </li>

                                        <li>

                                            <input id="company_type2" type="checkbox" value="2" name="company_type[]">

                                            Wholesaler / Reseller

                                        </li>

                                        <li>

                                            <input id="company_type3" type="checkbox" value="3" name="company_type[]">

                                            Retailer

                                        </li>

                                        <li>

                                            <input id="company_type4" type="checkbox" value="4" name="company_type[]">

                                            Other

                                        </li>

                                    </ul>

                                </div>

                                <div class="col-md-3">

                                    <div class="input-group">

                                        <div class="controls">

                                            <label for="daily_revenue">Daily Revenue <span class="text_color_red"></span></label>

                                        </div>

                                    </div>

                                    <ul class="li_dot_remote">

                                        <li>

                                            <input id="daily_revenue1" type="radio" value="1" name="daily_revenue">

                                            Under $1,000

                                        </li>

                                        <li>
                                            <input id="daily_revenue2" type="radio" value="2" name="daily_revenue">

                                            $1,000 - $10,000

                                        </li>

                                        <li>

                                            <input id="daily_revenue3" type="radio" value="3" name="daily_revenue">

                                            $10,000 - $50,000

                                        </li>

                                        <li>

                                            <input id="daily_revenue4" type="radio" value="4" name="daily_revenue">

                                            $50,000 +

                                        </li>

                                    </ul>

                                </div>

                                <div class="col-md-6">

                                    <div class="input-group">

                                        <div class="controls">

                                            <label for="message">Brief Description <span class="text_color_red">(required)</span></label>

                                            <textarea rows="5" cols="50" name="message" placeholder="Tell us about your company,clearArea(this, 'Tell us about your company, your core markets, and how we may help you." id="message" required></textarea>

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

                    <div class="col-md-offset-1 col-md-11">

                        <div class="no_margin">

                    <header>

                        <h2>Address</h2>

                    </header>

                </div>

                <div class="section-content">

                    <address>

                        <div class="font_14px">

                            <strong>FoneBox USA Pte. Ltd.</strong>

                            <br>

                            <span>140 Paya Lebar Road</span>

                            <br>

                            <span>AZ @ Paya Lebar  #06-11</span>

                            <br>

                            <span>Singapore – 409015</span>

                            <br><br>

                            <abbr title="Telephone" style="color: black;">Telephone:</abbr> +65 6702 4466

                            <br>

                            <abbr title="Email">Email:</abbr> <a href="">ask@fonebox.com.sg</a>

                        </div>

                    </address>

                </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

<!-- end Page Content -->

<?php require_once('footer.php'); ?>