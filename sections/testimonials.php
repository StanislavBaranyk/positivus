<section class="testimonials">
    <div class="container">
        <div class="section-items">
            <div class="section-introduction">
                <h2 class="section-header">Testimonials</h2>
                <p class="section-paragraph">Hear from Our Satisfied Clients: Read Our Testimonials to Learn More about
                    Our Digital Marketing Services</p>
            </div>

            <div class="testimonials-slider">
                <div id="testimonials-slider">

                    <?php

                    $testimonialsSliderItems = [
                        [
                            'description' => '"We have been working with Positivus for the past year and
                                    have
                                    seen a significant increase
                                    in website traffic and leads as a result of their efforts. The team is professional,
                                    responsive, and truly cares about the success of our business. We highly recommend
                                    Positivus
                                    to any company looking to grow their online presence."',

                            'name' => 'John Smith',
                            'specialty' => 'Marketing Director at XYZ Corp',
                        ],
                        [
                            'description' => '"We have been working with Positivus for the past year and
                                    have
                                    seen a significant increase
                                    in website traffic and leads as a result of their efforts. The team is professional,
                                    responsive, and truly cares about the success of our business. We highly recommend
                                    Positivus
                                    to any company looking to grow their online presence."',

                            'name' => 'John Smith',
                            'specialty' => 'Marketing Director at XYZ Corp',
                        ],
                        [
                            'description' => '"We have been working with Positivus for the past year and
                                    have
                                    seen a significant increase
                                    in website traffic and leads as a result of their efforts. The team is professional,
                                    responsive, and truly cares about the success of our business. We highly recommend
                                    Positivus
                                    to any company looking to grow their online presence."',

                            'name' => 'John Smith',
                            'specialty' => 'Marketing Director at XYZ Corp',
                        ],
                        [
                            'description' => '"We have been working with Positivus for the past year and
                                    have
                                    seen a significant increase
                                    in website traffic and leads as a result of their efforts. The team is professional,
                                    responsive, and truly cares about the success of our business. We highly recommend
                                    Positivus
                                    to any company looking to grow their online presence."',

                            'name' => 'John Smith',
                            'specialty' => 'Marketing Director at XYZ Corp',
                        ],
                        [
                            'description' => '"We have been working with Positivus for the past year and
                                    have
                                    seen a significant increase
                                    in website traffic and leads as a result of their efforts. The team is professional,
                                    responsive, and truly cares about the success of our business. We highly recommend
                                    Positivus
                                    to any company looking to grow their online presence."',

                            'name' => 'John Smith',
                            'specialty' => 'Marketing Director at XYZ Corp',
                        ],
                    ];

                    foreach ($testimonialsSliderItems as $testimonialsSliderItem) {
                        echo '             
                    <div class="testimonials-slider-col">
                        <div class="testimonials-slider-content">
                            <div class="testimonials-slider-text">
                                <p class="section-paragraph">' . $testimonialsSliderItem['description'] . '</p>

                                <img src="images/testimonials/polugon.png">
                            </div>
                            <div class="testimonials-slider-person">
                                <h4>' . $testimonialsSliderItem['name'] . '</h4>
                                <p class="section-paragraph">' . $testimonialsSliderItem['specialty'] . '</p>
                            </div>
                        </div>
                    </div>';
                    }


                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
