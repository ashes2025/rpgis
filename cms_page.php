<section class="inner-banner">
  <div class="container">
    <div class="row">
        <div class="col-lg-6 col-lg-push-6">
        <div class="bgbs-logo"><img src="<?=base_url()?>images/BENGAL-SUMMIT-LOGO.png" alt=""></div>
      </div>

      <div class="col-lg-6 col-lg-pull-6">
        <div class="inner-page-heading"><img src="<?=base_url()?>images/double-arw.png" alt="" style="margin-bottom: -10px;"> <?=$pageData['title']?></div>
      </div>

    </div>
  </div>
</section>
<section>
  <div class="container">
    <div class="row">
      <div class=" <?=$includeData['side_panel'] != ''?'col-lg-8':'col-lg-12'?>">
        <div class="inner-page-content">
          <?php
          $page_data = explode('[---]',$pageData['content']);
          if(trim($page_data[0])!='<p>') echo htmlspecialchars_decode(str_replace('[base_url]',base_url(),$page_data[0]));

          if(isset($page_data[1])) if(isset($moduleData)){
            $capData = $this->custom_captcha->generate('#065ca9','#fff',110,45,10,500,'#666');
            $this->session->set_userdata(array('contact_cap'=>$capData['text']));
            $this->load->view($module,array('moduleData'=>$moduleData,'capData'=>$capData,'includeData'=>$includeData));
          }
          if(isset($page_data[1])) echo htmlspecialchars_decode(str_replace('[base_url]',base_url(),$page_data[1]));
          ?>

        <?php if($pageData['id']=='16'){?>
            <div class="container visible-sm-block  visible-xs-block">
              <div class="row">
                <div class="col-md-4"><?=get_anydata('bgbs_side_panel','content',7)?></div>
                <div class="col-md-4"><?=get_anydata('bgbs_side_panel','content',5)?></div>
                <div class="col-md-4"><?=get_anydata('bgbs_side_panel','content',6)?></div>

              </div>
            </div>

            <?php } ?>

          <?php if($includeData['espeaks'] == '1') $this->load->view('include/espeak_sec')?>
        </div>
      </div>
      <?php if($includeData['side_panel'] != ''):?>
      <div class="col-lg-4">
        <div class="side-pannel">
          <?php if($includeData['side_panel'] != ''){
          foreach(explode(',',$includeData['side_panel']) as $key => $value){
            $s = get_alldata('bgbs_side_panel',array('active'=>1,'id'=>$value));
            echo count($s)>0?str_replace('[base_url]',base_url(),$s[0]['content']):'';
          }} ?>
        </div>
      </div>
      <?php endif ?>
    </div>
  </div>
</section>

<?php if($pageData['id']=='16'){?>
<div class="container hidden-xs hidden-sm">
  <div class="row">
    <div class="col-md-4"><?=get_anydata('bgbs_side_panel','content',5)?></div>
    <div class="col-md-4"><?=get_anydata('bgbs_side_panel','content',7)?></div>
    <div class="col-md-4"><?=get_anydata('bgbs_side_panel','content',6)?></div>

  </div>
</div>

<?php } ?>