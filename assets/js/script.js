/**
 * Notifications
 */
$(function() {
	var page = 1;

	function fetchNotifications() {
		var data = {
			page: page,
			user_id: $('.notifications-box #user_id').val()
		};

		$.ajax({
			url: base_url + 'notifications',
			method: 'GET',
			data: data,
			success: function(data) {
				var content = '';
				page++;

				for (var notification of data) {
					content += '<div class="media notification-box" data-id="' + notification.id + '" data-user-id="' + notification.user_id + '" data-unread="' + !notification.read_at + '">'
					content += '<div class="media-body">'
					content += '<div class="notification-header" style="margin-right: 24px; font-weight: ' + (notification.read_at ? 'normal' : 'bold') + ';">'
					content += notification.comment;
					content += '<button class="btn btn-info btn-outline-info btn-icon read-unread-notification" style="position: absolute;bottom: 0;right: 16px;top: 5px;height: 24px;width: 24px;line-height: 15px;"><i class="icofont icofont-eye"></i></button>';
					content += '</div><small class="text-muted">'
					content += notification.created_at;
					content += '</small></div></div>';
				}

				document.querySelector('#notifications-container').innerHTML += content;
			}
		});
	}

	fetchNotifications();

	var currentscrollHeight = 0;

	$('#notifications-container').on("scroll", function() {
		var scrollHeight = $(this).height();
		var scrollPos = Math.floor($(this).height() + $(this).scrollTop());
		var isBottom = scrollHeight - 300 < scrollPos;

		if (isBottom && currentscrollHeight < scrollHeight) {
			fetchNotifications();
			currentscrollHeight = scrollHeight;
		}
	});
	
	$('#notifications-container').on('click', '.read-unread-notification', function() {
		var that = this;
		var isUnread = JSON.parse($(this).closest('.notification-box').attr('data-unread'));
		var notificationId = $(this).closest('.notification-box').attr('data-id');

		$.ajax({
			url: base_url + (isUnread ? 'notifications/markAsRead' : 'notifications/markAsUnread'),
			method: 'POST',
			data: {
				notification_id: notificationId
			},
			success: function() {
				$(that).closest('.notification-box').attr('data-unread', !isUnread);
				$(that).closest('.notification-header').css('font-weight', !isUnread ? 'bold' : 'normal');
			}
		});
	});
});
