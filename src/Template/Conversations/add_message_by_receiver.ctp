<div class="container">
<div class="row">
<div class="col-md-12">

<div class="box">
<div class="box-header">
    <span class="title">Message to <?= $receiver->username ?></span>
</div>

<div class="box-content">

<?= $this->Form->create('Conversation', array("class" => "form-horizontal fill-up validatable")); ?>

<div class="row">

    <div class="col-lg-6">

        <ul class="padded separate-sections">
            <li class="input">
                <textarea name="content" placeholder="Type message here ;)" rows="6"></textarea>
            </li>


        </ul>
    </div>
</div>
<div class="form-actions">
    <button type="submit" class="btn btn-default">Send</button>
</div>
</form>

</div>
</div>

</div>
</div>
</div>
