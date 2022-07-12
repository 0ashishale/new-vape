@include('components.main.master')
<div class="contact__body" >
    <div class="contact__container">
   <div class="sub-nav">
        <a href="/">Home</a>
        <a href="">/</a>
        <a href="/contact">Contact Us</a>
   </div>
   <div class="contact__title">
    <h1>CONTACT FORM</h1>
   </div>
       <form action="" class="contact__form">
       
           <div class="form__row">
              <div class="contact__input">
                <input type="text" id="Name"required>
                <label for="name">your Name</label>
              </div>
              <div class="contact__input">
                <input type="text" id="number"required>
                <label for="number">Phone No.</label>
              </div>
           </div>
              <div class="contact__input">
                <input type="email" id="email"required>
                <label for="email">Email Id</label>
              </div>
              <div class="contact__input">
                  <label for="department">Department</label>
                      <select  name="department">
                            <option value="general">General</option>
                            <option value="sales">Sales</option>
                      </select>
              </div>
              <div class="contact__input">
                <input type="text" id="subject"required>
                <label for="name">subject</label>
              </div>

              <div class="contact__input">
                <textarea id="message" rows="8" required></textarea>
                <label for="message">Your Message</label>
              </div>
              <div>
                 <button type="submit">SUBMIT</button>
              </div>
       </form>
    </div>
</div>