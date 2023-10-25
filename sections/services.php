<section class="services">
    <div class="container">

        <div class="section-items">
            <div class="section-introduction">
                <h2 class="section-header">Services</h2>
                <p class="section-paragraph">At our digital marketing agency, we offer a range of services to help
                    businesses grow and succeed
                    online. These services include:</p>
            </div>

            <div class="services-cards">

                <?php

                $cardsItems = [
                    [
                        'class' => 'gray',
                        'headerOne' => 'Search engine',
                        'headerTwo' => 'optimization',
                        'picture' => 'cards-picture1.png',
                        'btn' => '<svg xmlns="http://www.w3.org/2000/svg" width="41" height="41" viewBox="0 0 41 41" fill="none">
                                    <circle cx="20.5" cy="20.5" r="20.5" fill="black"></circle>
                                    <path d="M11.2501 24.7009C10.5326 25.1151 10.2868 26.0325 10.701 26.75C11.1152 27.4674 12.0326 27.7132 12.7501 27.299L11.2501 24.7009ZM30.7695 16.3882C30.9839 15.588 30.509 14.7655 29.7088 14.5511L16.6688 11.057C15.8686 10.8426 15.0461 11.3175 14.8317 12.1177C14.6173 12.9179 15.0921 13.7404 15.8923 13.9548L27.4835 17.0606L24.3776 28.6517C24.1632 29.4519 24.6381 30.2744 25.4383 30.4889C26.2385 30.7033 27.061 30.2284 27.2754 29.4282L30.7695 16.3882ZM12.7501 27.299L30.0706 17.299L28.5706 14.7009L11.2501 24.7009L12.7501 27.299Z" fill="#B9FF66"></path>
                                </svg>',
                    ],
                    [
                        'class' => 'green',
                        'headerOne' => 'Pay-per-click',
                        'headerTwo' => 'advertising',
                        'picture' => 'cards-picture2.png',
                        'btn' => '<svg xmlns="http://www.w3.org/2000/svg" width="41" height="41" viewBox="0 0 41 41" fill="none">
                                    <circle cx="20.5" cy="20.5" r="20.5" fill="black"></circle>
                                    <path d="M11.2501 24.7009C10.5326 25.1151 10.2868 26.0325 10.701 26.75C11.1152 27.4674 12.0326 27.7132 12.7501 27.299L11.2501 24.7009ZM30.7695 16.3882C30.9839 15.588 30.509 14.7655 29.7088 14.5511L16.6688 11.057C15.8686 10.8426 15.0461 11.3175 14.8317 12.1177C14.6173 12.9179 15.0921 13.7404 15.8923 13.9548L27.4835 17.0606L24.3776 28.6517C24.1632 29.4519 24.6381 30.2744 25.4383 30.4889C26.2385 30.7033 27.061 30.2284 27.2754 29.4282L30.7695 16.3882ZM12.7501 27.299L30.0706 17.299L28.5706 14.7009L11.2501 24.7009L12.7501 27.299Z" fill="#B9FF66"></path>
                                </svg>',
                    ],
                    [
                        'class' => 'black',
                        'headerOne' => 'Social Media',
                        'headerTwo' => 'Marketing',
                        'picture' => 'cards-picture3.png',
                        'btn' => '<svg xmlns="http://www.w3.org/2000/svg" width="41" height="42" viewBox="0 0 41 42" fill="none">
                                    <circle cx="20.5" cy="20.9707" r="20.5" fill="white"></circle>
                                    <path d="M11.2501 25.1716C10.5326 25.5858 10.2868 26.5032 10.701 27.2207C11.1152 27.9381 12.0326 28.1839 12.7501 27.7697L11.2501 25.1716ZM30.7695 16.8589C30.9839 16.0587 30.509 15.2362 29.7088 15.0218L16.6688 11.5277C15.8686 11.3133 15.0461 11.7882 14.8317 12.5884C14.6173 13.3886 15.0921 14.2111 15.8923 14.4255L27.4835 17.5313L24.3776 29.1224C24.1632 29.9226 24.6381 30.7451 25.4383 30.9596C26.2385 31.174 27.061 30.6991 27.2754 29.8989L30.7695 16.8589ZM12.7501 27.7697L30.0706 17.7697L28.5706 15.1716L11.2501 25.1716L12.7501 27.7697Z" fill="black"></path>
                                </svg>',
                    ],
                    [
                        'class' => 'gray',
                        'headerOne' => 'Email',
                        'headerTwo' => 'Marketing',
                        'picture' => 'cards-picture4.png',
                        'btn' => '<svg xmlns="http://www.w3.org/2000/svg" width="41" height="41" viewBox="0 0 41 41" fill="none">
                                    <circle cx="20.5" cy="20.5" r="20.5" fill="black"></circle>
                                    <path d="M11.2501 24.7009C10.5326 25.1151 10.2868 26.0325 10.701 26.75C11.1152 27.4674 12.0326 27.7132 12.7501 27.299L11.2501 24.7009ZM30.7695 16.3882C30.9839 15.588 30.509 14.7655 29.7088 14.5511L16.6688 11.057C15.8686 10.8426 15.0461 11.3175 14.8317 12.1177C14.6173 12.9179 15.0921 13.7404 15.8923 13.9548L27.4835 17.0606L24.3776 28.6517C24.1632 29.4519 24.6381 30.2744 25.4383 30.4889C26.2385 30.7033 27.061 30.2284 27.2754 29.4282L30.7695 16.3882ZM12.7501 27.299L30.0706 17.299L28.5706 14.7009L11.2501 24.7009L12.7501 27.299Z" fill="#B9FF66"></path>
                                </svg>',
                    ],
                    [
                        'class' => 'green',
                        'headerOne' => 'Content',
                        'headerTwo' => 'Creation',
                        'picture' => 'cards-picture5.png',
                        'btn' => '<svg xmlns="http://www.w3.org/2000/svg" width="41" height="42" viewBox="0 0 41 42" fill="none">
                                    <circle cx="20.5" cy="20.9706" r="20.5" fill="black"></circle>
                                    <path d="M11.2501 25.1715C10.5326 25.5857 10.2868 26.5031 10.701 27.2205C11.1152 27.938 12.0326 28.1838 12.7501 27.7696L11.2501 25.1715ZM30.7695 16.8588C30.9839 16.0586 30.509 15.2361 29.7088 15.0217L16.6688 11.5276C15.8686 11.3132 15.0461 11.7881 14.8317 12.5883C14.6173 13.3885 15.0921 14.211 15.8923 14.4254L27.4835 17.5312L24.3776 29.1223C24.1632 29.9225 24.6381 30.745 25.4383 30.9594C26.2385 31.1738 27.061 30.699 27.2754 29.8988L30.7695 16.8588ZM12.7501 27.7696L30.0706 17.7696L28.5706 15.1715L11.2501 25.1715L12.7501 27.7696Z" fill="#B9FF66"></path>
                                </svg>',
                    ],
                    [
                        'class' => 'black',
                        'headerOne' => 'Analytics and',
                        'headerTwo' => 'Tracking',
                        'picture' => 'cards-picture6.png',
                        'btn' => '<svg xmlns="http://www.w3.org/2000/svg" width="41" height="42" viewBox="0 0 41 42" fill="none">
                                    <circle cx="20.5" cy="20.9707" r="20.5" fill="white"></circle>
                                    <path d="M11.2501 25.1716C10.5326 25.5858 10.2868 26.5032 10.701 27.2207C11.1152 27.9381 12.0326 28.1839 12.7501 27.7697L11.2501 25.1716ZM30.7695 16.8589C30.9839 16.0587 30.509 15.2362 29.7088 15.0218L16.6688 11.5277C15.8686 11.3133 15.0461 11.7882 14.8317 12.5884C14.6173 13.3886 15.0921 14.2111 15.8923 14.4255L27.4835 17.5313L24.3776 29.1224C24.1632 29.9226 24.6381 30.7451 25.4383 30.9596C26.2385 31.174 27.061 30.6991 27.2754 29.8989L30.7695 16.8589ZM12.7501 27.7697L30.0706 17.7697L28.5706 15.1716L11.2501 25.1716L12.7501 27.7697Z" fill="black"></path>
                                </svg>',
                    ],
                ];


                foreach ($cardsItems as $cardsItem) {
                    echo '              
                <div class="cards-item ' . $cardsItem['class'] . '">
                    <div class="card-box">
                        <div class="card-introduction">
                            <h4>' . $cardsItem['headerOne'] . '</h4>
                            <h4>' . $cardsItem['headerTwo'] . '</h4>
                        </div>

                        <div class="card-bottom">
                            <div class="card-btn">
                                <svg xmlns="http://www.w3.org/2000/svg" width="41" height="41" viewBox="0 0 41 41"
                                     fill="none">
                                    <circle cx="20.5" cy="20.5" r="20.5" fill="black"/>
                                    <path d="M11.2501 24.7009C10.5326 25.1151 10.2868 26.0325 10.701 26.75C11.1152 27.4674 12.0326 27.7132 12.7501 27.299L11.2501 24.7009ZM30.7695 16.3882C30.9839 15.588 30.509 14.7655 29.7088 14.5511L16.6688 11.057C15.8686 10.8426 15.0461 11.3175 14.8317 12.1177C14.6173 12.9179 15.0921 13.7404 15.8923 13.9548L27.4835 17.0606L24.3776 28.6517C24.1632 29.4519 24.6381 30.2744 25.4383 30.4889C26.2385 30.7033 27.061 30.2284 27.2754 29.4282L30.7695 16.3882ZM12.7501 27.299L30.0706 17.299L28.5706 14.7009L11.2501 24.7009L12.7501 27.299Z"
                                          fill="#B9FF66"/>
                                </svg>
                                <p class="section-paragraph">Learn more</p>
                            </div>
                            <div class="card-picture">
                                <img src="images/services-cards-picture/' . $cardsItem['picture'] . '">
                            </div>
                        </div>
                    </div>
                </div>';
                }
                ?>

            </div>
        </div>

    </div>
</section>

