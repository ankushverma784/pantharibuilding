 <footer class="clearfix">
    <div class="pull-center">
        <span class="footer-link">Managed by <a href="https://www.proponenttechnologies.com/" target="_blank" rel="noopener">Proponent Technologies</a></span>
    </div>
 </footer>

 <div class="modal fade" id="viewquickquotes" aria-modal="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content popupform">
        <div class="modal-header">
          <h5 class="modal-title">View Enquiry Form</h5>
          <a class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </a>
        </div>
        <div class="modal-body">
          <div class="contact-form">
         <form action="" method="post">
            <div class="row">
               <div class="col-lg-6">
                  <input type="text" name="uname" class="form-control custom-input" required>
                  <label for="uname" class="form-control-placeholder ">Name</label>
               </div>

               <div class="col-lg-6">
                  <input type="number" name="contact" class="form-control custom-input" required>
                  <label for="contact" class="form-control-placeholder">Mobile Number</label>
               </div>


               <div class="col-lg-6">
                  <input type="number" name="user-email" class="form-control custom-input" required>
                  <label for="user-email" class="form-control-placeholder">Email</label>
               </div>

               <div class="col-lg-6">
                  <input type="date" name="dateof-move" class="form-control custom-input" required>
                  <label for="dateof-move" class="form-control-placeholder">Date Of Move</label>
               </div>

               <div class="col-lg-6">
                  <select class="form-control custom-input" name="preferred_time" required>
                     <option value="" selected=""></option>
                     <option value="">1</option>
                     <option value="">2</option>
                     <option value="">3</option>
                  </select>
                  <label for="preferred-time" class="form-control-placeholder">Preferred Time</label>
               </div>

               <div class="col-lg-6">
                  <select class="form-control custom-input" name="type-move" required>
                     <option value="" selected=""></option>
                     <option value="">1</option>
                     <option value="">2</option>
                     <option value="">3</option>
                  </select>
                  <label for="type-move" class="form-control-placeholder">Type of move</label>
               </div>

               <div class="col-lg-6">
                  <input type="text" name="pickup-suburb" class="form-control custom-input" required>
                  <label for="pickup-suburb" class="form-control-placeholder">Pickup Suburb</label>
               </div>

               <div class="col-lg-6">
                  <select class="form-control custom-input" name="select-floo" required>
                     <option value="" selected=""></option>
                     <option value="">1</option>
                     <option value="">2</option>
                     <option value="">3</option>
                  </select>
                  <label for="select-floor" class="form-control-placeholder">Select Floor</label>
               </div>

               <div class="col-lg-6">
                  <input type="text" name="drop-off-time" class="form-control custom-input" required>
                  <label for="drop-off-time" class="form-control-placeholder">Drop Off Time</label>
               </div>

               <div class="col-lg-6">
                  <select class="form-control custom-input" name="select-floo" required>
                     <option value="" selected=""></option>
                     <option value="">1</option>
                     <option value="">2</option>
                     <option value="">3</option>
                  </select>
                  <label for="drop-off-time" class="form-control-placeholder">Select Floor</label>
               </div>

               <div class="col-lg-6">
                <input type="date" name="date-of-expire" class="form-control custom-input" required>
                <label for="date-of-expire" class="form-control-placeholder">Date of Expire</label>
             </div>

             <div class="col-lg-6">
                <input type="date" name="date-of-lead" class="form-control custom-input" required>
                <label for="date-of-lead" class="form-control-placeholder">Date of Lead</label>
             </div>
                                       

               <div class="col-lg-12">
                  <textarea name="additonal-details" class="form-control custom-input" required rows="2"></textarea>
                  <label for="additonal-details" class="form-control-placeholder">Message</label>
               </div>

               <div class="col-lg-12">
                  <div class="modalsubmitbn txt-end">
                     <button class="formsubmitbtn1" type="button" value="submit">Close</button>
                     <button class="formsubmitbtn2" type="button" value="submit">Save</button>
                  </div>
               </div>
            </div>
         </form>
       </div>
        </div>
      </div>
    </div>
  </div>



  <div class="modal fade" id="addnewproduct" tabindex="-1" role="dialog">
         <div class="modal-dialog" role="document">
            <div class="modal-content popupform">
               <div class="modal-header">
                  <h5 class="modal-title">View Services</h5>
                  <a class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                  </a>
               </div>
               <div class="modal-body">
                  <form action="" method="post">
                    <div class="row">
                       <div class="col-lg-4">
                          <p class="formheading">Product Image</p>
                          <div class="profile-upload">
                             <div class="card card-body view file-upload mt-0">
                                <!-- <img class="addimage" src="images/user-img.jpg"> -->
                                <a href="#" class="image-action add-image"><input type="file" accept="image/*" name="image" class="uploadprofile"><i class="fas fa-pencil-alt"></i></a>
                             <a href="#" class="image-action remove-image"><i class="fas fa-times"></i></a>
                             </div>
                             
                          </div>
                       </div>
                       <div class="col-lg-8 mt-2">
                          <div class="row">
                             <div class="col-lg-12">
                                <input type="text" name="product&service-name" class="form-control custom-input " required="">
                                <label for="product&service-name" class="form-control-placeholder ">Product/Service Name</label>
                             </div>
                             <div class="col-lg-6 divider">
                                <input type="number" name="productprice" class="form-control custom-input" required="">
                                <label for="productprice" class="form-control-placeholder">Price</label>
                             </div>
                             <div class="col-lg-6">
                                <input type="text" name="ex-pair" class="form-control custom-input" required="">
                                <label for="ex-pair" class="form-control-placeholder">Ex- Pair, Piece etc.</label>
                             </div>
                             <div class="col-lg-12">
                                <label for="designation">Product/Service description</label>
                                <div id="editor"></div>
                             </div>
                          </div>
                       </div>
                       <div class="col-lg-12 mt-4">
                          <div class="modalsubmitbn txt-end">
                            <button class="formsubmitbtn1" type="button" value="submit">Close</button>
                            <button class="formsubmitbtn2" type="button" value="submit">Save</button>
                          </div>
                       </div>
                    </div>
                  </form>
               </div>
            </div>
         </div>
      </div>



<div class="modal fade" id="viewuserdetails" aria-modal="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content popupform">
        <div class="modal-header">
          <h5 class="modal-title">View Enquiry Form</h5>
          <a class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </a>
        </div>
        <div class="modal-body p-4 mt-2">
          <div class="contact-form">
         <form action="" method="post">
          <div class="row">
             <div class="col-lg-6">
                <input type="text" name="fname" class="form-control custom-input" required>
                <label for="fname" class="form-control-placeholder ">First Name</label>
             </div>

             <div class="col-lg-6">
                <input type="text" name="lname" class="form-control custom-input" required>
                <label for="lname" class="form-control-placeholder ">Last Name</label>
             </div>

             <div class="col-lg-6">
                <input type="number" name="user-email" class="form-control custom-input" required>
                <label for="user-email" class="form-control-placeholder">Email</label>
             </div>

             <div class="col-lg-6">
                <input type="number" name="contact" class="form-control custom-input" required>
                <label for="contact" class="form-control-placeholder">Mobile Number</label>
             </div>

             <div class="col-lg-12">
                <input type="text" name="user-address" class="form-control custom-input" required>
                <label for="user-address" class="form-control-placeholder">Address</label>
             </div>

             <div class="col-lg-12">
                <textarea name="additonal-details" class="form-control custom-input" required rows="2"></textarea>
                <label for="additonal-details" class="form-control-placeholder">Designation</label>
             </div>

             <div class="col-lg-12">
              <div class="modalsubmitbn txt-end">
                <button class="formsubmitbtn1" type="button" value="submit">Close</button>
                <button class="formsubmitbtn2" type="button" value="submit">Save</button>
              </div>
             </div>
          </div>
       </form>
       </div>
        </div>
      </div>
    </div>
</div>