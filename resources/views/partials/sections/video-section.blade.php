@php
    use App\Models\VideoSection;
    $video = VideoSection::where('is_active', true)->first();
@endphp

@if($video)
<section id="video-section" class="video-section" style="grid-area:6/1/7/2">
    <div class="section-container">
        <div class="section-content">
            <div id="comp-m2vttpvv1" class="HcOXKn c9GqVL QxJLC3 lq2cno YQcXTT comp-m2vttpvv1 wixui-rich-text" data-testid="richTextElement" ariaattributes="[object Object]" style="border-radius:1rem1">
                <h2 class="font_2 wixui-rich-text__text">
                    <span class="wixui-rich-text__text">{!! $video->title !!}</span>
                </h2>
            </div>

            <div id="comp-m2vue5lh" class="comp-m2vue5lh JGtLUp wixui-horizontal-line">
            </div>
            
            <!-- Video Embed -->
            <div class="video-embed">
                <div class="video-container">
                    <iframe 
                        src="https://www.youtube.com/embed/{{ $video->video_id }}?start=9&rel=0&modestbranding=1&showinfo=0" 
                        title="{{ $video->title }}" 
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                        allowfullscreen
                        style="background: url('{{ $video->thumbnail_url ?? 'https://img.youtube.com/vi/' . $video->video_id . '/maxresdefault.jpg' }}') center/cover no-repeat;">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</section>
@endif

<style>
    /* Base Styles */
    .video-section {
        background: #fff;
        padding: 20px 0 60px 0;
    }
    
    .section-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }
    
    .section-content {
        max-width: 800px;
        margin: 0 auto;
        text-align: center;
    }
    
    .section-title {
        font-size: 1.1em;
        color: #5a5a5a;
        text-transform: uppercase;
        letter-spacing: 1.5px;
        margin-bottom: 30px;
    }
    
    .section-divider {
        width: 60px;
        height: 3px;
        background-color: #e67e22;
        margin: 0 auto 20px;
    }
    
    .section-description {
        color: #666;
        font-size: 1.1rem;
        line-height: 1.6;
        margin: 0 auto 30px;
        max-width: 700px;
        padding: 0 15px;
    }
    
    .video-embed {
        position: relative;
        width: 100%;
        max-width: 800px;
        margin: 0 auto;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }
    
    .video-container {
        position: relative;
        padding-top: 56.25%; /* 16:9 Aspect Ratio */
    }
    
    .video-container iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border: none;
    }
    
    /* Tablet Styles */
    @media (max-width: 1024px) {
        .section-title {
            font-size: 1em;
        }
        
        .section-description {
            font-size: 1.05rem;
            padding: 0 10px;
        }
    }
    
    /* Mobile Styles */
    @media (max-width: 768px) {
        .video-section {
            padding: 0px 0;
        }
        
        .section-container {
            padding: 0 15px;
        }
        
        .section-title {
            font-size: 0.95em;
            margin-bottom: 20px;
            letter-spacing: 1px;
        }
        
        .section-divider {
            width: 50px;
            height: 2px;
            margin-bottom: 15px;
        }
        
        .section-description {
            font-size: 1rem;
            margin-bottom: 25px;
        .font_2 {
            font-size: 0.9em !important;
            margin-bottom: 10px !important;
        }
        
        .comp-m1oqn1o8 {
            font-size: 0.95rem;
            padding: 0 5px;
            margin-bottom: 20px;
        }
        
        .comp-m1oqyvln1 {
            margin: 0 auto 15px;
            width: 50px;
            height: 2px;
        }
        
        .comp-video-embed {
            width: 45%;
            max-width: 300px;
            margin: 0 auto;
        }
    }
</style>
