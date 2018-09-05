@extends('layouts.master')
@section('title','List')
@section('content')

<section class="tada-container content-posts">
<!-- CONTENT -->    
<div class="content col-xs-8">

@foreach($list_post as $item_list_post)
    <div class="col-xs-6">


    	<!-- ARTICLE 1 -->      
    	<article>
        	<div class="post-image">
            	<img src="{{ $item_list_post->thumbnail }}" alt="post image 1">
                <div class="category"><a href="#">IMG</a></div>
            </div>
            <div class="post-text" style="height: 200px">
            	<p class="date">{!! $item_list_post->created_at !!}</p>
                <h2><a href="{!! url('detail',[$item_list_post->id,$item_list_post->slug]) !!}">{{ $item_list_post->title }}</a></h2>
                                                 
            </div>
            <div class="post-info">
            	<div class="post-by">Post By <a href="#">AD-Theme</a></div>
            </div>
        </article>

    </div>
@endforeach


	<div class="clearfix"></div>


<!-- NAVIGATION -->
<div class="navigation">
    	@if($list_post->currentPage() != 1)
           <a href="{{ str_replace('/?','?',$list_post->url($list_post->currentPage() - 1)) }}" class="prev"><i class="icon-arrow-left8"></i> Previous Posts</a>
        @endif

        
        @if($list_post->currentPage() != $list_post->lastPage())
            <a href="{{ str_replace('/?','?',$list_post->url($list_post->currentPage() + 1)) }}" class="next">Next Posts <i class="icon-arrow-right8"></i></a>
        @endif
        <div class="clearfix"></div>
</div>  



</div><!-- #CONTENT -->


<!-- SIDEBAR -->        
<div class="sidebar col-xs-4">
	
    
    <!-- ABOUT ME -->                  
    <div class="widget about-me">
    	<div class="ab-image">
        	<img src="img/about-me.jpg" alt="about me">
            <div class="ab-title">About Me</div>
        </div>
        <div class="ad-text">
        	<p>Lorem ipsum dolor sit consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
            <span class="signing"><img src="img/signing.png" alt="signing"></span>
        </div>
    </div>


    <!-- LATEST POSTS -->                              
    <div class="widget latest-posts">
    	<h3 class="widget-title">
        	Latest Posts
        </h3>
        <div class="posts-container">
            @foreach($last_posts as $item_last_posts)
            	<div class="item">
                	<img style="width: 100px; height: 100px" src="{!! $item_last_posts->thumbnail !!}" alt="post 1" class="post-image">
                    <div class="info-post">
                    	<h5><a href="#">{!! $item_last_posts->title !!}</a></h5>
                    	<span class="date">{!! $item_last_posts->created_at !!}</span>	
                    </div> 
                    <div class="clearfix"></div>   
                </div>
            @endforeach
            
            <div class="clearfix"></div>
        </div>
    </div>


    <!-- FOLLOW US -->                              
    <div class="widget follow-us">
    	<h3 class="widget-title">
        	Follow Us
        </h3>
    	<div class="follow-container">
            <a href="#"><i class="icon-facebook5"></i></a>
            <a href="#"><i class="icon-twitter4"></i></a>
            <a href="#"><i class="icon-google-plus"></i></a>
            <a href="#"><i class="icon-vimeo4"></i></a>
            <a href="#"><i class="icon-linkedin2"></i></a>                
        </div>
    	<div class="clearfix"></div>
    </div>            


    <!-- TAGS -->                              
    <div class="widget tags">
    	<h3 class="widget-title">
        	Tags
        </h3>
    	<div class="tags-container">
            <a href="#">Audio</a>
            <a href="#">Travel</a>
            <a href="#">Food</a>
            <a href="#">Event</a>
            <a href="#">Wordpress</a>
            <a href="#">Video</a>
            <a href="#">Design</a>
            <a href="#">Sport</a>
            <a href="#">Blog</a>
            <a href="#">Post</a> 
            <a href="#">Img</a>
            <a href="#">Masonry</a>                                    
        </div>
    	<div class="clearfix"></div>
    </div> 


    <!-- ADVERTISING -->                              
    <div class="widget advertising">
		<div class="advertising-container">
        	<img src="img/350x300.png" alt="banner 350x300">
        </div>
	</div>


    <!-- NEWSLETTER -->                              
    <div class="widget newsletter">
    	<h3 class="widget-title">
        	Newsletter
        </h3>
    	<div class="newsletter-container">
			<h4>DO NOT MISS OUR NEWS</h4>
            <p>Sign up and receive the <br> latest news of our company</p> 
            <form>
               <input type="email" class="newsletter-email" placeholder="Your email address...">
               <button type="submit" class="newsletter-btn">Send</button>
          	</form>                                  
        </div>
    	<div class="clearfix"></div>
    </div>  
    
</div> <!-- #SIDEBAR -->      

<div class="clearfix"></div>

@endsection