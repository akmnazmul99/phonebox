<?php require_once('header.php'); ?>

<div id="page-content">
    <div  id="slider" style="position: relative;" class="carousel slide" data-ride="carousel" data-interval="8000">
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                   <img src="assets/img/slide-1.jpg" alt="" class="img-responsive "/>
                </div>
                <div class="item">
                     <img src="assets/img/slide-2.jpg" alt="" class="img-responsive" />
                </div>
            </div>
    <!-- Controls -->
        <div class="carousel-control">
            <a  href="#slider" role="button" data-slide="prev" onclick="window.f.prev()">
                <span class="glyphicon tp-leftarrow" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
        </div>
        <div class="carousel-control" style="left: auto; right: 0">
            <a href="#slider" role="button" data-slide="next" onclick="window.f.next()">
                <span class="glyphicon tp-rightarrow" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
            <!-- Indicators -->
            <ol class="carousel-indicators carousel-middle-indicators">
                <li data-target="#slider" data-slide-to="0" class="active"></li>
                <li data-target="#slider" data-slide-to="1"></li>
            </ol>
    </div>
    <!-- Content -->
    <div class="block">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <section class="events small" id="events-small">
                        <header>
                            <h2 class="large_text">Current Affair's</h2>
                            <!--a href="#" class="link-calendar">Calendar</a-->
                        </header>
                        <div class="section-content">
                            <article class="event nearest">
                                <figure class="date">
                                    <div class="month">May</div>
                                    <div class="day">10</div>
                                </figure>
                                <aside>
                                    <header>
                                        <a style="text-decoration: none; cursor: pointer;"> <span onclick="open_modal_current_affair_1()">ITW 2015 on 10-13th May.</span></a>
                                    </header>
                                    <div class="additional-info">FoneBox USA. Pte Ltd would like to invite you to an organizational meeting...</div>
                                </aside>
                            </article>
                            <article class="event nearest-second">
                                <figure class="date">
                                    <div class="month">June</div>
                                    <div class="day">15</div>
                                </figure>
                                <aside>
                                    <header>
                                        <a style="text-decoration: none; cursor: pointer;"> <span onclick="open_modal_current_affair_2()">Upcoming Event 1</span></a>
                                    </header>
                                    <div class="additional-info">Upcoming Event 1 coming soon...</div>
                                </aside>
                            </article>
                            <article class="event">
                                <figure class="date">
                                    <div class="month">July</div>
                                    <div class="day">20</div>
                                </figure>
                                <aside>
                                    <header>
                                        <a style="text-decoration: none; cursor: pointer;"> <span onclick="open_modal_current_affair_3()">Upcoming Event 2</span></a>
                                    </header>
                                    <div class="additional-info">Upcoming Event 1 coming soon...</div>
                                </aside>
                            </article>
                        </div>
                    </section>
                </div>

                <div class="col-md-6">
                    <section id="main-content">
                        <header>
                            <h2>Welcome to FoneBox</h2>
                        </header>
                        <div class="section-content">
                            <p style="text-align: justify;">
                                FoneBox USA Pte. Ltd. is an international voice wholesale and a-z termination  
                                company has taken a new entrance in the ever blossoming telecom sector of Singapore. 
                                <br />
                                <br />
                                FoneBox is a prominent telecommunications company aiming to deliver an array of 
                                reasonable, convenient and user-friendly wireless services intending to simplify 
                                and enhance the lives of its customers. We are here to offer our clients with a 
                                supreme acquaintance with commendable mobile value added services we have a mission 
                                of providing in Singapore. We invite you to be a part of our FB fraternity. Be associated 
                                with FoneBox, the efficient approach to human connection.
                            </p>

                            <h2>Products</h2>
<!--                            <p style="text-align: justify;">
                                FoneBox USA is the parent company of its two subsidiaries, Teleport Asia and JhiJhiTel.
                            </p>-->
                            <div class="row form-group"></div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="switch switch_style">
                                                <div class="universal-button framed">
                                                    <h3>Call aggregation</h3>
                                                    <figure class="date"><i class="fa fa-arrow-right"></i></figure>
                                                </div>
                                                <div class="point_body hide">From world’s most prominent carriers and our calling card clients, we aggregating huge amount of traffic per day.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="switch switch_style">
                                                <div class="universal-button framed">
                                                    <h3>A-Z Routing</h3>
                                                    <figure class="date"><i class="fa fa-arrow-right"></i></figure>
                                                </div>
                                                <div class="point_body hide">Our A-Z destinations planned for network operators whose retail subscribers expect high quality service at competitive market rates.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="switch_style">
                                                <div class="universal-button framed">
                                                    <h3>Route trading</h3>
                                                    <figure class="date"><i class="fa fa-arrow-right"></i></figure>
                                                </div>
                                                <div class="point_body hide">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="switch switch_style">
                                                <div class="universal-button framed">
                                                    <h3>Direct route sell</h3>
                                                    <figure class="date"><i class="fa fa-arrow-right"></i></figure>
                                                </div>
                                                <div class="point_body hide">We provide absolute solution for operators whose retail subscribers demand for best quality and superior features (such as CLI) with reasonable market rates.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="switch switch_style">
                                                <div class="universal-button framed">
                                                    <h3>A-Z Call Termination</h3>
                                                    <figure class="date"><i class="fa fa-arrow-right"></i></figure>
                                                </div>
                                                <div class="point_body hide">Our A-Z destinations planned for network operators whose retail subscribers expect high quality service at competitive market rates.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="switch switch_style">
                                                <div class="universal-button framed">
                                                    <h3>A-Z SMS/ MMS Routing</h3>
                                                    <figure class="date"><i class="fa fa-arrow-right"></i></figure>
                                                </div>
                                                <div class="point_body hide">We provide solutions for A-Z Destinations SMS/MMS termination.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="switch switch_style">
                                                <div class="universal-button framed">
                                                    <h3>Wholesale Clearing House</h3>
                                                    <figure class="date"><i class="fa fa-arrow-right"></i></figure>
                                                </div>
                                                <div class="point_body hide">FoneBox USA. Pte Ltd would like to invite you to an organizational meeting held at the International Telecoms Week (ITW) from May 10-13, 2015
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="switch switch_style">
                                                <div class="universal-button framed">
                                                    <h3>Route exchange</h3>
                                                    <figure class="date"><i class="fa fa-arrow-right"></i></figure>
                                                </div>
                                                <div class="point_body hide">FoneBox USA. Pte Ltd would like to invite you to an organizational meeting held at the International Telecoms Week (ITW) from May 10-13, 2015
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="switch switch_style">
                                                <div class="universal-button framed">
                                                    <h3>Pinless calling card</h3>
                                                    <figure class="date"><i class="fa fa-arrow-right"></i></figure>
                                                </div>
                                                <div class="point_body hide">We committed to provide our clients noise-free, premium quality PIN-less calling services using our softphone at the most competitive rates.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="switch switch_style">
                                                <div class="universal-button framed">
                                                    <h3>PC to Phone</h3>
                                                    <figure class="date"><i class="fa fa-arrow-right"></i></figure>
                                                </div>
                                                <div class="point_body hide">We committed to provide our clients noise-free, premium quality PIN-less calling services using our softphone at the most competitive rates.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="switch_style">
                                                <div class="universal-button framed">
                                                    <h3>Call Shop</h3>
                                                    <figure class="date"><i class="fa fa-arrow-right"></i></figure>
                                                </div>
                                                <div class="point_body hide">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="switch switch_style">
                                                <div class="universal-button framed">
                                                    <h3>Dialer for Android platform</h3>
                                                    <figure class="date"><i class="fa fa-arrow-right"></i></figure>
                                                </div>
                                                <div class="point_body hide">We committed to provide our clients noise-free, premium quality PIN-less calling services using our softphone at the most competitive rates.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="switch_style">
                                                <div class="universal-button framed">
                                                    <h3>MVNO</h3>
                                                    <figure class="date"><i class="fa fa-arrow-right"></i></figure>
                                                </div>
                                                <div class="point_body hide">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="switch switch_style">
                                                <div class="universal-button framed">
                                                    <h3>Web Phone</h3>
                                                    <figure class="date"><i class="fa fa-arrow-right"></i></figure>
                                                </div>
                                                <div class="point_body hide">We committed to provide our clients noise-free, premium quality PIN-less calling services using our softphone at the most competitive rates.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="switch_style">
                                                <div class="universal-button framed">
                                                    <h3>Callback</h3>
                                                    <figure class="date"><i class="fa fa-arrow-right"></i></figure>
                                                </div>
                                                <div class="point_body hide">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="switch switch_style">
                                                <div class="universal-button framed">
                                                    <h3>Dialer for iOS platform</h3>
                                                    <figure class="date"><i class="fa fa-arrow-right"></i></figure>
                                                </div>
                                                <div class="point_body hide">
                                                    We committed to provide our clients noise-free, premium quality PIN-less calling services using our softphone at the most competitive rates.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </section>
                </div>

                <div class="col-md-3">
                    <section class="news-small" id="news-small">
                        <header>
                            <h2>Leading New's</h2>
                        </header>
                        <div class="section-content">
                            <article>
                                <figure class="date"><i class="fa fa-file-o"></i>10-05-2015</figure>
                                <aside>
                                    <header>
                                        <a style="text-decoration: none; cursor: pointer;"> <span onclick="open_modal_current_affair_1()">FoneBox USA. Pte Ltd would like to invite you to an organizational meeting held at the International Telecoms Week (ITW) from May 10-13, 2015</span></a>
                                    </header>
                                </aside>
                            </article>
                            <!--                            <article>
                                                            <figure class="date"><i class="fa fa-file-o"></i>11-28-2014</figure>
                                                            <header><a href="#">Etiam facilisis, purus eu ullamcorper ultrices,
                                                                    lorem eros tincidunt mauris, quis adipiscing sapien ante quis sem.</a></header>
                                                        </article>-->
                            <!--                            <article>
                                                            <figure class="date"><i class="fa fa-file-o"></i>12-24-2014</figure>
                                                            <header><a href="#">Pellentesque habitant morbi tristique
                                                                    senectus et netus et malesuada fames ac turpis egestas.</a></header>
                                                        </article>-->
                        </div>
                        <div class="read-more">All News</div>
                    </section>
                </div>
            </div>
        </div>
    </div>

</div>
<?php require_once('footer.php'); ?>
<script type="text/javascript" charset="utf-8">
    $(function() {
        if (!flux.browser.supportsTransitions)
            alert("Flux Slider requires a browser that supports CSS3 transitions");

        window.f = new flux.slider('#slider', {
            autoplay: true,
            pagination: false
        });
    });
</script>
<div class="modal fade" id="modal_current_affair_1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content modal_background_color">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <div style="text-align: center;"><h4 class="modal-title" id="myModalLabel">ITW 2015 on 10-13th May</h4></div>
            </div>
            <div class="modal-body" style="padding-left: 30px; text-align: justify;">
                FoneBox USA. Pte Ltd would like to invite you to an organizational meeting held at the International Telecoms 
                Week (ITW) from May 10-13, 2015 at the Hyatt Regency ad Swissotel in Chicago, USA. <br><br>

                FoneBox is a prominent telecommunications company with roots in the ever blossoming telecom sector of Singapore.
                We aim to deliver our customers with an array of reasonable, convenient and user-friendly wireless services intending
                to simplify and enhance the lives of people. We are equally an entity possessing satisfactory skills in the field of call aggregation.<br><br>

                It would be an honor for FoneBox to be able to do business with an esteemed company such as you. At the mentioned venues, 
                we will have arranged for an exhibition booth, a bilateral table and a meeting room to help facilitate any meets that might 
                be held between us. We are hoping that we will get the same support from you as we continue to receive it from others. <br><br>

                Your esteemed presence is what we look forward to. We hope to enjoy more fruitful business deals and a great association with
                you in the days ahead. If you have any questions regarding this meeting, you can reach us easily at +65 6702 4466<br><br>

                Thank you for your time, and we hope to see you at the meeting.<br><br>
                Cordially,<br>
                <span style="font-weight: bold;">FoneBox Team</span>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal_current_affair_2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content modal_background_color">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <div style="text-align: center;"><h4 class="modal-title" id="myModalLabel">Upcoming Event 1</h4></div>
            </div>
            <div class="modal-body" style="padding-left: 30px; text-align: justify; text-align: center; font-size: 30px;">
                Coming Soon...
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal_current_affair_3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content modal_background_color">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <div style="text-align: center;"><h4 class="modal-title" id="myModalLabel">Upcoming Event 2</h4></div>
            </div>
            <div class="modal-body" style="padding-left: 30px; text-align: justify; text-align: center; font-size: 30px;">
                Coming Soon...
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>
<script>
    function open_modal_current_affair_1() {
        $('#modal_current_affair_1').modal('show');
    }
</script>
<script>
    function open_modal_current_affair_2() {
        $('#modal_current_affair_2').modal('show');
    }
</script>
<script>
    function open_modal_current_affair_3() {
        $('#modal_current_affair_3').modal('show');
    }
</script>
<script>
    $(function(){
    $('#slider .item').each(function(){
                var next = $(this).next();
                if (!next.length) {
                  next = $(this).siblings(':first');
                }
                next.children(':first-child').clone().appendTo($(this));

                for (var i = 0;i < 1; i++) {
                  next = next.next();
                  if (!next.length) {
                      next = $(this).siblings(':first');
                  }
                  next.children(':first-child').clone().appendTo($(this));
                }
              });
            });
                
</script>




