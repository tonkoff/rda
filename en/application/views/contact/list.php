START PAGE TITLE SECTION
============================== -->
<div class="page-title-area contact-area">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-6">
                <div class="page-title-left">
                    <h2>Contact Us</h2>
                </div>
            </div>
            <div class="col-sm-6 col-md-6">
                <div class="page-bredcrumbs-area text-right">
                    <ul  class="page-bredcrumbs">
                        <li><a href="<?php echo base_url('index.php')?>">Home</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- =========================
  END PAGE TITLE SECTION
============================== -->

<script type="text/javascript">
    <!--
    // Form validation code will come here.
    function validate()
    {

        if( document.myForm.Name.value == "" )
        {
            alert( "Name!" );
            document.myForm.Name.focus() ;
            return false;
        }


        if( document.myForm.Name.value.length <3 )
        {
            alert( "Name!" );
            document.myForm.Name.focus() ;
            return false;
        }



        if( document.myForm.EMail.value == "" )
        {
            alert( "Email!" );
            document.myForm.EMail.focus() ;
            return false;
        }


        if( document.myForm.EMail.value.length <3 )
        {
            alert( "Email!" );
            document.myForm.EMail.focus() ;
            return false;
        }


        if( document.myForm.Phone.value == "" )
        {
            alert( "Phone!" );
            document.myForm.Phone.focus() ;
            return false;
        }

        if( document.myForm.Phone.value.length <9 )
        {
            alert( "Phone!" );
            document.myForm.Phone.focus() ;
            return false;
        }

        if( document.myForm.Subject.value == "" )
        {
            alert( "Subject!" );
            document.myForm.Subject.focus() ;
            return false;
        }

        if( document.myForm.Subject.value.length <3 )
        {
            alert( "Subject!" );
            document.myForm.Subject.focus() ;
            return false;
        }

        if( document.myForm.Message.value == "" )
        {
            alert( "Message!" );
            document.myForm.Message.focus() ;
            return false;
        }

        if( document.myForm.Message.value.length <10 )
        {
            alert( "Message!" );
            document.myForm.Message.focus() ;
            return false;
        }


        return( true );
    }
    //-->
</script>




<!-- =========================
START CONTACT US SECTION
============================== -->
<section class="contact-us-area contact-us-1-area">
    <div class="contact-form">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="contact-form-3-text">
                        <h2>Having a question?</h2>
                        <p>Just submit your details and we’ll be in touch shortly. Our staff can help work out what's right for you !</p>
                        <div class="address-area">
                            <div class="view-location">
                                <h2>Address :</h2>
                                <p><i class="fa fa-map-marker"></i> 37 Tsar Boris III Obedinitel Blvd., Pavilion 27, 4000 Plovdiv Bulgaria.</p>
                                <p> </p>
                            </div>
                            <div class="col-md-6 no-padding-left">
                                <div class="address-details">
                                    <h2>Email :</h2>
                                    <span><i class="fa   fa-envelope"></i>rdaplovdiv@gmail.com</span>
                                </div>
                            </div>

                            <div class="col-md-6 no-padding-left">
                                <div class="address-details">
                                    <h2>Phone :</h2>
                                    <span><i class="fa  fa-phone"></i> +359(0) 32 902 399</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="contact-form-left contact-form-3 contact-form-right">
                        <h2>Drop Me A Line</h2>
                        <div class="show_result"></div>
                        <div class="result_message"></div>
                        <form method="post" name="myForm" onsubmit="return(validate())">
                            <div class="row">
                                <div class="col-sm-6">
                                    <input type="text" id="Name" name="name" class="form-control" placeholder="First Name">
                                </div>
                                <div class="col-sm-6">
                                    <input type="email" id="Email" name="email" class="form-control" placeholder="Email">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="phone"  id="Phone" placeholder="Phone">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control"  name="subject"  id="Subject" placeholder="Subject">
                                </div>
                                <div class="col-sm-12">
                                    <textarea class="form-control" name="message" rows="3" id="Message"  placeholder="Message"></textarea>
                                </div>
                                <div class="col-sm-12 text-center">
                                    <button type="submit" name="submit"   class="btn btn-dm">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- =========================
START CONTACT US SECTION
============================== -->
<div id="map"></div>