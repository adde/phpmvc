<hr>

<h2 id="comments">Comments</h2>

<?php if (is_array($comments)) : ?>
  <div class='comments'>
    <?php foreach ($comments as $id => $comment) : ?>
      <div class="comment">
        <h3><a href="<?=$comment['web']?>"><?=$comment['name']?></a> - <small><?=date('Y-m-d H:i:s', $comment['timestamp'])?></small></h3>
        <p><?=$comment['content']?></p>
        <a class="btn-edit" title="Edit comment" href="<?=$this->url->create('')?>?id=<?=$id?>&amp;page=<?=$this->request->getCurrentUrl()?>#comments"><i class="fa fa-edit"></i></a>
        <a class="btn-delete" title="Delete comment" href="<?=$this->url->create('comment/remove?id=' . $id)?>&amp;page=<?=$this->request->getCurrentUrl()?>"><i class="fa fa-times"></i></a>
      </div>
    <?php endforeach; ?>
  </div>
<?php endif; ?>