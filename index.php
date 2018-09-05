<script type="text/javascript" src="jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="jquery.blockUI.js"></script>
<script type="text/javascript">
jQuery.noConflict();
	
jQuery(document).ready(function() { 
    jQuery('#open_block').click(function() { 
        jQuery.blockUI({ 
            message: jQuery('#close_block'), 
            css: { 
                top:  '10%', 
                left: '35%', 
                width: '400px' 
            } 
        }); 
 
        setTimeout(jQuery.unblockUI, 200000); 
    }); 
});
</script>
<div id="test" style="display:none;"></div>
<div id="open_block">Show Content</div>
<div id="close_block" style="display:none">
	<div onclick="jQuery.unblockUI();" style="text-align:right;cursor:pointer;"><strong>X</strong></div>
		<img src="https://fbcdn-dragon-a.akamaihd.net/cfs-ak-prn1/676655/83/276449379149296_1538611903.png" width="400" height="400" />
</div>