$(document).ready(function(){
	$("#content").load('../configuration/database/articles.php');
	$("#pagination").load('../configuration/database/pagination.php');
	setTimeout(function(){
		$('.pagination').children().eq(0).addClass('active');
	},100);
	$(document).on("click", "ul.pagination li", function(event){
		$("#content").load('../configuration/database/articles.php?id='+this.id);
		$(".pagination").find('.active').removeClass();
		$(this).addClass('active');
		event.preventDefault();
	})
	$(document).on("click", "ul.dropdown-menu li", function(event){
		$("#content").load('../configuration/database/articles.php?type='+this.title);
		event.preventDefault();
	})
})