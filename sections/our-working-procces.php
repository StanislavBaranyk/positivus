<section class="our-working-process">
    <div class="container">

        <div class="section-items">
            <div class="section-introduction">
                <div class="tel-header">
                    <h2 class="section-header">Our Working</h2>
                    <h2 class="section-header">Process</h2>
                </div>

                <h2 class="computer-header section-header">Our Working Process</h2>

                <p class="section-paragraph">Step-by-Step Guide to Achieving Your Business Goals</p>
            </div>

            <div class="accordion" id="accordionExample">


                <?php

                $accordionText = "
                            <strong>This is the first item's accordion body.</strong> It is shown by default, until the
                            collapse plugin adds the appropriate classes that we use to style each element. These
                            classes control the overall appearance, as well as the showing and hiding via CSS
                            transitions. You can modify any of this with custom CSS or overriding our default variables.
                            It's also worth noting that just about any HTML can go within the
                            <code>.accordion-body</code>, though the transition does limit overflow.
                        ";

                $accordionItems = [
                    [
                        'number' => '01',
                        'header' => 'Consultation',
                        'accordionText' => $accordionText,
                    ],
                    [
                        'number' => '02',
                        'header' => 'Research and Strategy Development',
                        'accordionText' => $accordionText,
                    ],
                    [
                        'number' => '03',
                        'header' => 'Implementation',
                        'accordionText' => $accordionText,
                    ],
                    [
                        'number' => '04',
                        'header' => 'Monitoring and Optimization',
                        'accordionText' => $accordionText,
                    ],
                    [
                        'number' => '05',
                        'header' => 'Reporting and Communication',
                        'accordionText' => $accordionText,
                    ],
                    [
                        'number' => '06',
                        'header' => 'Continual Improvement',
                        'accordionText' => $accordionText,
                    ],
                ];
                foreach ($accordionItems as $key => $accordionItem) {


                    echo '<div id="accordion-item' . $key . '" class="accordion-item">
                <h2 class="accordion-header" id="heading' . $key . '">
                    <button id="btn-item' . $key . '" class="accordion-button collapsed" type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#collapse' . $key . '" aria-expanded="true" aria-controls="collapse' . $key . '">
                        <span>' . $accordionItem['number'] . '</span>
                        <span>' . $accordionItem['header'] . '</span>
                    </button>
                </h2>
                <div id="collapse' . $key . '" class="accordion-collapse collapse" aria-labelledby="heading' . $key . '"
                     data-bs-parent="#accordionExample">
                    <div class="accordion-body">' . $accordionItem['accordionText'] . '</div>
                </div>
            </div>';
                }


                ?>

            </div>


        </div>

    </div>
</section>

