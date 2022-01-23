@include('layouts.includes.header')

<div class="story">
    <div class="our-story">
        <h1>OUR STORY</h1>
        <p>Based in Barcelona, Barner was founded in early 2017 by two friends. 
            After living their lives totally immersed in the digital world, they 
            had identified a problem that was not only affecting them, but millions 
            of people all around the globe: overexposure to blue light.
            <br>
            <br>
            <br>
            As hard workers and technology lovers, their eyes couldn’t withstand 
            the long hours spent every day in front of screens. They wanted to
             find a solution that would protect their eyes and improve their quality of life without sacrificing
              their style. After realizing that current solutions on the market weren’t good enough, they decided to 
              create their own.
        </p>
    </div>
</div>

<div class="video-story">
    <div class="columns">
        <div class="COL-1">
            <h1>HOW WE STARTED</h1>
            <p>We worked long and hard to create the glasses of our dreams, but before
             launching, we decided to test it out on two crowdfunding platforms: Kickstarter and Indiegogo.<br> <br>
             Thanks to the amazing support of all the people that believed in us and backed our crowdfunding campaigns,
              we’ve sold over 15,000 glasses in 81 countries, and now we’re selling our products worldwide.
            </p>
            <div class="badges">
                <div class="campaign">
                    <img src="{{asset('imgs/badges/campaign.png')}}"  >
                    <p>20 Campaigns<br> launched</p>
                </div>
                <div class="shipped">
                    <img src="{{asset('imgs/badges/shipped.png')}}"alt="">
                    <p>+15 000 Delivery</p>
                </div>
                <div class="glasses">
                    <img src="{{asset('imgs/badges/glasses.png')}}"  alt="">
                    <p>+20 000 glasses</p>
                </div>
                <div class="world">
                   <img src="{{asset('imgs/badges/world.png')}}"  alt="">
                   <p>81 countries</p>
                </div>
            </div>
        </div>
        <div class="COL-2">
            <div class="video" style="width:45%; height:400px; background-color:red;"></div>
        </div>
    </div>
</div>

@include('layouts.includes.footer')
