$().ready(function() {
/*---------------------------------------------------------------------------------*/
    /* START FUNCTION */
    
    /**
    * checking filesize
    */
    function filesize(input_id,size)
    {
    //check whether browser fully supports all File API
        if (window.File && window.FileReader && window.FileList && window.Blob)
        {
            //get the file size and file type from file input field
            var fsize = $('#'+input_id)[0].files[0].size;
            var ftype = $('#'+input_id)[0].files[0].type;
            var fname = $('#'+input_id)[0].files[0].name;
            
            if(fsize>size) //do something if file size more than 1 mb (1048576)
            {
                return false;
            }else{
                return true;
            }
        }else{
            alert("Please upgrade your browser, because your current browser lacks some new features we need!");
            return false;
        }
    }
    
    /* END FUNCTION */
/*---------------------------------------------------------------------------------*/
/*---------------------------------------------------------------------------------*/
    /* START ADD JQUERY VALIDATE METHOD */
    
    /**
    * add checking filesize jquery validate method
    *
    * param option = { input_id: string input id, size: integer 1 mb = 1048576 }
    * */
    jQuery.validator.addMethod("check_filesize", function(value, element, options) {
        if ($('#'+options.input_id).get(0).files.length === 0) {
            return true;
        }
        else{
            return filesize(options.input_id,options.size);
        }
        
    }, "");
    
    /**
    * add checking password jquery validate method
    * check password match in database using session user_id
    *
    * param option = { input_id : string input id }
    * */
    jQuery.validator.addMethod("check_password", function(value, element, options) {
        var data_input = $('#'+options.input_id).val();
        var data = { 'password' : data_input };
        
        var check = $.ajax({
                        url: site_url+"user/check_password",
                        type: "POST",
                        async: false,
                        dataType:  'json',
                        data: data,
                        success: function(output) {}
                    }).responseJSON;
        
        if(check.status){
            return true;
        }else{
            return false;
        }
    }, "");
    
    /* END ADD JQUERY VALIDATE METHOD */
/*---------------------------------------------------------------------------------*/
/*---------------------------------------------------------------------------------*/
    /* START BUTTON TRIGGER */
    
    /**
    * checking checkbox
    */
    $(".checkbox-delete").change(function() {
        var checkbox = document.getElementsByClassName("checkbox-delete");
        if(this.checked) {
            $(".button-add").hide();
            $(".button-delete").show();
        }
        else
        {
            var count_checkbox = 0;
            for(var i = 0; i < checkbox.length; i++)
            {
                if(checkbox[i].checked)
                {
                   count_checkbox++;
                }
            }
            if(count_checkbox == 0){
                $(".button-add").show();
                $(".button-delete").hide();
            }
        }
    });
    
    /**
    * check all checkboxes
    */
    $("#check-all").click(function(event) {
        checkbox = document.getElementsByClassName("checkbox-delete");
        
        var count_checkbox = 0;
        for(var i = 0; i < checkbox.length; i++)
        {
            if(checkbox[i].checked)
            {
               count_checkbox++;
            }
        }
        
        if(count_checkbox == checkbox.length) {
            for(var i = 0; i < checkbox.length; i++) {
                checkbox[i].checked = false;
            }
            
            $(".button-add").show();
            $(".button-delete").hide();
        }else{
            for(var i = 0; i < checkbox.length; i++) {
                checkbox[i].checked = true;
            }
            
            $(".button-add").hide();
            $(".button-delete").show();
        }
        
    });
    
    /**
    * Modals trigger
    * */
    $('.form-alert').leanModal();
    
    /* END BUTTON TRIGGER */
/*---------------------------------------------------------------------------------*/

});