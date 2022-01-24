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
            <div class="video" style="width:45%; height:400px; background-color:red;">
                <iframe width="750" height="400" src="https://www.youtube.com/embed/vq6QST9KspA" 
                title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write;
                 encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>

<div class="OUR-VALUES">
    <h1>Our Values</h1>
    <div class="values">
        <div class="passion">
            <img src="{{asset('imgs/passion.png')}}" alt="">
            <h3>Passion for life</h3>
            <p>We go hand with multicultural aspects, sharing moments, positivity and outdoor activities.</p>
        </div>
        <div class="mindset">
            <img src="{{asset('imgs/mindset.webp')}}" alt="">
            <h3>Padawan Mindset</h3>
            <p>To understand the world and its differences, a constant state of learning and curiosity is welcome.</p>
        </div>
        <div class="buddha">
            <img src="{{asset('imgs/buddha.webp')}}" alt="">
            <h3>Little Buddha</h3>
            <p>To be conscious of ourselves and the enviroment, we have to be respecful of every 
                interaction we have with everything that surrounds us.</p>
        </div>
        <div class="ownership">
            <img src="{{asset('imgs/ownership.webp')}}" alt="">
            <h3>Pride in ownership </h3>
            <p>We all enjoy our freedom with co-responsibility and ownership of our duties.</p>
        </div>
    </div>
</div>

<br>
<br>
<br>
@include('layouts.includes.footer')
