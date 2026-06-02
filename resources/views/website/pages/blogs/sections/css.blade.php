<!-- Breadcrumb Section -->
<style>
    html {
        scroll-behavior: smooth;
    }
    .section-header {
        background: linear-gradient(135deg, #1a2a3a 0%, #2c3e50 100%) !important;
        color: white !important;
        padding: 180px 0 40px 0 !important;
        /*margin-top: 120px;*/
        position: relative !important;
        overflow: hidden !important;
    }

    .section-header::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(rgb(48 48 48 / 85%), rgba(0, 40, 104, 0.9)),
            url('https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&auto=format&fit=crop&w=1950&q=80');
        background-size: cover;
        background-position: center;
        z-index: 0;
    }
    
    .section-content {
        padding: 80px 0;
    }
    
    .section-title h2 {
        font-weight: 700;
        color: #fff;
        font-size: 2.5rem;
        margin-bottom: 20px;
        position: relative;
    }
    
    .section-title h2::after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 50%;
        transform: translateX(-50%);
        width: 80px;
        height: 4px;
        background: #ff9800;
        border-radius: 2px;
        margin-bottom: 10px;
    }
    
    .section-title p {
        font-size: 1.1rem;
        max-width: 700px;
        margin: 30px auto 0;
        color: #fff;
        opacity: 0.9;
    }
</style>
<style>
    :root {
        --primary-dark: #0A2647;
        --primary-blue: #1B4A7A;
        --accent-orange: #ff9800;
        --accent-gold: #E9C46A;
        --light-bg: #F8FAFE;
        --gray-light: #EFF3F8;
        --text-dark: #1E2A3E;
        --text-muted: #5A6E85;
        --card-shadow: 0 20px 35px -12px rgba(0, 0, 0, 0.07), 0 1px 2px rgba(0, 0, 0, 0.02);
        --card-hover-shadow: 0 25px 40px -14px rgba(0, 0, 0, 0.12);
    }
    /* hero section */
    .blog-hero {
        background: linear-gradient(135deg, #F1F5F9 0%, #FFFFFF 100%);
        padding: 3rem 0 2.5rem 0;
        border-bottom: 1px solid rgba(0, 0, 0, 0.03);
    }

    .blog-hero h1 {
        font-size: 2.7rem;
        font-weight: 800;
        color: var(--primary-dark);
    }

    .blog-hero .lead {
        color: var(--text-muted);
        font-size: 1.2rem;
    }

    /* blog cards */
    .blog-card {
        border: none;
        border-radius: 1.25rem;
        background: white;
        transition: transform 0.25s ease, box-shadow 0.3s ease;
        box-shadow: var(--card-shadow);
        overflow: hidden;
        height: 100%;
    }

    .blog-card:hover {
        transform: translateY(-6px);
        box-shadow: var(--card-hover-shadow);
    }

    .blog-card-img {
        height: 210px;
        object-fit: cover;
        width: 100%;
        transition: transform 0.4s ease;
    }

    .blog-card:hover .blog-card-img {
        transform: scale(1.02);
    }

    .card-img-overlay-wrapper {
        position: relative;
        overflow: hidden;
    }

    .blog-category {
        position: absolute;
        top: 16px;
        left: 16px;
        background: var(--accent-orange);
        padding: 0.3rem 0.9rem;
        font-size: 0.7rem;
        font-weight: 700;
        border-radius: 40px;
        color: #1E2A3E;
        letter-spacing: 0.3px;
        backdrop-filter: blur(2px);
        z-index: 2;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
    }

    .blog-card-body {
        padding: 1.5rem 1.3rem 1.3rem;
    }

    .blog-meta {
        font-size: 0.8rem;
        color: var(--text-muted);
        margin-bottom: 0.6rem;
        display: flex;
        align-items: center;
        gap: 0.8rem;
    }

    .blog-meta i {
        margin-right: 0.3rem;
        font-size: 0.75rem;
        color: var(--primary-blue);
    }

    .blog-title {
        font-size: 1.3rem;
        font-weight: 700;
        margin-bottom: 0.75rem;
        line-height: 1.3;
    }

    .blog-title a {
        text-decoration: none;
        color: var(--primary-dark);
        transition: color 0.2s;
    }

    .blog-title a:hover {
        color: var(--primary-blue);
    }

    .blog-excerpt {
        color: var(--text-muted);
        font-size: 0.9rem;
        margin-bottom: 1.2rem;
        line-height: 1.45;
    }

    .read-more-link {
        font-weight: 600;
        font-size: 0.85rem;
        text-decoration: none;
        color: var(--primary-blue);
        display: inline-flex;
        align-items: center;
        gap: 6px;
        transition: gap 0.2s;
    }

    .read-more-link i {
        font-size: 0.75rem;
        transition: transform 0.2s;
    }

    .read-more-link:hover {
        gap: 10px;
        color: var(--accent-orange);
    }

    /* sidebar widgets */
    .sidebar-widget {
        background: white;
        border-radius: 1.25rem;
        padding: 1.5rem;
        box-shadow: var(--card-shadow);
        margin-bottom: 1.8rem;
        border: 1px solid rgba(0, 0, 0, 0.02);
    }

    .widget-title {
        font-size: 1.25rem;
        font-weight: 700;
        margin-bottom: 1.2rem;
        padding-bottom: 0.6rem;
        border-bottom: 2px solid var(--accent-orange);
        display: inline-block;
        color: var(--primary-dark);
    }

    .search-input-group {
        border-radius: 60px;
        overflow: hidden;
        border: 1px solid #e2e8f0;
        transition: all 0.2s;
    }

    .search-input-group:focus-within {
        border-color: var(--primary-blue);
        box-shadow: 0 0 0 3px rgba(27, 74, 122, 0.1);
    }

    .search-input-group input {
        border: none;
        padding: 0.7rem 1rem;
        font-size: 0.9rem;
    }

    .search-btn {
        background: var(--primary-dark);
        color: white;
        border: none;
        padding: 0 1.2rem;
        transition: 0.2s;
    }

    .search-btn:hover {
        background: var(--primary-blue);
    }

    .category-list {
        list-style: none;
        padding-left: 0;
        margin: 0;
    }

    .category-list li {
        margin-bottom: 0.75rem;
        display: flex;
        align-items: center;
        justify-content: space-between;
        border-bottom: 1px dashed #edf2f7;
        padding-bottom: 0.65rem;
    }

    .category-list a {
        text-decoration: none;
        color: var(--text-dark);
        font-weight: 500;
        transition: 0.2s;
    }

    .category-list a:hover {
        color: var(--primary-blue);
        padding-left: 5px;
    }

    .category-list span {
        background: var(--gray-light);
        padding: 0.2rem 0.6rem;
        border-radius: 40px;
        font-size: 0.7rem;
        font-weight: 600;
        color: var(--primary-dark);
    }

    .recent-post-item {
        display: flex;
        gap: 0.8rem;
        margin-bottom: 1.2rem;
        align-items: center;
    }

    .recent-img {
        width: 55px;
        height: 55px !important;
        object-fit: cover;
        border-radius: 12px;
        background: #f0f2f5;
    }

    .recent-content h6 {
        font-size: 0.85rem;
        font-weight: 700;
        margin-bottom: 0.2rem;
    }

    .recent-content a {
        text-decoration: none;
        color: var(--text-dark);
    }

    .recent-content a:hover {
        color: var(--primary-blue);
    }

    .recent-date {
        font-size: 0.7rem;
        color: var(--text-muted);
    }

    .newsletter-form .form-control {
        border-radius: 50px;
        border: 1px solid #e2e8f0;
        padding: 0.6rem 1rem;
    }

    .btn-subscribe {
        background: var(--primary-dark);
        border: none;
        border-radius: 50px;
        padding: 0.6rem 1rem;
        font-weight: 600;
        width: 100%;
        transition: 0.2s;
    }

    .btn-subscribe:hover {
        background: var(--primary-blue);
    }

    /* pagination */
    .pagination-custom .page-link {
        color: var(--primary-dark);
        border-radius: 50px;
        margin: 0 5px;
        border: none;
        background: #F1F5F9;
        font-weight: 500;
        padding: 0.5rem 1rem;
    }

    .pagination-custom .page-link:hover {
        background: var(--primary-blue);
        color: white;
    }

    .pagination-custom .active .page-link {
        background: var(--primary-dark);
        color: white;
    }
    @media (max-width: 768px) {
        .blog-hero h1 {
            font-size: 2rem;
        }

        .blog-card-img {
            height: 180px;
        }

        .sidebar-widget {
            margin-top: 1rem;
        }
    }
    
    .blog-content {
      font-size: 1.05rem;
      line-height: 1.7;
      color: #2c3e4e;
    }
    .blog-content h2 {
      font-size: 1.8rem;
      margin: 1.8rem 0 1rem;
      font-weight: 700;
    }
    .blog-content h3 {
      font-size: 1.4rem;
      margin: 1.5rem 0 0.8rem;
      font-weight: 600;
    }
    .blog-content p {
      margin-bottom: 1.3rem;
    }
    .blog-content blockquote {
      border-left: 4px solid var(--accent-orange);
      background: #F8FAFE;
      padding: 1rem 1.8rem;
      font-style: italic;
      margin: 1.8rem 0;
      border-radius: 0 20px 20px 0;
      font-weight: 500;
      color: var(--primary-dark);
    }
    .author-box {
      background: var(--light-bg);
      border-radius: 1.25rem;
      padding: 1.5rem;
      margin: 2rem 0;
      display: flex;
      gap: 1.2rem;
      flex-wrap: wrap;
      align-items: center;
    }
    .author-avatar {
      width: 80px;
      height: 80px;
      border-radius: 50%;
      object-fit: cover;
    }
    .comment-area .form-control,
    .comment-area .form-select {
        border-radius: 1rem;
        border: 1px solid #dee2e6;
        padding: 0.7rem 1rem;
    }

    .comment-item {
        display: flex;
        gap: 1rem;
        margin-bottom: 1.8rem;
    }

    .comment-avatar {
        width: 48px;
        height: 48px;
        border-radius: 50%;
        background: var(--gray-light);
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
        color: var(--primary-blue);
    }
    
    .toc-list {
        list-style: none;
        padding-left: 0;
    }
    
    .toc-list li {
        margin-bottom: 8px;
    }
    
    .toc-list a {
        text-decoration: none;
        color: #333;
    }
    
    .toc-list a:hover {
        color: #007bff;
    }
    figure.media {
        position: relative;
        padding-bottom: 56.25%;
        height: 0;
        overflow: hidden;
        margin: 20px 0;
    }
    
    figure.media iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border: 0;
        border-radius: 10px;
    }
    .footer-cta-container {
        max-width: 900px;
        margin: 60px auto;
        text-align: center;
    }

    .footer-cta-container .cta-card {
        background: #2c5d8a;
        color: #fff;
        border-radius: 20px;
        padding: 50px 40px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    }

    .footer-cta-container .cta-card h2 {
        font-weight: 700;
        font-size: 32px;
        margin-bottom: 20px;
        color: #fff;
    }

    .footer-cta-container .cta-card p {
        font-size: 17px;
        color: #d6e6f5;
        line-height: 1.7;
        margin-bottom: 30px;
    }

    .footer-cta-container .cta-btn {
        background: #f4a024;
        color: #fff;
        padding: 14px 30px;
        border-radius: 10px;
        font-weight: 600;
        text-decoration: none;
        display: inline-block;
        transition: 0.3s;
    }

    .footer-cta-container .cta-btn:hover {
        background: #e18d10;
        color: #fff;
    }

    .footer-cta-container .cta-links {
        margin-top: 25px;
        font-size: 14px;
        color: #bcd4ea;
    }

    .footer-cta-container .cta-links a {
        color: #bcd4ea;
        text-decoration: none;
    }

    .footer-cta-container .cta-links a:hover {
        text-decoration: underline;
    }

    .footer-cta-container .share-section {
        margin-top: 40px;
    }

    .footer-cta-container .share-section p {
        color: #555;
        margin-bottom: 15px;
    }

    .footer-cta-container .social-icons a {
        display: inline-block;
        margin: 5px;
        width: 40px;
        height: 40px;
        line-height: 40px;
        border-radius: 50%;
        background: #fff;
        color: #2c5d8a;
        border: 1px solid #ddd;
        transition: 0.3s;
    }

    .footer-cta-container .social-icons a:hover {
        background: #2c5d8a;
        color: #fff;
    }

    .footer-cta-container .copyright {
        margin-top: 20px;
        font-size: 13px;
        color: #888;
    }
    .blog-content table {
        width: 100%;
        border-collapse: collapse;
        margin: 20px 0;
        font-size: 15px;
        border: 1px solid #ddd; /* ✅ table border */
        border-radius: 8px;
        overflow: hidden;
    }
    
    /* ✅ First row as header (even without thead) */
    .blog-content table tr:first-child {
        background: #2c5d8a;
        color: #fff;
    }
    
    /* Header cells */
    .blog-content table th {
        padding: 12px;
        text-align: left;
        font-weight: 600;
        border: 1px solid #ddd; /* ✅ border */
    }
    
    /* Body cells */
    .blog-content table td {
        padding: 10px;
        border: 1px solid #ddd; /* ✅ full border instead of bottom only */
    }
    
    /* Zebra Rows (skip first row) */
    .blog-content table tr:nth-child(even):not(:first-child) {
        background: #f8f9fa;
    }
    
    /* Hover Effect */
    .blog-content table tr:hover:not(:first-child) {
        background: #eef5fb;
    }
    
    /* Responsive Scroll */
    .blog-content {
        overflow-x: auto;
    }
</style>