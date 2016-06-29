from django.conf.urls import include, url
from . import views

urlpatterns = [
	url(r'^$', views.post_list, name='post_list'),
	
	#Include url for single page post, called 'post detail' in post_list.html
	
	#?P<pk> means django will take everything to be placed there and transfer it to a view called 'pk'
	#\d means it can only be a digit, + means there needs to be one or more digits there
	url(r'^post/(?P<pk>\d+)/$', views.post_detail, name='post_detail'),

	url(r'^post/new/$', views.post_new, name='post_new'),
	url(r'^post/(?P<pk>\d+)/edit/$', views.post_edit, name='post_edit'),
	url(r'^drafts/$', views.post_draft_list, name='post_draft_list'),
	url(r'^post/(?P<pk>\d+)/publish/$', views.post_publish, name='post_publish'),
	url(r'^post/(?P<pk>\d+)/remove/$', views.post_remove, name='post_remove'),
]