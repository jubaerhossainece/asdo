
/*--------------------------*/
/*------Mail box manipulation----*/
/*--------------------------*///mark as read
function mark_read(){
    let values = [];

    $('.mail-checkbox input[type="checkbox"]').each(function(){
        let $this = $(this);
        if ($this.is(':checked')) {
            values.push($this.val());
        }
    });
    
    $('#mail-array').val(values);
    if(values == ''){
        return false;
    }else{
        $("#action-form").attr("action", "/asdo/inbox/read");
        $('#action-form').submit();
    }
}

//mark as unread
function mark_unread(){
    let values = [];

    $('.mail-checkbox input[type="checkbox"]').each(function(){
        let $this = $(this);
        if ($this.is(':checked')) {
            values.push($this.val());
        }
    });
    
    $('#mail-array').val(values);
    if(values == ''){
        return false;
    }else{
        $("#action-form").attr("action", "/asdo/inbox/unread");
        $('#action-form').submit();
    }
}

//mark as starred
function mark_star(){
    let values = [];

    $('.mail-checkbox input[type="checkbox"]').each(function(){
        let $this = $(this);
        if ($this.is(':checked')) {
            values.push($this.val());
        }
    });
    
    $('#mail-array').val(values);
    if(values == ''){
        return false;
    }else{
        $("#action-form").attr("action", "/asdo/inbox/important");
        $('#action-form').submit();
    }
}

//mark as important
function mark_important(){
    let values = [];

    $('.mail-checkbox input[type="checkbox"]').each(function(){
        let $this = $(this);
        if ($this.is(':checked')) {
            values.push($this.val());
        }
    });
    
    $('#mail-array').val(values);
    if(values == ''){
        return false;
    }else{
        $("#action-form").attr("action", "/asdo/inbox/important");
        $('#action-form').submit();
    }
}

// send to trash box
function make_trash(){
    let values = [];

    $('.mail-checkbox input[type="checkbox"]').each(function(){
        let $this = $(this);
        if ($this.is(':checked')) {
            values.push($this.val());
        }
    });
    
    $('#mail-array').val(values);
    if(values == ''){
        return false;
    }else{
        $("#action-form").attr("action", "/asdo/contacts/1");
        $("#mail-method").val('DELETE');
        $('#action-form').submit();
    }
}