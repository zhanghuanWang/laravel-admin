<div class="content-wrap">
                <div class="row">
                    <!-- SIDEMENU MAIL -->
                    <div class="col-sm-2">
                        <div class="side-mail">
                            <div class="btn btn-info button-mail" data-toggle="modal" data-target="#myModal"><i class="entypo-pencil"></i>&nbsp;&nbsp;Compose Mail</div>
                            <div class="list-btn-mail active">
                                <span class="entypo-download"></span><a>Inbox</a><i>648</i>
                            </div>
                            <div class="list-btn-mail">
                                <span class="entypo-floppy"></span><a>Draft</a><i>5</i>
                            </div>
                            <div class="list-btn-mail">
                                <span class="entypo-logout"></span><a>Sent</a>
                            </div>
                            <div class="list-btn-mail">
                                <span class="entypo-trash"></span><a>Trash</a>
                            </div>
                            <div class="list-btn-mail">
                                <span class="entypo-alert"></span><a>Spam</a><i>123</i>
                            </div>

                        </div>




                        <div aria-labelledby="myLargeModalLabel" role="dialog" tabindex="-1" class="modal fade bs-example-modal-lg" style="display: none;" id="myModal">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">

                                    <div class="modal-header">
                                        <button aria-hidden="true" data-dismiss="modal" class="close" type="button">
                                            <span class="entypo-cancel"></span>
                                        </button>
                                        <h6 id="myLargeModalLabel" class="modal-title">Compose Mail</h6>
                                    </div>
                                    <div class="modal-body">

                                        <div class="compose_mail">

                                            <form role="form">
                                                <div class="form-group">

                                                    <input type="email" placeholder="To" id="exampleInputEmail1" class="form-control">
                                                </div>
                                                <div class="form-group">

                                                    <input type="email" placeholder="Subject" id="exampleInputPassword1" class="form-control">
                                                </div>




                                                <div class="btn-group">
                                                    <button data-toggle="dropdown" class="btn dropdown-toggle" type="button">
                                                        <span class="fontawesome-font"></span>Normal text
                                                        <span class="caret"></span>
                                                    </button>
                                                    <ul role="menu" class="dropdown-menu">
                                                        <li><a href="#">Action</a>
                                                        </li>
                                                        <li><a href="#">Another action</a>
                                                        </li>
                                                        <li><a href="#">Something else here</a>
                                                        </li>

                                                    </ul>

                                                </div>
                                                <div class="btn-group">
                                                    <button type="button" class="btn">
                                                        <span class="fontawesome-bold"></span>
                                                    </button>
                                                    <button type="button" class="btn">
                                                        <span class="fontawesome-italic"></span>
                                                    </button>
                                                    <button type="button" class="btn">
                                                        <span class="fontawesome-underline"></span>
                                                    </button>
                                                </div>

                                                <div class="btn-group">
                                                    <button type="button" class="btn">
                                                        <span class="fontawesome-list-ul"></span>
                                                    </button>
                                                    <button type="button" class="btn">
                                                        <span class="fontawesome-list-ol"></span>
                                                    </button>
                                                    <button type="button" class="btn">
                                                        <span class="fontawesome-indent-left"></span>
                                                    </button>
                                                    <button type="button" class="btn">
                                                        <span class="fontawesome-indent-right"></span>
                                                    </button>

                                                </div>


                                                <button type="button" class="btn">
                                                    <span class="entypo-link"></span>
                                                </button>
                                                <button type="button" class="btn">
                                                    <span class="entypo-attach"></span>
                                                </button>
                                                <button type="button" class="btn">
                                                    <span class="fontawesome-table"></span>
                                                </button>
                                                <button type="button" class="btn">
                                                    <span class="fontawesome-camera"></span>
                                                </button>


                                                <textarea style="height:200px!important;margin:20px 0" class="form-control" rows="8"></textarea>


                                                <button class="btn" type="submit">Send</button>
                                                <button class="btn" type="submit">
                                                    <span class="fontawesome-save"></span>&nbsp;&nbsp;Save as Draft</button>
                                            </form>

                                        </div>

                                    </div>
                                </div>

                            </div>

                        </div>










                    </div>
                    <!-- /SIDEMENU MAIL -->
                    <!-- CONTENT MAIL -->
                    <div class="col-sm-10">

                        <div class="mail_header">
                            <div class="row">
                                <div class="col-sm-6">

                                    <div style="margin-right:10px" class="btn-group pull-left">
                                        <div class="btn">
                                            <input type="checkbox" style="margin:0 5px;padding:0;position:relative;top:2px;">All</div>
                                        <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">
                                            <span class="caret"></span>
                                            <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">None</a>
                                            </li>
                                            <li><a href="#">read</a>
                                            </li>
                                            <li><a href="#">Unread</a>
                                            </li>
                                        </ul>
                                    </div>



                                    <div style="margin-right:10px" class="btn-group pull-left">
                                        <button type="button" class="btn  dropdown-toggle" data-toggle="dropdown">More
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#"><i class="fa fa-pencil"></i> Mark as Read</a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-ban"></i> Spam</a>
                                            </li>
                                            <li class="divider"></li>
                                            <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a>
                                            </li>
                                        </ul>
                                    </div>

                                    <button style="margin-right:10px" type="button" data-color="#39B3D7" data-opacity="0.95" class="btn button test pull-left">
                                        <span class="entypo-arrows-ccw"></span>&nbsp;&nbsp;Refresh</button>


                                </div>


                                <div class="col-sm-6">



                                    <div class="btn-group pull-right">
                                        <button type="button" class="btn">
                                            <span class="entypo-left-open"></span>
                                        </button>
                                        <button type="button" class="btn">
                                            <span class="entypo-right-open"></span>
                                        </button>

                                    </div>

                                    <div class="btn-group pull-right" style="margin-right:10px;">
                                        <button type="button" class="btn">1-50 of 124</button>


                                    </div>

                                </div>


                            </div>

                        </div>

                        <div id="content-mail">
                            <div class="table-responsive">
                                <!-- THE MESSAGES -->
                                <table class="table table-mailbox">
                                    <tr class="unread">
                                        <td class="small-col">
                                            <input type="checkbox">
                                        </td>
                                        <td class="small-col"><i class="fa fa-star"></i>
                                        </td>
                                        <td class="name"><a class="star" href=""><i class="fa fa-twitter"></i></a>
                                        </td>
                                        <td>Twitter</td>
                                        <td class="subject">
                                            <p class="email-summary">
                                                <strong>Do You Know</strong>Iko Uwais, Justin Beiber on twitter? ...</p>
                                        </td>
                                        <td class="time text-right">Jan 8 at 07:10am</td>
                                    </tr>

                                    <tr class="unread">
                                        <td class="small-col">
                                            <input type="checkbox">
                                        </td>
                                        <td class="small-col"><i class="fa fa-star"></i>
                                        </td>
                                        <td class="name"> <a class="star" href=""><i class="fa fa-facebook"></i></a>
                                        </td>
                                        <td>Facebook</td>
                                        <td class="subject">
                                            <p class="email-summary">
                                                <strong>Meeting Reminder</strong>Ut enim ad minim veniam, quis nostrud exercitation...</p>
                                        </td>
                                        <td class="time text-right">Yesterday at 1:30am</td>
                                    </tr>


                                    <tr class="unread">
                                        <td class="small-col">
                                            <input type="checkbox">
                                        </td>
                                        <td class="small-col"><i class="fa fa-star"></i>
                                        </td>
                                        <td class="name">
                                            <a class="star" href="">
                                                <span class="entypo-instagrem"></span>
                                            </a>
                                        </td>
                                        <td>Instagram</td>
                                        <td class="subject">
                                            <p class="email-summary">
                                                <strong>User Interface Conference</strong>Ut enim ad minim veniam, quis nostrud exercitation...</p>
                                        </td>
                                        <td class="time text-right">Jan 13 at 7:30am</td>
                                    </tr>


                                    <tr class="unread">
                                        <td class="small-col">
                                            <input type="checkbox">
                                        </td>
                                        <td class="small-col"><i class="fa fa-star"></i>
                                        </td>
                                        <td class="name">
                                            <a class="star" href="">
                                                <span class="entypo-user"></span>
                                            </a>
                                        </td>
                                        <td>Jhony Deep</td>
                                        <td class="subject">
                                            <p class="email-summary">
                                                <strong>Hi, matirasa</strong>how are u today?</p>
                                        </td>
                                        <td class="time text-right">Jan 11 at 7:32am</td>
                                    </tr>


                                    <tr class="unread">
                                        <td class="small-col">
                                            <input type="checkbox">
                                        </td>
                                        <td class="small-col"><i class="fa fa-star"></i>
                                        </td>
                                        <td class="name">
                                            <a class="star" href="">
                                                <span class="entypo-behance"></span>
                                            </a>
                                        </td>
                                        <td>Behance Support</td>
                                        <td class="subject">
                                            <p class="email-summary">
                                                <strong>Upgrade your membership</strong>, you may be eligible for a FREE Trial.</p>
                                        </td>
                                        <td class="time text-right">Jan 11 at 10:11pm</td>
                                    </tr>

                                    <tr class="unread">
                                        <td class="small-col">
                                            <input type="checkbox">
                                        </td>
                                        <td class="small-col"><i class="fa fa-star"></i>
                                        </td>
                                        <td class="name">
                                            <a class="star" href="">
                                                <span class="entypo-tumblr"></span>
                                            </a>
                                        </td>
                                        <td>Tumblr</td>
                                        <td class="subject">
                                            <p class="email-summary">
                                                <strong>Follow</strong>more blogs and have more fun</p>
                                        </td>
                                        <td class="time text-right">Jan 11 at 9:54pm</td>
                                    </tr>

                                    <tr class="unread">
                                        <td class="small-col">
                                            <input type="checkbox">
                                        </td>
                                        <td class="small-col"><i class="fa fa-star"></i>
                                        </td>
                                        <td class="name">
                                            <a class="star" href="">
                                                <span class="entypo-paypal"></span>
                                            </a>
                                        </td>
                                        <td>Paypal</td>
                                        <td class="subject">
                                            <p class="email-summary">
                                                We're transferring money from PayPal to your bank</p>
                                        </td>
                                        <td class="time text-right">Jan 11 at 9:54pm</td>
                                    </tr>


                                    <tr class="unread">
                                        <td class="small-col">
                                            <input type="checkbox">
                                        </td>
                                        <td class="small-col"><i class="fa fa-star"></i>
                                        </td>
                                        <td class="name">
                                            <a class="star" href="">
                                                <span class="entypo-dropbox"></span>
                                            </a>
                                        </td>
                                        <td>Dropbox</td>
                                        <td class="subject">
                                            <strong>New Update</strong>Now are available, get it now!
                                        </td>
                                        <td class="time text-right">Jan 11 at 9:54pm</td>
                                    </tr>
                                    <!-- TWO -->
                                    <tr class="unread">
                                        <td class="small-col">
                                            <input type="checkbox">
                                        </td>
                                        <td class="small-col"><i class="fa fa-star"></i>
                                        </td>
                                        <td class="name"><a class="star" href=""><i class="fa fa-twitter"></i></a>
                                        </td>
                                        <td>Twitter</td>
                                        <td class="subject">
                                            <p class="email-summary">
                                                <strong>Do You Know</strong>Iko Uwais, Justin Beiber on twitter? ...</p>
                                        </td>
                                        <td class="time text-right">Jan 8 at 07:10am</td>
                                    </tr>

                                    <tr class="unread">
                                        <td class="small-col">
                                            <input type="checkbox">
                                        </td>
                                        <td class="small-col"><i class="fa fa-star"></i>
                                        </td>
                                        <td class="name"> <a class="star" href=""><i class="fa fa-facebook"></i></a>
                                        </td>
                                        <td>Facebook</td>
                                        <td class="subject">
                                            <p class="email-summary">
                                                <strong>Meeting Reminder</strong>Ut enim ad minim veniam, quis nostrud exercitation...</p>
                                        </td>
                                        <td class="time text-right">Yesterday at 1:30am</td>
                                    </tr>


                                    <tr class="unread">
                                        <td class="small-col">
                                            <input type="checkbox">
                                        </td>
                                        <td class="small-col"><i class="fa fa-star"></i>
                                        </td>
                                        <td class="name">
                                            <a class="star" href="">
                                                <span class="entypo-instagrem"></span>
                                            </a>
                                        </td>
                                        <td>Instagram</td>
                                        <td class="subject">
                                            <p class="email-summary">
                                                <strong>User Interface Conference</strong>Ut enim ad minim veniam, quis nostrud exercitation...</p>
                                        </td>
                                        <td class="time text-right">Jan 13 at 7:30am</td>
                                    </tr>


                                    <tr class="unread">
                                        <td class="small-col">
                                            <input type="checkbox">
                                        </td>
                                        <td class="small-col"><i class="fa fa-star"></i>
                                        </td>
                                        <td class="name">
                                            <a class="star" href="">
                                                <span class="entypo-user"></span>
                                            </a>
                                        </td>
                                        <td>Jhony Deep</td>
                                        <td class="subject">
                                            <p class="email-summary">
                                                <strong>Hi, matirasa</strong>how are u today?</p>
                                        </td>
                                        <td class="time text-right">Jan 11 at 7:32am</td>
                                    </tr>


                                    <tr class="unread">
                                        <td class="small-col">
                                            <input type="checkbox">
                                        </td>
                                        <td class="small-col"><i class="fa fa-star"></i>
                                        </td>
                                        <td class="name">
                                            <a class="star" href="">
                                                <span class="entypo-behance"></span>
                                            </a>
                                        </td>
                                        <td>Behance Support</td>
                                        <td class="subject">
                                            <p class="email-summary">
                                                <strong>Upgrade your membership</strong>, you may be eligible for a FREE Trial.</p>
                                        </td>
                                        <td class="time text-right">Jan 11 at 10:11pm</td>
                                    </tr>

                                    <tr class="unread">
                                        <td class="small-col">
                                            <input type="checkbox">
                                        </td>
                                        <td class="small-col"><i class="fa fa-star"></i>
                                        </td>
                                        <td class="name">
                                            <a class="star" href="">
                                                <span class="entypo-tumblr"></span>
                                            </a>
                                        </td>
                                        <td>Tumblr</td>
                                        <td class="subject">
                                            <p class="email-summary">
                                                <strong>Follow</strong>more blogs and have more fun</p>
                                        </td>
                                        <td class="time text-right">Jan 11 at 9:54pm</td>
                                    </tr>

                                    <tr class="unread">
                                        <td class="small-col">
                                            <input type="checkbox">
                                        </td>
                                        <td class="small-col"><i class="fa fa-star"></i>
                                        </td>
                                        <td class="name">
                                            <a class="star" href="">
                                                <span class="entypo-paypal"></span>
                                            </a>
                                        </td>
                                        <td>Paypal</td>
                                        <td class="subject">
                                            <p class="email-summary">
                                                We're transferring money from PayPal to your bank</p>
                                        </td>
                                        <td class="time text-right">Jan 11 at 9:54pm</td>
                                    </tr>


                                    <tr class="unread">
                                        <td class="small-col">
                                            <input type="checkbox">
                                        </td>
                                        <td class="small-col"><i class="fa fa-star"></i>
                                        </td>
                                        <td class="name">
                                            <a class="star" href="">
                                                <span class="entypo-dropbox"></span>
                                            </a>
                                        </td>
                                        <td>Dropbox</td>
                                        <td class="subject">
                                            <strong>New Update</strong>Now are available, get it now!
                                        </td>
                                        <td class="time text-right">Jan 11 at 9:54pm</td>
                                    </tr>

                                    <!-- END OF TWO -->
                                    <!-- THREE -->
                                    <tr class="unread">
                                        <td class="small-col">
                                            <input type="checkbox">
                                        </td>
                                        <td class="small-col"><i class="fa fa-star"></i>
                                        </td>
                                        <td class="name"><a class="star" href=""><i class="fa fa-twitter"></i></a>
                                        </td>
                                        <td>Twitter</td>
                                        <td class="subject">
                                            <p class="email-summary">
                                                <strong>Do You Know</strong>Iko Uwais, Justin Beiber on twitter? ...</p>
                                        </td>
                                        <td class="time text-right">Jan 8 at 07:10am</td>
                                    </tr>

                                    <tr class="unread">
                                        <td class="small-col">
                                            <input type="checkbox">
                                        </td>
                                        <td class="small-col"><i class="fa fa-star"></i>
                                        </td>
                                        <td class="name"> <a class="star" href=""><i class="fa fa-facebook"></i></a>
                                        </td>
                                        <td>Facebook</td>
                                        <td class="subject">
                                            <p class="email-summary">
                                                <strong>Meeting Reminder</strong>Ut enim ad minim veniam, quis nostrud exercitation...</p>
                                        </td>
                                        <td class="time text-right">Yesterday at 1:30am</td>
                                    </tr>


                                    <tr class="unread">
                                        <td class="small-col">
                                            <input type="checkbox">
                                        </td>
                                        <td class="small-col"><i class="fa fa-star"></i>
                                        </td>
                                        <td class="name">
                                            <a class="star" href="">
                                                <span class="entypo-instagrem"></span>
                                            </a>
                                        </td>
                                        <td>Instagram</td>
                                        <td class="subject">
                                            <p class="email-summary">
                                                <strong>User Interface Conference</strong>Ut enim ad minim veniam, quis nostrud exercitation...</p>
                                        </td>
                                        <td class="time text-right">Jan 13 at 7:30am</td>
                                    </tr>


                                    <tr class="unread">
                                        <td class="small-col">
                                            <input type="checkbox">
                                        </td>
                                        <td class="small-col"><i class="fa fa-star"></i>
                                        </td>
                                        <td class="name">
                                            <a class="star" href="">
                                                <span class="entypo-user"></span>
                                            </a>
                                        </td>
                                        <td>Jhony Deep</td>
                                        <td class="subject">
                                            <p class="email-summary">
                                                <strong>Hi, matirasa</strong>how are u today?</p>
                                        </td>
                                        <td class="time text-right">Jan 11 at 7:32am</td>
                                    </tr>


                                    <tr class="unread">
                                        <td class="small-col">
                                            <input type="checkbox">
                                        </td>
                                        <td class="small-col"><i class="fa fa-star"></i>
                                        </td>
                                        <td class="name">
                                            <a class="star" href="">
                                                <span class="entypo-behance"></span>
                                            </a>
                                        </td>
                                        <td>Behance Support</td>
                                        <td class="subject">
                                            <p class="email-summary">
                                                <strong>Upgrade your membership</strong>, you may be eligible for a FREE Trial.</p>
                                        </td>
                                        <td class="time text-right">Jan 11 at 10:11pm</td>
                                    </tr>

                                    <tr class="unread">
                                        <td class="small-col">
                                            <input type="checkbox">
                                        </td>
                                        <td class="small-col"><i class="fa fa-star"></i>
                                        </td>
                                        <td class="name">
                                            <a class="star" href="">
                                                <span class="entypo-tumblr"></span>
                                            </a>
                                        </td>
                                        <td>Tumblr</td>
                                        <td class="subject">
                                            <p class="email-summary">
                                                <strong>Follow</strong>more blogs and have more fun</p>
                                        </td>
                                        <td class="time text-right">Jan 11 at 9:54pm</td>
                                    </tr>

                                    <tr class="unread">
                                        <td class="small-col">
                                            <input type="checkbox">
                                        </td>
                                        <td class="small-col"><i class="fa fa-star"></i>
                                        </td>
                                        <td class="name">
                                            <a class="star" href="">
                                                <span class="entypo-paypal"></span>
                                            </a>
                                        </td>
                                        <td>Paypal</td>
                                        <td class="subject">
                                            <p class="email-summary">
                                                We're transferring money from PayPal to your bank</p>
                                        </td>
                                        <td class="time text-right">Jan 11 at 9:54pm</td>
                                    </tr>


                                    <tr class="unread">
                                        <td class="small-col">
                                            <input type="checkbox">
                                        </td>
                                        <td class="small-col"><i class="fa fa-star"></i>
                                        </td>
                                        <td class="name">
                                            <a class="star" href="">
                                                <span class="entypo-dropbox"></span>
                                            </a>
                                        </td>
                                        <td>Dropbox</td>
                                        <td class="subject">
                                            <strong>New Update</strong>Now are available, get it now!
                                        </td>
                                        <td class="time text-right">Jan 11 at 9:54pm</td>
                                    </tr>

                                    <!-- END OF THREE -->


                                </table>
                            </div>
                            <!-- /.table-responsive -->


                        </div>

                    </div>
                    <!-- /CONTENT MAIL -->
                </div>
            </div>