from django.conf.urls import url
from . import views

urlpatterns = [
	url(r'^$', views.post_list, name='post_list'),
	
	#Include url for single page post, called 'post detail' in post_list.html
	
	#?P<pk> means django will take everything to be placed there and transfer it to a view called 'pk'
	#\d means it can only be a digit, + means there needs to be one or more digits there
	url(r'^post/(?P<pk>\d+)/$', views.post_detail, name='post_detail'),
]