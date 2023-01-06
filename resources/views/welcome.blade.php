<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Cache-Control" content="no-cache, no-store">
    <title>Login</title>
    <link href="{{asset('css/custom.css')}}" rel="stylesheet" />
</head>
<body>
    <div class="container body-content">

<div class="container">
    <div class="clientwise_detail">
        <h2>माधव नारायण नगरपालिका</h2>
        <h3>नगर कार्यपालिकाको कार्यालय</h3>
        <h3 class="address">मधेश प्रदेश, नेपाल</h3>
    </div>
    <div class="row">
        <div class="col-lg-12">
            

            <div class="col-md-5 col-lg-4 col-md-push-4 col-lg-push-4">
                <div class="panel panel-primary ">
                    <div class="col-lg-12 panel-heading">
                        <div class="logo">
                            <h3 class="mun_title">स्थानीय तह ERP</h3>
                        </div>
                        <div class="logo_title">
                            <h3 class="login_title">Login</h3>
                        </div>
                    </div>
                    <div class="panel-body1">
                        <form class="form-horizontal" id="loginForm">
                            

                            <div class="form-group">
                                
                                <div class="col-lg-8">
                                    <input id="client_id" name="client_id" type="hidden" value="229" />
                                    
                                    
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-3 col-lg-3">
                                    <label for="username">प्रयोगकर्ता </label>
                                </div>
                                <div class="col-lg-8 ">
                                    <input type="text" class="form-control" id="username" placeholder="username" value="">
                                </div>

                            </div>
                            <div class="form-group">
                                <div class="col-md-3 col-lg-3 ">
                                    <label for="password">पासवोर्ड </label>
                                </div>
                                <div class="col-lg-8">
                                    <input type="password" class="form-control" id="password" placeholder="password" value="">
                                    <span class="glyphicon glyphicon-eye-open toggle-password text-primary" style="float: right; margin-top: -25px; position: relative; z-index: 1000; cursor: pointer; margin-right: 10px;"></span>
                                </div>

                            </div>
                            <div class="col-md-12 col-lg-12">
                                <div class="form-group error">
                                    <div class="col-lg-12" id="error-msg" style="left:23%; color: red;  padding: 0;">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-offset-3 col-lg-offset-3">
                                <button type="button" class="btn btn-primary btn_login" id="SubmitButton" onclick="loginButtonClick();">Login</button>
                            </div>

                        </form>

                        
                    </div>
                    <div style="float:right;margin-top: 3%">
                        <label for="version_no">munerp_tax-1.5.0_210419T1710</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    var baseUrl = "http://tax.madhavnarayanmun.gov.np/";
    $(document).ready(function () {
        $('#login-form').keypress(function (e) {
            if (e.which == 13) {
                loginButtonClick(e);
            }
        });

        $(".form-group input").change(function () {
            $("#error-msg").text("");
            $('.error').hide();
        });

        
        var passwordField = $('#password');
        var toggleBtn = $('.toggle-password');
        toggleBtn.on('dblclick', function () {
                if (passwordField.attr('type') == 'password') {
                    passwordField.attr('type', 'text');
                }
                else {
                    passwordField.attr('type', 'password');
                }
        });

        toggleBtn.on('mouseleave', function () {
            passwordField.attr('type', 'password');
        });

        toggleBtn.on('mouseout', function () {
            passwordField.attr('type', 'password');
        });
    });

    function loginButtonClick(e) {
        var data = {
            client_id: $('#client_id').val(),
            username: $('#username').val(),
            password: $('#password').val()
        };
        $.ajax({
            url: baseUrl + 'api/auth/authenticate',
            data: JSON.stringify(data),
            type: 'POST',
            success: function (response) {
                if (response.success) {
                    var token = response.token;
                    //session_id = response.data.session_id;
                    window.location = baseUrl + "home/LoginSuccess?token=" + response.token + "&user_id=" + response.user_id + "&user_name=" + $('#username').val();
                }
                else {
                    $("#error-msg").text(response.message);
                    $('.error').show();
                }
            }
        });
    }
    //Login on Enter Key Press
    function keypressHandler(e) {
        if (e.which == 13) {
            e.preventDefault(); //stops default action: submitting form
            $(this).blur();
            $('#SubmitButton').focus().click();//give your submit an ID
        }
    }

    $('#loginForm').keypress(keypressHandler);
</script>


        
    </div>

    
    <script src="/bundles/bootstrap?v=5hRnqNMr82KLTeqzoeFEBcEphQq3R63sXew_xzN4ygA1"></script>

    
</body>
</html>
