<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
               {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }
            body {
                font-family: Arial, sans-serif;
                line-height: 1.6;
                color: #333;
            }
            header {
                background: #333;
                color: #fff;
                padding: 1rem 0;
            }
            nav ul {
                list-style: none;
                display: flex;
                justify-content: center;
            }
            nav ul li {
                margin: 0 1rem;
            }
            nav ul li a {
                color: #fff;
                text-decoration: none;
            }
            .hero-section {
                background: url('path-to-your-image.jpg') no-repeat center center/cover;
                color: #black;
                height: 20vh;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                text-align: center;
                padding: 0 2rem;
            }
            .cta-button {
                background: #f04e31;
                color: #fff;
                padding: 0.5rem 1rem;
                text-decoration: none;
                margin-top: 1rem;
                border-radius: 5px;
            }
            section {
                padding: 2rem;
                text-align: center;
            }
            footer {
                background: #333;
                color: #fff;
                text-align: center;
                padding: 1rem 0;
            }
        </style> 
   
    <header>
        <nav>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section id="home" class="hero-section">
            <h1>Welcome to GrannyLink</h1>
            <p>Teach, Connect, Inspire.</p>
            <p>Join our program and make a meaningful impact by connecting with children eager to learn English. </p>
        </section>
        <section id="register">
            <h2>Register Here!!</h2>
                @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
                @endif
        </section>
        <section id="about">
            <h2>About Us</h2>
            <p>Become an International Granny.</p>
            <p>Share your wisdom, create international friendships, and experience the joy of teaching the next generation—all from the comfort of your home.</p>
        </section>
        <section id="services">
            <h2>What is GrannyLink</h2>
            <div class="service">
                <h3>1. Impactful Teaching.</h3>
                <p>Help children improve their English skills, making a significant difference in their education and future opportunities..</p>
            </div>
            <div class="service">
                <h3>2. Easy to Use.</h3>
                <p>Our user-friendly platform ensures seamless connections with children, even if you're not familiar with technology.</p>
            </div>
            <div class="service">
                <h3>3. Flexible Schedule.</h3>
                <p>Participate at your convenience, fitting sessions into your schedule without any stress.</p>
            </div>
        </section>
        
        <section id="howtostart">
            <h2>Steps to Get Started</h2>
            <div class="service">
                <h3>1. Sign Up.</h3>
                <p>Join our community by providing your name, available time, and what you like to talk about..</p>
            </div>
            <div class="service">
                <h3>2. Find a Match.</h3>
                <p>We will pick you the best partner based on the information you provided.</p>
            </div>
            <div class="service">
                <h3>3. Enjoy the Conversation!</h3>
                <p>I will gather necessary personal details for registration.</p>
            </div>
        </section>
        <section id="register">
            <h2>Register Here!!</h2>
                @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
                @endif
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Your Company Name. All rights reserved.</p>
    </footer>
    </body>
</html>
