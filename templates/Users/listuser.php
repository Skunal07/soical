<?= $this->Html->css('listuser', ['block' => 'css']); ?>
<div class="container">
    <div class="section ourTeam">
        <header class="text-center">
            <h2>Meet <strong>Our Team</strong></h2>
        </header>
        <div class="row">
            <?php foreach ($users as $user) : ?>
            <div class="col-xs-6 col-sm-4 col-md-3 i">
                <div class="c text-center">
                    <div class="wrap">
                        <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="#" width="270" height="270" class="img-responsive">
                        <div class="info">
                            <h3 class="name">John Doe</h3>
                            <h4 class="position">Chief Executive Officer</h4>
                        </div>
                    </div>
                    <div class="more">
                        <p>Ut sed consectetur ligula. Aenean id nibh accumsan, pre tium nulla in, lacinia aecenas mollis. Sed mauris at sollicitudin. Etiam maximus mauris vel leo mattis, non venenatis magna finibus vestibulum.</p>
                        <div class="socials">
                            <a href="#" title="#" class="facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" title="#" class="twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" title="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                            <a href="#" title="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
              <?php endforeach; ?>
        </div>
    </div>
    </div>