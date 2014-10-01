<div class='comment-form'>
    <form method=post>
        <input type=hidden name="redirect" value="<?=$this->request->getCurrentUrl()?>">
        <input type=hidden name="page" value="<?=$this->request->getCurrentUrl()?>">
        <fieldset>
        <legend>Leave a comment</legend>
        <p><label>Comment:<br/><textarea name='content'><?=$content?></textarea></label></p>
        <p><label>Name:<br/><input type='text' name='name' value='<?=$name?>'/></label></p>
        <p><label>Homepage:<br/><input type='text' name='web' value='<?=$web?>'/></label></p>
        <p><label>Email:<br/><input type='text' name='mail' value='<?=$mail?>'/></label></p>
        <p class=buttons>
            <?php if(!isset($id)): ?>
                <input type='submit' name='doCreate' value='Comment' onClick="this.form.action = '<?=$this->url->create('comment/add')?>'"/>
                <input type='reset' value='Reset'/>
                <input type='submit' name='doRemoveAll' value='Remove all' onClick="this.form.action = '<?=$this->url->create('comment/remove-all')?>'"/>
            <?php else: ?>
                <input type='submit' name='doEdit' value='Edit comment' onClick="this.form.action = '<?=$this->url->create('comment/edit')?>?id=<?=$id?>&amp;page=<?=$page?>'"/>
            <?php endif; ?>
        </p>
        <output><?=$output?></output>
        </fieldset>
    </form>
</div>
