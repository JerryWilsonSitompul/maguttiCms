@props([
'type'=>'blocks',
'button_color'=>'btn-outline-color-4',
])
<div class=" row blocks-item">
    <div class="col-lg-12 blocks-image mb-2">
        @if($block->video)
            <x-media.video :video="$block->video" :classExtra="'mb-2'"></x-media.video>
        @else
            <img src="{{ ma_get_image_from_repository($block->image) }}" class="img-fluid blocks-img w-100"  alt="{{$block->title}}">
        @endif

    </div>
    <div class="col-lg-12 {{$type}}-content">
        <x-website.page-blocks.content :block="$block" :buttonColor="$button_color" />
    </div>
</div>