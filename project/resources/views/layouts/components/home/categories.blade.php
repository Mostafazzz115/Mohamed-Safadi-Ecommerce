<section class="featured-categories section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h2>Featured Categories</h2>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                        suffered alteration in some form.</p>
                </div>
            </div>
        </div>
        <div class="row">
           @foreach($categories as $category)
           <div class="col-lg-4 col-md-6 col-12">
            <!-- Start Single Category -->
            <div class="single-category">
                <h3 class="heading">{{ $category->name }}</h3>
                <ul>
                    @foreach($category->children as $child)
                    <li><a href="">{{ $child->name }}</a></li>
                    @endforeach
                </ul>
                <div class="images">
                    <img src="{{ $category->image_url }}" width="100" height="100" alt="#">
                </div>
            </div>
            <!-- End Single Category -->
        </div>
           @endforeach
           
        </div>
    </div>
</section>