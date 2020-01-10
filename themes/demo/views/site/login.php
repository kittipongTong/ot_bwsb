<?php include Yii::app()->basePath . '/../themes/demo/include/inc-Lia.php'; ?>
<link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">
<style >
  .inputWithIcon input{
    padding-left: 40px;
    font-family: 'Kanit' ;
    font-size: 16px;
    background-color: #ECEEF0;
    border-radius: 18px;
  }
  .inputWithIcon{
    position: relative;
  }
  .inputWithIcon i{
    position: absolute;
    left: 8;
    top: 8px;
    padding: 9px 8px;
    color: #aaa;
    transition: 1xs;
  }
  .inputWithIcon input:focus + i{
    color:dodgerBlue;
  }
  .btn{
    font-size: 20px;
  }
  .pright{
    margin-left: 40%;
    font-family: 'Kanit' ;
    color: #aaa;
  }
  .login-form-bg {
    margin-top: 15%;
  }
  hr.new5 {
  border: 5px solid blue;
  border-radius: 5px;
  width: 100px;
}
</style>
    <div class="login-form-bg ">
        <div class="container">
            <div class="row justify-content-center">
                    <div class="form-input-content">
                              <h1 class="text-center"><b>SIGN IN</b></h1><hr class="new5">
                                <form class="mt-5 mb-5 login-input">
                                    <div class="inputWithIcon">
                                        <input type="text" class="form-control" placeholder="Email / Username" required>
                                        <i class="fa fa-user fa-lg  fa-fw" align-hidden="true"></i>
                                    </div><br>
                                    <div class="inputWithIcon">
                                      <input type="password" class="form-control" placeholder="Password" required>
                                      <i class="fa fa-lock fa-lg  fa-fw" align-hidden="true"></i>
                                </div><br>
                                <div class="text-center">
                                    <button class="btn btn-primary btn-lg w-100"><b>Sign in</b></button>
                                </div>
                                <br><p class="pright"><strong>ลืมรหัสผ่าน? </strong><a href="index.php?r=site/register" class="text-primary"><strong>Create account </strong></a></p>
                                <p class="pright"><strong>New member? </strong><a href="index.php?r=site/register" class="text-primary"><strong>Create account </strong></a></p>

                                    </div>
                                </form>

                            </div>
                    </div>
                </div>
