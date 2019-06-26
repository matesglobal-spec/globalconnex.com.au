    <div class="breadcrumbs-title bg-img-4 parallax overlay dark-5 blank-space">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="breadcrumbs-menu ptb-150">
                        <h1 class="l-height">Contact us </h1>
                        <ul class="clearfix">
                            <li><a href="index.html">Home</a> <i class="fa fa-angle-right"></i>
                            <li>Contact</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
    <div class="container-fluid">
        <div class="col-md-4">
            <?php $this->load->view("sidebar");?>
        </div>
        <div class="col-md-8">
              <div class="page-content-area">
                  

                  
                    <br>
                    <div class="page-contact-form">
                    <h4>Contact Us</h4>
                    <form class="custom-input" action="#">
                       <label>Name *</label>
                        <input type="text" name="name" placeholder="Enter Name">
                        <label>Phone Number (Please include country code and area code)*</label>
                        <input type="text" name="number" placeholder="Number">
                        <label>Email Address *</label>
                        <input type="email" name="email" placeholder="Email">
                        <label>Your question/message</label>
                        <textarea name="message" placeholder="Message here.."></textarea>


                        <button class="btn" type="submit" name="submit">Send Email</button>
                    </form>
               </div>
      
                 
                 <div class="page-end"></div>
              </div>
        </div>
    </div>