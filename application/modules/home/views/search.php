<style>
  .gsc-input-box{
    height: 30px !important;
    position: relative !important;
    top: -2px !important;
  }
  .cse input.gsc-input:focus, input.gsc-input:focus {
    background-image:none !important;
  }
  .cse input.gsc-input, input.gsc-input {
    background-image:none !important;
    line-height: 25px;
  }
  .gsc-orderby{
    display: none;
  }
  .gsib_a{
    padding: 0 4px !important;
  }
  .gsst_a{
    padding-top: 8px !important;
  }  
  input.gsc-search-button, input.gsc-search-button:hover, input.gsc-search-button:focus {
    border-color: #666666;
    background-color: #4F2507;
    background-image:url('<?=base_url()?>assets/img/icon/icon-search.png') !important ;
    filter: none;
    height: 30px;
    background-repeat: no-repeat;
    background-position: center; 
  }


</style>


<?=modules::run('home/banner',uri_string())?>
<?php
  $name        = language('name');
  $description = language('description');
  $slug        = language('slug');
  $content     = language('content');
?>
<div id="news-talent" class="content-bg1">
  <div class="row content-row">
    <div class="menu-ab">
      <a href="<?=PATH_URL_LANG?>" title="<?=lang('Homepage')?>"><?=lang('Homepage')?></a><span class="active"><?=lang('Search')?></span>
    </div>
    <div class="ab-l col-md-8">
      <div class="ab-about">
        <h1 class="f-bb"><?=lang('search')?></h1>
        <div class="">
          <div id="test"></div>
        </div>
      </div>
    </div>
    <div class="ab-r col-md-4">
            
      <div class="ab-surely">
        <div class="ab-surely-tt f-bb"><?=lang('Information_Center')?></div>
        <div class="tab-surely">
          <?php if(!empty($category)){
              foreach($category as $c){
          ?>
            <div class="item-surely">
              <div class="btn-surely">
                <a class="f-bb" href="<?=PATH_URL_LANG.toSlug(lang('Information_Center')).'/'.$c->{$slug}?>" title="<?=$c->$name?>"><?=$c->$name?></a>
              </div>
            </div>
          <?php }
          }
          ?>
        </div>
      </div>
      
            <?php if($type != 'market_entry'){?>
                <?=modules::run('block/you_surely_use')?>
            <?php }?>
      <?php if($type != 'information_center'){?>
      <?=modules::run('block/brochure')?>
      <?php }?>
      <?//=modules::run('home/services')?>
      
      <?=modules::run('home/in_the_news')?>
      
      <?php if($type != 'information_center'){?>
            
      
            <?=modules::run('home/client')?>
      <?php }?>
    </div>
  </div>
</div>



<script>
var myCallback = function() {
  if (document.readyState == 'complete') {
    // Document is ready when CSE element is initialized.
    // Render an element with both search box and search results in div with id 'test'.
    google.search.cse.element.render(
        {
          div: "test",
          tag: 'search'
         });
  } else {
    // Document is not ready yet, when CSE element is initialized.
    google.setOnLoadCallback(function() {
       // Render an element with both search box and search results in div with id 'test'.
        google.search.cse.element.render(
            {
              div: "test",
              tag: 'search'
            });
    }, true);
  }
};

// Insert it before the CSE code snippet so that cse.js can take the script
// parameters, like parsetags, callbacks.
window.__gcse = {
  parsetags: 'explicit',
  callback: myCallback
};

(function() {
  var cx = '006100596564275215192:twyfdpn98bc'; // Insert your own Custom Search engine ID here
  var gcse = document.createElement('script'); gcse.type = 'text/javascript';
  gcse.async = true;
  gcse.src = (document.location.protocol == 'https' ? 'https:' : 'http:') +
      '//www.google.com/cse/cse.js?cx=' + cx;
  var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(gcse, s);
})();
</script>
