$(function() {
	
	$.get('grapes/getGrapes', function(o) {
		
		for (var i = 0; i < o.length; i++)
		{
			$('#listInserts').append('<div>' + o[i].color + ', ' + o[i].name + '<a class="del" rel="'+o[i].id+'" href="#">X</a></div>');
		}
		
		$('.del').live('click', function() {
			delItem = $(this);
			var id = $(this).attr('rel');
			
			$.post('grapes/deleteListing', {'id': id}, function(o) {
				delItem.parent().remove();
			}, 'json');
			
			return false;
		});
		
	}, 'json');
	
	
	
	$('#randomInsert').submit(function() {
		var url = $(this).attr('action');
		var data = $(this).serialize();
		
		$.post(url, data, function(o) {
			$('#listInserts').append('<div>' + o[i].color + ', ' + o[i].name + '<a class="del" rel="'+o[i].id+'" href="#">X</a></div>');		
		}, 'json');
		
		
		return false;
	});

});