<div class="aside-form">
    <h4>ENQUIRY</h4>
    <form action="{{route('enquiry.submit')}}" id="enquiry-form" >
        @csrf
        <input type="text" name="name" placeholder="Name" class="form-control" required>
        
        <input type="text" name="phone" placeholder="Phone (e.g. +971000000000)" class="form-control" required>
        
        <input type="email" name="email" placeholder="Email" class="form-control aside-email" required>
        
        <select class="form-control" name="service" required>
            <option value="">Select Service</option>
            @foreach($services as $val)
                <option value="{{$val->name}}">{{$val->name}}</option>
            @endforeach
            <option value="Others">Others</option>
        </select>
        
        <textarea class="form-control" name="description" rows="4" placeholder="Describe Your Requirement" required></textarea>
        
        <button class="btn btn-theme">Submit Your Enquiry</button>
        <div class="loading"><img src="{{URL::to('/public/loader-gif.gif')}}" width="80px" class="newsletter-loader"></div>
    </form>
</div>

<div class="aside-link">
    <h4>Our Services</h4>
    @foreach($services as $val)
        <a href="{{URL::to('/'.$val->slug)}}"><i class="{{$val->icon}}"></i>&nbsp; {{$val->name}}</a>
    @endforeach
</div>

@if(count($blog_categories) > 0)
<div class="aside-link">
    <h4>Blog Categories</h4>
    @foreach($blog_categories as $val)
        <a href="{{URL::to('/blogs/'.$val->slug)}}">
            {{$val->name}} <small>({{count($val->blogs)}})</small>
        </a>
    @endforeach
</div>
@endif
