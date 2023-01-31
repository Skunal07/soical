<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
  <?= $this->Html->link(__('Anime World'), ['controller' => 'users', 'action' => 'index'], ['class' => 'nav-link']); ?>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
            <?= $this->Html->link(__('Home'), ['controller' => 'users', 'action' => 'index'], ['class' => 'nav-link']); ?>
        </li>
        <li class="nav-item">
            <?= $this->Html->link(__('List Users'), ['controller' => 'users', 'action' => 'listuser'], ['class' => 'nav-link']); ?>
        </li>
      </ul>
      <ul class="navbar-nav">
      <li class="nav-item">
           
      <?= $this->Html->link(__('logout'), ['controller' => 'users', 'action' => 'logout'], ['class' => 'nav-link']); ?>
        </li>
      </ul>
      
    </div>
  </div>
</nav>