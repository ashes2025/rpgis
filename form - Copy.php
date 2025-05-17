
<style>
       .btn{
      border-radius: 0;
    padding: 6px 12px;
    font-size: 14px;
    font-family: Arial, Helvetica, sans-serif !important;
  }  .film_submit{font-family: Arial, Helvetica, sans-serif !important;}
  .btn-default{margin: 0;}
</style>
  <link rel="stylesheet" href="plugins/select2/dist/css/select2.min.css">
  <script src="plugins/select2/dist/js/select2.js"></script>
  <link rel="stylesheet" href="plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <script src="plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
  <script src="js_front/form.js"></script>
  <style>
  select,
  .form-control {
    /* width: 100% !important; */
    margin-top: 0 !important;
  }
  .select2-container{width: 100% !important}
  .select2-container--default .select2-selection--single {
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 0;
    height: 34px;
  }
  .select2-container--default.select2-container--focus .select2-selection--multiple {
    border: solid #ddd 1px;
    outline: 0;
}
  form.example input[type=text] {
    padding: 10px;
    font-size: 13px;
    border: 1px #ddd solid;
    float: left;
    width: 80%;
    height: 40px;
    background: #f1f1f1;
}

form.example button {
    float: left;
    width: 20%;
    padding: 10px;
    background: #11a495;
    color: white;
    font-size: 13px;
    border: 1px solid grey;
    height: 40px;
    border-left: none;
    cursor: pointer;
}

form.example button:hover {
    background: #0b7dda;
}

form.example::after {
    content: "";
    clear: both;
    display: table;
}

.control-label{
    font-size: 13px;
}

h3, .h3{
    font-size: 20px;
}

.wizard {
    margin: 20px auto;
}

    .wizard .nav-tabs {
        position: relative;
        margin: 40px auto;
        margin-bottom: 0;
        border-bottom-color: transparent;
    }

    .wizard > div.wizard-inner {
        position: relative;
    }

.connecting-line {
    height: 2px;
    background: #e0e0e0;
    position: absolute;
    width: 90%;
    margin: 0 auto;
    left: 0;
    right: 0;
    top: 43%;
    z-index: 1;
}

.wizard .nav-tabs > li > a.active, .wizard .nav-tabs > li > a.active:hover, .wizard .nav-tabs > li > a.active:focus {
    color: #555555;
    cursor: default;
    border: 0;
    border-bottom-color: transparent;
}

span.round-tab {
    width: 50px;
    height: 50px;
    line-height: 50px;
    display: inline-block;
    border-radius: 100px;
    background: #fff;
    border: 2px solid #e0e0e0;
    z-index: 2;
    position: relative;
    left: 0;
    text-align: center;
    font-size: 25px;
}
span.round-tab i{
    color:#555555;
}
.wizard li a.active span.round-tab {
    background: #fff;
    border: 2px solid #11a495;

}
.wizard li a.active span.round-tab i{
    color: #5bc0de;
}

span.round-tab:hover {
    color: #26a7de;
    border: 2px solid #26a7de;
}

.wizard .nav-tabs > li {
    width: 11%;
    position: relative;

}

.wizard li:after {
    content: " ";
    position: absolute;
    left: 46%;
    opacity: 0;
    margin: 0 auto;
    bottom: 0px;
    border: 5px solid transparent;
    border-bottom-color: #5bc0de;
    transition: 0.1s ease-in-out;
}

.wizard li a.active:after {
    content: " ";
    position: absolute;
    left: 42%;
    opacity: 1;
    margin: 0 auto;
    bottom: 0px;
    border: 10px solid transparent;
    border-bottom-color: #11a495;
}

.wizard .nav-tabs > li a {
    width: 52px;
    height: 52px;
    margin: 20px auto;
    border-radius: 100%;
    padding: 0;
}

    .wizard .nav-tabs > li a:hover {
        background: transparent;
    }

.wizard .tab-content {padding-top: 0px;}
.wizard .tab-pane {
    position: relative;
    padding-top: 15px;
    padding: 25px;
    margin: 0 12px;
    background-color: #fff;
    box-shadow: 0 0 11px rgba(0,0,0,.3);
}

.wizard h3 {
    margin-top: 0;
}

@media( max-width : 585px ) {

    .wizard {
        width: 90%;
        height: auto !important;
    }

    span.round-tab {
        font-size: 13px;
        width: 30px;
        height: 30px;
        line-height: 30px;
    }

    .wizard .nav-tabs > li a {
        width: 30px;
        height: 30px;
        line-height: 30px;
    }

    .wizard li a.active:after {
        content: " ";
        position: absolute;
        left: 35%;
    }
}

.form-group{
    margin-bottom : 12px;
}


.form-control {
    border-radius: 0;

}
div.form-control{
    padding: 0;
    border: none;
}
.film-details{
    margin-top: 30px;
}
.control-label{
    .margin-bottom: 10px;
}
.ui-datepicker-calendar {
   display: none;
}
.ui-datepicker-month {
   display: none;
}
.ui-datepicker-prev{
   display: none;
}
.ui-datepicker-next{
   display: none;
}

h5{
  text-align: left;
    margin-top: 20px;
    background-color: #f4f4f4;
    padding: 5px;
    border-left: 2px solid #11a495;
}
  </style>

  <div class="film_submit">

<?php //echo $step;?>
    <div class="container">
      <?php if($this->session->flashdata('success')) echo '<p class="alert alert-success"><i class="fa fa-fw fa-check"></i>'.$this->session->flashdata('success').'</p>';?>
      <?php if($this->session->flashdata('error')) echo '<p class="alert alert-danger"><i class="fa fa-fw fa-warning"></i>'.$this->session->flashdata('error').'</p>';?>
      <div class="">
        <section>
          <div class="wizard">
            <div class="wizard-inner">
              <div class="connecting-line"></div>
              <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="nav-item">
                  <a href="#step1" data-toggle="tab" class="nav-link <?=$step==1?'active':''?>" aria-controls="step1" role="tab" title="Film Details">
                                <span class="round-tab">1</span>
                            </a>
                </li>
                <li role="presentation" class="nav-item <?=$step>1?'':'disabled'?>">
                  <a href="#step2" data-toggle="tab" class="nav-link <?=$step==2?'active':''?>" aria-controls="step2" role="tab" title="Director's Details">
                                <span class="round-tab">2</span>
                            </a>
                </li>
                <li role="presentation" class="nav-item <?=$step>2?'':'disabled'?>">
                  <a href="#step3" data-toggle="tab" class="nav-link <?=$step==3?'active':''?>" aria-controls="step3" role="tab" title="Production Details">
                                <span class="round-tab">3</span>
                            </a>
                </li>
                <li role="presentation" class="nav-item <?=$step>3?'':'disabled'?>">
                  <a href="#step4" data-toggle="tab" class="nav-link <?=$step==4?'active':''?>" aria-controls="step4" role="tab" title="Cast and Crew">
                                <span class="round-tab">4</span>
                            </a>
                </li>
                <li role="presentation" class="nav-item <?=$step>4?'':'disabled'?>">
                  <a href="#step5" data-toggle="tab" class="nav-link <?=$step==5?'active':''?>" aria-controls="step5" role="tab" title="Sales Details">
                                <span class="round-tab">5</span>
                            </a>
                </li>
                <li role="presentation" class="nav-item <?=$step>5?'':'disabled'?>">
                  <a href="#step6" data-toggle="tab" class="nav-link <?=$step==6?'active':''?>" aria-controls="step6" role="tab" title="Technical Details">
                                <span class="round-tab">6</span>
                            </a>
                </li>
                <!--<li role="presentation" class="nav-item <?=$step>6?'':'disabled'?>">
                  <a href="#step7" data-toggle="tab" class="nav-link <?=$step==7?'active':''?>" aria-controls="step7" role="tab" title="Print and Press Information">
                                <span class="round-tab">7</span>
                            </a>
                </li>
                <li role="presentation" class="nav-item <?=$step>7?'':'disabled'?>">
                  <a href="#step8" data-toggle="tab" class="nav-link <?=$step==8?'active':''?>" aria-controls="step8" role="tab" title="Film’s Agreement to Participate">
                                <span class="round-tab">8</span>
                            </a>
                </li>-->
                <li role="presentation" class="nav-item <?=$step>6?'':'disabled'?>">
                  <a href="#step9" data-toggle="tab" class="nav-link <?=$step==9?'active':''?>" aria-controls="step9" role="tab" title="Uploads">
                                <span class="round-tab">7</span>
                            </a>
                </li>
              </ul>
            </div>
            <div class="tab-content">
              <div class="tab-pane <?=$step==1?'active':''?>" role="tabpanel" id="step1">
                <h3>Film Details <small class="text-muted text-danger pull-right"><em>(* marked fields are mandatory)</em></small></h3>

                <?php echo form_open_multipart(current_url_full()) ?>
                  <section class="film-details">

                      <div class="row">
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label class="control-label">Original Title of the film<span style="color:#ff1212">*</span>(In English)</label>
                            <input type="text" class="form-control" name="org_title" required value="<?=$form_data['org_title']?>" pattern="[a-zA-Z0-9 ]*" title="Only A-Z a-z 0-9 & , - @ ' characters allowed">
                            <?=form_error('org_title', '<p class="text-danger">', '</p>')?>
                          </div>
                          <div class="form-group">
                            <label class="control-label">English Title<span style="color:#ff1212">*</span></label>
                            <input type="text" class="form-control" name="eng_title" pattern="[A-Za-z0-9&,-@' ]+" title="Only A-Z a-z 0-9 & , - @ ' characters allowed" required value="<?=$form_data['eng_title']?>">
                            <small class="text-muted"><i class="fa fa-info-circle fa-fw"></i> English equivalent of the title</small>
                            <?=form_error('eng_title', '<p class="text-danger">', '</p>')?>
                          </div>
                          <div class="row">
                            <div class="col-sm-6">
                              <div class="form-group">
                                <label class="control-label">Production country<span style="color:#ff1212">*</span></label>
                                <select class="form-control countrypicker" data-placeholder="---Choose---" name="prod_country_id" required>
                                  <option value="" selected disabled>---Choose---</option>
                                  <?php foreach ($pro_country_data_order as $value): ?>
                                    <option value="<?=$value['id']?>" <?=$form_data['prod_country_id']==$value['id']?'selected':''?>><?=$value['name']?></option>
                                  <?php endforeach ?>
                                </select>
                                <?=form_error('prod_country_id', '<p class="text-danger">', '</p>')?>
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="form-group">
                                <label class="control-label">Co-production country</label>
                                <select class="form-control countrypicker"  multiple data-placeholder="---Choose---" name="co_prod_country_id[]">
                                  <?php foreach ($pro_country_data_order as $value): ?>
                                    <option value="<?=$value['id']?>" <?=in_array($value['id'],explode(',',$form_data['co_prod_country_id']))?'selected':''?>><?=$value['name']?></option>
                                  <?php endforeach ?>
                                </select>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-sm-6">
                              <div class="form-group">
                                <label class="control-label">Original language of the film<span style="color:#ff1212">*</span></label>
                                <select class="form-control" name="org_lang" data-placeholder="---Choose---" required>
                                  <option value="" selected disabled>---Choose---</option>
                                  <option value="99999" <?=$form_data['org_lang']=='99999'?'selected':''?>>No dialogue</option>
                                  <?php foreach ($lang_data as $value): ?>
                                    <option value="<?=$value['id']?>" <?=$form_data['org_lang']==$value['id']?'selected':''?>><?=$value['name']?></option>
                                  <?php endforeach ?>
                                </select>
                                <?=form_error('org_lang', '<p class="text-danger">', '</p>')?>
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="form-group">
                                <label class="control-label">In language of the festival’s country</label>
                                <select class="form-control" name="dub_lang">
                                  <option value="" selected disabled>---Choose---</option>
                                  <?php foreach ($lang_data as $value): ?>
                                    <option value="<?=$value['id']?>" <?=$form_data['dub_lang']==$value['id']?'selected':''?>><?=$value['name']?></option>
                                  <?php endforeach ?>

                                </select>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-sm-6">
                              <div class="form-group">
                                <label class="control-label">Type of film<span style="color:#ff1212">*</span></label>
                                <select class="form-control" name="film_type" required>
                                  <option selected value="" disabled>---Choose---</option>
                                  <!--<option value="Feature Film" <?=$form_data['film_type']=="Feature Film"?'selected':''?> <?=$cat_details['type']==1?'selected':''?>>Feature Film </option>-->
                                  <option value="Feature Film" <?=$form_data['film_type']=="Feature Film"?'selected':''?>>Feature Film </option>
                                  <option value="Animation" <?=$form_data['film_type']=="Animation"?'selected':''?>>Animation</option>
                                  <?php if($cat_details['type']==0){ ?>
                                  <option value="Documentary" <?=$form_data['film_type']=="Documentary"?'selected':''?>>Documentary</option>
                                  
                                  <?php } ?>
                                  
                                </select>
                                <?=form_error('film_type', '<p class="text-danger">', '</p>')?>
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="form-group">
                                <label class="control-label">Year of production<span style="color:#ff1212">*</span></label>
                                <input type="text" id="datepicker1" autocomplete="off" class="form-control" name="prod_year" required value="<?=$form_data['prod_year']?>">
                                <?=form_error('prod_year', '<p class="text-danger">', '</p>')?>
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label">Premiere status<span style="color:#ff1212">*</span></label>
                            <select class="form-control" name="premiere_sts" required>
                              <option selected value="" disabled>---Choose---</option>
                              <option value="World Premiere" <?=$form_data['premiere_sts']=="World Premiere"?'selected':''?>>World Premiere </option>
                              <option value="International Premiere" <?=$form_data['premiere_sts']=="International Premiere"?'selected':''?>>International Premiere</option>
                              <option value="Indian Premiere" <?=$form_data['premiere_sts']=="Indian Premiere"?'selected':''?>>Indian Premiere </option>
                              <option value="Country Premiere" <?=$form_data['premiere_sts']=="Country Premiere"?'selected':''?>>Country Premiere </option>
                              <option value="Not applicable" <?=$form_data['premiere_sts']=="Not applicable"?'selected':''?>>Not applicable </option>
                            </select>
                            <?=form_error('premiere_sts', '<p class="text-danger">', '</p>')?>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label class="control-label">Date of first theatrical release in country of production</label>
                            <input type="text" id="datepicker2" autocomplete="off" class="form-control" name="prod_country_release_date" value="<?=$form_data['prod_country_release_date']?>">
                          </div>
                          <div class="form-group">
                            <label class="control-label">Festival(s) at which the film has already participated</label>
                            <input type="text" class="form-control" name="participated_festival" value="<?=$form_data['participated_festival']?>">
                          </div>
                          <div class="form-group">
                            <label class="control-label">Prize(s) won at any festival(s) <em>(if any)</em></label>
                            <input type="text" class="form-control" name="prize_won" value="<?=$form_data['prize_won']?>">
                          </div>
                          <div class="form-group">
                            <label class="control-label">Trailer link</label>
                            <input type="URL" class="form-control" name="trailer_link" value="<?=$form_data['trailer_link']?>" >
                            <?=form_error('trailer_link', '<p class="text-danger">', '</p>')?>
                          </div>
                          <div class="form-group">
                            <label class="control-label">Film synopsis<span style="color:#ff1212">*</span> (within 150 words)</label>
                            <!--<textarea class="form-control" name="synopsis" rows="5" required onkeypress="newmaxlength(this, 5)" onkeyup="newmaxlength(this, 5)" onchange="newmaxlength(this, 5)"><?=$form_data['synopsis']?></textarea>-->
                            <textarea class="form-control" id="word_count" name="synopsis" rows="5" required ><?=$form_data['synopsis']?></textarea>
                            <?=form_error('synopsis', '<p class="text-danger">', '</p>')?>
                          </div>
                        </div>
                      </div>
                  </section>
                  <div class="clearfix">
                    <input type="submit" name="form1" class="btn btn-primary pull-right" value="Save and continue">
                  </div>
                </form>
              </div>
              <?php if($step>1){ ?>
              <div class="tab-pane <?=$step==2?'active':''?>" role="tabpanel" id="step2">
                <?php echo form_open_multipart(current_url_full()) ?>
                  <h3>Director's Details <small class="text-muted text-danger pull-right"><em>(* marked fields are mandatory)</em></small></h3>
                  <section class="film-details">
                    <div class="add_director" id="add_director">
                      <?php
                      $directors = explode(',',$form_data['director_id']);
                      foreach ($directors as $key => $value): if($value!=''){$dir = get_alldata('cast_crew',array('id'=>$value))[0]; ?>
                        <div>
                          <h5>Director <?=$key+1?> Details <?php if($key>0){?>   <a  class="pull-right" href="<?=base_url()?>del_dir/?id=<?=$value?>"><i class="fa fa-close fa-fw"></i> Delete</a><?php } ?></h5>
                          <input type="hidden" value="<?=$value?>" name="director[<?=$key?>][id]">
                          <div class="row">
                            <div class="col-xs-12 col-sm-6">
                              <div class="form-group">
                                <label class="control-label">Director’s name<span style="color:#ff1212">*</span>:</label>
                                <input type="text" class="form-control" name="director[<?=$key?>][name]" required value="<?=$dir['name']?>" pattern="[A-Za-z. ]+" title="Only alphabet dot and space charecters allowed">
                              </div>
                              <div class="form-group">
                                <label class="control-label">Director’s email address<span style="color:#ff1212">*</span>:</label>
                                <input type="email" class="form-control" name="director[<?=$key?>][email]" required value="<?=$dir['email']?>">
                              </div>
                              <div class="row">
                                <div class="col-sm-6">
                                  <div class="form-group">
                                    <label class="control-label">Director’s mobile phone:</label>
                                    <input type="tel" class="form-control" name="director[<?=$key?>][mob_phone]" value="<?=$dir['mob_phone']?>">
                                    <small class="text-muted"><i class="fa fa-info-circle fa-fw"></i> Please include country code.</small>
                                  </div>
                                </div>
                                <div class="col-sm-6">
                                  <div class="form-group">
                                    <label class="control-label">Director’s fax:</label>
                                    <input type="text" class="form-control" name="director[<?=$key?>][fax]" value="<?=$dir['fax']?>">
                                    <small class="text-muted"><i class="fa fa-info-circle fa-fw"></i> Please include country code.</small>
                                  </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label">Director’s address:</label>
                                <input type="text" class="form-control" name="director[<?=$key?>][address]" value="<?=$dir['address']?>">
                              </div>
                            </div>
                            <div class="col-xs-12 col-sm-6">
                              <div class="form-group">
                                <label class="control-label">Director’s biography<span style="color:#ff1212">*</span> (within 120 words):</label>
                                <textarea class="form-control" id="word_count11" name="director[<?=$key?>][bio]" required rows="5"><?=$dir['bio']?></textarea>
                              </div>
                              <div class="form-group">
                                <label class="control-label">Director’s selected filmography<span style="color:#ff1212">*</span></label>
                                <div class="table-responsive">
                                  <table class="table table-bordered table-hover table-sortable" id="tab_logic">
                                    <thead>
                                      <tr>
                                        <th class="text-center">Film Name</th>
                                        <th class="text-center">Year</th>
                                        <th></th>
                                      </tr>
                                    </thead>
                                    <tbody id="add_filmography">
                                      <?php
                                      $films = get_alldata('filmography',array('dir_id'=>$dir['id']));
                                      foreach ($films as $k => $film) {
                                      ?>
                                      <tr>
                                        <td>
                                          <input type="hidden" value="<?=$film['id']?>" name="director[<?=$key?>][film][<?=$k?>][id]">
                                          <input type="text" placeholder="Film Name" class="form-control" name="director[<?=$key?>][film][<?=$k?>][name]" required value="<?=$film['film']?>" pattern="[A-Za-z0-9&@-, ]+" title="Only alphabet dot and space charecters allowed">
                                        </td>
                                        <td>
                                          <input type="text" maxlength="4" placeholder="Year" autocomplete="off" class="form-control datepicker4" name="director[<?=$key?>][film][<?=$k?>][year]" required value="<?=$film['year']?>">
                                        </td>
                                        <td>
                                          <?php if($k==0){?>
                                          <span class="input-group-append"><button type="button" class="btn btn-primary" onclick="add_filmography(this)"><i class="fa fa-plus fa-fw"></i></button></span>
                                          <?php }else{?>
                                          <span class="input-group-append"><a type="button" href="<?=base_url()?>del_film/?id=<?=$film['id']?>" class="btn btn-danger"><i class="fa fa-close fa-fw"></i></a></span>
                                          <?php } ?>
                                        </td>
                                      </tr>
                                    <?php } ?>
                                    </tbody>
                                  </table>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      <?php }else{ ?>
                        <div>
                          <h5>Director 1 Details</h5>
                          <input type="hidden" value="<?=$value?>" name="director[0][id]">
                          <div class="row">
                            <div class="col-xs-12 col-sm-6">
                              <div class="form-group">
                                <label class="control-label">Director’s name<span style="color:#ff1212">*</span>:</label>
                                <input type="text" class="form-control" name="director[0][name]" required value="" pattern="[A-Za-z. ]+" title="Only alphabet dot and space charecters allowed">
                              </div>
                              <div class="form-group">
                                <label class="control-label">Director’s email address<span style="color:#ff1212">*</span>:</label>
                                <input type="email" class="form-control" name="director[0][email]" required value="">
                              </div>
                              <div class="row">
                                <div class="col-sm-6">
                                  <div class="form-group">
                                    <label class="control-label">Director’s mobile phone:</label>
                                    <input type="tel" class="form-control" name="director[0][mob_phone]" value="">
                                    <small class="text-muted"><i class="fa fa-info-circle fa-fw"></i> Please include country code.</small>
                                  </div>
                                </div>
                                <div class="col-sm-6">
                                  <div class="form-group">
                                    <label class="control-label">Director’s fax:</label>
                                    <input type="text" class="form-control" name="director[0][fax]" value="">
                                    <small class="text-muted"><i class="fa fa-info-circle fa-fw"></i> Please include country code.</small>
                                  </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label">Director’s address:</label>
                                <input type="text" class="form-control" name="director[0][address]" value="">
                              </div>
                            </div>
                            <div class="col-xs-12 col-sm-6">
                              <div class="form-group">
                                <label class="control-label">Director’s biography<span style="color:#ff1212">*</span> (within 120 words):</label>
                                <textarea class="form-control" id="word_count11" name="director[0][bio]" required rows="5"></textarea>
                              </div>
                              <div class="form-group">
                                <label class="control-label">Director’s selected filmography<span style="color:#ff1212">*</span></label>
                                <div class="table-responsive">
                                  <table class="table table-bordered table-hover table-sortable" id="tab_logic">
                                    <thead>
                                      <tr>
                                        <th class="text-center">Film Name</th>
                                        <th class="text-center">Year</th>
                                        <th></th>
                                      </tr>
                                    </thead>
                                    <tbody id="add_filmography">
                                      <tr>
                                        <td>
                                          <input type="hidden"  name="director[0][film][0][id]">
                                          <input type="text" placeholder="Film Name" class="form-control" name="director[0][film][0][name]" required pattern="[A-Za-z0-9&@-, ]+" title="Only alphabet dot and space charecters allowed">
                                        </td>
                                        <td>
                                          <input type="text" maxlength="4" placeholder="Year" autocomplete="off" class="form-control datepicker4" name="director[0][film][0][year]" required>
                                        </td>
                                        <td>
                                          <span class="input-group-append"><button type="button" class="btn btn-primary" onclick="add_filmography(this)"><i class="fa fa-plus fa-fw"></i></button></span>
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      <?php } ?>
                      <?php endforeach ?>
                      </div>

                  </section>
                  <p align="right">
                    <a onclick="add_director(this)" href="javascript:void(0)">
                      <button type="button" class="btn btn-primary">Add another director</button>
                    </a>
                  </p>
                  <div class="clearfix">
                    <ul class="list-inline pull-left">
                      <li>
                        <button type="button" class="btn btn-default prev-step">Previous</button>
                      </li>
                    </ul>
                    <ul class="list-inline pull-right">
                      <li>
                      </li>
                      <li>
                        <input type="submit" name="form2" class="btn btn-primary pull-right" value="Save and continue">
                      </li>
                    </ul>
                  </div>
                </form>
              </div>
              <?php }if($step>2){ ?>
              <div class="tab-pane <?=$step==3?'active':''?>" role="tabpanel" id="step3">
                <h3>Production/Institution/Organisation Details <small class="text-muted text-danger pull-right"><em>(* marked fields are mandatory)</em></small></h3>
                <?php echo form_open_multipart(current_url_full()) ?>
                  <section class="film-details">
                    <div class="add_production" id="add_production">
                      <div class="row">
                        <div class="col-xs-12 col-sm-6">
                          <div class="add_producer" id="add_producer">
                            <?php
                            $producers = explode(',',$form_data['producer_id']);
                            foreach ($producers as $key => $value): if($value!=''){$prod = get_alldata('cast_crew',array('id'=>$value))[0]; ?>
                            <div>
                              <h5><b>Producer <?=$key+1?> Details</b> <?php if($key>0){?>   <a type="button" href="<?=base_url()?>del_prod/?id=<?=$value?>" class="pull-right"><i class="fa fa-close fa-fw"></i> Delete</a><?php } ?></h5>
                              <input type="hidden" value="<?=$value?>" name="producer[<?=$key?>][id]">
                              <div class="form-group">
                                <label class="control-label">Producer’s name<span style="color:#ff1212">*</span></label>
                                <input type="text" class="form-control" name="producer[<?=$key?>][name]" required value="<?=$prod['name']?>" pattern="[A-Za-z. ]+" title="Only alphabet dot and space charecters allowed">
                              </div>
                              <div class="form-group">
                                <label class="control-label">Producer’s email address</label>
                                <input type="email" class="form-control" name="producer[<?=$key?>][email]" value="<?=$prod['email']?>" >
                              </div>
                              <div class="row">
                                <div class="col-sm-6">
                                  <div class="form-group">
                                    <label class="control-label">Producer’s work Phone:</label>
                                    <input type="tel" class="form-control" name="producer[<?=$key?>][work_phone]" value="<?=$prod['work_phone']?>">
                                    <small class="text-muted"><i class="fa fa-info-circle fa-fw"></i> Please include country code.</small>
                                  </div>
                                </div>
                                <div class="col-sm-6">
                                  <div class="form-group">
                                    <label class="control-label">Producer’s mobile Phone:</label>
                                    <input type="tel" class="form-control" name="producer[<?=$key?>][mob_phone]" value="<?=$prod['mob_phone']?>">
                                    <small class="text-muted"><i class="fa fa-info-circle fa-fw"></i> Please include country code.</small>
                                  </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label">Producer’s address</label>
                                <input type="text" class="form-control" name="producer[<?=$key?>][address]" value="<?=$prod['address']?>">
                              </div>
                            </div>
                            <?php }else{ ?>
                            <div>
                              <h5><b>Producer 1 Details</b></h5>
                              <input type="hidden" name="producer[0][id]">
                              <div class="form-group">
                                <label class="control-label">Producer’s name<span style="color:#ff1212">*</span></label>
                                <input type="text" class="form-control" name="producer[0][name]" required value="" pattern="[A-Za-z. ]+" title="Only alphabet dot and space charecters allowed">
                              </div>
                              <div class="form-group">
                                <label class="control-label">Producer’s email address<span style="color:#ff1212">*</span></label>
                                <input type="email" class="form-control" name="producer[0][email]" required value="" >
                              </div>
                              <div class="row">
                                <div class="col-sm-6">
                                  <div class="form-group">
                                    <label class="control-label">Producer’s work Phone:</label>
                                    <input type="tel" class="form-control" name="producer[0][work_phone]" value="">
                                    <small class="text-muted"><i class="fa fa-info-circle fa-fw"></i> Please include country code.</small>
                                  </div>
                                </div>
                                <div class="col-sm-6">
                                  <div class="form-group">
                                    <label class="control-label">Producer’s mobile Phone:</label>
                                    <input type="tel" class="form-control" name="producer[0][mob_phone]" value="">
                                    <small class="text-muted"><i class="fa fa-info-circle fa-fw"></i> Please include country code.</small>
                                  </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label">Producer’s address</label>
                                <input type="text" class="form-control" name="producer[0][address]" value="">
                              </div>
                            </div>
                            <?php }endforeach ?>
                          </div>
                          <p align="right">
                            <a onclick="add_producer(this)" href="javascript:void(0)">
                              <button type="button" class="btn btn-primary">Add another producer</button>
                            </a>
                          </p>
                        </div>
                        <div class="col-xs-12 col-sm-6" id="add_company">
                          <h5><b>Production/Institution/Organisation Details</b></h5>
                          <div class="form-group">
                            <label class="control-label">Company:</label>
                            <input type="text" class="form-control" name="prod_comp_name" id="prod_comp_name"  value="<?=$form_data['prod_comp_name']?>" >
                          </div>
                          <div class="form-group">
                            <label class="control-label">Company address:</label>
                            <input type="text" class="form-control" name="prod_comp_addr" value="<?=$form_data['prod_comp_addr']?>">
                          </div>
                          <div class="row">
                            <div class="col-sm-6">
                              <div class="form-group">
                                <label class="control-label">Company telephone:</label>
                                <input type="tel" class="form-control" name="prod_comp_phone" value="<?=$form_data['prod_comp_phone']?>">
                                <small class="text-muted"><i class="fa fa-info-circle fa-fw"></i> Please include country code.</small>
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="form-group">
                                <label class="control-label">Company email<span style="color:#ff1212"></span>:</label>
                                <input type="email" class="form-control" name="prod_comp_email" id="prod_comp_email" value="<?=$form_data['prod_comp_email']?>">
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label">Company website:</label>
                            <input type="url" class="form-control" name="prod_comp_website" value="<?=$form_data['prod_comp_website']?>">
                          </div>
                        </div>
                      </div>
                    </div>
                  </section>
                  <div class="clearfix">
                    <ul class="list-inline pull-left">
                      <li>
                        <button type="button" class="btn btn-default prev-step">Previous</button>
                      </li>
                    </ul>
                    <ul class="list-inline pull-right">
                      <li>
                        <input type="submit" name="form3" class="btn btn-primary" value="Save and continue">
                      </li>
                    </ul>
                  </div>
                </form>
              </div>
              <?php }if($step>3){ ?>
              <div class="tab-pane <?=$step==4?'active':''?>" role="tabpanel" id="step4">
                <h3>Cast and Crew <small class="text-muted text-danger pull-right"><em>(* marked fields are mandatory)</em></small></h3>
                <?php echo form_open_multipart(current_url_full()) ?>
                  <section class="film-details">
                    <div class="row">
                      <div class="col-xs-12 col-sm-6">
                        <div class="form-group">
                          <label class="control-label"><b>Cast</b></label>
                          <div class="table-responsive">
                            <table class="table table-bordered table-hover table-condensed" id="tab_logic">
                              <thead>
                                <tr>
                                  <th class="text-center">Actor Name</th>
                                  <th class="text-center">Character Name</th>
                                  <th></th>
                                </tr>
                              </thead>
                              <tbody id="add_cast">
                                 <?php
                                $cast_id = explode(',',$form_data['cast_id']);
                                foreach ($cast_id as $key => $value):
                                  $cast = get_anydata('cast_crew','name',$value);
                                  $role = @get_alldata('role',array('cast_id'=>$value))[0]['role'];
                                if($key==0){?>
                                <tr>
                                  <td>
                                    <input type="hidden" name="cast[actor][0][id]" value="<?=$value?>">
                                    <input type="text" placeholder="Enter Actor Name" class="form-control" name="cast[actor][0][name]" value="<?=$cast?>" pattern="[A-Za-z. ]+" title="Only alphabet dot and space charecters allowed"/>
                                  </td>
                                  <td>
                                    <input type="text" placeholder="Enter Character Name" class="form-control" name="cast[actor][0][role]" value="<?=$role?>" pattern="[A-Za-z. ]+" title="Only alphabet dot and space charecters allowed"/>
                                  </td>
                                  <td>
                                    <span class="input-group-append"><button type="button" class="btn btn-primary" onclick="add_cast(this)"><i class="fa fa-plus fa-fw"></i></button></span>
                                  </td>
                                </tr>
                                <?php }else{ ?>
                                <tr>
                                  <td>
                                    <input type="hidden" name="cast[actor][<?=$key?>][id]" value="<?=$value?>">
                                    <input type="text" placeholder="Enter Actor Name" class="form-control" name="cast[actor][<?=$key?>][name]" value="<?=$cast?>" pattern="[A-Za-z. ]+" title="Only alphabet dot and space charecters allowed"/>
                                  </td>
                                  <td>
                                    <input type="text" placeholder="Enter Character Name" class="form-control" name="cast[actor][<?=$key?>][role]" value="<?=$role?>" pattern="[A-Za-z. ]+" title="Only alphabet dot and space charecters allowed"/>
                                  </td>
                                  <td>
                                    <span class="input-group-append"><a type="button" class="btn btn-danger" href="<?=base_url()?>del_cast/?id=<?=$value?>"><i class="fa fa-close fa-fw"></i></a></span>
                                  </td>
                                </tr>
                                <?php }endforeach; ?>
                              </tbody>
                            </table>
                          </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                      <div class="col-xs-12 col-sm-6">
                         <input type="radio" name="cast[sp][]" required value="Original" <?=$form_data['sp']=='Original'?'checked':''?>> <label class="control-label"> Original Screenplay</label>
                         </div>
                         <div class="col-xs-12 col-sm-6">
                         <input type="radio" name="cast[sp][]" value="Adapted" <?=$form_data['sp']=='Adapted'?'checked':''?>> <label class="control-label"> Adapted Screenplay</label>
                         </div>
                         </div>
                        </div>
                        <?php if($form_data['sp']=='Adapted'){ ?>
                        <div id="sp55">
                        <div class="form-group">
                          <label class="control-label">Original Story<span style="color:#ff1212">*</span></label>
                          
                            <div id="addText">
                            <div class="input-group">
                              <input type="text" class="form-control" required id="w1" name="cast[scr_writer_org][]" value="<?=$form_data['scr_writer_org']?>" pattern="[A-Za-z. ]+" title="Only alphabet dot and space charecters allowed">
                             </div> 
                            </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label">Original Author<span style="color:#ff1212">*</span></label>
                          <div id="addText">
                            <div class="input-group">
                              <input type="text" class="form-control" required id="w2" name="cast[org_work_author][]" value="<?=$form_data['org_work_author']?>" pattern="[A-Za-z. ]+" title="Only alphabet dot and space charecters allowed">
                              
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label">Story Adapted by<span style="color:#ff1212">*</span></label>
                          <div id="addText">
                          <div class="input-group">
                            <input type="text" class="form-control" required id="w3" name="cast[scr_writer_adp][]" value="<?=$form_data['scr_writer_adp']?>" pattern="[A-Za-z. ]+" title="Only alphabet dot and space charecters allowed">
                            
                          </div>
                          </div>
                        </div>
                        </div>
                        <?php } else { ?>
                        <div id="sp55" style="display:none;">
                        <div class="form-group">
                          <label class="control-label">Original Story<span style="color:#ff1212">*</span></label>
                          
                            <div id="addText">
                            <div class="input-group">
                              <input type="text" class="form-control" id="w1" pattern="[A-Za-z. ]+" title="Only alphabet dot and space charecters allowed">
                             </div> 
                            </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label">Original Author<span style="color:#ff1212">*</span></label>
                          <div id="addText">
                            <div class="input-group">
                              <input type="text" class="form-control" id="w2" pattern="[A-Za-z. ]+" title="Only alphabet dot and space charecters allowed">
                              
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label">Story Adapted by<span style="color:#ff1212">*</span></label>
                          <div id="addText">
                          <div class="input-group">
                            <input type="text" class="form-control" id="w3" pattern="[A-Za-z. ]+" title="Only alphabet dot and space charecters allowed">
                            
                          </div>
                          </div>
                        </div>
                        </div>                        
                        <?php }?>                        
                        <?php if($form_data['sp']=='Original'){ ?>
                        <div id="sp5">
                        <div class="form-group">
                          <label class="control-label">Name of Author<span style="color:#ff1212">*</span></label>
                          
                            <div id="addText">
                         
                            <div class="input-group">
                              <input type="text" class="form-control" id="ow" name="cast[org_work_author][]" required value="<?=$form_data['org_work_author']?>" pattern="[A-Za-z. ]+" title="Only alphabet dot and space charecters allowed">
                              
                            </div>
                          </div>
                        </div>
                        
                        </div>  
                        <?php }else{?>
                         <div id="sp5" style="display:none;">
                        <div class="form-group">
                          <label class="control-label">Name of Author<span style="color:#ff1212">*</span></label>

                            <div class="input-group">
                              <input type="text" class="form-control" id="ow" pattern="[A-Za-z. ]+" title="Only alphabet dot and space charecters allowed">
                             
                            </div>
                        </div>
                        
                        </div>                       
                        
                        
                        <?php }?>
                        
                        
                      </div>
                      <div class="col-xs-12 col-sm-6">
                        <div class="form-group">
                          <label class="control-label">Director of photography<span style="color:#ff1212">*</span> (Mention NA if not applicable)</label>
                          <?php
                          $photo_director = explode(',',$form_data['photo_director']);
                          foreach ($photo_director as $key => $value):
                          if($key==0){?>
                          <div class="input-group">
                            <input type="text" required class="form-control" name="cast[photo_director][]" value="<?=$value?>" pattern="[A-Za-z. ]+" title="Only alphabet dot and space charecters allowed">
                            <span class="input-group-append"><button type="button" class="btn btn-default" onclick="addText(this,'photo_director')"><i class="fa fa-plus fa-fw"></i></button></span>
                          </div>
                          <div id="addText">
                          <?php }else{?>
                          <div class="input-group">
                            <input type="text" required class="form-control" name="cast[photo_director][]" value="<?=$value?>" pattern="[A-Za-z. ]+" title="Only alphabet dot and space charecters allowed">
                            <span class="input-group-append"><button type="button" class="btn btn-danger" onclick="removeThis(this)"><i class="fa fa-close fa-fw"></i></button></span>
                          </div>
                          <?php }endforeach ?>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label">Cinematographer<span style="color:#ff1212">*</span> (Mention NA if not applicable)</label>
                          <?php
                          $cinematographer = explode(',',$form_data['cinematographer']);
                          foreach ($cinematographer as $key => $value):
                          if($key==0){?>
                          <div class="input-group">
                            <input type="text" required class="form-control" name="cast[cinematographer][]" value="<?=$value?>" pattern="[A-Za-z. ]+" title="Only alphabet dot and space charecters allowed">
                            <span class="input-group-append"><button type="button" class="btn btn-default" onclick="addText(this,'cinematographer')"><i class="fa fa-plus fa-fw"></i></button></span>
                          </div>
                          <div id="addText">
                          <?php }else{?>
                          <div class="input-group">
                            <input type="text" required class="form-control" name="cast[cinematographer][]" value="<?=$value?>" pattern="[A-Za-z. ]+" title="Only alphabet dot and space charecters allowed">
                            <span class="input-group-append"><button type="button" class="btn btn-danger" onclick="removeThis(this)"><i class="fa fa-close fa-fw"></i></button></span>
                          </div>
                          <?php }endforeach ?>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label">Music Director<span style="color:#ff1212">*</span> (Mention NA if not applicable)</label>
                          <?php
                          $music = explode(',',$form_data['music']);
                          foreach ($music as $key => $value):
                          if($key==0){?>
                          <div class="input-group">
                            <input type="text" required class="form-control" name="cast[music][]" value="<?=$value?>" pattern="[A-Za-z. ]+" title="Only alphabet dot and space charecters allowed">
                            <span class="input-group-append"><button type="button" class="btn btn-default" onclick="addText(this,'music')"><i class="fa fa-plus fa-fw"></i></button></span>
                          </div>
                          <div id="addText">
                          <?php }else{?>
                          <div class="input-group">
                            <input type="text" required class="form-control" name="cast[music][]" value="<?=$value?>" pattern="[A-Za-z. ]+" title="Only alphabet dot and space charecters allowed">
                            <span class="input-group-append"><button type="button" class="btn btn-danger" onclick="removeThis(this)"><i class="fa fa-close fa-fw"></i></button></span>
                          </div>
                          <?php }endforeach ?>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label">Lyricist<span style="color:#ff1212">*</span> (Mention NA if not applicable)</label>
                          <?php
                          $composer = explode(',',$form_data['composer']);
                          foreach ($composer as $key => $value):
                          if($key==0){?>
                          <div class="input-group">
                            <input type="text" required class="form-control" name="cast[composer][]" value="<?=$value?>" pattern="[A-Za-z. ]+" title="Only alphabet dot and space charecters allowed">
                            <span class="input-group-append"><button type="button" class="btn btn-default" onclick="addText(this,'composer')"><i class="fa fa-plus fa-fw"></i></button></span>
                          </div>
                          <div id="addText">
                          <?php }else{?>
                          <div class="input-group">
                            <input type="text" required class="form-control" name="cast[composer][]" value="<?=$value?>" pattern="[A-Za-z. ]+" title="Only alphabet dot and space charecters allowed">
                            <span class="input-group-append"><button type="button" class="btn btn-danger" onclick="removeThis(this)"><i class="fa fa-close fa-fw"></i></button></span>
                          </div>
                          <?php }endforeach ?>
                          </div>
                        </div>  
                        
                        <div class="form-group">
                          <label class="control-label">Set Designer<span style="color:#ff1212">*</span> (Mention NA if not applicable)</label>
                          <?php
                          $set_designer = explode(',',$form_data['set_designer']);
                          foreach ($set_designer as $key => $value):
                          if($key==0){?>
                          <div class="input-group">
                            <input type="text" required class="form-control" name="cast[set_designer][]"  value="<?=$value?>" pattern="[A-Za-z. ]+" title="Only alphabet dot and space charecters allowed">
                            <span class="input-group-append"><button type="button" class="btn btn-default" onclick="addText(this,'set_designer')"><i class="fa fa-plus fa-fw"></i></button></span>
                          </div>
                          <div id="addText">
                          <?php }else{?>
                          <div class="input-group">
                            <input type="text" required class="form-control" name="cast[set_designer][]" value="<?=$value?>" pattern="[A-Za-z. ]+" title="Only alphabet dot and space charecters allowed">
                            <span class="input-group-append"><button type="button" class="btn btn-danger" onclick="removeThis(this)"><i class="fa fa-close fa-fw"></i></button></span>
                          </div>
                          <?php }endforeach ?>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label">Editor<span style="color:#ff1212">*</span> (Mention NA if not applicable)</label>
                          <?php
                          $editing = explode(',',$form_data['editing']);
                          foreach ($editing as $key => $value):
                          if($key==0){?>
                          <div class="input-group">
                            <input type="text" class="form-control" name="cast[editing][]" required value="<?=$value?>" pattern="[A-Za-z. ]+" title="Only alphabets, dots and spaces are allowed">
                            <span class="input-group-append"><button type="button" class="btn btn-default" onclick="addText(this,'editing')"><i class="fa fa-plus fa-fw"></i></button></span>
                          </div>
                          <div id="addText">
                          <?php }else{?>
                          <div class="input-group">
                            <input type="text" class="form-control" name="cast[editing][]" required value="<?=$value?>" pattern="[A-Za-z. ]+" title="Only alphabets, dots and spaces are allowed">
                            <span class="input-group-append"><button type="button" class="btn btn-danger" onclick="removeThis(this)"><i class="fa fa-close fa-fw"></i></button></span>
                          </div>
                          <?php }endforeach ?>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label">Subtitles in English<span style="color:#ff1212">*</span></label>
                          <div class="input-group">
                          <input type="checkbox" name="cast[subtitles][]" required value="Yes" <?=$form_data['subtitles']=='Yes'?'checked':''?>>Yes
                        </div>
                        <small class="text-muted"><i class="fa fa-info-circle fa-fw"></i> Subtitles must be burnt-in.</small>
                        </div>
                        <!--<div class="form-group">
                              <label class="control-label">Subtitles in English</label>
                              <select class="form-control" name="cast[subtitles][]" data-placeholder="---Choose---">
                                <option selected value="" disabled>---Choose---</option>
                                <option value="Yes" <?=$form_data['subtitles']=='Yes'?'selected':''?>>Yes</option>
                                <option value="No" <?=$form_data['subtitles']=='No'?'selected':''?>>No</option>
                              </select>
                        </div>-->
                        <!-- <div class="form-group">
                          <label class="control-label">Subtitles in language</label>
                          <input type="text" class="form-control" name="" required value="<?=set_value('name')?>">
                        </div> -->
                      </div>
                    </div>
                  </section>
                  <div class="clearfix">
                    <ul class="list-inline pull-left">
                      <li>
                        <button type="button" class="btn btn-default prev-step">Previous</button>
                      </li>
                    </ul>
                    <ul class="list-inline pull-right">
                      <li>
                      </li>
                      <li>
                        <input type="submit" name="form4" class="btn btn-primary" value="Save and continue">
                      </li>
                    </ul>
                  </div>
                </form>
              </div>
              <?php }if($step>4){ ?>
              <div class="tab-pane <?=$step==5?'active':''?>" role="tabpanel" id="step5">
                <h3>Sales Details <small class="text-muted text-danger pull-right"><em>(* marked fields are mandatory)</em></small></h3>
                <?php echo form_open_multipart(current_url_full()) ?>
                  <section class="film-details">
                    <div class="row">
                      <div class="col-xs-12 col-sm-6">
                        <h5><b>International sales company</b></h5>
                        <div class="">
                          <div class="form-group">
                            <label class="control-label">Name</label>
                            <input type="hidden" class="form-control" name="step_5_data" value="<?php if($form_data['step_5_data']==""){ echo "step 5 data";}else{echo $form_data['step_5_data'];}?>">
                            <input type="text" class="form-control" name="int_sale_comp_name" value="<?=$form_data['int_sale_comp_name']?>">
                          </div>
                          <div class="form-group">
                            <label class="control-label">Address</label>
                            <input type="text" class="form-control" name="int_sale_comp_addr" value="<?=$form_data['int_sale_comp_addr']?>">
                          </div>
                          <div class="row">
                            <div class="col-sm-6">
                              <div class="form-group">
                                <label class="control-label">Telephone</label>
                                <input type="tel" class="form-control" name="int_sale_comp_phn" value="<?=$form_data['int_sale_comp_phn']?>">
                                <small class="text-muted"><i class="fa fa-info-circle fa-fw"></i> Please include country code.</small>
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="form-group">
                                <label class="control-label">Email</label>
                                <input type="email" class="form-control" name="int_sale_comp_email" value="<?=$form_data['int_sale_comp_email']?>">
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label">Website</label>
                            <input type="url" class="form-control" name="int_sale_comp_website" value="<?=$form_data['int_sale_comp_website']?>">
                          </div>
                        </div>
                      </div>
                      <div class="col-xs-12 col-sm-6">
                        <h5><b>Distribution company in the festival country</b></h5>
                        <div class="">
                          <div class="form-group">
                            <label class="control-label">Name</label>
                            <input type="text" class="form-control" name="dist_comp_name" value="<?=$form_data['dist_comp_name']?>">
                          </div>
                          <div class="form-group">
                            <label class="control-label">Address</label>
                            <input type="text" class="form-control" name="dist_comp_addr" value="<?=$form_data['dist_comp_addr']?>">
                          </div>
                          <div class="row">
                            <div class="col-sm-6">
                              <div class="form-group">
                                <label class="control-label">Telephone</label>
                                <input type="tel" class="form-control" name="dist_comp_phn" value="<?=$form_data['dist_comp_phn']?>">
                                <small class="text-muted"><i class="fa fa-info-circle fa-fw"></i> Please include country code.</small>
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="form-group">
                                <label class="control-label">Email</label>
                                <input type="email" class="form-control" name="dist_comp_email" value="<?=$form_data['dist_comp_email']?>">
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label">Website</label>
                            <input type="url" class="form-control" name="dist_comp_website" value="<?=$form_data['dist_comp_website']?>">
                          </div>
                        </div>
                      </div>
                    </div>
                  </section>
                  <div class="clearfix">
                    <ul class="list-inline pull-left">
                      <li>
                        <button type="button" class="btn btn-default prev-step">Previous</button>
                      </li>
                    </ul>
                    <ul class="list-inline pull-right">
                      <li>
                      </li>
                      <li>
                        <input type="submit" name="form5" class="btn btn-primary" value="Save and continue">
                      </li>
                    </ul>
                  </div>
                </form>
              </div>
              <?php }if($step>5){ ?>
              <div class="tab-pane <?=$step==6?'active':''?>" role="tabpanel" id="step6">
                <h3>Technical Details <small class="text-muted text-danger pull-right"><em>(* marked fields are mandatory)</em></small></h3>
                <?php echo form_open_multipart(current_url_full()) ?>
                  <section class="film-details">
                    <div class="row">
                      <div class="col-xs-12 col-sm-12">
                        <div class="row">
                          <div class="col-sm-6">
                            <div class="form-group">
                              <label class="control-label">Film length<span style="color:#ff1212">*</span> <em>(in minutes)</em> [Eg: 1hr=60]</label>
                              <input type="number" pattern="[0-9.]{2,6}" min="60" step="0.01" title="Film length in minutes(Minimum 60 Minutes)" class="form-control" name="film_length" required value="<?=$form_data['film_length']?>">
                            <small class="text-muted"><i class="fa fa-info-circle fa-fw"></i>Film Length should be more than 60 minutes</small>
                            </div>
                          </div>
                          <!--<div class="col-sm-6">
                            <div class="form-group">
                              <label class="control-label">Frame rate* <em>(f/sec)</em></label>
                              <input type="text" class="form-control" name="frame_rate" required value="<?=$form_data['frame_rate']?>">
                            </div>
                          </div>-->
                         <input type="hidden" class="form-control" name="step_7_data" value="<?php if($form_data['step_7_data']==""){ echo "step 7 data";}else{echo $form_data['step_7_data'];}?>">
                        <div class="col-sm-6">
                            <div class="form-group">
                              <label class="control-label">Color<span style="color:#ff1212">*</span></label>
                              <select class="form-control" name="color" required data-placeholder="---Choose---">
                                <option selected value="" disabled>---Choose---</option>
                                <option value="Color" <?=$form_data['color']=='Color'?'selected':''?>>Color</option>
                                <option value="Black & White" <?=$form_data['color']=='Black & White'?'selected':''?>>Black & White</option>
                                <option value="Color + Black & White" <?=$form_data['color']=='Color + Black & White'?'selected':''?>>Color + Black & White</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="form-group">
                              <label class="control-label">Screen ratio<span style="color:#ff1212">*</span></label>
                              <select class="form-control" name="screen_ratio" required data-placeholder="---Choose---">
                                <option selected value="" disabled>---Choose---</option>
                                <option value="1:1.33 (4/3)" <?=$form_data['screen_ratio']=='1:1.33 (4/3)'?'selected':''?>>1:1.33 (4/3) </option>
                                <option value="1:1.37" <?=$form_data['screen_ratio']=='1:1.37'?'selected':''?>>1:1.37</option>
                                <option value="1:1.66" <?=$form_data['screen_ratio']=='1:1.66'?'selected':''?>>1:1.66</option>
                                <option value="1:1.78 (16/9)" <?=$form_data['screen_ratio']=='1:1.78 (16/9)'?'selected':''?>>1:1.78 (16/9)</option>
                                <option value="1:1.85" <?=$form_data['screen_ratio']=='1:1.85'?'selected':''?>>1:1.85</option>
                                <option value="1:2.39 (Cinemascope)" <?=$form_data['screen_ratio']=='1:2.39 (Cinemascope)'?'selected':''?>>1:2.39 (Cinemascope)</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="form-group">
                              <label class="control-label">Sound Format<span style="color:#ff1212">*</span></label>
                              <select class="form-control" name="sound_format"  onchange='CheckSound(this.value);' required data-placeholder="---Choose---">
                                <option selected value="" disabled>---Choose---</option>
                                <option value="5.1" <?=$form_data['sound_format']=='5.1'?'selected':''?>>5.1 </option>
                                <option value="7.1" <?=$form_data['sound_format']=='7.1'?'selected':''?>>7.1 </option>
                                <option value="Dolby Atmos" <?=$form_data['sound_format']=='Dolby Atmos'?'selected':''?>>Dolby Atmos </option>
                                <option value="Other" <?=(($form_data['sound_format']!='') && ($form_data['sound_format']!='5.1') && ($form_data['sound_format']!='7.1') && ($form_data['sound_format']!='Dolby Atmos'))?'selected':''?>>Other (specify)</option>
                              </select>
                              <?php if(($form_data['sound_format']!='') && ($form_data['sound_format']!='5.1') && ($form_data['sound_format']!='7.1') && ($form_data['sound_format']!='Dolby Atmos')){ ?>
                              <input type="text" class="form-control" name="sound_format" required id="sound" value="<?=$form_data['sound_format']?>" />
                              <?php  }else{ ?>
                              <input type="text" class="form-control" name=""  id="sound" style='display:none;' />
                              <?php } ?>
                            </div>
                          </div>
                          </div>
                        <div class="row">
                          <?php //if($cat_details['type']==1){?>
                          <div class="col-sm-6">
                            <div class="form-group">
                              <label class="control-label">Festival Copy format<span style="color:#ff1212">*</span></label>
                              <select class="form-control" name="copy_format"  onchange='CheckFestival(this.value);' required data-placeholder="---Choose---">
                                <option selected value="" disabled>---Choose---</option>
                                <option value="DCP" <?=$form_data['copy_format']=='DCP'?'selected':''?>>DCP</option>
                                <option value="QuickTime ProRes 422" <?=$form_data['copy_format']=='QuickTime ProRes 422'?'selected':''?>>QuickTime ProRes 422</option>
                                <option value="MP4" <?=$form_data['copy_format']=='MP4'?'selected':''?>>MP4</option>
                                <!--<option value="DVD" <?=$form_data['copy_format']=='DVD'?'selected':''?>>DVD</option>-->
                                <option value="MOV" <?=$form_data['copy_format']=='MOV'?'selected':''?>>MOV</option>
                                <option value="Other" <?=(($form_data['copy_format']!='') && ($form_data['copy_format']!='DCP') && ($form_data['copy_format']!='MP4') && ($form_data['copy_format']!='DVD') && ($form_data['copy_format']!='MOV') && ($form_data['copy_format']!='QuickTime ProRes 422'))?'selected':''?>>Other (specify)</option>
                              </select>
                              <?php if(($form_data['copy_format']!='') && ($form_data['copy_format']!='DCP') && ($form_data['copy_format']!='MP4') && ($form_data['copy_format']!='DVD') && ($form_data['copy_format']!='MOV') && ($form_data['copy_format']!='QuickTime ProRes 422')){ ?>
                              <input type="text" class="form-control" name="copy_format" required id="festival" value="<?=$form_data['copy_format']?>" />
                              <?php  }else{ ?>
                              <input type="text" class="form-control" name="" id="festival" style='display:none;' />
                              <?php } ?>
                              <?php if(($form_data['copy_format']!='') AND ($form_data['copy_format']=='DCP')){ ?>
                              <div id="dcp5">
                                <select class="form-control" name="dcp_format" required data-placeholder="---Choose Encryption ---">
                                <option selected value="" disabled>---Choose Encryption ---</option>
                                <option value="Encrypted 2K" <?=$form_data['dcp_format']=='Encrypted 2K'?'selected':''?>>Encrypted 2K</option>
                                <option value="Encrypted 4K" <?=$form_data['dcp_format']=='Encrypted 4K'?'selected':''?>>Encrypted 4K</option>
                                <option value="Unencrypted 2K" <?=$form_data['dcp_format']=='Unencrypted 2K'?'selected':''?>>Unencrypted 2K</option>
                                <option value="Unencrypted 4K" <?=$form_data['dcp_format']=='Unencrypted 4K'?'selected':''?>>Unencrypted 4K</option>
                              </select>
                              <input type="text" class="form-control" name="frame_rate" required value="<?=$form_data['frame_rate']?>" />
                              <small class="text-muted"><i class="fa fa-info-circle fa-fw"></i> Frame rate (f/sec)</small>
                              <small class="text-muted"><i class="fa fa-info-circle fa-fw"></i>“Digital Cinema Naming Convention” to be used for the text that goes into the “ContentTitleText” element of a composition playlist</small>
                              </div>
                              
                              <?php  }else{ ?>
                              <div style='display:none;' id="dcp5">
                                <select class="form-control" name="" id="dr" data-placeholder="---Choose Encryption---" >
                                <option selected value="" disabled>---Choose Encryption---</option>
                                <option value="Encrypted 2K">Encrypted 2K</option>
                                <option value="Encrypted 4K">Encrypted 4K</option>
                                <option value="Unencrypted 2K">Unencrypted 2K</option>
                                <option value="Unencrypted 4K">Unencrypted 4K</option>
                              </select>
                              <input type="text" class="form-control"  name="" id="fr" placeholder="Enter Frame rate (f/sec)" />
                              <small class="text-muted"><i class="fa fa-info-circle fa-fw"></i> Frame rate (f/sec)</small><br>
                              <small class="text-muted"><i class="fa fa-info-circle fa-fw"></i>“Digital Cinema Naming Convention” to be used for the text that goes into the “ContentTitleText” element of a composition playlist</small>
                              </div>
                              
                              <?php } ?>  
                              
     
     
     
                              
                              <?php if(($form_data['copy_format']!='') AND ($form_data['copy_format']=='QuickTime ProRes 422')){ ?>
                              <div id="dcp55">
                                <select class="form-control" name="codec" required data-placeholder="---Choose Codec ---">
                                <option selected value="" disabled>---Choose Codec ---</option>
                                <option value="ProRes" <?=$form_data['codec']=='ProRes'?'selected':''?>>ProRes</option>
                                <option value="ProRes 444" <?=$form_data['codec']=='ProRes 444'?'selected':''?>>ProRes 444</option>
                                <option value="ProRes HQ" <?=$form_data['codec']=='ProRes HQ'?'selected':''?>>ProRes HQ</option>
                                <option value="ProRes 422" <?=$form_data['codec']=='ProRes 422'?'selected':''?>>ProRes 422</option>
                              </select>
                                <select class="form-control" name="frame_dimension" required data-placeholder="---Choose Frame Dimension ---">
                                <option selected value="" disabled>---Choose Frame Dimension ---</option>
                                <option value="HD (1920 x 1080)" <?=$form_data['frame_dimension']=='HD (1920 x 1080)'?'selected':''?>>HD (1920 x 1080)</option>
                                <option value="2K (1998 x 1080)" <?=$form_data['frame_dimension']=='2K (1998 x 1080)'?'selected':''?>>2K (1998 x 1080)</option>
                              </select>
                                <select class="form-control" name="scanning_method" required data-placeholder="---Choose Scanning Method ---">
                                <option selected value="" disabled>---Choose Scanning Method ---</option>
                                <option value="Progressive" <?=$form_data['scanning_method']=='Progressive'?'selected':''?>>Progressive</option>
                              </select>
                                <select class="form-control" name="colour_sampling" required data-placeholder="---Choose Colour Sampling ---">
                                <option selected value="" disabled>---Choose Colour Sampling ---</option>
                                <option value="4:2:2" <?=$form_data['colour_sampling']=='4:2:2'?'selected':''?>>4:2:2</option>
                                <option value="4:4:4" <?=$form_data['colour_sampling']=='4:4:4'?'selected':''?>>4:4:4</option>
                              </select>
                                <select class="form-control" name="frame_rate" required data-placeholder="---Choose Frame Rate ---">
                                <option selected value="" disabled>---Choose Frame Rate  ---</option>
                                <option value="23.98 fps" <?=$form_data['frame_rate']=='23.98 fps'?'selected':''?>>23.98 fps</option>
                                <option value="24 fps" <?=$form_data['frame_rate']=='24 fps'?'selected':''?>>24 fps</option>
                                <option value="25 fps" <?=$form_data['frame_rate']=='25 fps'?'selected':''?>>25 fps</option>
                                <option value="29.97 fps" <?=$form_data['frame_rate']=='29.97 fps'?'selected':''?>>29.97 fps</option>
                              </select>
                                <select class="form-control" name="gamma" required data-placeholder="---Choose Gamma ---">
                                <option selected value="" disabled>---Choose Gamma ---</option>
                                <option value="Apple ProRes codecs have a native gamma of 2.2" <?=$form_data['gamma']=='Apple ProRes codecs have a native gamma of 2.2'?'selected':''?>>Apple ProRes codecs have a native gamma of 2.2</option>
                              </select>
                                <select class="form-control" name="audio_format" required data-placeholder="---Choose Audio Format ---">
                                <option selected value="" disabled>---Choose Audio Format ---</option>
                                <option value="2.0 Stereo" <?=$form_data['audio_format']=='2.0 Stereo'?'selected':''?>>2.0 Stereo</option>
                                <option value="5.1 Linear PCM" <?=$form_data['audio_format']=='5.1 Linear PCM'?'selected':''?>>5.1 Linear PCM</option>
                              </select>
                                <select class="form-control" name="channel_layout" required data-placeholder="---Choose Channel Layout ---">
                                <option selected value="" disabled>---Choose Channel Layout ---</option>
                                <option value="L-R" <?=$form_data['channel_layout']=='L-R'?'selected':''?>>L-R</option>
                                <option value="L-R-C-Sub-LS-RS" <?=$form_data['channel_layout']=='L-R-C-Sub-LS-RS'?'selected':''?>>L-R-C-Sub-LS-RS</option>
                              </select>
                              <small class="text-muted"><i class="fa fa-info-circle fa-fw"></i> <b>Min Bit Rate should be more than 4096</b></small>
                              </div>
                              
                              <?php  }else{ ?>
                              <div style='display:none;' id="dcp55">
                                <select class="form-control" name="" id="dd" data-placeholder="---Choose Codec---" >
                                <option selected value="" disabled>---Choose Codec---</option>
                                <option value="ProRes">ProRes</option>
                                <option value="ProRes 444">ProRes 444</option>
                                <option value="ProRes HQ">ProRes HQ</option>
                                <option value="ProRes 422">ProRes 422</option>
                              </select>
                              <select class="form-control" name="" id="dd1" data-placeholder="---Choose Frame Dimension---" >
                                <option selected value="" disabled>---Choose Frame Dimension---</option>
                                <option value="HD (1920 x 1080)">HD (1920 x 1080)</option>
                                <option value="2K (1998 x 1080)">2K (1998 x 1080)</option>
                              </select>
                               <select class="form-control" name="" id="dd2" data-placeholder="---Choose Scanning Method---" >
                                <option selected value="" disabled>---Choose Scanning Method---</option>
                                <option value="Progressive">Progressive</option>
                              </select>
                              <select class="form-control" name="" id="dd3" data-placeholder="---Choose Colour Sampling---" >
                                <option selected value="" disabled>---Choose Colour Sampling---</option>
                                <option value="4:2:2">4:2:2</option>
                                <option value="4:4:4">4:4:4</option>
                              </select>
                              <select class="form-control" name="" id="dd4" data-placeholder="---Choose Frame Rate---" >
                                <option selected value="" disabled>---Choose Frame Rate---</option>
                                <option value="23.98 fps">23.98 fps</option>
                                <option value="24 fps">24 fps</option>
                                <option value="25 fps">25 fps</option>
                                <option value="29.97 fps">29.97 fps</option>
                              </select>
                               <select class="form-control" name="" id="dd5" data-placeholder="---Choose Gamma---" >
                                <option selected value="" disabled>---Choose Gamma---</option>
                                <option value="Apple ProRes codecs have a native gamma of 2.2">Apple ProRes codecs have a native gamma of 2.2</option>
                              </select>
                              <select class="form-control" name="" id="dd6" data-placeholder="---Choose Audio Format---" >
                                <option selected value="" disabled>---Choose Audio Format---</option>
                                <option value="2.0 Stereo">2.0 Stereo</option>
                                <option value="5.1 Linear PCM">5.1 Linear PCM</option>
                              </select>
                              <select class="form-control" name="" id="dd7" data-placeholder="---Choose Channel Layout---" >
                                <option selected value="" disabled>---Choose Channel Layout---</option>
                                <option value="L-R">L-R</option>
                                <option value="L-R-C-Sub-LS-RS">L-R-C-Sub-LS-RS</option>
                              </select>
                              <small class="text-muted"><i class="fa fa-info-circle fa-fw"></i> <b>Min Bit Rate should be more than 4096</b></small>
                              </div>
                              
                              <?php } ?>   
                              <?php if(($form_data['copy_format']!='') AND ($form_data['copy_format']=='MP4')){ ?>
                              <div id="dcp555">
                                <select class="form-control" name="codec" required data-placeholder="---Choose Codec ---">
                                <option selected value="" disabled>---Choose Codec  ---</option>
                                <option value="H.264" <?=$form_data['codec']=='H.264'?'selected':''?>>H.264</option>
                                <option value="H.265" <?=$form_data['codec']=='H.265'?'selected':''?>>H.265</option>
                              </select>
                                <select class="form-control" name="frame_dimension" required data-placeholder="---Choose Frame Dimension ---">
                                <option selected value="" disabled>---Choose Frame Dimension ---</option>
                                <option value="HD (1920 x 1080)" <?=$form_data['frame_dimension']=='HD (1920 x 1080)'?'selected':''?>>HD (1920 x 1080)</option>
                                <option value="2K (1998 x 1080)" <?=$form_data['frame_dimension']=='2K (1998 x 1080)'?'selected':''?>>2K (1998 x 1080)</option>
                              </select>
                                <select class="form-control" name="scanning_method" required data-placeholder="---Choose Scanning Method ---">
                                <option selected value="" disabled>---Choose Scanning Method ---</option>
                                <option value="Progressive" <?=$form_data['scanning_method']=='Progressive'?'selected':''?>>Progressive</option>
                              </select>
                                <select class="form-control" name="colour_sampling" required data-placeholder="---Choose Colour Sampling ---">
                                <option selected value="" disabled>---Choose Colour Sampling ---</option>
                                <option value="4:2:2" <?=$form_data['colour_sampling']=='4:2:2'?'selected':''?>>4:2:2</option>
                                <option value="4:4:4" <?=$form_data['colour_sampling']=='4:4:4'?'selected':''?>>4:4:4</option>
                              </select>
                                <select class="form-control" name="frame_rate" required data-placeholder="---Choose Frame Rate ---">
                                <option selected value="" disabled>---Choose Frame Rate  ---</option>
                                <option value="23.98 fps" <?=$form_data['frame_rate']=='23.98 fps'?'selected':''?>>23.98 fps</option>
                                <option value="24 fps" <?=$form_data['frame_rate']=='24 fps'?'selected':''?>>24 fps</option>
                                <option value="25 fps" <?=$form_data['frame_rate']=='25 fps'?'selected':''?>>25 fps</option>
                                <option value="29.97 fps" <?=$form_data['frame_rate']=='29.97 fps'?'selected':''?>>29.97 fps</option>
                              </select>
                                <select class="form-control" name="gamma" required data-placeholder="---Choose Gamma ---">
                                <option selected value="" disabled>---Choose Gamma ---</option>
                                <option value="Apple ProRes codecs have a native gamma of 2.2" <?=$form_data['gamma']=='Apple ProRes codecs have a native gamma of 2.2'?'selected':''?>>Apple ProRes codecs have a native gamma of 2.2</option>
                              </select>
                                <select class="form-control" name="audio_format" required data-placeholder="---Choose Audio Format ---">
                                <option selected value="" disabled>---Choose Audio Format ---</option>
                                <option value="2.0 Stereo" <?=$form_data['audio_format']=='2.0 Stereo'?'selected':''?>>2.0 Stereo</option>
                                <option value="5.1 Linear PCM" <?=$form_data['audio_format']=='5.1 Linear PCM'?'selected':''?>>5.1 Linear PCM</option>
                              </select>
                                <select class="form-control" name="channel_layout" required data-placeholder="---Choose Channel Layout ---">
                                <option selected value="" disabled>---Choose Channel Layout ---</option>
                                <option value="L-R" <?=$form_data['channel_layout']=='L-R'?'selected':''?>>L-R</option>
                                <option value="L-R-C-Sub-LS-RS" <?=$form_data['channel_layout']=='L-R-C-Sub-LS-RS'?'selected':''?>>L-R-C-Sub-LS-RS</option>
                              </select>                              
                              <small class="text-muted"><i class="fa fa-info-circle fa-fw"></i> <b>Min Bit Rate should be more than 4096</b></small>
                              </div>
                              
                              <?php  }else{ ?>
                              <div style='display:none;' id="dcp555">
                                <select class="form-control" name="" id="dd8" data-placeholder="---Choose Codec---" >
                                <option selected value="" disabled>---Choose Codec---</option>
                                <option value="H.264">H.264</option>
                                <option value="H.265">H.265</option>
                              </select>
                              <select class="form-control" name="" id="dd9" data-placeholder="---Choose Frame Dimension---" >
                                <option selected value="" disabled>---Choose Frame Dimension---</option>
                                <option value="HD (1920 x 1080)">HD (1920 x 1080)</option>
                                <option value="2K (1998 x 1080)">2K (1998 x 1080)</option>
                              </select>
                               <select class="form-control" name="" id="dd10" data-placeholder="---Choose Scanning Method---" >
                                <option selected value="" disabled>---Choose Scanning Method---</option>
                                <option value="Progressive">Progressive</option>
                              </select>
                              <select class="form-control" name="" id="dd11" data-placeholder="---Choose Colour Sampling---" >
                                <option selected value="" disabled>---Choose Colour Sampling---</option>
                                <option value="4:2:2">4:2:2</option>
                                <option value="4:4:4">4:4:4</option>
                              </select>
                              <select class="form-control" name="" id="dd12" data-placeholder="---Choose Frame Rate---" >
                                <option selected value="" disabled>---Choose Frame Rate---</option>
                                <option value="23.98 fps">23.98 fps</option>
                                <option value="24 fps">24 fps</option>
                                <option value="25 fps">25 fps</option>
                                <option value="29.97 fps">29.97 fps</option>
                              </select>
                               <select class="form-control" name="" id="dd13" data-placeholder="---Choose Gamma---" >
                                <option selected value="" disabled>---Choose Gamma---</option>
                                <option value="Apple ProRes codecs have a native gamma of 2.2">Apple ProRes codecs have a native gamma of 2.2</option>
                              </select>
                              <select class="form-control" name="" id="dd14" data-placeholder="---Choose Audio Format---" >
                                <option selected value="" disabled>---Choose Audio Format---</option>
                                <option value="2.0 Stereo">2.0 Stereo</option>
                                <option value="5.1 Linear PCM">5.1 Linear PCM</option>
                              </select>
                              <select class="form-control" name="" id="dd15" data-placeholder="---Choose Channel Layout---" >
                                <option selected value="" disabled>---Choose Channel Layout---</option>
                                <option value="L-R">L-R</option>
                                <option value="L-R-C-Sub-LS-RS">L-R-C-Sub-LS-RS</option>
                              </select>  
                              <small class="text-muted"><i class="fa fa-info-circle fa-fw"></i> <b>Min Bit Rate should be more than 4096</b></small>
                              </div>
                              
                              <?php } ?>                                 
                              
                              
                              
                              
                              
                              
                              
                              
                              
                              
                              
                              
                              
                              
                              
                            </div>
                          </div>
                          <?php //} ?>
                          <div class="col-sm-6">
                              
                            <div class="form-group">
                              <label class="control-label">Dimension</label>
                              <select class="form-control" name="dimension" data-placeholder="---Choose---">
                                <option selected value="" disabled>---Choose---</option>
                                <option value="2D" <?=$form_data['dimension']=='2D'?'selected':''?>>2D</option>
                                <option value="3D" <?=$form_data['dimension']=='3D'?'selected':''?> disabled >3D</option>
                              </select>
                            </div>
                          </div>                              
                           <!-- <div class="form-group">
                              <label class="control-label">DCP<?=$cat_details['type']==0?'*':''?></label>
                              <select class="form-control" name="dcp_format" <?=$cat_details['type']==0?'required':''?> data-placeholder="---Choose---">
                                <option selected value="" disabled>---Choose---</option>
                                <option value="Encrypted 2K" <?=$form_data['dcp_format']=='Encrypted 2K'?'selected':''?>>Encrypted 2K</option>
                                <option value="Unencrypted 2K" <?=$form_data['dcp_format']=='Unencrypted 2K'?'selected':''?>>Unencrypted 2K</option>
                              </select>
                            </div>
                          </div>-->
                        <div class="col-sm-6">
                            <div class="form-group">
                              <label class="control-label">Image Size<span style="color:#ff1212">*</span></label>
                              <select class="form-control" name="copy_format_image_size" required data-placeholder="---Choose---">
                                <option selected value="" disabled>---Choose---</option>
                                <option value="HD" <?=$form_data['copy_format_image_size']=='HD'?'selected':''?>>HD</option>
                                <option value="Full" <?=$form_data['copy_format_image_size']=='Full'?'selected':''?>>Full</option>                                
                                <option value="Flat" <?=$form_data['copy_format_image_size']=='Flat'?'selected':''?>>Flat</option>
                                <option value="Scope[2k]" <?=$form_data['copy_format_image_size']=='Scope[2k]'?'selected':''?>>Scope[2k]</option>
                                <option value="Scope[4k]" <?=$form_data['copy_format_image_size']=='Scope[4k]'?'selected':''?>>Scope[4k]</option>
                              </select>
                            </div>
                        </div>                          
                        </div>
                      </div>
                      <div class="col-xs-12 col-sm-12">


                        <div class="form-group">
                          <label class="control-label">URL of online screener<span style="color:#ff1212">*</span></label>
                          <input type="url" class="form-control" name="screener_url" required value="<?=$form_data['screener_url']?>">
                        </div>
                        <div class="form-group">
                          <label class="control-label">Username of online screener<span style="color:#ff1212">*</span></label>
                          <input type="text" class="form-control" name="screener_username" required value="<?=$form_data['screener_username']?>">
                          <small class="text-muted"><i class="fa fa-info-circle fa-fw"></i> Please write N/A if not applicable</small>
                        </div>
                        <div class="form-group">
                          <label class="control-label">Password of online screener<span style="color:#ff1212">*</span></label>
                          <input type="text" class="form-control" name="screener_password" required value="<?=$form_data['screener_password']?>">
                        </div>
                      </div>
                    </div>
                  </section>
                  <div class="clearfix">
                    <ul class="list-inline pull-left">
                      <li>
                        <button type="button" class="btn btn-default prev-step">Previous</button>
                      </li>
                    </ul>
                    <ul class="list-inline pull-right">
                      <li>
                      </li>
                      <li>
                        <input type="submit" name="form6" class="btn btn-primary" value="Save and continue">
                      </li>
                    </ul>
                  </div>
                </form>
              </div>
              <?php }if($step<0){ ?>
              <div class="tab-pane <?=$step==77?'active':''?>" role="tabpanel" id="step77">
                <h3>Print and Press Information <small class="text-muted text-danger pull-right"><em>(* marked fields are mandatory)</em></small></h3>
                <?php echo form_open_multipart(current_url_full()) ?>
                  <section class="film-details">
                    <div class="row">
                      <div class="col-xs-12 col-sm-6">
                        <h5><b>Print traffic</b></h5>
                        <div class="row">
                          <div class="col-sm-6">
                              <div class="form-group">
                                <label class="control-label">Value of the copy<span style="color:#ff1212">*</span></label>
                                <input type="text" class="form-control" name="print_traffic_vc" required value="<?=$form_data['print_traffic_vc']?>">
                                <small class="text-muted"><i class="fa fa-info-circle fa-fw"></i> Monetary valuation with currency</small>
                              </div>
                          </div>
                          <div class="col-sm-6">
                              <div class="form-group">
                                <label class="control-label">Return of copies</label>
                                <input type="text" class="form-control" name="print_traffic_rc"  value="<?=$form_data['print_traffic_rc']?>">
                              </div>
                          </div>
                          <div class="col-sm-12">
                              <div class="form-group">
                                <label class="control-label">Company</label>
                                <input type="text" class="form-control" name="print_traffic_comp"  value="<?=$form_data['print_traffic_comp']?>">
                              </div>
                          </div>
                          <div class="col-sm-6">
                              <div class="form-group">
                                <label class="control-label">Name</label>
                                <input type="text" class="form-control" name="print_traffic_name"  value="<?=$form_data['print_traffic_name']?>">
                              </div>
                          </div>
                          <div class="col-sm-6">
                              <div class="form-group">
                                <label class="control-label">Email</label>
                                <input type="email" class="form-control" name="print_traffic_email"  value="<?=$form_data['print_traffic_email']?>">
                              </div>
                          </div>
                          <div class="col-sm-12">
                              <div class="form-group">
                                <label class="control-label">Address</label>
                                <input type="text" class="form-control" name="print_traffic_address"  value="<?=$form_data['print_traffic_address']?>">
                              </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-xs-12 col-sm-6">
                        <h5><b>Press agent</b></h5>
                        <div class="row">
                          <div class="col-sm-6">
                              <div class="form-group">
                                <label class="control-label">Company</label>
                                <input type="text" class="form-control" name="press_agent_company"  value="<?=$form_data['press_agent_company']?>">
                              </div>
                          </div>
                          <div class="col-sm-6">
                              <div class="form-group">
                                <label class="control-label">Name</label>
                                <input type="text" class="form-control" name="press_agent_name" value="<?=$form_data['press_agent_name']?>">
                              </div>
                          </div>
                          <div class="col-sm-6">
                              <div class="form-group">
                                <label class="control-label">Email</label>
                                <input type="email" class="form-control" name="press_agent_email" value="<?=$form_data['press_agent_email']?>">
                              </div>
                          </div>
                          <div class="col-sm-6">
                              <div class="form-group">
                                <label class="control-label">Mobile phone during the festival</label>
                                <input type="tel" class="form-control" name="press_agent_mobile" value="<?=$form_data['press_agent_mobile']?>">
                                <small class="text-muted"><i class="fa fa-info-circle fa-fw"></i> Please include country code.</small>
                              </div>
                          </div>
                          <div class="col-sm-12">
                              <div class="form-group">
                                <label class="control-label">Address</label>
                                <input type="text" class="form-control" name="press_agent_address" value="<?=$form_data['press_agent_address']?>">
                              </div>
                          </div>

                        </div>

                      </div>
                    </div>
                  </section>
                  <div class="clearfix">
                    <ul class="list-inline pull-left">
                      <li>
                        <button type="button" class="btn btn-default prev-step">Previous</button>
                      </li>
                    </ul>
                    <ul class="list-inline pull-right">
                      <li>
                      </li>
                      <li>
                        <input type="submit" class="btn btn-primary" name="form7" value="Save and continue">
                      </li>
                    </ul>
                  </div>
                </form>
              </div>
              <?php }if($step<0){ ?>
              <div class="tab-pane <?=$step==8?'active':''?>" role="tabpanel" id="step8">
                <h3>Film’s Agreement to Participate <small class="text-muted text-danger pull-right"><em>(* marked fields are mandatory)</em></small></h3>
                <?php echo form_open_multipart(current_url_full()) ?>
                  <section class="film-details">
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="form-group">
                          <label class="control-label">If excerpts are not available, the Film Submitter authorizes the festival to edit several sets of excerpts of a maximum 3 minutes length each*</label>
                          <select class="form-control" name="excerpts_edit" required>
                            <option value="" selected disabled>---Choose---</option>
                            <option value="1" <?=$form_data['excerpts_edit']=='1'?'selected':''?>>Yes</option>
                            <option value="0" <?=$form_data['excerpts_edit']=='0'?'selected':''?>>No</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-xs-12 col-sm-6">

                        <h5><b>Production company lending the film represented by</b></h5>
                        <div class="row">
                          <div class="col-sm-6">
                              <div class="form-group">
                                <label class="control-label">Name<span style="color:#ff1212">*</span></label>
                                <input type="text" class="form-control" name="prod_comp_rep_name" value="<?=$form_data['prod_comp_rep_name']?>">
                              </div>
                          </div>
                          <div class="col-sm-6">
                              <div class="form-group">
                                <label class="control-label">Fax</label>
                                <input type="text" class="form-control" name="prod_comp_rep_fax" value="<?=$form_data['prod_comp_rep_fax']?>">
                                <small class="text-muted"><i class="fa fa-info-circle fa-fw"></i> Please include country code.</small>
                              </div>
                          </div>
                          <div class="col-sm-12">
                              <div class="form-group">
                                <label class="control-label">Email<span style="color:#ff1212">*</span></label>
                                <input type="email" class="form-control" name="prod_comp_rep_email" value="<?=$form_data['prod_comp_rep_email']?>">
                              </div>
                          </div>
                          <div class="col-sm-12">
                              <div class="form-group">
                                <label class="control-label">Phone<span style="color:#ff1212">*</span></label>
                                <input type="tel" class="form-control" name="prod_comp_rep_phn" value="<?=$form_data['prod_comp_rep_phn']?>">
                                <small class="text-muted"><i class="fa fa-info-circle fa-fw"></i> Please include country code.</small>
                              </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-xs-12 col-sm-6">

                        <h5><b>In the event the company lending the film is not the production company</b></h5>
                        <div class="">
                          <div class="row">
                            <div class="col-sm-6">
                              <div class="form-group">
                                <label class="control-label">Name<span style="color:#ff1212">*</span></label>
                                <input type="text" class="form-control" name="nprod_comp_rep_name" value="<?=$form_data['nprod_comp_rep_name']?>" pattern="[A-Za-z. ]+" title="Only alphabet dot and space charecters allowed">
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="form-group">
                                <label class="control-label">Fax</label>
                                <input type="text" class="form-control" name="nprod_comp_rep_fax" value="<?=$form_data['nprod_comp_rep_fax']?>">
                                <small class="text-muted"><i class="fa fa-info-circle fa-fw"></i> Please include country code.</small>
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label">Company name<span style="color:#ff1212">*</span></label>
                            <input type="text" class="form-control" name="nprod_comp_rep_cname" value="<?=$form_data['nprod_comp_rep_cname']?>">
                          </div>

                          <div class="row">
                            <div class="col-sm-6">
                              <div class="form-group">
                                <label class="control-label">Email<span style="color:#ff1212">*</span></label>
                                <input type="email" class="form-control" name="nprod_comp_rep_email" value="<?=$form_data['nprod_comp_rep_email']?>">
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="form-group">
                                <label class="control-label">Phone<span style="color:#ff1212">*</span></label>
                                <input type="tel" class="form-control" name="nprod_comp_rep_phn" value="<?=$form_data['nprod_comp_rep_phn']?>">
                                <small class="text-muted"><i class="fa fa-info-circle fa-fw"></i> Please include country code.</small>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-xs-12 col-sm-12">
                        <p class="well well-sm"><i class="fa fa-info-circle fa-fw"></i> Please fill at least one of <b>Production company lending the film represented by</b> and <b>In the event the company lending the film is not the production company</b></p>
                      </div>
                      <div class="col-xs-12 col-sm-6">
                        <h5><b>Prints Transporter</b></h5>
                        <div class="form-group">
                          <label class="control-label">Name</label>
                          <input type="text" class="form-control" name="print_trp_name" value="<?=$form_data['print_trp_name']?>">
                        </div>
                        <div class="form-group">
                          <label class="control-label">Address</label>
                          <input type="text" class="form-control" name="print_trp_addr" value="<?=$form_data['print_trp_addr']?>">
                        </div>
                        <div class="row">
                          <div class="col-sm-6">
                            <div class="form-group">
                              <label class="control-label">Telephone</label>
                              <input type="tel" class="form-control" name="print_trp_phn" value="<?=$form_data['print_trp_phn']?>">
                              <small class="text-muted"><i class="fa fa-info-circle fa-fw"></i> Please include country code.</small>
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="form-group">
                              <label class="control-label">Fax</label>
                              <input type="text" class="form-control" name="print_trp_fax" value="<?=$form_data['print_trp_fax']?>">
                              <small class="text-muted"><i class="fa fa-info-circle fa-fw"></i> Please include country code.</small>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label">Email</label>
                          <input type="email" class="form-control" name="print_trp_email" value="<?=$form_data['print_trp_email']?>">
                        </div>
                      </div>
                      <div class="col-xs-12 col-sm-6">
                        <h5><b>Person to whom print should be returned</b></h5>
                        <div class="form-group">
                          <label class="control-label">Name</label>
                          <input type="text" class="form-control" name="print_return_name" value="<?=$form_data['print_return_name']?>">
                        </div>
                        <div class="form-group">
                          <label class="control-label">Address</label>
                          <input type="text" class="form-control" name="print_return_addr" value="<?=$form_data['print_return_addr']?>">
                        </div>
                        <div class="row">
                          <div class="col-sm-6">
                            <div class="form-group">
                              <label class="control-label">Telephone</label>
                              <input type="tel" class="form-control" name="print_return_addr" value="<?=$form_data['print_return_addr']?>">
                              <small class="text-muted"><i class="fa fa-info-circle fa-fw"></i> Please include country code.</small>
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="form-group">
                              <label class="control-label">Fax</label>
                              <input type="text" class="form-control" name="print_return_fax" value="<?=$form_data['print_return_fax']?>">
                              <small class="text-muted"><i class="fa fa-info-circle fa-fw"></i> Please include country code.</small>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label">Email</label>
                          <input type="email" class="form-control" name="print_return_email" value="<?=$form_data['print_return_email']?>">
                        </div>
                      </div>
                    </div>
                  </section>
                  <div class="clearfix">
                    <ul class="list-inline pull-left">
                      <li>
                        <button type="button" class="btn btn-default prev-step">Previous</button>
                      </li>
                    </ul>
                    <ul class="list-inline pull-right">
                      <li>
                      </li>
                      <li>
                        <input type="submit" name="form8" class="btn btn-primary" value="Save and continue">
                      </li>
                    </ul>
                  </div>
                </form>
              </div>
              <?php }if($step>6){ ?>
              <div class="tab-pane <?=$step==9?'active':''?>" role="tabpanel" id="step9">
                <h3>Uploads <small class="text-muted text-danger pull-right"><em>(* marked fields are mandatory)</em></small></h3>
                <?php echo form_open_multipart(current_url_full()) ?>
                  <section class="film-details">
                    <div class="form-group">
                      <h5><b style="margin-left: 1.3%">The press book or publicity (Optional)</b></h5>

                      <input type="file" class="form-control" name="press_book" id="press_book" value="" accept="application/pdf">
                      <?php if($form_data['press_book']!==''){ ?>
                      <p><a target="new" href="<?=base_url()?>uploads/press_book/<?=$form_data['press_book']?>"><i class="fa fa-file-pdf-o fa-fw"></i> View uploaded file.</a> <small>(Upload new file to delete previous one)</small></p>
                      <?php } ?>
                      <small class="well well-sm" style="display:none; color:red;" id="eID"><b>Image should be within 2MB.</b></small>
                    </div>
                    <hr>
                    <small class="well well-sm" style="display: block;"><i class="fa fa-info-circle fa-fw"></i><b>Image Upload Guideline:</b> Images must be within 2MB.</small>
                    <div class="row">
                    <div class="col-sm-12"><h5><b style="margin-left: 1.3%">Film Poster*</b></h5></div>
                    <div class="col-xs-12 col-sm-6">
                    <div class="form-group">
                      
                      <!--<input type="file" class="form-control imgFile" required onchange="checkImage(this)" name="film_poster" value="" accept=".jpg,.png,.jpeg,.gif">-->
                      <input type="file" class="form-control imgFile" required id="film_poster" name="film_poster" value="" accept=".jpg,.png,.jpeg,.gif">
                      <!--<small class="well well-sm" style="display: block;"><i class="fa fa-info-circle fa-fw"></i><b>Dimension: 1920px x 1080px</b></small>-->
                      <?php if($form_data['film_poster']!==''){ ?>
                      <p><a target="new" href="<?=base_url()?>uploads/film_poster/<?=$form_data['film_poster']?>"><i class="fa fa-image fa-fw"></i> View uploaded file.</a> <small>(Upload new file to delete previous one)</small></p>
                      <?php } ?>
                    </div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                    <div class="form-group">
                      

                      <input type="file" class="form-control imgFile" id="film_poster1" name="film_poster1" value="" accept=".jpg,.png,.jpeg,.gif">
                      <!--<small class="well well-sm" style="display: block;"><i class="fa fa-info-circle fa-fw"></i><b>Dimension: 1080px x 1920px</b></small>-->
                      <?php if($form_data['film_poster1']!==''){ ?>
                      <p><a target="new" href="<?=base_url()?>uploads/film_poster/<?=$form_data['film_poster1']?>"><i class="fa fa-image fa-fw"></i> View uploaded file.</a> <small>(Upload new file to delete previous one)</small></p>
                      <?php } ?>
                    </div>
                    </div>                    
                    </div>
                    <?php
                    $directors = explode(',',$form_data['director_id']);
                    foreach ($directors as $key => $value) {
                      $name = get_anydata('cast_crew','name',$value);
                      $dir_imgs = get_alldata('cast_crew_img',array('cast_id'=>$value));
                    ?>
                    <div class="row">
                      <div class="col-sm-12"><h5><b style="margin-left: 1.3%">Director image (<?=$name?>)*</b></h5>
                      <small>**Minimum 1 image is mandatory <!--[ <b>Dimension: 1080px x 1920px</b> ]--></small>
                      </div>
                      <div class="col-xs-12 col-sm-6">
                        <div class="form-group">
                          <input type="file" class="form-control imgFile" required onchange="checkImageSize(this)" name="director[<?=$key?>][img_<?=$value?>][]" value="" accept=".jpg,.png,.jpeg,.gif">
                          <?php if(isset($dir_imgs[0])){ ?>
                          <p><a target="new" href="<?=base_url()?>uploads/director/<?=$dir_imgs[0]['image']?>"><i class="fa fa-image fa-fw"></i> View uploaded file.</a> <small>(Upload new file to delete previous one)</small></p>
                          <?php } ?>
                        </div>
                      </div>
                      <div class="col-xs-12 col-sm-6">
                        <div class="form-group">
                          <input type="file" class="form-control imgFile"  onchange="checkImageSize(this)" name="director[<?=$key?>][img_<?=$value?>][]" value="" accept=".jpg,.png,.jpeg,.gif">
                          <?php if(isset($dir_imgs[1])){ ?>
                          <p><a target="new" href="<?=base_url()?>uploads/director/<?=$dir_imgs[1]['image']?>"><i class="fa fa-image fa-fw"></i> View uploaded file.</a> <small>(Upload new file to delete previous one)</small></p>
                          <?php } ?>
                        </div>
                      </div>
                       <div class="col-xs-12 col-sm-6">
                        <div class="form-group">
                          <input type="file" class="form-control imgFile"  onchange="checkImageSize(this)" name="director[<?=$key?>][img_<?=$value?>][]" value="" accept=".jpg,.png,.jpeg,.gif">
                          <?php if(isset($dir_imgs[2])){ ?>
                          <p><a target="new" href="<?=base_url()?>uploads/director/<?=$dir_imgs[2]['image']?>"><i class="fa fa-image fa-fw"></i> View uploaded file.</a> <small>(Upload new file to delete previous one)</small></p>
                          <?php } ?>
                        </div>
                      </div>
                      <div class="col-xs-12 col-sm-6">
                        <div class="form-group">
                          <input type="file" class="form-control imgFile"  onchange="checkImageSize(this)" name="director[<?=$key?>][img_<?=$value?>][]" value="" accept=".jpg,.png,.jpeg,.gif">
                          <?php if(isset($dir_imgs[3])){ ?>
                          <p><a target="new" href="<?=base_url()?>uploads/director/<?=$dir_imgs[3]['image']?>"><i class="fa fa-image fa-fw"></i> View uploaded file.</a> <small>(Upload new file to delete previous one)</small></p>
                          <?php } ?>
                        </div>
                      </div>                      
                    </div>
                    <?php } ?>

                    <div class="row" id="addStills">
                      <div class="col-sm-12"><h5><b style="margin-left: 1.3%">Stills from the film*</b> <a type="button" href="javascript:void(0)" class="pull-right" onclick="addStills(this)"><i class="fa fa-plus fa-fw"></i> Add New (max 6)</a>
                      </h5>
                      <small>**Minimum 2 stills from the flim are mandatory<!-- [ <b>Dimension: 1920px x 1080px</b> ]--></small>
                      </div>
                      <?php $still_imgs = get_alldata('film_still',array('entry_id'=>$_SESSION['form_id'])); ?>
                      <div class="col-xs-12 col-sm-6">
                        <div class="form-group">
                          <input type="file" class="form-control imgFile" required id="film_still_0" name="film_still[]"  onchange="checkImageSize(this)" value="" accept=".jpg,.png,.jpeg,.gif">
                           <?php if(isset($still_imgs[0])){ ?>
                            <p><a target="new" href="<?=base_url()?>uploads/film_still/<?=$still_imgs[0]['image']?>"><i class="fa fa-image fa-fw"></i> View uploaded file.</a> <small>(Upload new file to delete previous one)</small></p>
                            <?php } ?>
                        </div>
                      </div>
                      <div class="col-xs-12 col-sm-6">
                        <div class="form-group">
                          <input type="file" class="form-control imgFile" required id="film_still_1" onchange="checkImageSize(this)" name="film_still[]" value="" accept=".jpg,.png,.jpeg,.gif">
                           <?php if(isset($still_imgs[1])){ ?>
                            <p><a target="new" href="<?=base_url()?>uploads/film_still/<?=$still_imgs[1]['image']?>"><i class="fa fa-image fa-fw"></i> View uploaded file.</a> <small>(Upload new file to delete previous one)</small></p>
                            <?php } ?>
                        </div>
                      </div>
                      <div class="col-xs-12 col-sm-6">
                        <div class="form-group">
                          <input type="file" class="form-control imgFile"  id="film_still_2" name="film_still[]" onchange="checkImageSize(this)" value="" accept=".jpg,.png,.jpeg,.gif">
                           <?php if(isset($still_imgs[2])){ ?>
                            <p><a target="new" href="<?=base_url()?>uploads/film_still/<?=$still_imgs[2]['image']?>"><i class="fa fa-image fa-fw"></i> View uploaded file.</a> <small>(Upload new file to delete previous one)</small></p>
                            <?php } ?>
                        </div>
                      </div>
                      <div class="col-xs-12 col-sm-6">
                        <div class="form-group">
                          <input type="file" class="form-control imgFile"  id="film_still_3" name="film_still[]" onchange="checkImageSize(this)" value="" accept=".jpg,.png,.jpeg,.gif">
                           <?php if(isset($still_imgs[3])){ ?>
                            <p><a target="new" href="<?=base_url()?>uploads/film_still/<?=$still_imgs[3]['image']?>"><i class="fa fa-image fa-fw"></i> View uploaded file.</a> <small>(Upload new file to delete previous one)</small></p>
                            <?php } ?>
                        </div>
                      </div>
                      <?php if(count($still_imgs)>4) for($i=4;$i<count($still_imgs);$i++){ ?>
                      <div class="col-xs-12 col-sm-6">
                        <div class="form-group">
                          <input type="file" class="form-control imgFile" required id="film_still_<?php echo $i;?>" name="film_still[]" value="" accept=".jpg,.png,.jpeg,.gif">
                           <?php if(isset($still_imgs[$i])){ ?>
                            <p><a target="new" href="<?=base_url()?>uploads/film_still/<?=$still_imgs[$i]['image']?>"><i class="fa fa-image fa-fw"></i> View uploaded file.</a> <small>(Upload new file to delete previous one)</small></p>
                            <?php } ?>
                        </div>
                      </div>
                      <?php } ?>

                    </div>




                  </section>
                  <div class="clearfix">
                    <ul class="list-inline pull-left">
                      <li>
                        <button type="button" class="btn btn-default prev-step">Previous</button>
                      </li>
                    </ul>
                    <ul class="list-inline pull-right">
                      <li>
                        <input type="submit" name="form9" class="btn btn-primary" value="Save">
                      </li>
                    </ul>
                  </div>
                  <?php if(isset($full)){?>
                  <div class="text-center">
                    <hr>
                    <p><input type="checkbox" id="chk1" checked>I/We hereby confirm that, all information given in the entry form are true and correct and the necessary documents are uploaded properly.</p>
                    <p><input type="checkbox" id="chk2" checked>I/We will abide by all the rules and regulations of Kolkata International Film Festival</p>
                    <small><i class="fa fa-info-circle fa-fw"></i> You can't modify any information after submission. Please check all information before submitting.</small><br><br>
                    <!--<a href="<?=base_url()?>submit_form/?id=<?=$form_data['id']?>" class="btn btn-primary">Submit Entry</a>-->
                     <a href="javascript:void(0);" class="btn btn-primary" onclick="frmsubmit('<?=$form_data['id']?>')">Submit Entry</a>
                  </div>
                  <?php } ?>
                </form>
              </div>
              <?php } ?>
            </div>
            <div class="clearfix"></div>
          </div>
        </section>
      </div>
    </div>
  </div>

<script>
$(document).ready(function() {
  $('select').select2();
});
$('#datepicker1').datepicker({ format: 'yyyy', minViewMode: 2 , autoclose: true});
$('#datepicker2').datepicker({ format: 'yyyy-mm-dd' , autoclose: true});
$('.datepicker4').datepicker({ format: 'yyyy', minViewMode: 2 , autoclose: true });
function addImages(btn) {
  var input = $('<div class="input-group"><input type="file" class="form-control " placeholder="Upload Images"><span class="input-group-append"><button type="button" class="btn btn-danger" onclick="removeThis(this)"><i class="fa fa-times fa-fw"></i></button></span></div>')
  $(btn).closest('.form-group').find('#otherImg').append(input);
}
function removeThis(btn) {
  $(btn).closest('.input-group').remove();
}
function removeThis2(btn) {
  $(btn).closest('.col-xs-12').remove();
}
function addStills(btn) {
    var lt=$(btn).closest('#addStills').find('.col-xs-12').length;
  if($(btn).closest('#addStills').find('.col-xs-12').length < 6){
      
    var input = $('<div class="col-xs-12 col-sm-6"> <div class="form-group"> <div class="input-group"> <input type="file" class="form-control imgFile" name="film_still[]" value="" onchange="checkImageSize(this)"> <span class="input-group-append"><button type="button" class="btn btn-danger" onclick="removeThis2(this)"><i class="fa fa-times fa-fw"></i></button></span> </div></div></div>')
    $(btn).closest('#addStills').append(input);
  }
}
function add_cast(btn) {
  var index = $('#add_cast').find('tr').length;
  var input = $('<tr> <td> <input type="hidden" name="cast[actor]['+index+'][id]" value=""><input type="text" placeholder="Enter Actor Name" class="form-control" pattern="[A-Za-z0-9. ]+" title="Only alphabet dot and space charecters allowed" name="cast[actor]['+index+'][name]"/> </td><td> <input type="text" placeholder="Enter Character Name" class="form-control" pattern="[A-Za-z0-9. ]+" title="Only alphabet dot and space charecters allowed" name="cast[actor]['+index+'][role]"/> </td><td><button class="btn btn-danger" onclick="$(this).closest(`tr`).remove()"><i class="fa fa-times fa-fw"></button></td></tr>')
  //$('#add_cast').append(input);
  if(index > 10){
      alert("You cant add more than 10 Cast");
  } else {
      $('#add_cast').append(input);
  }
}
function add_filmography(btn) {
  var index = $(btn).closest('.form-group').find('[placeholder="Film Name"]').length;
  //alert(index);
  var director_index = $($(btn).closest('.form-group').find('[placeholder="Film Name"]')[0]).attr('name');
  director_index = director_index.substring(9, director_index.indexOf("]"));
  var input = $('<tr><td><input type="hidden" value="" name="director['+director_index+'][film]['+index+'][id]"><input type="text" placeholder="Film Name" pattern="[A-Za-z0-9&@-, ]+" title="Only alphabet dot and space charecters allowed" class="form-control" name="director['+director_index+'][film]['+index+'][name]"/></td><td><input type="text" maxlength="4" placeholder="Year" autocomplete="off" class="form-control datepicker4" class="form-control" name="director['+director_index+'][film]['+index+'][year]"/></td><td><button class="btn btn-danger" onclick="$(this).closest(`tr`).remove()"><i class="fa fa-times fa-fw"></i></button></td></tr>')
  if(index > 5){
      alert("You cant add more than 6 films");
  } else {
  $(btn).closest('.form-group').find('#add_filmography').append(input);
  }
  $('.datepicker4').datepicker({ format: 'yyyy', minViewMode: 2 });
}
function add_director(btn) {
  var index = $('#add_director>div').length;
  var input = $('<div><h5>Director ' + (index +1) + ' details    <a class="pull-right" href="javascript:void(0)" onclick="$(this).parent().parent().remove()"><i class="fa fa-close fa-fw"></i> Delete</a></h5><input type="hidden" value="" name="director['+index+'][id]"><div class="row"> <div class="col-xs-12 col-sm-6"> <div class="form-group"> <label class="control-label">Director’s name*:</label> <input type="text" class="form-control" pattern="[A-Za-z. ]+" title="Only alphabet dot and space charecters allowed" name="director['+index+'][name]" required value=""> </div><div class="form-group"> <label class="control-label">Director’s email address*:</label> <input type="email" class="form-control" name="director['+index+'][email]" required value=""> </div><div class="row"> <div class="col-sm-6"> <div class="form-group"> <label class="control-label">Director’s mobile phone:</label> <input type="tel" class="form-control" name="director['+index+'][mob_phone]" value=""><small class="text-muted"><i class="fa fa-info-circle fa-fw"></i> Please include country code.</small>  </div></div><div class="col-sm-6"> <div class="form-group"> <label class="control-label">Director’s fax:</label> <input type="text" class="form-control" name="director['+index+'][fax]" value=""><small class="text-muted">Please include country code.</small>.</div></div></div><div class="form-group"> <label class="control-label">Director’s address:</label> <input type="text" class="form-control" name="director['+index+'][address]" value=""> </div></div><div class="col-xs-12 col-sm-6"> <div class="form-group"> <label class="control-label">Director’s biography*(within 120 words):</label> <textarea class="form-control" id="word_count'+index+'" name="director['+index+'][bio]" required rows="5"></textarea> </div><div class="form-group"> <label class="control-label">Director’s selected filmography*</label> <div class="table-responsive"> <table class="table table-bordered table-hover table-sortable" id="tab_logic"> <thead> <tr> <th class="text-center">Film Name</th> <th class="text-center">Year</th> <th></th> </tr></thead> <tbody id="add_filmography"> <tr> <td><input type="hidden" value="" name="director['+index+'][film][0][id]"><input type="text" placeholder="Film Name" pattern="[A-Za-z0-9&@-, ]+" title="Only alphabet dot and space charecters allowed" class="form-control" name="director['+index+'][film][0][name]" required/> </td><td> <input type="text" maxlength="4" placeholder="Year" autocomplete="off" class="form-control datepicker4" name="director['+index+'][film][0][year]" required/> </td><td> <span class="input-group-append"><button type="button" class="btn btn-primary" onclick="add_filmography(this)"><i class="fa fa-plus fa-fw"></i></button></span> </td></tr></tbody> </table> </div></div></div> </div></div>')
  $('#add_director').append(input);
  $('.datepicker4').datepicker({ format: 'yyyy', minViewMode: 2 });
}
$("[name='org_title']").keypress(function(event){
    var ew = event.which;
    if(ew == 32 || ew == 13 || ew == 39 || ew == 64 || ew == 45 || ew == 44 || ew == 38)
        return true;
    if(65 <= ew && ew <= 90)
        return true;
    if(97 <= ew && ew <= 122)
        return true;
    if(48 <= ew && ew <= 57)
        return true;
    return false;
});
function add_producer(btn) {
  var index = $('#add_producer>div').length;
  var input = $('<div><h5>Producer ' + (index + 1) + ' Details    <a class="pull-right" href="javascript:void(0)" onclick="$(this).parent().parent().remove()"><i class="fa fa-close fa-fw"></i> Delete</a></h5> <input type="hidden" value="" name="producer['+index+'][id]"><div class="form-group"> <label class="control-label">Producer’s name*</label> <input type="text" pattern="[A-Za-z. ]+" title="Only alphabet dot and space charecters allowed" class="form-control" name="producer['+index+'][name]" required value=""> </div><div class="form-group"> <label class="control-label">Producer’s email address*</label> <input type="email" class="form-control" required name="producer['+index+'][email]" required value=""> </div><div class="row"> <div class="col-sm-6"> <div class="form-group"> <label class="control-label">Producer’s work Phone:</label> <input type="tel" class="form-control" name="producer['+index+'][work_phone]" value=""><small class="text-muted"><i class="fa fa-info-circle fa-fw"></i> Please include country code.</small>  </div></div><div class="col-sm-6"> <div class="form-group"> <label class="control-label">Producer’s mobile Phone:</label> <input type="tel" class="form-control" name="producer['+index+'][mob_phone]" value=""><small class="text-muted"><i class="fa fa-info-circle fa-fw"></i> Please include country code.</small>  </div></div></div><div class="form-group"> <label class="control-label">Producer’s address</label> <input type="text" class="form-control" name="producer['+index+'][address]" value=""> </div></div>')
  $('#add_producer').append(input);
}
function cast_crew(btn) {
  var index = $(btn).closest('.form-group').find('#cast_crew tbody').find('tr').length;
  var input = $('<tr><td> <input type="text" placeholder="Enter Actor Name" class="form-control" name="cast[actor]['+index+'][name]"/> </td><td> <input type="text" placeholder="Enter Character Name" class="form-control" name="cast[actor]['+index+'][role]"/> </td><td><button class="btn btn-danger" onclick="$(this).closest(`tr`).remove()"><i class="fa fa-times fa-fw"></i></button></td></tr>')
  $(btn).closest('.form-group').find('#cast_crew').append(input);
}
function addText(btn,title) {
  var input = $('<div class="input-group"><input type="text" class="form-control" pattern="[A-Za-z. ]+" title="Only alphabet dot and space charecters allowed" name="cast['+title+'][]" '+(title=='editing'?'required':'')+'><span class="input-group-append"><button type="button" class="btn btn-danger" onclick="removeThis(this)"><i class="fa fa-times fa-fw"></i></button></span></div>')
  $(btn).closest('.form-group').find('#addText').append(input);
}
function CheckFestival(val) {
  var element = document.getElementById('festival');
  var element1 = document.getElementById('dr');
  var element2 = document.getElementById('fr');
  var e1 = document.getElementById('dd');
  var e2 = document.getElementById('dd1');
  var e3 = document.getElementById('dd2');
  var e4 = document.getElementById('dd3');
  var e5 = document.getElementById('dd4');
  var e6 = document.getElementById('dd5');
  var e7 = document.getElementById('dd6');
  var e8 = document.getElementById('dd7');
  var ee1 = document.getElementById('dd8');
  var ee2 = document.getElementById('dd9');
  var ee3 = document.getElementById('dd10');
  var ee4 = document.getElementById('dd11');
  var ee5 = document.getElementById('dd12');
  var ee6 = document.getElementById('dd13');
  var ee7 = document.getElementById('dd14');
  var ee8 = document.getElementById('dd15');
  if (val == 'Other'){
    $(element).attr('name','copy_format');
    $(element).attr('required','required');
    element.style.display = 'block';
  }
  else{
    $(element).removeAttr('required');
    $(element).removeAttr('name');
    element.style.display = 'none';
  }
  if (val == 'DCP'){
    $('#dcp5').show(); 
    $(element1).attr('name','dcp_format');
    $(element1).attr('required','required'); 
    $(element2).attr('name','frame_rate');
    $(element2).attr('required','required');    
  }
  else{
    $('#dcp5').hide();
    $(element1).removeAttr('required');
    $(element1).removeAttr('name');
    $(element2).removeAttr('required');
    $(element2).removeAttr('name');    
  } 
   if (val == 'QuickTime ProRes 422'){
    $('#dcp55').show(); 
    $(e1).attr('name','codec');
    $(e1).attr('required','required'); 
    $(e2).attr('name','frame_dimension');
    $(e2).attr('required','required'); 
    $(e3).attr('name','scanning_method');
    $(e3).attr('required','required'); 
    $(e4).attr('name','colour_sampling');
    $(e4).attr('required','required'); 
    $(e5).attr('name','frame_rate');
    $(e5).attr('required','required'); 
    $(e6).attr('name','gamma');
    $(e6).attr('required','required'); 
    $(e7).attr('name','audio_format');
    $(e7).attr('required','required'); 
    $(e8).attr('name','channel_layout');
    $(e8).attr('required','required');     
  }
  else{
    $('#dcp55').hide();
    $(e1).removeAttr('required');
    $(e1).removeAttr('name'); 
    $(e2).removeAttr('required');
    $(e2).removeAttr('name'); 
    $(e3).removeAttr('required');
    $(e3).removeAttr('name'); 
    $(e4).removeAttr('required');
    $(e4).removeAttr('name');
    $(e5).removeAttr('required');
    $(e5).removeAttr('name'); 
    $(e6).removeAttr('required');
    $(e6).removeAttr('name'); 
    $(e7).removeAttr('required');
    $(e7).removeAttr('name'); 
    $(e8).removeAttr('required');
    $(e8).removeAttr('name');       
  }  
    if (val == 'MP4'){
    $('#dcp555').show(); 
    $(ee1).attr('name','codec');
    $(ee1).attr('required','required');
    $(ee2).attr('name','frame_dimension');
    $(ee2).attr('required','required');   
    $(ee3).attr('name','scanning_method');
    $(ee3).attr('required','required');   
    $(ee4).attr('name','colour_sampling');
    $(ee4).attr('required','required'); 
    $(ee5).attr('name','frame_rate');
    $(ee5).attr('required','required');
    $(ee6).attr('name','gamma');
    $(ee6).attr('required','required');   
    $(ee7).attr('name','audio_format');
    $(ee7).attr('required','required');   
    $(ee8).attr('name','channel_layout');
    $(ee8).attr('required','required');    
  }
  else{
    $('#dcp555').hide();
    $(ee1).removeAttr('required');
    $(ee1).removeAttr('name'); 
    $(ee2).removeAttr('required');
    $(ee2).removeAttr('name'); 
    $(ee3).removeAttr('required');
    $(ee3).removeAttr('name'); 
    $(ee4).removeAttr('required');
    $(ee4).removeAttr('name');
    $(ee5).removeAttr('required');
    $(ee5).removeAttr('name'); 
    $(ee6).removeAttr('required');
    $(ee6).removeAttr('name'); 
    $(ee7).removeAttr('required');
    $(ee7).removeAttr('name'); 
    $(ee8).removeAttr('required');
    $(ee8).removeAttr('name');    
  }  
}
function CheckSound(val) {
  var element = document.getElementById('sound');
  if (val == 'Other'){
    $(element).attr('required','required');
    $(element).attr('name','sound_format');
    element.style.display = 'block';
  }
  else{
    $(element).removeAttr('required');
    $(element).removeAttr('name');
    element.style.display = 'none';
  }
}



var _URL = window.URL || window.webkitURL;
function checkImage(input){
  var file, img;
  if ((file = input.files[0])) {
      img = new Image();
      img.onload = function () {
        //alert(this.width + " " + this.height);  
        if((this.width < 1920) || (this.height < 1080)){
          $(input).val('');
          alert('Minimum width must be greater than or equal to 1920px and Minimum height must be greater than or equal to 1080px..');
        }
      };
      img.src = _URL.createObjectURL(file);
  }
}
function checkImageV(input){
  var file, img;
  if ((file = input.files[0])) {
      img = new Image();
      img.onload = function () {
        //alert(this.width + " " + this.height);  
        if((this.width < 1080) || (this.height < 1920)){
          $(input).val('');
          alert('Minimum width must be greater than or equal to 1080px and Minimum height must be greater than or equal to 1920px..');
        }
      };
      img.src = _URL.createObjectURL(file);
  }
}
function newmaxlength(element, maxvalue){
    var q = element.value.split(/[\s]+/).length;
    if(q > maxvalue){
        var r = q - maxvalue;
        alert("Sorry, you have input "+q+" words into the "+
        "text area box you just completed. It can return no more than "+
        maxvalue+" words to be processed. Please abbreviate "+
        "your text by at least "+r+" words");
        return false;
    }
}
function frmsubmit(val){
    if($("#chk1").prop('checked') == true){
        if($("#chk2").prop('checked') == true){
           window.location.href="<?=base_url()?>submit_form/?id="+val;
        } else {
            alert("Please agree to the terms and conditions to submit the application successfully.")
        }
    } else {
            alert("Please agree to the terms and conditions to submit the application successfully.")
    }
    
}
$(function(){
    $('input:radio').change(function(){
        var str = $('input[name="cast[sp][]"]:checked').val(); 
  var element1 = document.getElementById('w1');
  var element2 = document.getElementById('w2');
  var element3 = document.getElementById('w3'); 
    var element = document.getElementById('ow');
          if (str == 'Original'){
    $('#sp5').show(); 
    $('#sp55').hide();
    $(element).attr('name','cast[org_work_author][]');
    $(element).attr('required','required'); 
    $(element1).removeAttr('required');
    $(element1).removeAttr('name');    
    $(element2).removeAttr('required');
    $(element2).removeAttr('name'); 
        $(element3).removeAttr('required');
    $(element3).removeAttr('name');
  }
  else{
      $('#sp55').show();
      $('#sp5').hide();
    $(element).removeAttr('required');
    $(element).removeAttr('name');
        $(element1).attr('name','cast[scr_writer_org][]');
    $(element1).attr('required','required'); 
        $(element2).attr('name','cast[org_work_author][]');
    $(element2).attr('required','required'); 
        $(element3).attr('name','cast[scr_writer_adp][]');
    $(element3).attr('required','required'); 
  }
    });          

});

$(document).ready(function() {
  $("#word_count").on('keyup', function() {
    var words = 0;

    if ((this.value.match(/\S+/g)) != null) {
      words = this.value.match(/\S+/g).length;
    }

    if (words > 150) {
      // Split the string on first 200 words and rejoin on spaces
      var trimmed = $(this).val().split(/\s+/, 150).join(" ");
      // Add a space at the end to make sure more typing creates new words
      $(this).val(trimmed + " ");
    }
    else {
      //$('#display_count').text(words);
      //$('#word_left').text(250-words);
    }
  });
  $("#word_count11").on('keyup', function() {
    var words = 0;

    if ((this.value.match(/\S+/g)) != null) {
      words = this.value.match(/\S+/g).length;
    }

    if (words > 120) {
      // Split the string on first 200 words and rejoin on spaces
      var trimmed = $(this).val().split(/\s+/, 120).join(" ");
      // Add a space at the end to make sure more typing creates new words
      $(this).val(trimmed + " ");
    }
    else {
      //$('#display_count').text(words);
      //$('#word_left').text(250-words);
    }
  }); 
    $("#word_count1").on('keyup', function() {
    var words = 0;

    if ((this.value.match(/\S+/g)) != null) {
      words = this.value.match(/\S+/g).length;
    }

    if (words > 150) {
      // Split the string on first 200 words and rejoin on spaces
      var trimmed = $(this).val().split(/\s+/, 150).join(" ");
      // Add a space at the end to make sure more typing creates new words
      $(this).val(trimmed + " ");
    }
    else {
      //$('#display_count').text(words);
      //$('#word_left').text(250-words);
    }
  });
    $("#word_count2").on('keyup', function() {
    var words = 0;

    if ((this.value.match(/\S+/g)) != null) {
      words = this.value.match(/\S+/g).length;
    }

    if (words > 150) {
      // Split the string on first 200 words and rejoin on spaces
      var trimmed = $(this).val().split(/\s+/, 150).join(" ");
      // Add a space at the end to make sure more typing creates new words
      $(this).val(trimmed + " ");
    }
    else {
      //$('#display_count').text(words);
      //$('#word_left').text(250-words);
    }
  });
    $("#word_count3").on('keyup', function() {
    var words = 0;

    if ((this.value.match(/\S+/g)) != null) {
      words = this.value.match(/\S+/g).length;
    }

    if (words > 150) {
      // Split the string on first 200 words and rejoin on spaces
      var trimmed = $(this).val().split(/\s+/, 150).join(" ");
      // Add a space at the end to make sure more typing creates new words
      $(this).val(trimmed + " ");
    }
    else {
      //$('#display_count').text(words);
      //$('#word_left').text(250-words);
    }
  });
});


    $("#word_count1").on('keyup', function() {
    var words = 0;

    if ((this.value.match(/\S+/g)) != null) {
      words = this.value.match(/\S+/g).length;
    }

    if (words > 150) {
      // Split the string on first 200 words and rejoin on spaces
      var trimmed = $(this).val().split(/\s+/, 150).join(" ");
      // Add a space at the end to make sure more typing creates new words
      $(this).val(trimmed + " ");
    }
    else {
      //$('#display_count').text(words);
      //$('#word_left').text(250-words);
    }
  });

$(function(){
    $('#prod_comp_name').change(function(){ 
        var element = document.getElementById('prod_comp_name').value;
        var element1 = document.getElementById('prod_comp_email');
        if (element != ""){
            $(element1).attr('required','required'); 
        } else {
            $(element1).removeAttr('required'); 
        }
    }); 
    $('#prod_comp_email').change(function(){ 
        var element = document.getElementById('prod_comp_name').value;
        var element1 = document.getElementById('prod_comp_email');
        if (element != ""){
            $(element1).attr('required','required'); 
        } else {
            $(element1).removeAttr('required'); 
        }
    });    
});
 $(document).ready(function() {       
    $('#film_poster').bind('change', function() {
        var a=(this.files[0].size);
        //alert(a);
        if(a > 2000000) {
            alert('Image must be within 2 MB');
            this.value = "";
            //$("#eID").css({ display: "block" });
        } else {
            //$("#eID").css({ display: "none" });
        }
    });
    $('#film_poster1').bind('change', function() {
        var a=(this.files[0].size);
        //alert(a);
        if(a > 2000000) {
            alert('Image must be within 2 MB');
            this.value = "";
        }
    });
  
});

function checkImageSize(input){
         var a=(input.files[0].size);
        //alert(a);
        if(a > 2000000) {
            alert('Image must be within 2 MB');
            $(input).val('');
        } 
}    
</script>
