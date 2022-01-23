@include('layouts.includes.header')

<form class ="contact-form" action="">
    <h1>Contact US</h1>
   <div class="in">
        <div class="name">
            <div class="FNAME">
                <label for="" class="Required">First Name</label>
                <input type="text" class="form-control" placeholder="First Name" required="true">
            </div>
            <div class="LNAME">
                <label for="">Last Name</label>
                <input type="text"  class="form-control"  placeholder="Last Name" required="true">
            </div>
        </div>
        <div class="Email">
            <label for="">Email</label>
            <input type="email" class="form-control" placeholder="Email" required="true">
        </div>
        <div class="Message">
            <label for="">message</label>
            <textarea class="form-control" placeholder="type your message here"></textarea>
        </div>
        <!-- <button>Submit</button> -->
        <button type="Submit" class="btn btn-outline-dark">Submit</button>
   </div>
   
</form>

@include('layouts.includes.footer')
