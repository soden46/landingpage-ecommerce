<header class="header_section_text bg-dark">
    <div class="container">
        <!-- Header Text Section -->
        <div class="header_text d-flex justify-content-between align-items-center">
            <div class="left-info">
                <span><i class="fa fa-map-marker" aria-hidden="true"></i> Jl. Contoh No. 123, Kota</span> |
                <span><i class="fa fa-clock-o" aria-hidden="true"></i> 08:00 - 17:00</span>
            </div>
            <div class="right-info">
                <span><i class="fa fa-phone" aria-hidden="true"></i> +62 812 3456 7890</span> |
                <span class="text-black"><i class="fa fa-instagram" aria-hidden="true"></i> <a class="text-black"
                        href="https://instagram.com/yourprofile" target="_blank">Instagram</a></span> |
                <span class="text-black"><i class="fa fa-user" aria-hidden="true"></i> <a class="text-black"
                        href="daftar_member.html">Daftar Member</a></span>
            </div>
        </div>
    </div>
</header>
<header class="header_section">
    <div class="container">
        <!-- Navbar Section -->
        <nav class="navbar navbar-expand-lg custom_nav-container">
            <a class="navbar-brand" href="index.html"><img width="250" src="images/logo.png" alt="#" /></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class=""> </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button"
                            aria-haspopup="true" aria-expanded="true"> <span class="nav-label">Pages <span
                                    class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="about.html">About</a></li>
                            <li><a href="testimonial.html">Testimonial</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="product.html">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="blog_list.html">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('show_cart') }}">Cart</a>
                    </li>
                    <form class="form-inline">
                        <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </button>
                    </form>
                </ul>
            </div>
        </nav>
    </div>
</header>
