<template>
    <div class="contact-form">

        <!-- Note :
           - You can modify the font style and form style to suit your website.
           - Code lines with comments ���Do not remove this code���  are required for the form to work properly, make sure that you do not remove these lines of code.
           - The Mandatory check script can modified as to suit your business needs.
           - It is important that you test the modified form before going live.-->
        <div id='crmWebToEntityForm' style='width:600px;margin:auto;'>
            <form action='https://crm.zoho.com/crm/WebForm' name=WebForm1445520000007109087 method='POST'
                  onSubmit='javascript:document.charset="UTF-8"; return checkMandatory1445520000007109087()'
                  accept-charset='UTF-8'>
                <input type='text' style='display:none;' name='xnQsjsdp'
                       value='18557ce3eec53caca401e39d7b7744238ae2db7031fd9a0d57522db114f6695e'></input>
                <input type='hidden' name='zc_gad' id='zc_gad' value=''></input>
                <input type='text' style='display:none;' name='xmIwtLD'
                       value='2f60520cd0296b315ffa9f67127a814045f75d42639a7e0c1fbe24f6ad48612f'></input>
                <input type='text' style='display:none;' name='actionType' value='Q3VzdG9tTW9kdWxlNg=='></input>
                <input type='text' style='display:none;' name='returnURL'
                       value='http://organo.co.in/contact/thank-you'> </input><br></br>
                <!-- Do not remove this code. -->

                <div class="text-center"
                     style='width:600px;background-color:#ffffff;background-color:white;color:black'>

                    <div>
                        <div>
                            First Name<span style='color:red;'>*</span></div>
                        <div><input type='text' style='width:100%;box-sizing:border-box;'
                                    maxlength='120' name='NAME'/></div>

                    </div>
                    <div>
                        <div>
                            Last Name<span style='color:red;'>*</span></div>
                        <div><input type='text' style='width:100%;box-sizing:border-box;'
                                    maxlength='255' name='COBJ6CF3'/></div>

                    </div>
                    <div>
                        <div>
                            Email<span style='color:red;'>*</span></div>
                        <div><input type='text' style='width:100%;box-sizing:border-box;'
                                    maxlength='100' name='Email'/></div>

                    </div>
                    <div>
                        <div>
                            Mobile Number<span style='color:red;'>*</span></div>
                        <div><input type='text' style='width:100%;box-sizing:border-box;'
                                    maxlength='30' name='COBJ6CF2'/></div>

                    </div>
                    <div>
                        <div>
                            Message
                        </div>
                        <div><textarea name='COBJ6CF1' maxlength='2000'
                                       style='width:100%;'>&nbsp;</textarea></div>

                    </div>

                    <div>
                        <div colspan='2' style='text-align:center; padding-top:15px;font-size:12px;'>
                            <input id='formsubmit'
                                   type='submit' value='Submit'></input></div>
                    </div>
                </div>

            </form>
        </div>
    </div>
</template>

<style scoped>
    #crmWebToEntityForm tr, #crmWebToEntityForm div {
        padding: 6px;
        border-spacing: 0px;
        border-width: 0px;
    }

    input, textarea {
        margin: 0 auto;
    }


</style>

<script>
    export default {
        mounted() {
        }
    }


    var mndFileds = new Array('NAME', 'COBJ6CF3', 'Email', 'COBJ6CF2');
    var fldLangVal = new Array('First Name', 'Last Name', 'Email', 'Mobile Number');
    var name = '';
    var email = '';

    function checkMandatory1445520000007109087() {
        for (i = 0; i < mndFileds.length; i++) {
            var fieldObj = document.forms['WebForm1445520000007109087'][mndFileds[i]];
            if (fieldObj) {
                if (((fieldObj.value).replace(/^\s+|\s+$/g, '')).length == 0) {
                    if (fieldObj.type == 'file') {
                        alert('Please select a file to upload.');
                        fieldObj.focus();
                        return false;
                    }
                    alert(fldLangVal[i] + ' cannot be empty.');
                    fieldObj.focus();
                    return false;
                } else if (fieldObj.nodeName == 'SELECT') {
                    if (fieldObj.options[fieldObj.selectedIndex].value == '-None-') {
                        alert(fldLangVal[i] + ' cannot be none.');
                        fieldObj.focus();
                        return false;
                    }
                } else if (fieldObj.type == 'checkbox') {
                    if (fieldObj.checked == false) {
                        alert('Please accept  ' + fldLangVal[i]);
                        fieldObj.focus();
                        return false;
                    }
                }
                try {
                    if (fieldObj.name == 'Last Name') {
                        name = fieldObj.value;
                    }
                } catch (e) {
                }
            }
        }
        document.getElementById('formsubmit').disabled = true;
    }

</script>