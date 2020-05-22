<template>
    <div>
        <section class="divider parallax layer-overlay overlay-dark-8" data-stellar-background-ratio="0.5" data-bg-img="images/bg/bg1.jpg">
            <div class="container pt-0 pb-60">
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-6 wow fadeInLeft mt-10 pr-30" data-wow-duration="1s" data-wow-delay="0.3s">
                            <h3 class="bg-theme-colored p-15 pl-30 mb-0 text-white text-center">ERP | Login</h3>
                            <form id="login_form" class="bg-light p-30 pb-15" action="/login" method="get" enctype="multipart/form-data">
                                 <div class="row alert alert-danger text-center" id="errmessagesection" style="display:none">
                                    <div class="col-12">
                                        <span id="errmessages"></span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <label for="form_email">Email <small>*</small></label>
                                        <input id="form_email" @click="removeErr('form_email_err')" name="form_email" class="form-control required email" type="email" placeholder="Enter Email" required>
                                        <span id="form_email_err" class="text-danger"></span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <label for="form_email">Password <small>*</small></label>
                                        <input type="password" @click="removeErr('password_err')" name="password" id="password" class="form-control">
                                        <span id="password_err" class="text-danger"></span>
                                    </div>
                                </div>                            
                                <div class="form-group">
                                    <button type="button"  @click="fnc_login()" class="btn btn-block btn-dark btn-theme-colored btn-sm mt-20 pt-10 pb-10">Login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        data() {
          return {
            tableData: {
              username:'',
              password:'',
            }
          }
        },
         methods: {
            fnc_login(e){
                if(this.validateform()){
                   //$('#login_form').submit();
                    this.tableData.username= $('#form_email').val();
                    this.tableData.password= $('#password').val();
                    let currentObj = this;
                    axios.get('/login', {
                        params: this.tableData
                    })
                    .then(function (response) {
                        if(response.data=="Success"){
                            window.location="/dashboard";
                        }
                        else{
                            $('#errmessagesection').show();
                            $('#errmessages').html(response.data);
                            $('#errmessagesection').fadeOut(10000);
                        }
                    })
                    .catch(function (error) {
                        currentObj.output = error;
                    });
                }
            },
            validateform(){
                var returnval=true;
                if($('#form_email').val()==""){
                    $('#form_email_err').html('Please enter your email');
                    $('#form_email').focus();
                    returnval=false;
                }
                if($('#password').val()==""){
                    $('#password_err').html('Please enter your password');
                    $('#form_email').focus();
                    returnval=false;
                }
                return returnval;
            },
            removeErr(err_id){
                 $('#'+err_id).html('');
            }
        },
    }
</script>
