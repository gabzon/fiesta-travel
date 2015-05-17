<br>
<div class="ui page grid">
    <div class="column">
        <form type="post" action="" id="newRequest" class="ui form">

            <label for="name">Name:</label>
            <input name="name" type="text" />

            <label for="email">Email:</label>
            <input name="email" type="text" />

            <label for="phone">Phone:</label>
            <input name="phone" type="text" />

            <input name="departure" id="departure" type="text" class="datepicker" placeholder="<?php _e('Departure date','sage'); ?>">

            <input name="return" id="return" type="text" class="datepicker" placeholder="<?php _e('Return date','sage'); ?>">

            <br><br>
            <input type="hidden" name="action" value="requestQuote"/>
            <input type="submit" class="ui button">
        </form>
        <br/><br/>
        <div id="feedback"></div>
        <br/><br/>

    </div>
</div>
