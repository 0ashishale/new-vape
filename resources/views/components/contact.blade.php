@extends('components.main.master')
<div class="contact">
    <x-navbar />
    <x-header />


    <div class="contact__body">
        <div class="contact__container">
            <div class="sub-nav">
                <a href="/">Home</a>
                <a href="">/</a>
                <a href="/contact">Contact Us</a>
            </div>
            <div class="contact__title">
                <h1>CONTACT FORM</h1>
            </div>
            <br/> <br/>
            <div>
                <form action="" class="contact__form">
                    <div class="contact__input">
                      <label for="name">your Name</label> 
                      <input type="text" id="Name"required><br/> <br/> 
                      <label for="number">Phone No.</label> 
                      <input type="text" id="number"required><br/> <br/>
                      <label for="email">Email Id</label> 
                      <input type="email" id="email"required><br/> <br/>
                    </div>
                    <div class="contact__message">
                      <label for="name">subject</label> 
                      <input type="text" id="subject"required> <br/> 
                      <label for="message">Your Message</label>
                      <textarea id="message" rows="8" required></textarea> <br/>
                        <button type="submit">SUBMIT</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<x-footer />
