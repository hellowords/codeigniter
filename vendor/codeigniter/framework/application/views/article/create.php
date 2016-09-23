<h2><?php echo $title;?></h2>
<?php echo validation_errors(); ?>
<?php echo form_open('article/create'); ?>
<label for="title">Title</label>
<input type="input" name="title" /><br>
<label for="text">Content</label>
<textarea name="content" id="text" cols="30" rows="10"></textarea>
<input type="submit" name="submit" value="Create">
</form>