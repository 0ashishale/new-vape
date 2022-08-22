@extends('components.main.master')

<x-navbar />
<x-header />

<div class="blog">
    <div class="blog__container">
        <div class="sub-nav">
            <a href="/">Home</a>
            <a href="">/</a>
            <a href="/blog">Blog Home</a>
        </div>
        <div>
            <h1>BLOG HOME</h1>
        </div>
        <div class="blog__content">
            <p>Welcome to our online store! Our team is proud to announce that we're now open for business, and we
                look forward to serving you all in the future. If you have any questions about this store or the
                products found within, please don't hesitate to contact us any time. Our website has been carefully
                designed to provide you with an amazingly flexible online shopping experience, and its ease of
                navigation is something we think you'll grow to depend on and appreciate. Feel free to browse our
                entire product catalog, and let us know if you have any questions, comments or concerns about the
                items housed within. Our team is always ready and willing to assist our customers, and we are happy
                for your visit.</p>
          
        </div>
    </div>

    <div class="blog__image">
        <img src="{{ asset('/images/blog.jpg') }}" alt="">
    </div>

</div>
</div>

<x-footer/>
