<section class="team">
    <div class="container">
        <div class="section-items">
            <div class="section-introduction">
                <h2 class="section-header">Team</h2>
                <p class="section-paragraph">Meet the skilled and experienced team behind our successful digital
                    marketing strategies</p>
            </div>
            <div class="team-card">

                <?php

                $teamCardsContent = [

                    [
                        'picture' => 'team-card-picture1.png',
                        'name' => 'John Smith',
                        'specialty' => 'CEO and Founder',
                        'description' => '10+ years of experience in digital marketing. Expertise in SEO,
                            PPC,
                            and content strategy',
                    ],
                    [
                        'picture' => 'team-card-picture2.png',
                        'name' => 'Jane Doe',
                        'specialty' => 'Director of Operations',
                        'description' => '7+ years of experience in project management and team leadership.
                            Strong organizational and communication skills',
                    ],
                    [
                        'picture' => 'team-card-picture3.png',
                        'name' => 'Michael Brown',
                        'specialty' => 'Senior SEO Specialist',
                        'description' => '5+ years of experience in SEO and content creation. Proficient in
                            keyword research and on-page optimization',
                    ],
                    [
                        'picture' => 'team-card-picture4.png',
                        'name' => 'Emily Johnson',
                        'specialty' => 'PPC Manager',
                        'description' => '3+ years of experience in paid search advertising. Skilled in
                            campaign
                            management and performance analysis',
                    ],
                    [
                        'class' => 'last-remove',
                        'picture' => 'team-card-picture5.png',
                        'name' => 'Brian Williams',
                        'specialty' => 'Social Media Specialist',
                        'description' => '4+ years of experience in social media marketing. Proficient in
                            creating and scheduling content, analyzing metrics, and building engagement',
                    ],
                    [
                        'class' => 'last-remove',
                        'picture' => 'team-card-picture6.png',
                        'name' => 'Sarah Kim',
                        'specialty' => 'Content Creator',
                        'description' => '2+ years of experience in writing and editing
                            Skilled in creating compelling, SEO-optimized content for various industries',
                    ],

                ];

                foreach ($teamCardsContent as $teamCardContent) {

                    echo '            
                <div class="section-item ' . $teamCardContent['class'] . '">
                    <div class="team-card">
                        <div class="team-picture">
                        <img src="images/team-picture/' . $teamCardContent['picture'] . '">
                            <div class="team-name">
                                <h5>' . $teamCardContent['name'] . '</h5>
                                <p class="section-paragraph">' . $teamCardContent['specialty'] . '</p>
                            </div>
                        </div>
                        <button class="circle-black-btn" type="button">in</button>
                    </div>
                    <div class="team-text">
                        <p class="section-paragraph">' . $teamCardContent['description'] . '</p>
                    </div>
                </div>';

                }

                ?>
            </div>
        </div>

        <div class="section-btn">
            <button type="button">See all team</button>
        </div>
    </div>
</section>
