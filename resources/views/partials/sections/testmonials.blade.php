@php
use App\Models\SectionTen;
$testimonials = SectionTen::where('is_active', true)->orderBy('order')->get();
@endphp

@if($testimonials->count() > 0)
<section id="comp-m098b90j" tabindex="-1"
data-block-level-container="Section"
class="xuzjBY comp-m098b90j wixui-section"
data-testid="section-container">
    <div class="testimonial-section">
        <h2 class="section-title">HERE'S WHAT OUR CLIENTS HAVE TO SAY</h2>

        <div class="testimonial-card">
            <button class="nav-button left">
                &#x2190;
            </button>

            <div class="testimonial-content-wrapper">
                <div class="client-image-container">
                    <div class="client-image">
                        <img src="{{ asset('storage/' . $testimonials[0]->image) }}" alt="{{ $testimonials[0]->name }}">
                    </div>
                </div>

                <div class="testimonial-text-container">
                    <p class="testimonial-text">
                        <span class="quote-mark">&ldquo;</span>
                        {{ $testimonials[0]->testimonial }}
                    </p>
                    <p class="client-name">
                        {{ $testimonials[0]->name }}, {{ $testimonials[0]->location }}
                    </p>
                </div>
            </div>

            <button class="nav-button right">
                &#x2192;
            </button>
        </div>

        @if($testimonials->count() > 1)
            <div class="pagination-dots">
                @foreach($testimonials as $index => $testimonial)
                    <span class="dot {{ $index === 0 ? 'active' : '' }}" data-index="{{ $index }}"></span>
                @endforeach
            </div>
        @endif
    </div>
</section>
@endif
<style>
            .testimonial-section {
            padding: 30px 15px;
            text-align: center;
        }
        #comp-m098b90j{
            background-color: rgb(245, 241, 238) !important;
        }

        .section-title {
            font-size: 1.1em;
            color: #5a5a5a;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            margin-bottom: 30px;
        }

        .testimonial-card {
            max-width: 900px;
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.08);
            display: flex;
            align-items: center;
            padding: 20px;
            position: relative;
            flex-direction: column; /* Default: column for small screens */
        }

        .nav-button {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background-color: rgba(255, 255, 255, 0.8);
            border: none;
            border-radius: 50%;
            width: 35px;
            height: 35px;
            font-size: 1.3em;
            color: #888;
            cursor: pointer;
            display: flex;
            justify-content: center;
            align-items: center;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            z-index: 1;
        }
        .nav-button.left { left: 5px; }
        .nav-button.right { right: 5px; }

        .testimonial-content-wrapper {
            display: flex;
            flex-direction: column; /* Default: column for small screens */
            align-items: center; /* Center horizontally for column layout */
            flex-grow: 1;
            padding: 0 10px;
        }

        .client-image-container {
            flex-shrink: 0;
            margin-bottom: 20px; /* Space below image in column layout */
            text-align: center;
        }

        .client-image {
            width: 100px;
            height: 100px;
            background-color: #e0e0e0;
            border-radius: 50%;
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
            border: 3px solid #fff;
            box-shadow: 0 0 0 3px #f5deb3;
        }
        .client-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .testimonial-text-container {
            text-align: center; /* Center text in column layout */
            flex-grow: 1;
        }

        .testimonial-text {
            font-family: 'Dancing Script', cursive;
            font-size: 1.5em;
            line-height: 1.5;
            color: #333;
            margin-bottom: 15px;
        }

        .quote-mark {
            font-size: 2.2em;
            color: #f5deb3;
            line-height: 0.5;
            vertical-align: middle;
            margin-right: 5px;
            display: inline-block;
        }

        .client-name {
            font-size: 0.8em;
            color: #888;
            text-transform: uppercase;
            letter-spacing: 0.8px;
            margin-top: 15px;
        }

        .pagination-dots {
            margin-top: 20px;
            display: flex;
            justify-content: center;
            gap: 8px;
        }

        .dot {
            width: 8px;
            height: 8px;
            background-color: #e0e0e0;
            border-radius: 50%;
            display: inline-block;
        }
        .dot.active {
            background-color: #f5deb3;
        }

        /* --- Media Query for Larger Screens (e.g., 768px and up) --- */
        @media (min-width: 768px) {
            .testimonial-section {
                padding: 50px 20px; /* Restore larger padding */
            }
            .section-title {
                font-size: 1.2em;
                margin-bottom: 40px;
            }
            .testimonial-card {
                flex-direction: row; /* Change to row for horizontal layout */
                padding: 30px;
            }
            .nav-button {
                width: 40px; /* Restore larger button size */
                height: 40px;
                font-size: 1.5em;
             
            }
            .testimonial-content-wrapper {
                flex-direction: row; /* Change to row for horizontal layout */
                align-items: flex-start; /* Align items to top */
                padding: 0 60px; /* Restore larger padding */
            }
            .client-image-container {
                margin-bottom: 0; /* Remove bottom margin */
                margin-right: 30px; /* Add right margin for row layout */
            }
            .client-image {
                width: 100px; /* Restore larger image size */
                height: 100px;
            }
            .testimonial-text-container {
                text-align: left; /* Align text to left */
            }
            .testimonial-text {
                font-size: 1.8em; /* Restore larger font size */
            }
            .quote-mark {
                font-size: 3em; /* Restore larger quote mark size */
            }
            .client-name {
                font-size: 0.9em; /* Restore larger font size */
            }
            .pagination-dots {
                margin-top: 30px;
                gap: 10px;
            }
            .dot {
                width: 10px;
                height: 10px;
            }
        }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Testimonial data from PHP
    @php
    $testimonialData = $testimonials->map(function($item) {
        return [
            'text' => $item->testimonial,
            'name' => $item->name . ', ' . $item->location,
            'image' => asset('storage/' . $item->image)
        ];
    });
    @endphp
    const testimonials = @json($testimonialData);

    // DOM elements
    const testimonialText = document.querySelector('.testimonial-text');
    const clientName = document.querySelector('.client-name');
    const clientImage = document.querySelector('.client-image img');
    const dots = document.querySelectorAll('.dot');
    const prevBtn = document.querySelector('.nav-button.left');
    const nextBtn = document.querySelector('.nav-button.right');
    
    let currentIndex = 0;

    // Update testimonial
    function updateTestimonial(index) {
        // Add fade-out class
        document.querySelector('.testimonial-content-wrapper').style.opacity = '0';
        
        setTimeout(() => {
            testimonialText.innerHTML = `<span class="quote-mark">"</span>${testimonials[index].text}`;
            clientName.textContent = testimonials[index].name;
            clientImage.src = testimonials[index].image;
            
            // Update active dot
            dots.forEach((dot, i) => {
                dot.classList.toggle('active', i === index);
            });
            
            // Fade in
            document.querySelector('.testimonial-content-wrapper').style.opacity = '1';
        }, 150);
    }

    // Event listeners for navigation buttons
    prevBtn.addEventListener('click', () => {
        currentIndex = (currentIndex - 1 + testimonials.length) % testimonials.length;
        updateTestimonial(currentIndex);
    });

    nextBtn.addEventListener('click', () => {
        currentIndex = (currentIndex + 1) % testimonials.length;
        updateTestimonial(currentIndex);
    });

    // Event listeners for dots
    dots.forEach((dot, index) => {
        dot.addEventListener('click', () => {
            currentIndex = index;
            updateTestimonial(currentIndex);
        });
    });

    // Auto-rotate testimonials every 5 seconds
 

    // Pause auto-rotation on hover
  

   

    // Initialize first testimonial if there are any
    if (testimonials.length > 0) {
        updateTestimonial(currentIndex);
    }
});
</script>