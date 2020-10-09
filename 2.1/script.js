var sizePerPage = 6
var items = 0

function getMoreItems () {
	var params = {
		offset: items,
		limit: sizePerPage
	}
	$.getJSON('load.php', params, function(data) {
		$.each(data.items, function (index, item) {
			renderItem(item)
		})
		items += data.items.length
		if (items >= data.total) {
			$('#load_more').hide()
		}
	})
}

function renderItem (item) {
	var html = `<div class="item">
		<div class="content">
			<div class="name">${item.name}</div>
			<div class="price">${item.price} руб.</div>
		</div>
	</div>`
	$('.items').append(html)
}

$(function() {
	getMoreItems()

	$('#load_more').click(getMoreItems)

	$('#in_grid').click(function () {
		$('.items').removeClass('list').addClass('grid')
	})
	$('#in_list').click(function () {
		$('.items').removeClass('grid').addClass('list')
	})
})