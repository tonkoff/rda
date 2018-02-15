START PAGE TITLE SECTION
============================== -->
<div class="page-title-area contact-area">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-6">
                <div class="page-title-left">
                    <h2>Контакти</h2>
                </div>
            </div>
            <div class="col-sm-6 col-md-6">
                <div class="page-bredcrumbs-area text-right">
                    <ul  class="page-bredcrumbs">
                        <li><a href="<?php echo base_url('index.php')?>">Начало</a></li>
                        <li><a href="#">Контакти</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- =========================
  END PAGE TITLE SECTION
============================== -->

<!-- =========================
START CONTACT US SECTION
============================== -->
<section class="contact-us-area contact-us-1-area">
    <div class="contact-form">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="contact-form-3-text">
                        <h2>Имате въпроси?</h2>
                        <p>Само изпратете вашите детайли и ние ще се свържем с вас скоро. Нашият екип ще ви помогне да разберете какво ви е необходимо!</p>
                        <div class="address-area">
                            <div class="view-location">
                                <h2>Адрес :</h2>
                                <p><i class="fa fa-map-marker"></i>бул. "Цар Борис III Обединител" № 37, Палата 27, гр. Пловдив</p>
                                <p> </p>
                            </div>
                            <div class="col-md-6 no-padding-left">
                                <div class="address-details">
                                    <h2>Емейл :</h2>
                                    <span><i class="fa   fa-envelope"></i>rdaplovdiv@gmail.com</span>
                                </div>
                            </div>

                            <div class="col-md-6 no-padding-left">
                                <div class="address-details">
                                    <h2>Телефон :</h2>
                                    <span><i class="fa  fa-phone"></i> +359(0) 32 902 399</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="contact-form-left contact-form-3 contact-form-right">
                        <h2>Изпратете ни запитване</h2>
                        <div class="show_result"></div>
                        <div class="result_message"></div>


                        <script type="text/javascript">
                            <!--
                            // Form validation code will come here.
                            function validate()
                            {

                                if( document.myForm.Name.value == "" )
                                {
                                    alert( "Име и фамилия!" );
                                    document.myForm.Name.focus() ;
                                    return false;
                                }


                                if( document.myForm.Name.value.length <3 )
                                {
                                    alert( "Име и фамилия!" );
                                    document.myForm.Name.focus() ;
                                    return false;
                                }



                                if( document.myForm.EMail.value == "" )
                                {
                                    alert( "Емаил!" );
                                    document.myForm.EMail.focus() ;
                                    return false;
                                }


                                if( document.myForm.EMail.value.length <3 )
                                {
                                    alert( "Емаил!" );
                                    document.myForm.EMail.focus() ;
                                    return false;
                                }


                                if( document.myForm.Phone.value == "" )
                                {
                                    alert( "Please provide your Phone!" );
                                    document.myForm.Phone.focus() ;
                                    return false;
                                }

                                if( document.myForm.Phone.value.length <9 )
                                {
                                    alert( "Телефон" );
                                    document.myForm.Phone.focus() ;
                                    return false;
                                }

                                if( document.myForm.Subject.value == "" )
                                {
                                    alert( "Отностно!" );
                                    document.myForm.Subject.focus() ;
                                    return false;
                                }

                                if( document.myForm.Subject.value.length <3 )
                                {
                                    alert( "Отностно!" );
                                    document.myForm.Subject.focus() ;
                                    return false;
                                }

                                if( document.myForm.Message.value == "" )
                                {
                                    alert( "Съобщение!" );
                                    document.myForm.Message.focus() ;
                                    return false;
                                }

                                if( document.myForm.Message.value.length <10 )
                                {
                                    alert( "Съобщение!" );
                                    document.myForm.Message.focus() ;
                                    return false;
                                }


                                return( true );
                            }
                            //-->
                        </script>


                        <form method="post" name="myForm" onsubmit="return(validate())">
                            <div class="row">
                                <div class="col-sm-6">
                                    <input type="text" id="Name" name="name" class="form-control" placeholder="Име:">
                                </div>
                                <div class="col-sm-6">
                                    <input type="email" id="Email" name="email" class="form-control" placeholder="Емаил:">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="phone"  id="Phone" placeholder="Телефон:">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control"  name="subject"  id="Subject" placeholder="Относто:">
                                </div>
                                <div class="col-sm-12">
                                    <textarea class="form-control" name="message" rows="3" id="Message"  placeholder="Съобщение:"></textarea>
                                </div>
                                <div class="col-sm-12 text-center">
                                    <button type="submit" name="submit"     class="btn btn-dm">Изпрати</button>
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