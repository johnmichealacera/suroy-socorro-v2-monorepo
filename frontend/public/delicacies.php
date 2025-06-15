<?php
// The Template and PageBuilder classes are already included by start_server.php
// Create page builder
$pageBuilder = new FlexiblePageBuilder();

// Page content
$content = '
    <!-- Blog Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-8">
                    <h2 class="mb-3">Socorro\'s Diverse Delicacies</h2>
                    <p>
                    Socorro is a vibrant municipality enriched by a blend of cultures and traditions, thanks to the diverse people who have settled here from various parts of the Philippines. This cultural diversity has given rise to a unique array of delicacies, some of which you might also recognize from other regions. Below, you\'ll find a list of these delightful treats, each accompanied by a brief description.
                    </p>              
                    <div class="row pb-3">
                        <div class="mb-4 pb-2">
                            <div class="blog-item">
                                <div class="position-relative">
                                    <img class="img-fluid w-100" src="public/img/delicacies/budbud-nilambiran.jpg" alt="">
                                    <div class="blog-date">
                                        <h6 class="font-weight-bold mb-n1">01</h6>
                                    </div>
                                </div>
                                <div class="bg-white p-4">
                                    <div class="d-flex mb-2">
                                        <div class="text-primary text-uppercase text-decoration-none">
                                            <span>Budbud Nilambiran</span>
                                        </div>
                                    </div>
                                    <div class="h5 m-0 text-decoration-none">Derived from the Visayan root word "lambid" or "tambid," meaning "to cross one over the other," Budbud Nilambiran is a delightful kakanin that showcases the art of braiding two types of budbud (sticky rice cakes). These two varieties are intricately crossed and twisted together to form a beautiful braid. The result is a uniquely sweet and flavorful treat, where the combination of the two kinds of budbud creates a distinctive and delicious taste experience.</div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-4 pb-2">
                            <div class="blog-item">
                                <div class="position-relative">
                                    <img class="img-fluid w-100" src="public/img/delicacies/harog.jpg" alt="">
                                    <div class="blog-date">
                                        <h6 class="font-weight-bold mb-n1">02</h6>
                                    </div>
                                </div>
                                <div class="bg-white p-4">
                                    <div class="d-flex mb-2">
                                        <div class="text-primary text-uppercase text-decoration-none">
                                            <span>Harog</span>
                                        </div>
                                    </div>
                                    <div class="h5 m-0 text-decoration-none">Harog is a delightful dessert soup that perfectly balances tradition and flavor. This luscious dish features glutinous rice cooked in rich coconut milk, combined with slices of sabá bananas, taro, ube, sweet potatoes, and other delectable ingredients. The result is a warm, comforting treat that\'s both hearty and sweet. In Socorro, we even celebrate the Harog Festival, an event dedicated to this beloved delicacy, highlighting its cultural significance and bringing the community together in joyous festivity.</div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-4 pb-2">
                            <div class="blog-item">
                                <div class="position-relative">
                                    <img class="img-fluid w-100" src="public/img/delicacies/lidgid.jpg" alt="">
                                    <div class="blog-date">
                                        <h6 class="font-weight-bold mb-n1">03</h6>
                                    </div>
                                </div>
                                <div class="bg-white p-4">
                                    <div class="d-flex mb-2">
                                        <div class="text-primary text-uppercase text-decoration-none">
                                            <span>Lidgid</span>
                                        </div>
                                    </div>
                                    <div class="h5 m-0 text-decoration-none">Lidgid is a delectable treat that captures the essence of our festive traditions. Made by wrapping grated cassava in banana leaves, this sweet delicacy is a must-have at gatherings and fiestas. The cassava is mixed with rich coconut milk and sugar, creating a creamy and delightful base. For an extra layer of indulgence, try it with a "Latik" filling - a delicious blend of caramelized coconut milk and grated coconut that turns wonderfully brown and sticky. Whether enjoyed plain or with Latik, Lidgid is sure to satisfy your sweet tooth and leave you craving more.</div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-4 pb-2">
                            <div class="blog-item">
                                <div class="position-relative">
                                    <img class="img-fluid w-100" src="public/img/delicacies/pan-de-loli.jpg" alt="">
                                    <div class="blog-date">
                                        <h6 class="font-weight-bold mb-n1">04</h6>
                                    </div>
                                </div>
                                <div class="bg-white p-4">
                                    <div class="d-flex mb-2">
                                        <div class="text-primary text-uppercase text-decoration-none">
                                            <span>Pan de Loli</span>
                                        </div>
                                    </div>
                                    <div class="h5 m-0 text-decoration-none">Pan de Loli, affectionately known as Pan de Totoy due to its unique shape, is a beloved local staple in Socorro. This soft, richly flavored bread has been satisfying the appetites of Socorronhons for generations. Not only is it delicious, but it\'s also affordable, making it the go-to snack for residents. Its hearty nature means that just one piece can keep you full for hours. Perfect for any time of day, Pan de Loli is a tasty and practical choice for everyone.</div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-4 pb-2">
                            <div class="blog-item">
                                <div class="position-relative">
                                    <img class="img-fluid w-100" src="public/img/delicacies/pawa.jpg" alt="">
                                    <div class="blog-date">
                                        <h6 class="font-weight-bold mb-n1">05</h6>
                                    </div>
                                </div>
                                <div class="bg-white p-4">
                                    <div class="d-flex mb-2">
                                        <div class="text-primary text-uppercase text-decoration-none">
                                            <span>Pawa</span>
                                        </div>
                                    </div>
                                    <div class="h5 m-0 text-decoration-none">Pawa is a delightful sweet treat that blends glutinous rice, ground peanuts, and muscovado sugar into a delicious bite-sized snack. Its name, derived from the Chinese word "pau" or "bao," meaning "to wrap," perfectly describes this coin-sized delicacy. With its soft, mochi-like texture when warm, Pawa hides a sweet peanut filling that surprises and delights with every bite. Perfect as a dessert or a snack, this charming treat is a favorite for its unique combination of flavors and textures.</div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-4 pb-2">
                            <div class="blog-item">
                                <div class="position-relative">
                                    <img class="img-fluid w-100" src="public/img/delicacies/pinipig.jpg" alt="">
                                    <div class="blog-date">
                                        <h6 class="font-weight-bold mb-n1">06</h6>
                                    </div>
                                </div>
                                <div class="bg-white p-4">
                                    <div class="d-flex mb-2">
                                        <div class="text-primary text-uppercase text-decoration-none">
                                            <span>Pinipig</span>
                                        </div>
                                    </div>
                                    <div class="h5 m-0 text-decoration-none">Pinipig is a versatile and delightful Filipino treat made from immature glutinous rice grains, pounded flat and toasted to perfection. These crunchy green flakes are a beloved topping for a variety of desserts, adding a unique texture and flavor. Whether enjoyed plain, mixed into drinks, or transformed into delicious cakes, Pinipig brings a delightful crunch and a touch of tradition to every bite.</div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-4 pb-2">
                            <div class="blog-item">
                                <div class="position-relative">
                                    <img class="img-fluid w-100" src="public/img/delicacies/puto-calibre.jpg" alt="">
                                    <div class="blog-date">
                                        <h6 class="font-weight-bold mb-n1">07</h6>
                                    </div>
                                </div>
                                <div class="bg-white p-4">
                                    <div class="d-flex mb-2">
                                        <div class="text-primary text-uppercase text-decoration-none">
                                            <span>Puto Calibre</span>
                                        </div>
                                    </div>
                                    <div class="h5 m-0 text-decoration-none">Puto Calibre is a unique Socorronhon steamed cassava cake that sets itself apart from traditional puto made with rice. This delightful kakanin, or rice cake, can be enjoyed on its own or as a perfect complement to savory dishes like dinuguan. Puto Calibre not only satisfies your taste buds with its rich flavor but also keeps you full for hours. It\'s a local favorite that\'s as hearty as it is delicious!</div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-4 pb-2">
                            <div class="blog-item">
                                <div class="position-relative">
                                    <img class="img-fluid w-100" src="public/img/delicacies/salbaro.avif" alt="">
                                    <div class="blog-date">
                                        <h6 class="font-weight-bold mb-n1">08</h6>
                                    </div>
                                </div>
                                <div class="bg-white p-4">
                                    <div class="d-flex mb-2">
                                        <div class="text-primary text-uppercase text-decoration-none">
                                            <span>Salvaro</span>
                                        </div>
                                    </div>
                                    <div class="h5 m-0 text-decoration-none">Salvaro is a beloved traditional Filipino treat, a disc-shaped wafer made from ground cassava. This thin, crispy biscuit is crafted from enriched wheat flour, shredded coconut, sugar, shortening, and sodium bicarbonate. Topped with delicious latik, Salvaro offers a crunchy, tasty, and utterly irresistible texture that will keep you coming back for more. Indulge in the delightful crunch and savor the flavors of this classic Filipino delicacy!</div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-4 pb-2">
                            <div class="blog-item">
                                <div class="position-relative">
                                    <img class="img-fluid w-100" src="public/img/delicacies/sayongsong.jpg" alt="">
                                    <div class="blog-date">
                                        <h6 class="font-weight-bold mb-n1">09</h6>
                                    </div>
                                </div>
                                <div class="bg-white p-4">
                                    <div class="d-flex mb-2">
                                        <div class="text-primary text-uppercase text-decoration-none">
                                            <span>Sayongsong</span>
                                        </div>
                                    </div>
                                    <div class="h5 m-0 text-decoration-none">Sayongsong is a beloved delicacy from Surigao, known for its unique flavor and presentation. This traditional "kakanin" is wrapped in banana leaves and resembles the color and consistency of "puto" or rice cake. Made with glutinous rice, brown sugar, calamansi juice, roasted peanuts, and coconut milk, Sayongsong offers a delightful blend of sweet and tangy flavors. Unwrap the banana leaves to reveal this irresistible treat that captures the essence of Filipino culinary tradition.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    
                <div class="col-lg-4 mt-5 mt-lg-0">
                    <div class="d-flex flex-column text-center bg-white mb-5 py-5 px-4">
                        <p>A delicacy is a rare food item that is considered highly desirable, sophisticated, or peculiarly distinctive within a given culture or region.</p>
                    </div>
    
                    <!-- Explore More-->
                     <?php include_once("explore-more.php"); ?>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->
';

// A complex page with multiple sections
$options = [
    'includes' => [
        ['file' => 'includes/header-section.php', 'data' => [
            'headerTitle' => 'Delicacies',
            'breadcrumbItems' => [
                ["text" => "Home", "url" => "/"],
                ["text" => "Delicacies", "url" => null]
            ]
        ]],
        ['content' => $content],
        ['file' => 'includes/footer.php']
    ],
];

// Build the page
$pageBuilder->buildCustomPage($content, 'My Page', 'Description here', $options);
?>