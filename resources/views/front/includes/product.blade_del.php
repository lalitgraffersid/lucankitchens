<div class="slide">
	 <div class="owl-carousel owl-theme" id="product">
	 @foreach($products as $product)
		<div class="box">
		    <img src="{{ url('admin/clip-one/assets/gallery/original') }}/{{ $product->gallery_image }}" alt=""/>
		   <h6>{{ $product->gallery_title }}</h6>
		</div>
		@endforeach
		
	 </div>
</div>