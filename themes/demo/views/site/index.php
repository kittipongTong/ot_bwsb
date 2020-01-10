<?php include Yii::app()->basePath . '/../themes/demo/include/inc-con.php'; ?>

<style >
  .btn-lg {
    border-radius: 18px;
  }
  .fa-plus-circle{
      color: 	#00FF7F;
      font-size: 20px;
  }
  .time-input{
    margin-left: 100%;
  }
  .input--style-4{
    font-family: 'Kanit' ;
    border-radius: 18px;
    background-color: #ECEEF0;
  }
  .inputWithIcon i{
    position: absolute;
    left: 8;
    top: 10;
    padding: 9px 8px;
    color: #aaa;
    transition: 1xs;
  }
  ::placeholder{
    opacity: 0.5;
  }

</style>

  <div class="container">
  <!-- <div class="content"> -->
    <div class="page-inner">
    <div class="row">
    <div class="col-md-6">
      <div class="card ">
        <div class="card-body">
              <div class="nav flex-column nav-pills nav-warning nav-pills-no-bd nav-pills-icons" id="v-pills-tab-with-icon" role="tablist" aria-orientation="vertical">
                <a class="nav-link active" id="v-pills-hourglass-tab-icons" data-toggle="pill" href="#v-pills-hourglass-icons" role="tab" aria-controls="v-pills-hourglass-icons" aria-selected="false">
                  <i class="fa fa-hourglass-half"></i>
                  เบิกค่า OT พนักงาน
                </a>
              </div>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card ">
        <div class="card-body" >
              <div class="nav flex-column nav-pills nav-success nav-pills-no-bd nav-pills-icons" id="v-pills-tab-with-icon" role="tablist" aria-orientation="vertical">
                <a class="nav-link" id="v-pills-car-tab-icons" data-toggle="pill" href="#v-pills-car-icons" role="tab" aria-controls="v-pills-car-icons" aria-selected="false">
                  <i class="fa fa-car"></i>
                ค่าเดินทางยานพาหนะ และค่าอื่นๆ
                </a>
              </div>
        </div>
      </div>
    </div>
  </div>
    <div class="tab-content" id="v-pills-with-icon-tabContent">
      <div class="tab-pane fade" id="v-pills-hourglass-icons" role="tabpanel" aria-labelledby="v-pills-hourglass-tab-icons">
        <div class="wrapper wrapper--w100" >
            <div class="card card-">
                <div class="card-body">
                    <h2 class="title">เบิกค่า OT พนักงาน</h2>
                    <form method="POST">
                      <div class="col-6">
                      <div class="input-group">
                          <input class="input--style-4" type="text" placeholder="10/10/2020">
                      </div>
                    </div>
                      <div class="col-8">
                          <div class="input-group">
                              <label class="label">ขอเบิกค่า</label>
                              <div class="p-t-10">
                                  <label class="radio-container m-r-45">ทำงานล่วงเวลา
                                      <input type="radio" checked="checked">
                                      <span class="checkmark"></span>
                                  </label>
                                  <label class="radio-container">ทำงานวันหยุด
                                      <input type="radio" >
                                      <span class="checkmark"></span>
                                  </label>
                                  <label class="radio-container">ทำงานล่วงเวลาในวันหยุด
                                      <input type="radio" >
                                      <span class="checkmark"></span>
                                  </label>
                                  <label class="radio-container">ค่าคอมมิชชั่น_
                                      <input type="radio" >
                                      <span class="checkmark"></span>
                                  </label>
                              </div>
                          </div>
                      </div><br>
                        <div class="row row-space">
                            <div class="col-3">
                                <div class="input-group">
                                    <label class="label">เมื่อวันที่</label>
                                    <div class="input-group-icon inputWithIcon">
                                        <input class="input--style-4 js-datepicker" type="text">
                                        <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="input-group">
                                    <label class="label">ตั้งแต่เวลา</label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4 " type="text" placeholder="00:00 น.">

                                    </div>
                                </div>
                            </div>
                            <div class="col-1">
                                  <i class="fa fa-plus-circle"></i>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-8">
                                <div class="input-group">
                                    <label class="label">งานที่ได้รับมอบหมาย</label>
                                  <textarea  class="input--style-4" rows="5" cols="50"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-4">
                                <div class="input-group">
                                    <label class="label">ขอเบิกค่าตอบแทนเป็นเงิน</label>
                                <input class="input--style-4" type="text" placeholder="1,000 บาท">
                                </div>
                            </div>
                        </div>
                        <div class="p-t-15" align="right">
                            <button class="btn btn--radius-2 btn--blue btn-lg w-50" type="submit">ส่ง</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
      </div>
  </div>

    <div class="tab-content" id="v-pills-with-icon-tabContent">
      <div class="tab-pane fade active show" id="v-pills-car-icons" role="tabpanel" aria-labelledby="v-pills-car-tab-icons">
        <div class="wrapper wrapper--w100" >
            <div class="card card-">
                <div class="card-body">
                    <h2 class="title">ค่าเดินทางยานพาหนะ และค่าอื่นๆ</h2>
                    <form method="POST">

                    <div class="row row-space">
                      <div class="col-4">
                      <div class="input-group">
                          <input class="input--style-4" type="text" placeholder="10/10/2020">
                      </div>
                    </div>
                        <div class="col-4">
                            <div class="input-group">
                                <label class="label">เมื่อวันที่</label>
                                <div class="input-group-icon inputWithIcon">
                                    <input class="input--style-4 js-datepicker" type="text">
                                    <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                      <div class="col-8">
                          <div class="input-group">
                              <div class="p-t-10">
                                  <label class="radio-container m-r-45">ค่าเดินทางยานพาหนะ
                                      <input type="radio" checked="checked">
                                      <span class="checkmark"></span>
                                  </label>
                                  <label class="radio-container">ค่าอื่นๆ(ระบุ)
                                      <input type="radio" >
                                      <span class="checkmark"></span>
                                  </label>
                              </div>
                          </div>
                      </div><br>

                        <div class="row row-space">
                            <div class="col-8">
                                <div class="input-group">
                                    <label class="label">วัตถุประสงค์</label>
                                  <textarea  class="input--style-4" rows="5" cols="50"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-4">
                                <div class="input-group">
                                    <label class="label">ขอเบิกค่าใช้จ่ายในการเดินทาง เป็นเงิน</label>
                                <input class="input--style-4" type="text" placeholder="1,000 บาท">
                                </div>
                            </div>
                        </div>
                        <div class="p-t-15" align="right">
                            <button class="btn btn--radius-2 btn--blue btn-lg w-50" type="submit">ส่ง</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
      </div>
    </div>

    </div>
  </div>
</div>
