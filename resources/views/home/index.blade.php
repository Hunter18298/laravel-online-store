@extends('layouts.app')
@section('title', $viewData['title'])
@section('content')
    <main>
        <div class="container">
            <section id="norm" class="cover-sect">
                <div class="title-text">
                    <h1>Wolves</h1>
                    <p>~ THE BEST CLOTHING STANDARD ~</p>
                </div>
                <div class="box-feature">
                    <img class="cover-image"
                        src="https://img.freepik.com/free-photo/clothing-rack-with-floral-hawaiian-shirts-hangers-hat_23-2149366018.jpg?w=1380&t=st=1685808663~exp=1685809263~hmac=d0593308565eccfb898953da3846804d69dd11b96d2f294ffd3064509e9ffe42"
                        alt="Living room sample" />
                </div>
            </section>

            <!--       ........ -->
            <section id="story" class="story-sect">
                <div class="section-text">
                    <h2>Our Story</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                        et dolore magna aliqua
                        <br><br>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua.<br><br>We
                        decided to curate interior design modern trends, inspirations, tips and tricks from the vast
                        interior collective to help you bring your home to life.
                    </p>
                </div>
                <div class="box-feature">
                    <img
                        src="https://img.freepik.com/free-photo/full-shot-woman-online-fashion-shopping_23-2150460085.jpg?w=1380&t=st=1685808701~exp=1685809301~hmac=8d71387479bc0a2c52545063c5c7f46f3b0b9bf75838ff5d432888002c391e08" />
                </div>
            </section>

            <!--       ........ -->
            {{-- <section id="designs" class="samples">
                <div class="section-text">
                    <h2>Featured</h2>
                    <p>Take a look at some of our featured picks that have made editorial debuts</p>
                </div>
                <div class="featured">
                    <div class="cont">
                        <figure>
                            <img src="https://images2.imgbox.com/78/40/AXaX0dGj_o.jpg" alt="modern style living room">
                            <figcaption>
                                <a
                                    href="https://pixabay.com/users/jarmoluk-143740/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=2094702">Image
                                    by Michal Jarmoluk from Pixabay</a>
                            </figcaption>
                        </figure>
                    </div>

                    <div class="cont">
                        <figure>
                            <img src="https://images2.imgbox.com/61/65/spezPzqR_o.jpg"
                                alt="Grey sofa in minimalist living room">
                            <figcaption>
                                <a
                                    href="https://pixabay.com/users/StockSnap-894430/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=2593570">Image
                                    by StockSnap from Pixabay</a>
                            </figcaption>
                        </figure>
                    </div>

                    <div class="cont">
                        <figure>
                            <img src="https://images2.imgbox.com/08/37/9tQMXva6_o.jpg" alt="Living Room Modern Interior">
                            <figcaption>
                                <a
                                    href="https://pixabay.com/users/miapirttila-4257077/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=1978362">Image
                                    by miapirttila from Pixabay</a>
                            </figcaption>
                        </figure>
                    </div>

                </div>
                <div class="video-section">
                    <iframe id="video" src="https://player.vimeo.com/video/323262733" width="640" height="360"
                        frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                </div>
            </section> --}}


            <!--       ........ -->
            <section id="contact" class="contact-section">
                <div class="section-text">
                    <h2>Get in touch</h2>
                    <p>We would love to hear from you! <br><br>If you would like to receive our monthly catalogue subscribe
                        by filling in the form with your name and email address</p>
                </div>
                <div class="contact-info">
                    <div class="form-box">
                        <form id="form" class="contact-form" action="https://www.freecodecamp.com/email-submit">
                            <label for="name" class="form-entry">Name <br>
                                <input name="name" id="name" type="text" class="txt-box"
                                    placeholder="&nbsp&nbsp;Enter name" required><br>
                            </label>
                            <label for="email" class="form-entry">Email <br>
                                <input name="email" id="email" type="email" class="txt-box"
                                    placeholder="&nbsp&nbsp;Enter email" required><br>
                            </label>
                            <label for="message" class="form-entry">Message<br>
                                <textarea name="message" id="message" type="textarea" class="txt-box" placeholder="&nbsp;Optional"></textarea><br>
                            </label><br>
                            <input class="btn" id="submit" type="submit" value="Submit">
                        </form>
                    </div>
                </div>

            </section>
        </div>

    </main>
    <footer class="footer-section">
        <div class="footer-info">
            <ul style="list-style:none;">
                <li><span>Privacy</span></li>
                <li><span>Terms</span></li>
                <li><span>Contact</span></li>
            </ul>
        </div>
        <span class="personal-info">Created by Wolves<br></span>
        <span>Copyright 2019</span>
    </footer>
@endsection
