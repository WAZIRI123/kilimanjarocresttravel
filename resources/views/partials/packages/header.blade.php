<div class="package-header">
    <h2 class="package-title">{{ $title ?? 'Safari Package' }}</h2>
</div>
<div class="package-image">
    <img src="{{ $image ?? 'https://images.unsplash.com/photo-1547471080-7cc2caa01a7e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1471&q=80' }}" 
         alt="{{ $alt ?? 'Safari Package' }}" 
         class="img-fluid">
</div>
@if(isset($caption))
<div class="image-caption">{{ $caption }}</div>
@endif
