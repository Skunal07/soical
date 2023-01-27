<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Post $post
 */
?>
<!-- <div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?php
            if ($post->user_id != null) {
                echo $this->Html->link(__('List Post'), ['controller' => 'users', 'action' => 'view', $post->user_id], ['class' => 'side-nav-item']);
            } else {
                echo  $this->Html->link(__('List Post'), ['controller' => 'users', 'action' => 'home'], ['class' => 'side-nav-item']);
            } ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="post view content">
            <h3><?= h($post->title) ?></h3>
            <table>
                <tr>
                    <th><?= __('Author Name') ?></th>
                    <td><?= h($post->user->username) ?></td>
                </tr>
                <tr>
                    <th><?= __('Title') ?></th>
                    <td><?= h($post->title) ?></td>
                </tr>
                <tr>
                    <th><?= __('Body') ?></th>
                    <td><?= h($post->subtitle) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created At') ?></th>
                    <td><?= h($post->date) ?></td>
                </tr>
            </table>
            <div class="related">
                <?php
                //  if (!empty($post->comment)) : 
                ?>
                <h4><?= __('Related Comment') ?></h4>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Comment') ?></th>
                            <th><?= __('Commented At') ?></th>
                            <?php if ($uid != null) { ?>
                                <th><?= __('Action') ?></th>
                            <?php } ?>
                        </tr>
                        <div class="comment form content">
                            <?= $this->Form->create($comment) ?>
                            <fieldset>
                                Type your Comment here
                                <?php
                                echo $this->Form->control('comment', array('label' => false, 'type' => 'text'));
                                ?>
                                <button type="submit" class="fa-solid fa-arrow-right"></button>
                            </fieldset>
                            <?= $this->Form->end() ?>
                        </div>
                        <?php foreach ($comments as $comment) : ?>
                            <tr>
                                <td><?= h($comment->comment) ?></td>
                                <td><?= h($comment->user->username) ?></td>
                                <td><?= @h($comment->date) ?></td>
                                <?php if ($uid != null) { ?>
                                    <td class="actions">
                                        <?= $this->Form->postLink(__('Delete'), ['action' => 'commentdelete', $comment->id, $post->id, $post->user_id], ['confirm' => __('Are you sure you want to delete ?', $comment->id)]) ?>
                                    </td>
                                <?php } ?>

                            </tr>
                        <?php endforeach; ?>
                    </table>
                </div>


            </div>
        </div>
    </div>
</div> -->
<div class="container mt-5 mb-5">
    <div class="row d-flex align-items-center justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="d-flex justify-content-between p-2 px-3">
                    <div class="d-flex flex-row align-items-center">
                        <?= $this->Html->image($post->user->image, array('class' => 'd-block ui-w-40 rounded-circle')); ?>
                        <!-- <img src="https://i.imgur.com/UXdKE3o.jpg" width="50" class="rounded-circle"> -->
                        <div class="d-flex flex-column ml-2">
                            <h4 class="text-primary"><?= $post->user->username ?></h4>
                        </div>
                    </div>
                    <div class="d-flex flex-row mt-1 ellipsis"><i class="fa fa-ellipsis-h"></i> </div>
                </div>
                <h4><?= $post->title ?></h4>
                <?= $this->Html->image($post->image, array('class' => 'img-fluid')); ?>
                <div class="p-2">
                    <p class="text-justify"><?= $post->subtitle ?></p>
                    <hr>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex flex-row icons d-flex align-items-center">
                        <i class="fa fa-thumbs-up"></i>
                        </div>
                    </div>
                    <hr>
                    <div class="comments">
                        <div>

                            <?= $this->Form->create($comments) ?>
                            <?php
                        echo $this->Form->control('comment', array('label' => false, 'type' => 'text'));
                        ?>
                        <button type="submit" class="fa-solid fa-arrow-right"></button>
                        <?= $this->Form->end() ?>
                        </div>
                        <?php foreach ($comments as $comment) : ?>
                            <div class="d-flex flex-row mb-2">
                                <?= $this->Html->image($comment->user->image, array('class' => 'd-block ui-w-40 rounded-circle')); ?>
                                <div class="d-flex flex-column ml-2">
                                    <span class="name"><?= h($comment->user->username) ?></span>
                                    <h5 class="text-bold"><?= h($comment->comment) ?></h5>
                                </div>
                                
                                        <?= $this->Form->postLink(__('Delete'), ['action' => 'commentdelete', $comment->id,$post->id], ['confirm' => __('Are you sure you want to delete ?', $comment->id)]) ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->Html->css('viewpost', ['block' => 'css']); ?>