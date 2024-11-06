<style>
    .hyundai-news-grid {
        --primary-color: #002c5f;
        --secondary-color: #e63312;
        --text-gray: #666;
        --light-gray: #f5f5f5;
        padding: 2rem;
    }

    .hyundai-news-grid .news-container {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        /* Cố định 4 cột */
        gap: 1.5rem;
        max-width: 1400px;
        margin: 0 auto;
    }

    .hyundai-news-grid .news-item {
        background: white;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        height: 100%;
    }

    .hyundai-news-grid .news-item:hover {
        transform: translateY(-5px);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
    }

    .hyundai-news-grid .news-image-wrapper {
        position: relative;
        padding-top: 66.67%;
        /* 3:2 Aspect Ratio */
        overflow: hidden;
    }

    .hyundai-news-grid .news-image {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: fill;
        transition: transform 0.5s ease;
    }

    .hyundai-news-grid .news-item:hover .news-image {
        transform: scale(1.05);
    }

    .hyundai-news-grid .news-date {
        position: absolute;
        top: 0.75rem;
        left: 0.75rem;
        background: rgba(0, 0, 0, 0.7);
        color: white;
        padding: 0.35rem 0.75rem;
        border-radius: 4px;
        font-size: 0.75rem;
        font-weight: 500;
    }

    .hyundai-news-grid .news-content {
        padding: 1.25rem;
        display: flex;
        flex-direction: column;
        height: calc(100% - 66.67%);
        /* Chiều cao còn lại sau ảnh */
    }

    .hyundai-news-grid .news-title {
        font-size: 1.1rem;
        font-weight: 600;
        color: var(--primary-color);
        margin-bottom: 0.75rem;
        line-height: 1.4;
    }

    .hyundai-news-grid .news-description {
        color: var(--text-gray);
        font-size: 1.3rem;
        line-height: 1.5;
        margin-bottom: 0;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
        flex-grow: 1;
    }

    .hyundai-news-grid .news-link {
        text-decoration: none;
        color: inherit;
        display: block;
        height: 100%;
    }

    .hyundai-news-grid .news-link:hover .news-title {
        color: var(--secondary-color);
    }

    /* Responsive */
    @media (max-width: 1200px) {
        .hyundai-news-grid .news-container {
            grid-template-columns: repeat(3, 1fr);
        }
    }

    @media (max-width: 992px) {
        .hyundai-news-grid .news-container {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 576px) {
        .hyundai-news-grid .news-container {
            grid-template-columns: 1fr;
        }

        .hyundai-news-grid {
            padding: 1rem;
        }

        .hyundai-news-grid .news-content {
            padding: 1rem;
        }
    }
</style>

<div class="hyundai-news-grid">
    <div class="news-container">
        @foreach ($news as $new)
            <article class="news-item">
                <a href="{{ route('news.detail', $new->alias) }}" class="news-link">
                    <div class="news-image-wrapper">
                        <img class="news-image lazy" data-src="{{ $new->images }}"
                            src="wp-content/themes/hyundaihaiphong/includes/img/pixel.gif" alt="{{ $new->description }}">
                        @if (isset($new->created_at))
                            <div class="news-date">
                                {{ date('d/m/Y', strtotime($new->created_at)) }}
                            </div>
                        @endif
                    </div>
                    <div class="news-content">
                        <h3 class="news-title">{{ $new->title }}</h3>
                        <p class="news-description">{{ $new->description }}</p>
                    </div>
                </a>
            </article>
        @endforeach
    </div>
</div>
