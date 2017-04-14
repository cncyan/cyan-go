/**
 * Created by cyan on 2017-04-12.
 */
$(function(){
	//cyanarticle
    $("#articlesearch").on('click',function(){
	window.location="cyanarticle.php?keywords="+$("#articlekey").val();	
		});
	//cyanproject
	$("#projectsearch").on('click',function(){
	window.location="cyanproject.php?keywords="+$("#projectkey").val();	
		});
});



