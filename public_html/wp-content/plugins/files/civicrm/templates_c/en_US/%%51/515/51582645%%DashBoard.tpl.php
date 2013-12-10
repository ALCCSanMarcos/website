<?php /* Smarty version 2.6.27, created on 2013-10-29 15:36:12
         compiled from CRM/Contribute/Page/DashBoard.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'ts', 'CRM/Contribute/Page/DashBoard.tpl', 30, false),array('function', 'help', 'CRM/Contribute/Page/DashBoard.tpl', 55, false),array('function', 'crmURL', 'CRM/Contribute/Page/DashBoard.tpl', 64, false),)), $this); ?>
<?php if ($this->_tpl_vars['buildTabularView']): ?>
<table class="report">
<tr class="columnheader-dark">
    <th scope="col"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Period<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th>
    <th scope="col"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Total Amount<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th>
    <th scope="col" title="Contribution Count"><strong>#</strong></th><th></th></tr>
<tr>
    <td><strong><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Current Month-To-Date<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></strong></td>
    <td class="label"><?php if (! $this->_tpl_vars['monthToDate']['Valid']['amount']): ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>(n/a)<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php else: ?><?php echo $this->_tpl_vars['monthToDate']['Valid']['amount']; ?>
<?php endif; ?></td>
    <td class="label"><?php echo $this->_tpl_vars['monthToDate']['Valid']['count']; ?>
</td>
    <td><a href="<?php echo $this->_tpl_vars['monthToDate']['Valid']['url']; ?>
"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>view details<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>...</a></td>
</tr>
<tr>
    <td><strong><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Current Fiscal Year-To-Date<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></strong></td>
    <td class="label"><?php if (! $this->_tpl_vars['yearToDate']['Valid']['amount']): ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>(n/a)<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php else: ?><?php echo $this->_tpl_vars['yearToDate']['Valid']['amount']; ?>
<?php endif; ?></td>
    <td class="label"><?php echo $this->_tpl_vars['yearToDate']['Valid']['count']; ?>
</td>
    <td><a href="<?php echo $this->_tpl_vars['yearToDate']['Valid']['url']; ?>
"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>view details<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>...</a></td>
</tr>
<tr>
    <td><strong><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Cumulative<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></strong><br /><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>(since inception)<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></td>
    <td class="label"><?php if (! $this->_tpl_vars['startToDate']['Valid']['amount']): ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>(n/a)<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php else: ?><?php echo $this->_tpl_vars['startToDate']['Valid']['amount']; ?>
<?php endif; ?></td>
    <td class="label"><?php echo $this->_tpl_vars['startToDate']['Valid']['count']; ?>
</td>
    <td><a href="<?php echo $this->_tpl_vars['startToDate']['Valid']['url']; ?>
"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>view details<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>...</a></td>
</tr>
</table>
<?php elseif ($this->_tpl_vars['buildChart']): ?>
  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contribute/Form/ContributionCharts.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php else: ?>
  <h3><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Contribution Summary<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> <?php echo smarty_function_help(array('id' => "id-contribute-intro"), $this);?>
</h3>
      <div id="mainTabContainer" class="ui-tabs ui-widget ui-widget-content ui-corner-all">
        <ul class="ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all">
           <li id="chart_view"   class="crm-tab-button ui-state-active ui-corner-top ui-corner-bottom ui-tabs-selected" >
             <a href="#chart_layout"><span>&nbsp;</span>&nbsp;<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Chart Layout<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>&nbsp;</a> </li>&nbsp;
           <li id ="table_view"  class="crm-tab-button ui-corner-top ui-corner-bottom ui-state-default" >
             <a href="#table_layout"><span>&nbsp;</span>&nbsp;<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Table Layout<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>&nbsp;</a>
           </li>
<?php if ($this->_tpl_vars['isAdmin']): ?>
 <?php ob_start(); ?><?php echo CRM_Utils_System::crmURL(array('p' => "civicrm/admin/contribute/add",'q' => "action=add&reset=1"), $this);?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('newPageURL', ob_get_contents());ob_end_clean(); ?>
 <?php ob_start(); ?><?php echo CRM_Utils_System::crmURL(array('p' => "civicrm/admin/contribute",'q' => "reset=1"), $this);?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('configPagesURL', ob_get_contents());ob_end_clean(); ?>

<div class="float-right">
<table class="form-layout-compressed">
<tr>
    <td>
     <a href="<?php echo $this->_tpl_vars['configPagesURL']; ?>
" class="button"><span><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Manage Contribution Pages<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
       </span></a>
    </td>
    <td><a href="<?php echo $this->_tpl_vars['newPageURL']; ?>
" class="button"><span><div class="icon add-icon"></div><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Add Contribution Page<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        </span></a>
    </td>
</tr>
</table>
</div>
<?php endif; ?>
</ul>
<div id="chartData"></div>
<div id="tableData"></div></div>
<div class="spacer"></div>

<?php if ($this->_tpl_vars['pager']->_totalItems): ?>
    <h3><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Recent Contributions<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></h3>
    <div>
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contribute/Form/Selector.tpl", 'smarty_include_vars' => array('context' => 'dashboard')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    </div>
<?php endif; ?><?php echo '
<script type="text/javascript">

cj(document).ready( function( ) {
    getChart( );
    cj(\'#chart_view\').click(function( ) {
        if ( cj(\'#chart_view\').hasClass(\'ui-state-default\') ) {
            cj(\'#chart_view\').removeClass(\'ui-state-default\').addClass(\'ui-state-active ui-tabs-selected\');
            cj(\'#table_view\').removeClass(\'ui-state-active ui-tabs-selected\').addClass(\'ui-state-default\');
            getChart( );
            cj(\'#tableData\').children().html(\'\');
        }
    });
    cj(\'#table_view\').click(function( ) {
        if ( cj(\'#table_view\').hasClass(\'ui-state-default\') ) {
            cj(\'#table_view\').removeClass(\'ui-state-default\').addClass(\'ui-state-active ui-tabs-selected\');
            cj(\'#chart_view\').removeClass(\'ui-state-active ui-tabs-selected\').addClass(\'ui-state-default\');
            buildTabularView();
            cj(\'#chartData\').children().html(\'\');
        }
    });
});

function getChart( ) {
   var year        = cj(\'#select_year\').val( );
   var charttype   = cj(\'#chart_type\').val( );
   var date        = new Date()
   var currentYear = date.getFullYear( );
   if ( !charttype ) charttype = \'bvg\';
   if ( !year ) year           = currentYear;

   var chartUrl = '; ?>
"<?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/ajax/chart','q' => 'snippet=4','h' => 0), $this);?>
"<?php echo ';
   chartUrl    += "&year=" + year + "&type=" + charttype;
   cj.ajax({
       url     : chartUrl,
       async    : false,
       success  : function(html){
           cj( "#chartData" ).html( html );
       }
   });

}

function buildTabularView( ) {
    var tableUrl = '; ?>
"<?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/contribute/ajax/tableview','q' => 'showtable=1&snippet=4','h' => 0), $this);?>
"<?php echo ';
    cj.ajax({
        url      : tableUrl,
        async    : false,
        success  : function(html){
            cj( "#tableData" ).html( html );
        }
    });
}

</script>
'; ?>


<?php endif; ?>