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
                   <?= $this->Html->image($user->image, array('width' => '250px','height'=>'300px'))?>
                        <!-- <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="#" width="270" height="270" class="img-responsive"> -->
                        <div class="info">
                            <h3 class="name"><?= $user->username ?></h3>
                            <h4 class="position">Suggested for you</h4>
                        </div>
                    </div>
                    <div class="more">
                    <?= $this->Html->link(__('View profile'), ['action' => 'userprofile', $user->id], ['class' => 'btn btn-success']); ?>
                    </div>
                </div>
            </div>
              <?php endforeach; ?>
        </div>
    </div>
    </div>