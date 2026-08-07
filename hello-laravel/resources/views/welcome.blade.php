<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            body {
                background-color: #0d0d0d;
                color: #ffffff;
                font-family: 'Segoe UI', sans-serif;
                min-height: 100vh;
                display: flex;
                flex-direction: column;
            }

            /* Top nav bar */
            nav {
                display: flex;
                align-items: center;
                justify-content: space-between;
                padding: 1.25rem 3rem;
                border-bottom: 1px solid #222;
            }

            .nav-brand {
                font-size: 0.9rem;
                font-weight: 500;
                color: #aaa;
                display: flex;
                align-items: center;
                gap: 0.5rem;
            }

            .nav-brand::before {
                content: '';
                display: inline-block;
                width: 8px;
                height: 8px;
                border-radius: 50%;
                background-color: #555;
            }

            .nav-links {
                display: flex;
                align-items: center;
                gap: 2rem;
                list-style: none;
            }

            .nav-links li a {
                color: #aaa;
                text-decoration: none;
                font-size: 0.85rem;
                transition: color 0.2s;
            }

            .nav-links li a:hover {
                color: #fff;
            }

            /* Main hero section */
            main {
                flex: 1;
                display: flex;
                align-items: center;
                justify-content: space-between;
                padding: 4rem 3rem;
                gap: 4rem;
            }

            /* Left side — student info */
            .info-section {
                flex: 1;
                max-width: 420px;
                padding-left: 3rem;
            }

            .student-label {
                font-size: 0.8rem;
                color: #888;
                letter-spacing: 0.12em;
                text-transform: uppercase;
                margin-bottom: 1.5rem;
            }

            .info-table {
                display: grid;
                grid-template-columns: auto 1fr;
                gap: 0.75rem 1.25rem;
                align-items: baseline;
            }

            .info-label {
                font-size: 0.8rem;
                color: #666;
                text-transform: uppercase;
                letter-spacing: 0.08em;
                white-space: nowrap;
            }

            .info-value {
                font-size: 1rem;
                color: #e8e8e8;
                font-weight: 500;
            }

            .info-value.name {
                font-size: 1.25rem;
                font-weight: 600;
                color: #ffffff;
            }
             

            .info-divider {
                grid-column: 1 / -1;
                height: 1px;
                background-color: #222;
                margin: 0.5rem 0;
            }

            .current-date {
                margin-top: 2rem;
                font-size: 0.8rem;
                color: #555;
                letter-spacing: 0.06em;
                text-transform: uppercase;
            }

            .current-date span {
                color: #888;
                font-weight: 500;
            }

            /* Right side — photo */
            .photo-section {
                flex-shrink: 0;
                width: 480px;
                display: flex;
                flex-direction: column;
                align-items: center;
                gap: 1rem;
                position: relative;
            }

            .photo-frame {
                width: 440px;
                height: 560px;
                border: 1px solid #2a2a2a;
                border-radius: 4px;
                background-color: #141414;
                display: flex;
                align-items: center;
                justify-content: center;
                position: relative;
                overflow: hidden;
            }

            .photo-placeholder-text {
                color: #333;
                font-size: 0.8rem;
                letter-spacing: 0.08em;
                text-transform: uppercase;
            }

            .photo-frame img {
                width: 100%;
                height: 100%;
                object-fit: cover;
                object-position: top center;
                position: relative;
                z-index: 1;
            }

            /* Decorative grid blocks (like in reference image) */
            .deco-blocks {
                position: absolute;
                top: 0;
                right: 0;
                width: 340px;
                height: 100%;
                pointer-events: none;
            }

            .deco-block {
                position: absolute;
                background-color: #1e1e1e;
                border-radius: 2px;
            }

            .deco-block:nth-child(1) { width: 50px; height: 50px; top: 10%; right: 20px; }
            .deco-block:nth-child(2) { width: 30px; height: 30px; top: 22%; right: 5px; }
            .deco-block:nth-child(3) { width: 40px; height: 40px; top: 60%; right: 10px; }
            .deco-block:nth-child(4) { width: 25px; height: 25px; bottom: 15%; right: 45px; }

            /* Grid overlay on the photo frame */
            .photo-frame::before {
                content: '';
                position: absolute;
                inset: 0;
                background-image:
                    linear-gradient(#1e1e1e 1px, transparent 1px),
                    linear-gradient(90deg, #1e1e1e 1px, transparent 1px);
                background-size: 30px 30px;
                opacity: 0.3;
            }
        </style>
    </head>
    <body>

        <nav>
            <div class="nav-brand">Zamuelle Timothy Lorenzo</div>
            <ul class="nav-links">
                <li><a href="#">Portfolio</a></li>
                <li><a href="#">About me</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">FAQ</a></li>
            </ul>
        </nav>

        <main>
            <!-- Left: Student Info -->
            <div class="info-section">
                <p class="student-label">Student Profile</p>

                <div class="info-table">
                    <span class="info-label">Name</span>
                    <span class="info-value name">Zamuelle Timothy Lorenzo</span>

                    <div class="info-divider"></div>

                    <span class="info-label">Student No.</span>
                    <span class="info-value">0124-0443</span>

                    <div class="info-divider"></div>

                    <span class="info-label">Course</span>
                    <span class="info-value">Bachelor of Science in Information Technology</span>

                    <div class="info-divider"></div>

                    <span class="info-label">Section</span>
                    <span class="info-value">BSIT 3D</span>

                    <div class="info-divider"></div>

                    <span class="info-label">Subject</span>
                    <span class="info-value">ITST 302 | Client-Server Technologies</span>
                </div>

                <div class="current-date">
                    <span>{{ now()->format('F j, Y') }}</span>
                </div>
            </div>

            <!-- Right: Photo placeholder -->
            <div class="photo-section">
                <div class="deco-blocks">
                    <div class="deco-block"></div>
                    <div class="deco-block"></div>
                    <div class="deco-block"></div>
                    <div class="deco-block"></div>
                </div>
                <div class="photo-frame">
                    <img src="{{ asset('my_pic.png') }}" alt="Zamuelle Timothy Lorenzo">
                </div>
            </div>
        </main>

    </body>
</html>