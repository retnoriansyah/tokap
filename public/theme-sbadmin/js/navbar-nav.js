$(function(){
	var current= window.location.href;
	$('url.navbar-nav li a').each(function(){
		var $this= $(this);
		if($this.attr('href') == current){
			$this.parents('li').addclass('active');
		}
	});
});